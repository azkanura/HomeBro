<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;

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
    $id = $request->input('id');
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
    return Redirect::back()->with('message','Operation Successful !');
  }

  public function delete($id){
    $user = User::findOrFail($id);
    $user->delete();
    return Redirect::back()->with('message','Delete Successful !');
  }
}
