<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
const BASE_URL = 'https://bang-tamin.herokuapp.com';
//const API_KEY='AIzaSyDQCF94jFfcS8aP9azi0_K45YsMkiDzX2o';
class CustomerController extends Controller {
  public function displayCustomers(){
    $size=50;
    $getCustomersUrl = BASE_URL.'/customers';
    $client = new Client();
    $res = $client->request('GET', $getCustomersUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd(json_decode($res->getBody()->read(1024))->users);

    return view('customer.index',['customers'=>$data]);
  }

  public function displayCustomer($id){
    $getCustomerUrl = BASE_URL.'/customers/'.$id;
    $client = new Client();
    $res = $client->request('GET', $getCustomerUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd($user);
    return view('customer.detail',['customer'=>$data]);
  }
}
