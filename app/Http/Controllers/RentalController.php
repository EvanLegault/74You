<?php


namespace App\Http\Controllers;

use http\Message\Body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RentalController extends Controller
{
    public function index()
    {
       $response = Http::get(env('API_BASE_URL').'/rental/');
        //dd($response);
       $rentals = $response->object();
       //dd($rentals);

/**/
        return view('tableauDeBord',[
            'rentals'=>$rentals
        ]);
    }
    public function store(Request $req)
    {
        //dd($req->input());
        $http = http::post(env('API_BASE_URL').'/rental/add',[
            "vehicle_id" => $req->vehicle_id,
            "startDate" => $req->startDate,
            "endDate" => $req->endDate,
            "kilometers" => $req->kilometers,
            "startAgency_id" => $req->startAgency_id,
            "endAgency_id" => $req->endAgency_id,
            "customer_id" => $req->customer_id,
        ]);
        //dd($http);
        //dd($req->input());
    }
}
