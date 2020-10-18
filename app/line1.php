<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class line1 extends Model
{
    // 
    protected $table ='line1';
    protected $fillable=['station','price'];
    public $timestamps=false;
}
