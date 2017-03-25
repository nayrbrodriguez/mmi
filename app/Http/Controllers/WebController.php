<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
    	$banner = DB::table('tb_banner');
    	
    	return view('admin.pages.administrative.vgen_info', compact('banner,'));
    }

    public function about(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('admin.pages.administrative.vgen_info', compact('data'));
    }

    public function news(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('admin.pages.administrative.vgen_info', compact('data'));
    }

    public function admission(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('admin.pages.administrative.vgen_info', compact('data'));
    }

    public function course_offering(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('admin.pages.administrative.vgen_info', compact('data'));
    }

    public function scholarship(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('admin.pages.administrative.vgen_info', compact('data'));
    }

    public function administrative(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('admin.pages.administrative.vgen_info', compact('data'));
    }


    public function alumni(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('admin.pages.administrative.vgen_info', compact('data'));
    }

    public function arabic_department(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('admin.pages.administrative.vgen_info', compact('data'));
    }

    public function contact_us(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('admin.pages.administrative.vgen_info', compact('data'));
    }
}

