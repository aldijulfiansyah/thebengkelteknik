<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
   {
        $data_user = User::find(Auth::user());
        return view('profil.index',[
            'data_user' => $data_user,
            'title' => 'Profil'
        ]);
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('profil/edit',[
            'user'=> $user,
            'title' => 'Edit Profile'
        ]);
    }
    public function update(Request $request, User $user, $id)
    {
        $this->validate($request,[
            'name'=> 'required|max:255',
            'tgl_lahir' => 'required',
            'username' => 'required|min:3|max:255|unique:users',
            'email'=> 'required|email:dns'
        ]
    );

        $user = User::find($id);
        $user->update($request->all());
        Alert::success('Diupdate', 'Profil Berhasil Diupdate');
        return redirect('/profil');

    }
    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:5|max:100',
            'new_password' => 'required|min:5|max:100',
            'confirm_pass' => 'required|same:new_password',
        ]);

        $current_user=auth()->user();

        if(Hash::check($request->old_password,$current_user->password)){

            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            Alert::success('Diupdate', 'Password Berhasil Diupdate');
            return redirect('/profil');

        }else{
            Alert::error('Gagal Update', 'Password User Salah');
            return redirect('/profil');
        }
    }

    public function update_avatar(Request $request)
    {
        $path = '/storage/thumbnail/';
        $file = $request->file('avatar');
        $new_image_name = '/thumbnail/'.date('Ymd').uniqid().'.jpg';
        $upload = $file->move(public_path($path), $new_image_name);
        if( !$upload ){
            return response()->json(['status'=>0,'msg'=>'Something went wrong, upload new picture failed.']);
        }else{

            //Get Old picture
            $oldPicture = User::find(Auth::user()->id)->getAttributes()['avatar'];

            if( $oldPicture != '' ){
                if( \File::exists(public_path($path.$oldPicture))){
                    \File::delete(public_path($path.$oldPicture));
                }
            }

            //Update DB
            $update = User::find(Auth::user()->id)->update(['avatar'=>$new_image_name]);

            if( !$upload ){
                return response()->json(['status'=>0,'msg'=>'Something went wrong, updating picture in db failed.']);
                
            }else{
                return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully']);
                
            }
        }
    }
  
}
