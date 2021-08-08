<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dish;
use App\Models\Catagory;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
		
		return view('master');
		
	}
	 public function about(){
		
		return view('about');
		
	}
	public function menu(){
		$cata=Catagory::get();
		$dish=DB::table('dishes')->join('catagories','dishes.Cat_id' , '=' ,'catagories.Cat_id' )
		->select('dishes.*','catagories.Cat_Name')->paginate(5);
		return view('menu',compact('cata','dish'));
		
	}
	public function show_menu($cat_id){
		$cata=Dish::where('Cat_id',$cat_id)->get();
		
		
		return view('show_menu',compact('cata'));
	}
	
	
	
	
	
	public function reservation(){
		
		return view('reservation');
		
	}
	public function save_reservation(Request $request){
		$request->validate([
		
		'reservation_name' => 'required',
		'reservation_email' => 'required',
		'reservation_phone' => 'required',
		'reservation_person' => 'required',
		'reservation_date' => 'required',
		'reservation_time' => 'required',
		
		
		
		],[
		
		'reservation_name.required' => 'Please Input Your Name',
		'reservation_email.required' => 'Please Input Your Email',
		'reservation_phone.required' => 'Please Input Your Phone',
		'reservation_person.required' => 'Please Input Your Persone',
		'reservation_date.required' => 'Please Input Your Date',
		'reservation_time.required' => 'Please Input Your Time',
		
		
		
		
		]);
		
		$res=new Reservation();
		$res->Name=$request->reservation_name;
		$res->Email=$request->reservation_email;
		$res->Phone=$request->reservation_phone;
		$res->Person=$request->reservation_person;
		$res->Reservation_Date=$request->reservation_date;
		$res->Reservation_Time=$request->reservation_time;
		$res->save();
		return back()->with('Success','Successfully Reservation Done.we will contact you very soon');

		
		
		
	}
	public function redirect(){
		
		$user=Auth::user()->utype;
		if($user=='1'){
			return view('backend.master');
		}
		else{
						return view('master');

			
		}
		
	}
}
