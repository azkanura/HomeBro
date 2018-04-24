<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
const BASE_URL = 'https://bang-tamin.herokuapp.com';
//const API_KEY='AIzaSyDQCF94jFfcS8aP9azi0_K45YsMkiDzX2o';
class FaqController extends Controller {
  public function displayFaqs(){
    $size=50;
    $getFaqsUrl = BASE_URL.'/faqs';
    $client = new Client();
    $res = $client->request('GET', $getFaqsUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd(json_decode($res->getBody()->read(1024))->users);

    return view('faq.index',['faqs'=>$data]);
  }

  public function displayFaq($id){
    $getFaqUrl = BASE_URL.'/faqs/'.$id;
    $client = new Client();
    $res = $client->request('GET', $getFaqUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd($user);
    return view('faq.detail',['faq'=>$data]);
  }
}
