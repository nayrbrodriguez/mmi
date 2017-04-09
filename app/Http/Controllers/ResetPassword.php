v<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ResetPassword extends Controller
{
     public function edit($id){
    	// $data = DB::table('user')->paginate(10);
    	$user=DB::table('user')->where('id',$id)->first();
    	return view('admin.pages.reset', compact('title'));
    }

    public function update(Request $request){
    	// $this->validate($request,[
     //    'title'=>'required||max:255',
     //    // 'description'=>'required',
        
    	// ]);
    	DB::table('user')->where('id',$request['id'])->update([
    			'name'=>$request['name'],
    			'email'=>$request['email'],
    			'password'=>$request['password']
    		]);
    	
    	 // $data = DB::table('tb_scholarship')->paginate(10);
    	$user=DB::table('user')->where('id',$request['id'])->first();

    	// Session::flash('message', 'This is a message!');
    	return view('admin.pages.reset', compact('user'));
    }

    
}
