<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
const BASE_URL = 'https://bang-tamin.herokuapp.com';
//const API_KEY='AIzaSyDQCF94jFfcS8aP9azi0_K45YsMkiDzX2o';
class ProductController extends Controller {
  public function displayProducts($page=1){
    $size=50;
    $getProductsUrl = BASE_URL.'/products';
    $client = new Client();
    $res = $client->request('GET', $getProductsUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd(json_decode($res->getBody()->read(1024))->users);

    return view('product.index',['products'=>$data]);
  }

  public function displayProduct($id){
    $getProductUrl = BASE_URL.'/products/'.$id;
    $client = new Client();
    $res = $client->request('GET', $getProductUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd($user);
    return view('product.detail',['product'=>$data]);
  }
}
