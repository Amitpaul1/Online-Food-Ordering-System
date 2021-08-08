<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Catagory;
use Illuminate\Support\Facades\DB;



class DishController extends Controller
{
    public function index(){
		$cata=Catagory::get();
		return view('Backend.add_dish',compact('cata'));
		
	}
	public function create(Request $request){
		
			$request->validate([
		
		'dish_name' => 'required',
		'cata_name' => 'required',
		'dish_image' => 'required',
		'dish_price' => 'required',
		
		
		
		],[
		
		'dish_name.required' => 'Please Input Your Dish Name',
		'cata_name.required' => 'Please Input Your Catagory Name',
		'dish_image.required' => 'Please Input Your Dish Image',
		'dish_price.required' => 'Please Input Your Dish Price',
		
		
		
		
		]);
		
		
		$dish=new Dish();
		$dish->dish_name=$request->dish_name;
		$dish->Cat_id=$request->cata_name;
		$dish->price=$request->dish_price;
          if($request->hasfile('dish_image')){
			  $imgName=$request->file('dish_image');
		$extension=$imgName->getClientOriginalExtension();
		$imageName = time().'.'.$extension;  
		$imgName->move('Image/',$imageName);
			  $dish->Dish_Img=$imageName;
		  }
		
		$dish->save();
				return back()->with('Success','Successfully Dish Added');

		
		
		
	}
	public function show(){
				$cata=Catagory::get();

		$dish=DB::table('dishes')->join('catagories','dishes.Cat_id' , '=' ,'catagories.Cat_id' )
		->select('dishes.*','catagories.Cat_Name')->paginate(4);
		
		return view('Backend.show_dish',compact('dish','cata'));
		
		
	}
	public function delete($dish_id){
		
		$dle=  Dish::find($dish_id);
	  $dle->delete();
	  return back()->with('delete','Successfully Dish Remove');
		
		
	}
	public function update(Request $request){
		
		$dish=Dish::find($request->dish_id);
		$dish->dish_name=$request->dish_name;
		$dish->Cat_id=$request->cata_name;
		$dish->price=$request->dish_price;
		$dish->save();
				return back()->with('update','Successfully Dish Update');
		
	}
}
