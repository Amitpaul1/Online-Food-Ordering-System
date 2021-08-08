<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use\App\Models\user;
use\App\Models\Reservation;


class AdminController extends Controller
{
    public function index(){
         		//$reservation=Reservation::latest()->take(3)->get();

		return view('Backend.master');
	}
	public function user(){
		$user=User::get();

		return view('Backend.user',compact('user'));
	}
	public function delete($id){
		 $dle=  user::find($id);
	  $dle->delete();
	  return back()->with('delete','Successfully User Data Remove');
		
		
	}
	public function reservation(){
		
		$res=Reservation::latest('id')->paginate(3);
		return view('Backend.reservtion',compact('res'));
	}
}
