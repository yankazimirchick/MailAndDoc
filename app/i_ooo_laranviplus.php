<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class i_ooo_laranviplus extends Model
{
    protected $fillable = ['id','recipient','ispolnitel','date','type','content','urn_document'];
}
