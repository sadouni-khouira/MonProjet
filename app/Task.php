<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   // protected $table = "task" ;
    protected $fillable = ['nom','email','tel','date_de_reservation','heure_de_reservation','nbr_de_personne','message'];
}
