<?php

namespace App\Http\Controllers;

use App\Models\Aimer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AimerController extends Controller
{
    public function index(Request $request,$id_article, $id_user){
      try {
        $aimer = Aimer::create([
          'id_article' => $id_article,
          'id'=> $id_user
          ]);
        event(new Registered($aimer));
      } catch (\Throwable $th) {
        Aimer::where('id_article', $id_article)
          ->where('id', $id_user)
          ->delete();
      }
      return Redirect::to('/');
    }
}
