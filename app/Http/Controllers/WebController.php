<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebController extends Controller
{
    public function home(){
    	$data = DB::table('tb_banner')->get();
    	
        // return view('user.pages.home');
    	return view('user.pages.home', compact('data'));
    }

    public function about(){
        $data = DB::table('tb_about')->get();
        // return view('admin.pages.administrative.vgen_info', compact('data'));
        return view('user.pages.about.about', compact('data'));
    }

    public function about_read($id){
        $data = DB::table('tb_about')->get();
    	$content = DB::table('tb_about')->where('id',$id)->first();
        // return view('admin.pages.administrative.vgen_info', compact('data'));
    	return view('user.pages.about.read_about', compact('data', 'content'));
    }


    public function news(){
    	$data = DB::table('tb_news')->paginate(10);
    	return view('user.pages.news.news', compact('data'));
    }

    public function news_read($id){
       
        $content = DB::table('tb_news')->where('id',$id)->first();
        // return view('admin.pages.administrative.vgen_info', compact('data'));
        return view('user.pages.news.read_news', compact('content'));
    }

    public function admission(){
    	$data = DB::table('tb_admission')->paginate(10);
    	return view('user.pages.admission', compact('data'));
    }

    public function course_offering(){
    	$data = DB::table('tb_course')->paginate(10);
    	return view('user.pages.course', compact('data'));
    }

    public function scholarship(){
    	$data = DB::table('tb_scholarship')->paginate(10);
    	return view('user.pages.scholarship', compact('data'));
    }

    public function administrative(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	return view('user.pages.administrative', compact('data'));
    }


    public function alumni(){
    	$data = DB::table('tb_alumni')->paginate(10);
    	return view('user.pages.alumni', compact('data'));
    }

    public function arabic_department(){
    	$data = DB::table('tb_arabdept')->paginate(10);
    	return view('user.pages.arabic', compact('data'));
    }

    public function contact_us(){
    	// $data = DB::table('tb_contact')->paginate(10);
        // return view('user.pages.contact', compact('data'));
    	return view('user.pages.contact');
    }

    public function blank(){
        // $data = DB::table('tb_contact')->paginate(10);
        // return view('user.pages.contact', compact('data'));
        return view('user.pages.blank');
    }
}

