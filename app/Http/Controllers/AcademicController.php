<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AcademicController extends Controller
{
    public function index(){
    	return view('admin.pages.academic.agen_info');
    }

    // public function backup(){
    // 	return view('admin.pages.backup.agen_info');
    // }

    // public function insert(Request $request){
    // 	DB::table('tb_acadpol')->insert([
    // 		'title'=>$request['title'],
    // 		'description'=>$request['summernote'],
    // 		]);
    // 	return redirect('gen_info')->with('message', 'Successfully added!');
    // }

    public function view(){
    	$data = DB::table('tb_acadpol')->get();
    	return view('admin.pages.academic.vgen_info',compact('data'));
    }

    public function read($id){
    	$data=DB::table('tb_acadpol')->where('id',$id)->first();
    	return view('admin.pages.academic.rgen_info', compact('data'));
    }

    public function delete($id){
    	DB::table('tb_acadpol')->where('id',$id)->delete();
    	return back();
    }

    public function edit($id){
    	$data=DB::table('tb_acadpol')->where('id',$id)->first();
    	return view('admin.pages.academic.egen_info', compact('data'));
    }

    public function update(Request $request){
    	DB::table('tb_acadpol')->where('id',$request['id'])->update([
    			'title'=>$request['title'],
    			'description'=>$request['summernote']
    		]);
    	
    	
        return redirect('admin/academic_policy')->with('message', 'Successfully update!');
    }
}


