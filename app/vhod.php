<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vhod extends Model
{
    protected $fillable = ['ispolnitel','date','date_p','sender','type','recep','content','urn_document']; 
}