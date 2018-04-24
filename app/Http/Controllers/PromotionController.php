<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
const BASE_URL = 'https://bang-tamin.herokuapp.com';
//const API_KEY='AIzaSyDQCF94jFfcS8aP9azi0_K45YsMkiDzX2o';
class PromotionController extends Controller {
  public function displayPromotions(){
    $size=50;
    $getPromotionsUrl = BASE_URL.'/promotions';
    $client = new Client();
    $res = $client->request('GET', $getPromotionsUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd(json_decode($res->getBody()->read(1024))->users);

    return view('promotion.index',['promotions'=>$data]);
  }

  public function displayPromotion($id){
    $getPromotionUrl = BASE_URL.'/promotions/'.$id;
    $client = new Client();
    $res = $client->request('GET', $getPromotionUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd($user);
    return view('promotion.detail',['promotion'=>$data]);
  }
}
