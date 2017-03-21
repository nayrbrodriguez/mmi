<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GraduateattributeController extends Controller
{
    public function index(){
    	return view('admin.pages.graduate.agen_info');
    }

    // public function backup(){
    // 	return view('admin.pages.backup.agen_info');
    // }

    // public function insert(Request $request){
    // 	DB::table('tb_gradatr')->insert([
    // 		'title'=>$request['title'],
    // 		'description'=>$request['summernote'],
    // 		]);
    // 	return redirect('gen_info')->with('message', 'Successfully added!');
    // }

    public function view(){
    	$data = DB::table('tb_gradatr')->get();
    	return view('admin.pages.graduate.vgen_info',compact('data'));
    }

    public function read($id){
    	$data=DB::table('tb_gradatr')->where('id',$id)->first();
    	return view('admin.pages.graduate.rgen_info', compact('data'));
    }

    public function delete($id){
    	DB::table('tb_gradatr')->where('id',$id)->delete();
    	return back();
    }

    public function edit($id){
    	$data=DB::table('tb_gradatr')->where('id',$id)->first();
    	return view('admin.pages.graduate.egen_info', compact('data'));
    }

    public function update(Request $request){
    	DB::table('tb_gradatr')->where('id',$request['id'])->update([
    			'title'=>$request['title'],
    			'description'=>$request['summernote']
    		]);
    	
    	
        return redirect('admin/grad_attribute')->with('message', 'Successfully update!');
    }
}


