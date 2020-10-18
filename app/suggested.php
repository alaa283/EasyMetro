<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggested extends Model
{
    //
     protected $table = 'suggesteds';

     protected $fillable=['text','image','email','mobile'];
     
}
