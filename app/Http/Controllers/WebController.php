<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebController extends Controller
{
    public function home(){
    	$data = DB::table('tb_banner')->get();
    	$news = DB::table('tb_news')->take(9)->get();
        $arabdept = DB::table('tb_arabdept')->get();
        $scholar = DB::table('tb_scholarship')->get();
        // return view('user.pages.home');
    	return view('user.pages.home', compact('data','news','arabdept','scholar'));
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
    	$data = DB::table('tb_admission')->get();
    	return view('user.pages.admission.about', compact('data'));
    }

    public function admission_read($id){
       
        $content = DB::table('tb_admission')->where('id',$id)->first();
        $data = DB::table('tb_admission')->get();
        return view('user.pages.admission.read_about', compact('content','data'));
    }

    public function course_offering(){
    	$data = DB::table('tb_course')->get();
    	return view('user.pages.course.courses', compact('data'));
    }

    public function scholarship(){
    	$data = DB::table('tb_scholarship')->get();
    	return view('user.pages.scholarship.about', compact('data'));
    }

    public function scholarship_read($id){
         $content = DB::table('tb_scholarship')->where('id',$id)->first();
        $data = DB::table('tb_scholarship')->get();
        return view('user.pages.scholarship.read_about', compact('content','data'));
    }

    public function administrative(){
    	$data = DB::table('tb_administrative')->get();
    	return view('user.pages.administrative.administrative', compact('data'));
    }


    public function alumni(){
    	$data = DB::table('tb_alumni')->paginate(10);
    	return view('user.pages.alumni.alumni', compact('data'));
    }

    public function arabic_department(){
        $data = DB::table('tb_arabdept')->get();
        // return view('admin.pages.administrative.vgen_info', compact('data'));
        return view('user.pages.arabdept.about', compact('data'));
    }

    public function arabic_department_view($id){
        $data = DB::table('tb_arabdept')->get();
        $content = DB::table('tb_arabdept')->where('id',$id)->first();
        // return view('admin.pages.administrative.vgen_info', compact('data'));
        return view('user.pages.arabdept.read_about', compact('data', 'content'));
    }

    public function contact_us(){
    	$data = DB::table('tb_contact')->get();
        return view('user.pages.contact', compact('data'));
    	// return view('user.pages.contact');
    }

    public function blank(){
        // $data = DB::table('tb_contact')->paginate(10);
        // return view('user.pages.contact', compact('data'));
        return view('user.pages.blank');
    }
}

