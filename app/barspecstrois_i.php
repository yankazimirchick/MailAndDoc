<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barspecstrois_i extends Model
{
    protected $fillable = ['id','recipient','ispolnitel','date','date_p','t_number','t_date','sender','type','content','urn_document'];
}
