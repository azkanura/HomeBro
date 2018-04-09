<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
const BASE_URL = 'https://sandbox.api.kitapay.co.id/admin-panel/v1';
const API_KEY='AIzaSyDQCF94jFfcS8aP9azi0_K45YsMkiDzX2o';
class KitapayController extends Controller {
  public function displayUsers(){
    $getUsersUrl = BASE_URL.'/user/list?key='.API_KEY.'&page=1&size=50';
    $client = new Client();
    $res = $client->request('GET', $getUsersUrl);
    // dd($res->getStatusCode());
    // "200"
    // dd($res->getHeader('content-type'));
    // 'application/json; charset=utf8'
    $data = json_decode($res->getBody()->read(1024));
    $status = $data->status;
    $users = $data->users;
    // dd(json_decode($res->getBody()->read(1024))->users);

    return view('kitapay.users',['users'=>$users,'status'=>$status]);
  }

  public function displayUser($id){
    $getUserUrl = BASE_URL.'/user/'.$id.'?key='.API_KEY;
    $client = new Client();
    $res = $client->request('GET', $getUserUrl);
    $data = json_decode($res->getBody()->read(1024));
    $status = $data->status;
    $user = $data->user;
    // dd($user);
    return view('kitapay.user',['user'=>$user,'status'=>$status]);
  }

  public function disableTransaction($id){
    $url = BASE_URL.'/user/'.$id.'/disable-transaction?key='.API_KEY;
    $client = new Client();
    $res = $client->request('POST', $url);
    // $data = json_decode($res->getBody()->read(1024));
    // $status = $data->status;
    return back();
  }

  public function enableTransaction($id){
    $url = BASE_URL.'/user/'.$id.'/enable-transaction?key='.API_KEY;
    $client = new Client();
    $res = $client->request('POST', $url);
    // $data = json_decode($res->getBody()->read(1024));
    // $status = $data->status;
    return back();
  }
}
