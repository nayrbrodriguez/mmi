<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use File;
use App\User;


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
}
