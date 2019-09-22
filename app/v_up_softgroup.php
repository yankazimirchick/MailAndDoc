<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class v_up_softgroup extends Model
{
    protected $fillable = ['id','ispolnitel','date','date_p','t_number','t_date','sender','type','content','urn_document']; 
}
