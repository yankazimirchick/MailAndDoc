<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ritail_vhods_i extends Model
{
   protected $fillable = ['id','recipient','ispolnitel','date','type','content','urn_document']; //
}
