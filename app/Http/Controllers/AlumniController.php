<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AlumniController extends Controller
{
     public function index(){
    	return view('admin.pages.alumni.agen_info');
    }

 public function search(Request $request){
        if ($request->ajax()) {
            $output="";
            $mensahe="Are you sure you want to delete";
            $department=DB::table('tb_alumni')->where('name','LIKE','%'.$request->search.'%')
                                                ->orWhere('id','LIKE','%'.$request->search.'%')
                                                ->orWhere('course','LIKE','%'.$request->search.'%')
                                                ->orWhere('year_grad','LIKE','%'.$request->search.'%')
                                                ->get();
            if ($department) {
                foreach ($department as $key => $depart) {
                    $output.='<tr>'.
                             
                             '<td>'.$depart->name.'</td>'.
                             '<td>'.$depart->year_grad.'</td>'.
                             '<td>'.$depart->course.'</td>'.
                             '<td>'.'<a href="/admin/edit_alumni/'.$depart->id.'" class="btn btn-info">Edit</a>&nbsp;'.
                             '<a onclick="return confirm(`'.$mensahe.$depart->name.'?`)" href="/admin/delete_alumni/'.$depart->id.'" class="btn btn-danger">Delete</a>'.

                             '</td>'.
                             '</tr>';

                }
                    return Response($output);
            }
        }
        
    }
   
    public function insert(Request $request){
        $this->validate($request,[
        'id'=>'required||max:10',
        'name'=>'required||max:255',
        'year_grad'=>'required||max:4||min:4||date_format:Y',
        'course'=>'required||max:255',
        // 'description'=>'required',
        
        ]);
    	DB::table('tb_alumni')->insert([
            'id'=>$request['id'],
    		'name'=>$request['name'],
    		'year_grad'=>$request['year_grad'],
    		'course'=>$request['course'],
    		
    		]);
    	return redirect('admin/alumni')->with('message', 'Successfully added!');
    }

    

    public function view(){
    	$data = DB::table('tb_alumni')->paginate(10);
    	return view('admin.pages.alumni.vgen_info',compact('data'));

   
    }

    public function read($id){
        $data = DB::table('tb_alumni')->paginate(10);
    	$name=DB::table('tb_alumni')->where('id',$id)->first();
    	return view('admin.pages.alumni.vgen_info', compact('data','name'));
    }

    public function delete($id){
    	DB::table('tb_alumni')->where('id',$id)->delete();
    	return back()->with('message', 'Successfully delete!');
    }

    public function edit($id){
    	$data=DB::table('tb_alumni')->where('id',$id)->first();
    	return view('admin.pages.alumni.egen_info', compact('data'));
    }

    public function update(Request $request){
        $this->validate($request,[
        'id'=>'required||max:10',
        'name'=>'required||max:255',
        'year_grad'=>'required||max:4||min:4||date_format:Y',
        'course'=>'required||max:255',
        // 'description'=>'required',
        // 'attributes'=>array('name' => 'Name'),
        
        ]);
    	DB::table('tb_alumni')->where('id',$request['id'])->update([
                'id'=>$request['id'],
    			'name'=>$request['name'],
    			'year_grad'=>$request['year_grad'],
    			'course'=>$request['course'],
    			
    		]);
    	
    	
        return redirect('admin/alumni')->with('message', 'Successfully update!');
    }
}
