<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
// use App\Http\Controllers\Session;
use DB;
use Image;
use File;
 
class AdministrativeController extends Controller
{
    public function index(){
    	return view('admin.pages.administrative.agen_info');
    }

   public function search(Request $request){
        if ($request->ajax()) {
            $output="";
            $url="/admin/view_administrative/";
            $department=DB::table('tb_administrative')->where('name','LIKE','%'.$request->search.'%')->get();
            if ($department) {
                foreach ($department as $key => $depart) {
                    $output.='<tr>'.
                             '<td>'.'<a href="'.$url.$depart->id.'">'.$depart->name.'</a>'.'</td>'.
                             '</tr>';

                }
                    return Response($output);
            }
        }
        
    }

    public function insert(Request $request){
		$this->validate($request,[
        'name'=>'required||max:255',
        'image' => 'required',
        
    	]);
    	 // $banner = DB::table('tb_administrative')->where('id',$id)->first();
    	if ($request->hasFile('image')) {
    			$photo = $request->file('image');
    			$filename = time().'.'.$photo->getClientOriginalExtension();

    			
 				Image::make($photo)->resize(300, 300)->save(public_path('uploads/image/' . $filename));
    			DB::table('tb_administrative')->insert([
    				'name'=>$request['name'],
    				'position'=>$request['position'],
    				'number'=>$request['number'],
    				'email'=>$request['email'],
    				'image'=>$filename,
    				]);
    		}	

    		return redirect('admin/administrative')->with('message','Successfully uploaded banner!');
    	

    	
    	
    	
    	
    }


    public function view(){
    	$data = DB::table('tb_administrative')->paginate(10);
    	// $title=DB::table('tb_administrative')->where('id',$id)->first();
    	return view('admin.pages.administrative.vgen_info', compact('data'));

   
    }

    public function read($id){
        $data = DB::table('tb_administrative')->paginate(10);
    	$title=DB::table('tb_administrative')->where('id',$id)->first();
    	return view('admin.pages.administrative.rgen_info', compact('data','title'));
    }

    public function delete($id){
    	$photo = DB::table('tb_administrative')->where('id',$id)->first();
    	if ($photo->image !== 'default.png') {
                // $file = public_path('uploads/avatars/' . $user->avatar);
                $file = 'uploads/banners/' . $photo->image;
                //$destinationPath = 'uploads/' . $id . '/';

                if (File::exists($file)) {
                    unlink($file);
                }
         DB::table('tb_administrative')->where('id',$photo->id)->delete();
        }

        
    	return redirect('admin/administrative')->with('message', 'Successfully delete!');
    }

    public function edit($id){
    	$data = DB::table('tb_administrative')->paginate(10);
    	$title=DB::table('tb_administrative')->where('id',$id)->first();
    	return view('admin.pages.administrative.egen_info', compact('data','title'));
    }

    public function update(Request $request){
    	 $banner = DB::table('tb_administrative')->where('id',$request['id'])->first();
    	if ($request->hasFile('image')) {
    			$photo = $request->file('image');
    			$filename = time().'.'.$photo->getClientOriginalExtension();

    			if ($banner->image !== 'default.png') {
                // $file = public_path('uploads/avatars/' . $user->avatar);
                $file = 'uploads/image/' . $banner->image;
                //$destinationPath = 'uploads/' . $id . '/';

                if (File::exists($file)) {
                    unlink($file);
                }

            }
    			
 				Image::make($photo)->resize(300, 300)->save(public_path('uploads/image/' . $filename));
    			DB::table('tb_administrative')->where('id',$request['id'])->update([
    			
    			
    			'image'=>$filename,
    			
    			
    		]);
    		}	
    			DB::table('tb_administrative')->where('id',$request['id'])->update([
    			'name'=>$request['name'],
    			'position'=>$request['position'],
    			'number'=>$request['number'],
    			'email'=>$request['email'],
    			
    		]);


    		$data = DB::table('tb_administrative')->paginate(10);
    	$title=DB::table('tb_administrative')->where('id',$request['id'])->first();
    		 return view('admin.pages.administrative.rgen_info', compact('data','title'));
    	
    }


    
}


