<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller {
  public function index(){
    // $user = new User;
    // $user->name='Azka Nurun Ala';
    // $user->email='azka@idgw.net';
    // $user->role='customer_service';
    // $user->password= Hash::make('password123');
    // $user->image='';
    // $user->save();
    return view('index',['users'=>User::all()]);
  }

  public function save(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    $role = $request->input('role');
    $id = (int)$request->input('id');
    if($id){
      $user = User::findOrFail($id);
      $user->name=$name;
      $user->email=$email;
      $user->role=$role;
      $user->image='';
      $user->save();
    }
    else{
      $user = new User;
      $user->name=$name;
      $user->email=$email;
      $user->role=$role;
      $user->image='';
      $user->password = Hash::make('password123');
      $user->save();
    }
    return back()->with('success-message','Create/Edit User Successful !');
  }

  public function delete($id){
    $user = User::findOrFail($id);
    $user->delete();
    return back()->with('success-message','Delete Successful !');
  }

  public function profile(){
    $user=Auth::user();
    return view('profile',['user'=>$user]);
  }

  public function editProfile(Request $request){
    $id=(int)$request->input('id');
    $name=$request->input('name');
    $email=$request->input('email');
    $user = User::findOrFail($id);
    $user->name=$name;
    $user->email=$email;
    if($request->hasFile('image') && $request->file('image')->isValid()){
      $image=$request->file('image');
      $filename=$user->id.'_'.$user->name;
      $path=$image->storeAs('public/profpic',$filename.'.jpg');
      if($path){
        $filePath='profpic/'.$filename.'.jpg';
        $user->image=$filePath;
      }
    }
    else{
      dd('tidak ada gambar');
    }
    $user->save();
    return redirect()->route('profile')->with('success-message','Edit Profile Successful !');
  }

  public function changePassword(Request $request){
    $id=(int)$request->input('id');
    $oldPassword=$request->input('old_password');
    $newPassword=$request->input('new_password');
    $user = User::findOrFail($id);
    if(Hash::check($oldPassword,$user->password)){
      if($newPassword){
        $user->password=Hash::make($newPassword);
        $user->save();
        return redirect()->route('profile')->with('success-message','Change password successful');
      }
      else{
        return redirect()->route('profile')->with('error-message','Change password failed. You have not input the new password !');
      }
    }
    else{
      return redirect()->route('profile')->with('error-message','Change password failed. You have input the wrong password !');
    }
  }
}
