<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
  

   public function welcome(){
    return view('welcome');
   }

   public function aboutUs(){
    return view('ChiSiamo');
   } 

   public function service(){
    return view('service');
   }


//    public function profilo(Request $request){
//     dd($request);
// }

}