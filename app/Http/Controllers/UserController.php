<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use File;
use App\User;
use DB;

class UserController extends Controller
{
    public function index()
    {
    	return view('admin.partial.profile', array('user'=> Auth::user()));
    }

    public function update(Request $request)
    {
    	 $user = User::find(Auth::user()->id);
    	if ($request->hasFile('avatar')) {
    			$avatar = $request->file('avatar');
    			$filename = time().'.'.$avatar->getClientOriginalExtension();

    			if ($user->avatar !== 'default.png') {
                // $file = public_path('uploads/avatars/' . $user->avatar);
                $file = 'uploads/avatars/' . $user->avatar;
                //$destinationPath = 'uploads/' . $id . '/';

                if (File::exists($file)) {
                    unlink($file);
                }

            }
    			// Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
 				Image::make($avatar)->resize(300, 300)->save(public_path('uploads/avatars/' . $filename));
    			$user = Auth::user();
    			$user->avatar = $filename;
    			$user->save();
    		}	

    		return view('admin.partial.profile', array('user'=> Auth::user()));
    }

     public function edit($id){
        // $data = DB::table('user')->paginate(10);
        $user=DB::table('users')->where('id',$id)->first();
        return view('admin.pages.reset.reset', compact('user'));

    }

    public function updatePass(Request $request){
        $this->validate($request,[
        'password'=>'required',
        'conf_password'=>'required||same:password',
        // 'description'=>'required',
        
        ]);
        DB::table('users')->where('id',$request['id'])->update([
               
                'password'=>bcrypt($request['password'])
            ]);
        
         // $data = DB::table('tb_scholarship')->paginate(10);
        // $user=DB::table('users')->where('id',$request['id'])->first();

        // Session::flash('message', 'This is a message!');
        // return view('admin.pages.reset.reset', compact('user'))->('message','The password is change');

        
        // return redirect('admin/reset/'.$id)->with('message', 'Successfully Change the Password!');
        return redirect('admin/profile')->with('message', 'Successfully Change the Password!');


    }

}
