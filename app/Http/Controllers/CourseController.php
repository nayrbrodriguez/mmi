<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    public function index(){
    	return view('admin.pages.course.agen_info');
    }

 public function search(Request $request){
        if ($request->ajax()) {
            $output="";
            $mensahe="Are you sure you want to delete";
            $department=DB::table('tb_course')->where('course','LIKE','%'.$request->search.'%')->get();
            if ($department) {
                foreach ($department as $key => $depart) {
                    $output.='<tr>'.
                             
                             '<td>'.$depart->course.'</td>'.
                             '<td>'.'<a href="edit_course_offering/'.$depart->id.'" class="btn btn-info">Edit</a>'.
                             '<a onclick="return confirm(`'.$mensahe.$depart->course.'?`)" href="/delete_course_offering/'.$depart->id.'" class="btn btn-danger">Delete</a>'.

                             '</td>'.
                             '</tr>';

                }
                    return Response($output);
            }
        }
        
    }
   
    public function insert(Request $request){
        $this->validate($request,[
        'course','course'=>'required||max:255',
        // 'description'=>'required',
        
        ]);
    	DB::table('tb_course')->insert([
    		'course'=>$request['course'],
    		
    		]);
    	return redirect('course_offering')->with('message', 'Successfully added!');
    }

    

    public function view(){
    	$data = DB::table('tb_course')->paginate(10);
    	return view('admin.pages.course.vgen_info',compact('data'));

   
    }

    public function read($id){
        $data = DB::table('tb_course')->paginate(10);
    	$course=DB::table('tb_course')->where('id',$id)->first();
    	return view('admin.pages.course.vgen_info', compact('data','course'));
    }

    public function delete($id){
    	DB::table('tb_course')->where('id',$id)->delete();
    	return back()->with('message', 'Successfully delete!');
    }

    public function edit($id){
    	$data=DB::table('tb_course')->where('id',$id)->first();
    	return view('admin.pages.course.egen_info', compact('data'));
    }

    public function update(Request $request){
        $this->validate($request,[
        'course'=>'required||max:255',
        // 'description'=>'required',
        'attributes'=>array('course' => 'Course'),
        
        ]);
    	DB::table('tb_course')->where('id',$request['id'])->update([
    			'course'=>$request['course'],
    			
    		]);
    	
    	
        return redirect('course_offering')->with('message', 'Successfully update!');
    }
}


