<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
const BASE_URL = 'https://bang-tamin.herokuapp.com';
//const API_KEY='AIzaSyDQCF94jFfcS8aP9azi0_K45YsMkiDzX2o';
class ComplaintController extends Controller {
  public function displayComplaints(){
    $size=50;
    $getComplaintsUrl = BASE_URL.'/complaints';
    $client = new Client();
    $res = $client->request('GET', $getComplaintsUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd(json_decode($res->getBody()->read(1024))->users);

    return view('complaint.index',['complaints'=>$data]);
  }

  public function displayComplaint($id){
    $getComplaintUrl = BASE_URL.'/complaints/'.$id;
    $client = new Client();
    $res = $client->request('GET', $getComplaintUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd($user);
    return view('complaint.detail',['complaint'=>$data]);
  }
}
