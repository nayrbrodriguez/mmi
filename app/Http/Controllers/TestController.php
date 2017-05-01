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
                        'progress' => $banner,
                        'color' => 'red',
                        'url' => 'admin/banner'
                ],
                [
                        'name' => 'About Contents',
                        'progress' => $about,
                        'color' => 'aqua',
                        'url' => 'admin/about'

                ],
                [
                        'name' => 'News and Events',
                        'progress' => $news,
                        'color' => 'yellow',
                        'url' => 'admin/about_news'

                ],
                [
                        'name' => 'Admission Contents',
                        'progress' => $admission,
                        'color' => 'blue',
                        'url' => 'admin/admission'

                ],
                [
                        'name' => 'Courses',
                        'progress' => $course,
                        'color' => 'gray',
                        'url' => 'admin/course_offering'

                ],
                [
                        'name' => 'Scholarships',
                        'progress' => $scholarship,
                        'color' => 'green',
                        'url' => 'admin/scholarship'

                ],
                [
                        'name' => 'Administrative',
                        'progress' => $administrative,
                        'color' => 'maroon',
                        'url' => 'admin/administrative'

                ],
                [
                        'name' => 'Alumni',
                        'progress' => $alumni,
                        'color' => 'teal',
                        'url' => 'admin/alumni'

                ],
                [
                        'name' => 'Arabic Department',
                        'progress' => $arabdept,
                        'color' => 'purple',
                        'url' => 'admin/arabic_department'

                ]

        ];
        return view('admin.test')->with($data);
    }



}