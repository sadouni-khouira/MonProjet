<?php
namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class RController extends Controller
{
    public function formulaire()
    {
        return view('reserverDirect1');
     }

     public function traitement()
      {
        $attributes =  request()->validate([ 
            'nom' => ['required'],
            'email' => ['required','email'], 
            'tel' => ['required'],
            'date_de_reservation' => ['required',"date_format:d/m/Y" ,'ends_with:2021'],
            'heure_de_reservation' => ['required'],
            'nbr_de_personne' => ['required','integer'],
            'message' => ['required'],
           ]);
           if ($attributes){
         $tasks = Task::create( $attributes);
         return redirect('/enregistrerR');}
      
      }

}
