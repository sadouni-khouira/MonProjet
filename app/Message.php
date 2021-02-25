<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
    
class Message extends Model
{
      protected $table = "message" ;
        protected $fillable = ['nom','email','email_verified_at','message'];
     
}