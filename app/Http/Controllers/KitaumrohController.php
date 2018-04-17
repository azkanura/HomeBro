<?php

namespace App\Http\Controllers;

use App\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
const BASE_URL = 'https://sandbox.api.kitapay.co.id/admin-panel/v1';
const API_KEY='AIzaSyDQCF94jFfcS8aP9azi0_K45YsMkiDzX2o';
class KitaumrohController extends Controller {
  public function displayRegistrations($page=1){
    $size=50;
    $getRegistrationsUrl = BASE_URL.'/kita-umroh/registration/list?key='.API_KEY.'&page='.$page.'&size='.$size;
    $client = new Client();
    $res = $client->request('GET', $getRegistrationsUrl);
    // dd($res->getStatusCode());
    // "200"
    // dd($res->getHeader('content-type'));
    // 'application/json; charset=utf8'
    $data = json_decode($res->getBody()->read(1024));
    $status = $data->status;
    $registrations = $data->kita_umroh_registrations;
    // dd(json_decode($res->getBody()->read(1024))->registrations);

    return view('kitaumroh.registrations',['registrations'=>$registrations,'status'=>$status,'page'=>$page,'size'=>$size]);
  }


  public function displayRegistration($id){
    $getRegistrationUrl = BASE_URL.'/kita-umroh/registration/'.$id.'?key='.API_KEY;
    $client = new Client();
    $res = $client->request('GET', $getRegistrationUrl);
    $data = json_decode($res->getBody()->read(1024));
    $status = $data->status;
    $registration = $data->kita_umroh_registration;
    // dd($registration);
    return view('kitaumroh.registration',['registration'=>$registration,'status'=>$status]);
  }

  public function displayPackages(){
    $getPackagesUrl = BASE_URL.'/kita-umroh/package/list?key='.API_KEY;
    $client = new Client();
    $res = $client->request('GET', $getPackagesUrl);
    // dd($res->getStatusCode());
    // "200"
    // dd($res->getHeader('content-type'));
    // 'application/json; charset=utf8'
    $data = json_decode($res->getBody()->read(1024));
    $status = $data->status;
    $packages = $data->kita_umroh_packages;
    // dd(json_decode($res->getBody()->read(1024))->packages);

    return view('kitaumroh.packages',['packages'=>$packages,'status'=>$status]);
  }


  public function displayPackage($id){

    $getPackageUrl = BASE_URL.'/kita-umroh/package/'.$id.'?key='.API_KEY;
    // dd($getPackageUrl);
    $client = new Client();
    $res = $client->request('GET', $getPackageUrl);

    $data = json_decode($res->getBody());
    // dd($data);
    $status = $data->status;
    $package = $data->kita_umroh_package;
    $itinerary = (array)$package->itinerary;
    ksort($itinerary);
    return view('kitaumroh.package',['package'=>$package,'itinerary'=>$itinerary,'status'=>$status]);
  }

  public function updateKitaSaldoStatus(Request $request){
    $id=$request->input('id');
    $status=$request->input('status');
    $url = BASE_URL.'/kita-umroh/registration/'.$id.'/update-kita-saldo-status?key='.API_KEY;
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
