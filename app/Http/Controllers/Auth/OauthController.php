<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OauthController extends Controller
{
    public function redirect(){
        $query = http_build_query([
            'client_id' => '7',
            'redirect' => 'http://127.0.0.1:8000/auth/passport/callback',
            'response_type' => 'code',
            'scope' => ''
        ]);

        return redirect('http://127.0.0.1:8000/oauth/authorize?' . $query);
    }
    public function callback(){

    }
}