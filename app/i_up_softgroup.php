<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class i_up_softgroup extends Model
{
    protected $fillable = ['id','recipient','ispolnitel','date','type','content','urn_document']; //
}
