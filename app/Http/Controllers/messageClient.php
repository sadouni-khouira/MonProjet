<?php
namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class messageClient extends Controller
{
    public function formulaire()
    {
        return view('createMCLT');
     }

    public function traitement()
    {
        $test=request()->validate([ 
            'nom' => ['required'],
            'email' => ['required','email'],         
            'message' => ['required'],
          ]);
    if ($test){
        
        $message = Message::create([
            'nom'=>request('nom'),
            'email'=>request('email'),
            'message'=>request('message'), 
          ]);
          return redirect('/enregistrerM');
          }
         
          
     }
}

