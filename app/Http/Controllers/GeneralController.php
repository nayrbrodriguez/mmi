<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GeneralController extends Controller
{
    public function index(){
    	return view('admin.pages.general.agen_info');
    }

    // public function backup(){
    // 	return view('admin.pages.backup.agen_info');
    // }

    public function insert(Request $request){
    	DB::table('tb_general')->insert([
    		'title'=>$request['title'],
    		'description'=>$request['summernote'],
    		]);
    	return redirect('admin/gen_info')->with('message', 'Successfully added!');
    }

    public function view(){
    	$data = DB::table('tb_general')->get();
    	return view('admin.pages.general.vgen_info',compact('data'));
    }

    public function read($id){
    	$data=DB::table('tb_general')->where('id',$id)->first();
    	return view('admin.pages.general.rgen_info', compact('data'));
    }

    public function delete($id){
    	DB::table('tb_general')->where('id',$id)->delete();
    	return back();
    }

    public function edit($id){
    	$data=DB::table('tb_general')->where('id',$id)->first();
    	return view('admin.pages.general.egen_info', compact('data'));
    }

    public function update(Request $request){
    	DB::table('tb_general')->where('id',$request['id'])->update([
    			'title'=>$request['title'],
    			'description'=>$request['summernote']
    		]);
    	
    	
        return redirect('admin/gen_info')->with('message', 'Successfully update!');
    }
}


