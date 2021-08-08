<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Catagory;


class CatagoriesController extends Controller
{
    public function index(){
		
		return view('Backend.add_catagories');
		
		
	}
	public function create(Request $request){
		
		$request->validate([
		
		'cat' => 'required',
		
		
		
		],[
		
		'cat.required' => 'Please Input Your Catagory Name',
		
		
		
		
		]);
		
		$catagory=new Catagory();
		
		$catagory->Cat_Name=$request->cat;
		
		$catagory->save();
		return back()->with('Success','Successfully Catagory Added');
		
		
		
	}
	public function show(){
		$cata=Catagory::get();
		return view('backend.show_catagory',compact('cata'));
	}
	
	public function delete($cat_id){
		$dle= Catagory::find($cat_id);
	  $dle->delete();
	  return back()->with('delete','Successfully Catagory Data Remove');
		
		
	}
}
