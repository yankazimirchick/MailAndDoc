<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ishod extends Model
{
    protected $fillable = ['date','sender','recep','number','content','urn_document']; 
}
