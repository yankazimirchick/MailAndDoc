<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class raduga_v extends Model
{
    protected $fillable = ['id','ispolnitel','date','date_p','t_number','t_date','sender','type','content','urn_document'];  
}
