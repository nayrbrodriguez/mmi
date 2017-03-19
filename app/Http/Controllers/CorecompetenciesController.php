<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CorecompetenciesController extends Controller
{
    public function index(){
    	return view('admin.pages.competencies.agen_info');
    }

    // public function backup(){
    // 	return view('admin.pages.backup.agen_info');
    // }

    // public function insert(Request $request){
    // 	DB::table('tb_corecom')->insert([
    // 		'title'=>$request['title'],
    // 		'description'=>$request['summernote'],
    // 		]);
    // 	return redirect('gen_info')->with('message', 'Successfully added!');
    // }

    public function view(){
    	$data = DB::table('tb_corecom')->get();
    	return view('admin.pages.competencies.vgen_info',compact('data'));
    }

    public function read($id){
    	$data=DB::table('tb_corecom')->where('id',$id)->first();
    	return view('admin.pages.competencies.rgen_info', compact('data'));
    }

    public function delete($id){
    	DB::table('tb_corecom')->where('id',$id)->delete();
    	return back();
    }

    public function edit($id){
    	$data=DB::table('tb_corecom')->where('id',$id)->first();
    	return view('admin.pages.competencies.egen_info', compact('data'));
    }

    public function update(Request $request){
    	DB::table('tb_corecom')->where('id',$request['id'])->update([
    			'title'=>$request['title'],
    			'description'=>$request['summernote']
    		]);
    	
    	
        return redirect('core_competencies')->with('message', 'Successfully update!');
    }
}


