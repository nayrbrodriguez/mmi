<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactUs extends Controller
{
    public function index(){
        return view('admin.pages.contact.agen_info');
    }

    

    public function insert(Request $request){
        $this->validate($request,[
        'type'=>'required||max:255',
        'description'=>'required',
        
        ]);
        
        DB::table('tb_contact')->insert([
            'type'=>$request['type'],
            'description'=>$request['description']
            
            ]);

        
        
        return redirect('admin/contact')->with('message', 'Successfully added!');
        // return redirect('about');
        
    }
// <a href="{{url('view_about', array($gen->id))}}" >{!!$gen->type!!}</a>

   public function search(Request $request){
        if ($request->ajax()) {
            $output="";
            $mensahe="Are you sure you want to delete";
            $department=DB::table('tb_contact')->where('type','LIKE','%'.$request->search.'%')
                                               ->orWhere('description','LIKE','%'.$request->search.'%')
                                               ->get();
            if ($department) {
                foreach ($department as $key => $depart) {
                    $output.='<tr>'.
                             
                             '<td>'.$depart->type.'</td>'.
                             '<td>'.$depart->description.'</td>'.
							 '<td>'.'<a href="/admin/edit_contact/'.$depart->id.'" class="btn btn-info">Edit</a>&nbsp;'.
                             '<a onclick="return confirm(`'.$mensahe.$depart->type.$depart->description.'?`)" href="/admin/delete_contact/'.$depart->id.'" class="btn btn-danger">Delete</a>'.

                             '</td>'.
                             '</tr>';

                }
                    return Response($output);
            }
        }
        
    }

    public function view(){
        $data = DB::table('tb_contact')->paginate(10);
        // $type=DB::table('tb_contact')->where('id',$id)->first();
        return view('admin.pages.contact.vgen_info', compact('data'));

   
    }

    public function read($id){
        $data = DB::table('tb_contact')->paginate(10);
        $type=DB::table('tb_contact')->where('id',$id)->first();
        return view('admin.pages.contact.rgen_info', compact('data','type'));
    }

    public function delete($id){
        DB::table('tb_contact')->where('id',$id)->delete();
        return redirect('admin/contact')->with('message', 'Successfully delete!');
    }

   public function edit($id){
        $data=DB::table('tb_contact')->where('id',$id)->first();
        return view('admin.pages.contact.egen_info', compact('data'));
    }

    public function update(Request $request){
        $this->validate($request,[
        'type'=>'required||max:255',
        'description'=>'required',
        
        ]);
        DB::table('tb_contact')->where('id',$request['id'])->update([
                'type'=>$request['type'],
                'description'=>$request['description']
            ]);
        
        
        // Session::flash('message', 'This is a message!');
        return redirect('admin/contact')->with('message', 'Successfully update!');
    }

    
}


