<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function profil()
    {

        $http = Http::post(env('API_BASE_URL') . '/auth/login');
dd($http);
        $http=Http::get(env('API_BASE_URL').'/users/'.$http->object()->id);

        $user = $http->object();

        return view('profil',[
            'user'=>$user
        ]);
    }

}
