<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Session;
use DB;
use Image;
use File;
 
class BannerController extends Controller
{
    public function index(){
    	return view('admin.pages.banner.agen_info');
    }

    public function search(Request $request){
        if ($request->ajax()) {
            $output="";
            $url="/admin/view_banner/";
            $department=DB::table('tb_banner')->where('title','LIKE','%'.$request->search.'%')->get();
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
   

    public function insert(Request $request){
		$this->validate($request,[
        'title'=>'required||max:255',
        'banner' => 'required',
        
    	]);
    	 // $banner = DB::table('tb_banner')->where('id',$id)->first();
    	if ($request->hasFile('banner')) {
    			$photo = $request->file('banner');
    			$filename = time().'.'.$photo->getClientOriginalExtension();

    			
 				Image::make($photo)->resize(1674, 550)->save(public_path('uploads/banners/' . $filename));
    			DB::table('tb_banner')->insert([
    				'title'=>$request['title'],
    				'banner'=>$filename,
    				]);
    		}	

    		return redirect('admin/banner')->with('message','Successfully uploaded banner!');
    	

    	
    	
    	
    	
    }


    public function view(){
    	$data = DB::table('tb_banner')->paginate(10);
    	// $title=DB::table('tb_banner')->where('id',$id)->first();
    	return view('admin.pages.banner.vgen_info', compact('data'));

   
    }

    public function read($id){
        $data = DB::table('tb_banner')->paginate(10);
    	$title=DB::table('tb_banner')->where('id',$id)->first();
    	return view('admin.pages.banner.rgen_info', compact('data','title'));
    }

    public function delete($id){
    	$banner = DB::table('tb_banner')->where('id',$id)->first();
    	if ($banner->banner !== 'default.png') {
                // $file = public_path('uploads/avatars/' . $user->avatar);
                $file = 'uploads/banners/' . $banner->banner;
                //$destinationPath = 'uploads/' . $id . '/';

                if (File::exists($file)) {
                    unlink($file);
                }
         DB::table('tb_banner')->where('id',$banner->id)->delete();
        }

        
    	return redirect('admin/banner')->with('message', 'Successfully delete!');
    }

    public function edit($id){
    	$data = DB::table('tb_banner')->paginate(10);
    	$title=DB::table('tb_banner')->where('id',$id)->first();
    	return view('admin.pages.banner.egen_info', compact('data','title'));
    }

    public function update(Request $request){
    	 $banner = DB::table('tb_banner')->where('id',$request['id'])->first();
    	if ($request->hasFile('banner')) {
    			$photo = $request->file('banner');
    			$filename = time().'.'.$photo->getClientOriginalExtension();

    			if ($banner->banner !== 'default.png') {
                // $file = public_path('uploads/avatars/' . $user->avatar);
                $file = 'uploads/banners/' . $banner->banner;
                //$destinationPath = 'uploads/' . $id . '/';

                if (File::exists($file)) {
                    unlink($file);
                }

            }
    			
 				Image::make($photo)->resize(1674, 550)->save(public_path('uploads/banners/' . $filename));
    			DB::table('tb_banner')->where('id',$request['id'])->update([
    			'title'=>$request['title'],
    			'banner'=>$filename,
    		]);
    		}	
    			DB::table('tb_banner')->where('id',$request['id'])->update([
    			'title'=>$request['title'],
    			
    		]);


    		$data = DB::table('tb_banner')->paginate(10);
    	$title=DB::table('tb_banner')->where('id',$request['id'])->first();
    		 return view('admin.pages.banner.rgen_info', compact('data','title'));
    	
    }


    
}


