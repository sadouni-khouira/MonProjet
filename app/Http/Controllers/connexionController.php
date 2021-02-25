<?php
namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
class connexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }
    //----------------
    public function traitement()
    { 
      
       request()->validate([        
          'email' => ['required','email'], 
            'password'=>['required','min:8'],  
          ]);
          $resultat=auth()->attempt([
            
            'email'=> request('email'),
            'password'=>request('password'),
          ]); 
      if ($resultat) {  return redirect('/apresC');   
            } 
             return back()->withInput()->withErrors([
                                                   'email'=>'Vos identifiants sont incorects', 
                                                    ]);        
}
public function deconnexion()
{
  auth()->logout();
  return redirect('/');
  
} 
}
