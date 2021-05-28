<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AgencyController extends Controller
{
    public function index()
    {
        $response = Http::get(env('API_BASE_URL').'/agency/');
        $agencies = $response->object();

        $response = Http::get(env('API_BASE_URL').'/vehicle/');
        $vehicles = $response->object();
        //dd($rentals);
        //dd($vehicles);
        /**/
        return view('formulaireReservation',[
            'agencies'=>$agencies,
            'vehicles'=>$vehicles
        ]);
    }

}

