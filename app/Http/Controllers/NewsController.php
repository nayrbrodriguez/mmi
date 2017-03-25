<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
// use App\Http\Controllers\Session;
use DB;
use Image;
use File;

class NewsController extends Controller
{
    public function index(){
    	return view('admin.pages.news.agen_info');
    }

    public function search(Request $request){
        if ($request->ajax()) {
            $output="";
            $department=DB::table('tb_news')->where('name','LIKE','%'.$request->search.'%')->get();
            if ($department) {
                foreach ($department as $key => $depart) {
                    $output.='<tr>'.
                             '<td>'.'<a href="admin/view_administrative/'.$depart->id.'">'.$depart->name.'</a>'.'</td>'.
                             '</tr>';

                }
                    return Response($output);
            }
        }
        
    }
   

    public function insert(Request $request){
		$this->validate($request,[
        'title'=>'required||max:255',
        'image' => 'image|mimes:jpg,png,jpeg',
        'date' => 'required|date|date_format:Y/m/d',
        
    	]);
    	 // $banner = DB::table('tb_news')->where('id',$id)->first();
    	if ($request->hasFile('image')) {
    			$photo = $request->file('image');
    			$filename = time().'.'.$photo->getClientOriginalExtension();

    			
 				Image::make($photo)->resize(300, 300)->save(public_path('uploads/news/' . $filename));
    			DB::table('tb_news')->insert([
    				'title'=>$request['title'],
    				'date'=>$request['date'],
    				'description'=>$request['description'],
    				'content'=>$request['summernote'],
    				'image'=>$filename,
    				]);
    		}	
				
    		return redirect('admin/about_news')->with('message','Successfully uploaded banner!');
    	

    	
    	
    	
    	
    }


    public function view(){
    	$data = DB::table('tb_news')->paginate(10);
    	// $title=DB::table('tb_news')->where('id',$id)->first();
    	return view('admin.pages.news.vgen_info', compact('data'));

   
    }

    public function read($id){
        $data = DB::table('tb_news')->paginate(10);
    	$title=DB::table('tb_news')->where('id',$id)->first();
    	return view('admin.pages.news.rgen_info', compact('data','title'));
    }

    public function delete($id){
    	$photo = DB::table('tb_news')->where('id',$id)->first();
    	if ($photo->image !== 'default.png') {
                // $file = public_path('uploads/avatars/' . $user->avatar);
                $file = 'uploads/news/' . $photo->image;
                //$destinationPath = 'uploads/' . $id . '/';

                if (File::exists($file)) {
                    unlink($file);
                }
         DB::table('tb_news')->where('id',$photo->id)->delete();
        }

        
    	return redirect('admin/about_news')->with('message', 'Successfully delete!');
    }

    public function edit($id){
    	$this->validate($request,[
        'title'=>'required||max:255',
        'image' => 'image|mimes:jpg,png,jpeg',
        'date' => 'required|date|date_format:Y/m/d',
        
    	]);

    	$data = DB::table('tb_news')->paginate(10);
    	$title=DB::table('tb_news')->where('id',$id)->first();
    	return view('admin.pages.news.egen_info', compact('data','title'));
    }

    public function update(Request $request){
    	 $banner = DB::table('tb_news')->where('id',$request['id'])->first();
    	if ($request->hasFile('image')) {
    			$photo = $request->file('image');
    			$filename = time().'.'.$photo->getClientOriginalExtension();

    			if ($banner->image !== 'default.png') {
                // $file = public_path('uploads/avatars/' . $user->avatar);
                $file = 'uploads/news/' . $banner->image;
                //$destinationPath = 'uploads/' . $id . '/';

                if (File::exists($file)) {
                    unlink($file);
                }

            }
    			
 				Image::make($photo)->resize(300, 300)->save(public_path('uploads/news/' . $filename));
    			DB::table('tb_news')->where('id',$request['id'])->update([
    			
    			
    			'image'=>$filename,
    			
    			
    		]);
    		}	
    			DB::table('tb_news')->where('id',$request['id'])->update([
    			'title'=>$request['title'],
    			'date'=>$request['date'],
    			'description'=>$request['description'],
    			'content'=>$request['summernote'],
    			
    		]);


    		$data = DB::table('tb_news')->paginate(10);
    	$title=DB::table('tb_news')->where('id',$request['id'])->first();
    		 return view('admin.pages.news.rgen_info', compact('data','title'));
    	
    }

    
}


