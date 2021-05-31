<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Facebook\Facebook;

class FacebookController extends Controller
{

    public function index()
    {
        $user_id = '103586495278979';
        $user_access_token = 'EAADhhUDIFpUBABoeFAU1cnq5BmvDm8mQrU1MnZBblHVS4ZB33GxtsBMQVWsUr0yMi0DBrj6rFu2v45QOW32JF5EDXoZAktpJaJvLjO5eTY0H47ZBxit0sCyFZBZAZCFqPhAuGk6kBxo0Mm5kE7BlZCzAozWAHD6IrMOJF4rURHUjvcKtBvroZAnR3eFV8W3fL0HYa90xgEZBYHlwZDZD';

        $response = Http::get('https://graph.facebook.com/' . $user_id . '?fields=id,name&access_token=' . $user_access_token);

        dd($response->json());
    }
}
