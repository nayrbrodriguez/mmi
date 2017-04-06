<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Session;
use DB;

class AboutController extends Controller
{
    public function index(){
        return view('admin.pages.about.agen_info');
    }

    // public function backup(){
    //  return view('admin.pages.backup.agen_info');
    // }

    public function insert(Request $request){
        $this->validate($request,[
        'title'=>'required||max:255',
        // 'description'=>'required',
        
        ]);
        
        DB::table('tb_about')->insert([
            'title'=>$request['title'],
            'description'=>$request['summernote']
            
            ]);

        
        
        return redirect('admin/about')->with('message', 'Successfully added!');
        // return redirect('about');
        
    }
// <a href="{{url('view_about', array($gen->id))}}" >{!!$gen->title!!}</a>

    public function search(Request $request){
        if ($request->ajax()) {
            $output="";
            $url="/admin/view_about/";
            $department=DB::table('tb_about')->where('title','LIKE','%'.$request->search.'%')->get();
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
        $data = DB::table('tb_about')->paginate(10);
        // $title=DB::table('tb_about')->where('id',$id)->first();
        return view('admin.pages.about.vgen_info', compact('data'));

   
    }

    public function read($id){
        $data = DB::table('tb_about')->paginate(10);
        $title=DB::table('tb_about')->where('id',$id)->first();
        return view('admin.pages.about.rgen_info', compact('data','title'));
    }

    public function delete($id){
        DB::table('tb_about')->where('id',$id)->delete();
        return redirect('admin/about')->with('message', 'Successfully delete!');
    }

    public function edit($id){
        $data = DB::table('tb_about')->paginate(10);
        $title=DB::table('tb_about')->where('id',$id)->first();
        return view('admin.pages.about.egen_info', compact('data','title'));
    }

    public function update(Request $request){
        $this->validate($request,[
        'title'=>'required||max:255',
        // 'description'=>'required',
        
        ]);
        DB::table('tb_about')->where('id',$request['id'])->update([
                'title'=>$request['title'],
                'description'=>$request['summernote']
            ]);
        
         $data = DB::table('tb_about')->paginate(10);
        $title=DB::table('tb_about')->where('id',$request['id'])->first();

        // Session::flash('message', 'This is a message!');
        return view('admin.pages.about.rgen_info', compact('data','title'));
    }

    
}


