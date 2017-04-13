<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller {

    public function index() {
        $banner = DB::table('tb_banner')->count();
        $about = DB::table('tb_about')->count();
        $news = DB::table('tb_news')->count();
        $admission = DB::table('tb_admission')->count();
        $course = DB::table('tb_course')->count();
        $scholarship = DB::table('tb_scholarship')->count();
        $administrative = DB::table('tb_administrative')->count();
        $alumni = DB::table('tb_alumni')->count();
        $arabdept = DB::table('tb_arabdept')->count();
        $data['tasks'] = [
                [
                        'name' => 'Banner Photos',
                        'progress' => $banner
                ],
                [
                        'name' => 'About Contents',
                        'progress' => $about
                ],
                [
                        'name' => 'News and Events',
                        'progress' => $news
                ],
                [
                        'name' => 'Admission Contents',
                        'progress' => $admission
                ],
                [
                        'name' => 'Courses',
                        'progress' => $course
                ],
                [
                        'name' => 'Scholarships',
                        'progress' => $scholarship
                ],
                [
                        'name' => 'Administrative',
                        'progress' => $administrative
                ],
                [
                        'name' => 'Alumni',
                        'progress' => $alumni
                ],
                [
                        'name' => 'Arabic Department',
                        'progress' => $arabdept
                ]

        ];
        return view('admin.test')->with($data);
    }

}