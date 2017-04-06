<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Session;
use DB;

class ScholarshipController extends Controller
{
    public function index(){
    	return view('admin.pages.scholarship.agen_info');
    }

    // public function backup(){
    // 	return view('admin.pages.backup.agen_info');
    // }

    public function insert(Request $request){
    	$this->validate($request,[
        'title'=>'required||max:255',
        // 'description'=>'required',
        
    	]);
        
    	DB::table('tb_scholarship')->insert([
    		'title'=>$request['title'],
    		'description'=>$request['summernote']
    		
    		]);

    	
    	
    	return redirect('admin/scholarship')->with('message', 'Successfully added!');
    	// return redirect('scholarship');
    	
    }
// <a href="{{url('view_scholarship', array($gen->id))}}" >{!!$gen->title!!}</a>

      public function search(Request $request){
        if ($request->ajax()) {
            $output="";
            $url="/admin/view_scholarship/";
            $department=DB::table('tb_scholarship')->where('title','LIKE','%'.$request->search.'%')->get();
            if ($department) {
                foreach ($department as $key => $depart) {
                    $output.='<tr>'.
                             '<td>'.'<a href="'.$url.$depart->id.'">'.$depart->title.'</a>'.'</td>'.
                             '</tr>';

                }
                    return Response($output);
            }
        }
        
    }

    public function view(){
    	$data = DB::table('tb_scholarship')->paginate(10);
    	// $title=DB::table('tb_scholarship')->where('id',$id)->first();
    	return view('admin.pages.scholarship.vgen_info', compact('data'));

   
    }

    public function read($id){
        $data = DB::table('tb_scholarship')->paginate(10);
    	$title=DB::table('tb_scholarship')->where('id',$id)->first();
    	return view('admin.pages.scholarship.rgen_info', compact('data','title'));
    }

    public function delete($id){
    	DB::table('tb_scholarship')->where('id',$id)->delete();
    	return redirect('admin/scholarship')->with('message', 'Successfully delete!');
    }

    public function edit($id){
    	$data = DB::table('tb_scholarship')->paginate(10);
    	$title=DB::table('tb_scholarship')->where('id',$id)->first();
    	return view('admin.pages.scholarship.egen_info', compact('data','title'));
    }

    public function update(Request $request){
    	$this->validate($request,[
        'title'=>'required||max:255',
        // 'description'=>'required',
        
    	]);
    	DB::table('tb_scholarship')->where('id',$request['id'])->update([
    			'title'=>$request['title'],
    			'description'=>$request['summernote']
    		]);
    	
    	 $data = DB::table('tb_scholarship')->paginate(10);
    	$title=DB::table('tb_scholarship')->where('id',$request['id'])->first();

    	// Session::flash('message', 'This is a message!');
    	return view('admin.pages.scholarship.rgen_info', compact('data','title'));
    }

    
}


