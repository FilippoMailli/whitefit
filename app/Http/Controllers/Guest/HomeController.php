<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendMail;

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

     function send(Request $request)
     {
      $this->validate($request, [
       'name'     =>  'required',
       'email'  =>  'required|email',
       'message' =>  'required'
      ]);

         $data = array(
             'name'      =>  $request->name,
             'message'   =>   $request->message
         );

      Mail::to('filippo.mailli@gmail.com')->send(new SendMail($data));
      return back()->with('success', 'Thanks for contacting us!');

     }
}
