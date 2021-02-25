<?php

namespace App\Http\Controllers;
use App\utilisateur;
use Illuminate\Http\Request;

class inscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
     }

    public function traitement()
    {
        request()->validate([ 
            'email' => ['required','email'], 
            'password'=>['required','confirmed','min:8'],
             'password_confirmation'=>['required'],
          ]);
    
        $utilisateur = utilisateur::create([
            'email'=>request('email'),
            'password'=> password_hash(request('password'), PASSWORD_DEFAULT),
            // 'mot_de_passe' => password_hash(request('password'), PASSWORD_DEFAULT),
          ]);
          return redirect('utilisateurs') ;      
        //return redirect('login');
          
     }
}
