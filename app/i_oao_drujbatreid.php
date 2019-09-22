<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class i_oao_drujbatreid extends Model
{
    protected $fillable = ['id','recipient','ispolnitel','date','type','content','urn_document'];
}
