<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
const BASE_URL = 'https://bang-tamin.herokuapp.com';
//const API_KEY='AIzaSyDQCF94jFfcS8aP9azi0_K45YsMkiDzX2o';
class VoucherController extends Controller {
  public function displayVouchers($page=1){
    $size=50;
    $getVouchersUrl = BASE_URL.'/vouchers';
    $client = new Client();
    $res = $client->request('GET', $getVouchersUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd(json_decode($res->getBody()->read(1024))->users);

    return view('voucher.index',['vouchers'=>$data]);
  }

  public function displayVoucher($id){
    $getVoucherUrl = BASE_URL.'/vouchers/'.$id;
    $client = new Client();
    $res = $client->request('GET', $getVoucherUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd($user);
    return view('voucher.detail',['voucher'=>$data]);
  }
}
