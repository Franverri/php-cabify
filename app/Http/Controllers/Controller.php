<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create()
    {
        return view('prospects');
    }

    public function store(Request $request)
    {
      $name = $request->input('name');
      $lastname = $request->input('lastname');
      $email = $request->input('email');
      date_default_timezone_set("America/Buenos_Aires");
      $date = date("Y-m-d H:i:s");

      $existeMail = DB::table('prospects')->where('email', $email)->first();

      if ($existeMail === NULL) {
        $data = array("name"=>$name,"lastname"=>$lastname,"email"=>$email, "created_at"=>$date);
        DB::table('prospects')->insert($data);
        return view('prospects', ["succed"=>true, "msg"=>"Se ha enviado el mail a la casilla indicada"]);
      } else {
        return view('prospects', ["succed"=>false, "msg"=>"La casilla indicada ya recibió el mail"]);
      }
    }
}
