<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Mail;

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
        $text = "Prueba de texto";

        $data = array("name"=>$name,"lastname"=>$lastname,"email"=>$email, "created_at"=>$date);
        DB::table('prospects')->insert($data);

        //Envío de mail al usuario
        Mail::send("emails.email", ['name' => $name], function
         ($message) use ($name, $email) {
          $message->to($email, $name)
          ->subject("Cabify");
          $message->from("etcheverrifranco@gmail.com", "Cabify");
        });

        //Envío de mail a la casilla propia
        Mail::send("emails.mailtous", ['text' => $text, 'name' =>
          $name, 'email' => $email], function
          ($message) use ($name, $email) {
          $message->to("etcheverrifranco@gmail.com", "Cabify")
            ->subject("Response Available");
             $message->from($email, $name);
        });

        return view('prospects', ["succed"=>true, "msg"=>"Se ha enviado el mail a la casilla indicada"]);
      } else {
        return view('prospects', ["succed"=>false, "msg"=>"La casilla indicada ya recibió el mail"]);
      }
    }
}
