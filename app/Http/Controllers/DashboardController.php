<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
       /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /** @var User */
        $user = auth()->user();
        $test = $user->bodyMeasurements;

        $BMI = $test->weight / (($test->height/100) * ($test->height/100));

        return view('dashboard', [
            'bodymeasurements' => $user->bodyMeasurements,
            'BMI' => $BMI
        ]);
    }
}