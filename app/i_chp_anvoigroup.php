<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class i_chp_anvoigroup extends Model
{
    protected $fillable = ['id','recipient','ispolnitel','date','type','content','urn_document']; //
}
