<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
const BASE_URL = 'https://bang-tamin.herokuapp.com';
//const API_KEY='AIzaSyDQCF94jFfcS8aP9azi0_K45YsMkiDzX2o';
class StationController extends Controller {
  public function displayStations(){
    $size=50;
    $getStationsUrl = BASE_URL.'/stations';
    $client = new Client();
    $res = $client->request('GET', $getStationsUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd(json_decode($res->getBody()->read(1024))->users);

    return view('station.index',['stations'=>$data]);
  }

  public function displayStation($id){
    $getStationUrl = BASE_URL.'/stations/'.$id;
    $client = new Client();
    $res = $client->request('GET', $getStationUrl);
    $data = json_decode($res->getBody()->getContents());
    // dd($user);
    return view('station.detail',['station'=>$data]);
  }
}
