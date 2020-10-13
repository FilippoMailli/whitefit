<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         return view('guest.welcome');
     }

     public function contatti()
     {
         return view('guest.contatti.contattaci');
     }

     public function whitefit()
     {
         return view('guest.contatti.whitefit');
     }

     public function whiteteam()
     {
         return view('guest.contatti.whiteteam');
     }
}
