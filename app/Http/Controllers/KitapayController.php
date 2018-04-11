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
  public function displayUsers($page=1){
    $size=50;
    $getUsersUrl = BASE_URL.'/user/list?key='.API_KEY.'&page='.$page.'&size='.$size;
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

    return view('kitapay.users',['users'=>$users,'status'=>$status,'page'=>$page,'size'=>$size]);
  }

  public function searchUser(Request $request){
    $query=$request->input('search');
    // dd($query[0]);
    $queryData=$query;
    if($query[0]=='0'){
      $query=substr_replace($query,'62',0,1);
    }
    elseif($query[0]=='+'){
      $query=substr_replace($query,'',0,1);
    }
    // dd($query);
    $getUsersUrl = BASE_URL.'/user/search?key='.API_KEY.'&phone='.$query;
    $client = new Client();
    $res = $client->request('GET', $getUsersUrl);
    $data = json_decode($res->getBody()->read(1024));
    $status = $data->status;
    if($status=='success'){
      $user = $data->user;
      return view('kitapay.user_search_result',['user'=>$user,'status'=>$status,'query'=>$queryData]);
    }
    else{
      return redirect()->route('kitapay.users',['page'=>1])->with('error-message','No user found with phone '.$query);
    }
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
    $res = $client->request('POST', $url,['body'=>null]);
    // $data = json_decode($res->getBody()->read(1024));
    // $status = $data->status;
    return back()->with('success-message','Successfully disabled transaction !');
  }

  public function enableTransaction($id){
    $url = BASE_URL.'/user/'.$id.'/enable-transaction?key='.API_KEY;
    $client = new Client();
    $res = $client->request('POST', $url,['body'=>null]);
    // $data = json_decode($res->getBody()->read(1024));
    // $status = $data->status;
    return back()->with('success-message','Successfully enabled transaction !');
  }

  public function updateKitaSaldoStatus(Request $request){
    $id=$request->input('id');
    $status=$request->input('status');
    $url = BASE_URL.'/user/'.$id.'/update-kita-saldo-status?key='.API_KEY;
    $client = new Client();
    $res = $client->request('POST',$url,
    [
      'headers' => [
          'Accept'=> 'application/json',
          'Content-Type'=> 'application/json'
      ],
      'json'=>['kita_saldo_status'=>''.$status.'']
    ]);
    return back()->with('success-message','Successfully update kita saldo status !');
  }
}
