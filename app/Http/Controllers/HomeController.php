<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index(){
      // $client = new Client();
      $indonesia = Http::get('https://api.kawalcorona.com/indonesia')->json();
      $province = Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json();
      $world= Http::get('https://api.kawalcorona.com/')->json();
      // // $indonesia = $client->request('GET', 'https://api.kawalcorona.com/indonesia')['positif'];
      $data = [
        'country' => $indonesia,
        'province' => $province,
        'world' => $world
      ];
      return view('/home',$data);
    }
}
