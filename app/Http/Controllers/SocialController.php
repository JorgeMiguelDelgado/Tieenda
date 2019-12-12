<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Socialite;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider){
        $user=Socialite::driver($provider)->user();
        return Redirect::to('/producto');
    }
}
