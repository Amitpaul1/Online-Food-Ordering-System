<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\order;
use App\Models\orderItem;
use PDF;



class CartController extends Controller
{
    public function cart(Request $request){
		
			if(Auth::id()){
				
				$user_id=Auth::id();
				
				$quantity=$request->quantity;
			$cart=new Cart();
			$cart->user_id=$user_id;
			$cart->dish_id=$request->dish_id;
			$cart->quantity=$quantity;
			$cart->save();
					return redirect('/menu')->with('Success','Successfully Cart Item Added');

			
		
		
		
	}
	else{
		
		return redirect('/login');
		
	}
	
}


static public function cartItem(){
	
	$user_id=Auth::id();
	return cart::where('user_id',$user_id)->count();
}

public function cartshow($user_id){


	$data=cart::where('user_id',$user_id)->join('dishes', 'carts.dish_id', '=' , 'dishes.id')->select('dishes.*','carts.*','carts.id as cart_id')->get();
	$data2=cart::where('user_id',$user_id)->join('dishes', 'carts.dish_id', '=' , 'dishes.id')->select('dishes.*','carts.*','carts.id as cart_id')->sum('dishes.price');
	
	
	return view('cart',compact('data','data2'));
	
	
}

public function delete($product_id){
	
	$dle=cart::find($product_id);
	$dle->delete();
		  return back()->with('delete','Successfully Cart Item Remove');

	
}

public function update(Request $request){
	
	$qty=cart::find($request->id);
	
	$qty->quantity=$request->quantity;
	$qty->save();
	
			  return back()->with('update','Successfully Cart Item Update');

	
	
}

  
  public function checkout(){
	  	$cartItem=Cart::where('user_id',Auth::id())->join('dishes', 'carts.dish_id', '=' , 'dishes.id')->select('dishes.*','carts.*','carts.id as cart_id')->get();

           	return view('checkout',compact('cartItem'));

	  
	  
	  
  }
  
  public function order(Request $request){
	  
	  	$request->validate([
		
		'cu_name' => 'required',
		'cu_email' => 'required',
		'cu_phone' => 'required',
		'cu_address' => 'required',
		
		
		
		],[
		
		'cu_name.required' => 'Please Input Your Name',
		'cu_email.required' => 'Please Input Your Email',
		'cu_phone.required' => 'Please Input Your Phone Number',
		'cu_address.required' => 'Please Input Your Address',
		
		
		
		
		]);
		
$cartItem=Auth::id();
			
			$order =new order();
			$order->user_id=$cartItem;
			$order->Name=$request->cu_name;
			$order->Phone=$request->cu_email;
			$order->Email=$request->cu_phone;
			$order->Address=$request->cu_address;
			$order->tracking_no=rand(1111,9999);
			$total=0;
			$cart1=Cart::where('user_id',Auth::id())->join('dishes', 'carts.dish_id', '=' , 'dishes.id')->select('dishes.*','carts.*','carts.id as cart_id')->get();
			foreach($cart1 as $data4){
				$sum=(int)$data4->price * (int)$data4->quantity;
				$total=$total+$sum;
				
			}
			$order->total_price=$total;
			
			$order->save();
				  	$cartItem1=Cart::where('user_id',Auth::id())->join('dishes', 'carts.dish_id', '=' , 'dishes.id')->select('dishes.*','carts.*','carts.id as cart_id')->get();
                    foreach($cartItem1 as $data){
						orderItem::create([
						
						'order_id' =>$order->id,
						'dish_id' =>$data->dish_id,
						'dish_name' =>$data->Dish_name,
						'quantity' =>$data->quantity,
						'price' =>$data->price,
						
						
						
						]);
						
					}
			
			Cart::where('user_id',Auth::id())->delete();
			
			return redirect('/')->with('sucess','Order are Placed Succesfully');
			
		}
		
	  
  public function myorder(){
	  
	  $orders=order::where('user_id',Auth::id())->get();
	  
	  return view('myorder',compact('orders'));
	  
	  
	  
  }
  
   public function vieworder($view_id){
	   
	   $orders=order::where('id',$view_id)->where('user_id',Auth::id())->first();
	   return view('vieworder',compact('orders'));
	   
	   
   }
   
   
   public function adminorder(){
	   
	   	  $order=order::latest('id')->paginate(10);

	   return view('Backend.admin_order',compact('order'));
	   
	   
   }
   
    public function adminvieworder($view_id){
	   
	   $orders=order::where('id',$view_id)->first();
	   return view('Backend.details',compact('orders'));
	   
	   
   }
   
   public function order_update(Request $request){
	   
	   $order=order::find($request->order_id);
	   
	   $order->order_status=$request->order_status;
	   $order->save();
	   			return back()->with('update','Order are Updated Succesfully');

	   
   }
   
   public function downloadpdf($pdf_id){
	   
	     $orders=order::where('id',$pdf_id)->first();
		 $pdf=PDF::loadview('Backend.pdf',compact('orders'));
		 return $pdf->download('invoice.pdf');
	   
	   
   }
   
   
   
   
   
   
   
   
   
   
  
  
  
  
}
