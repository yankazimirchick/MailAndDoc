<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class i_ip_voitikva extends Model
{
    protected $fillable = ['id','recipient','ispolnitel','date','type','content','urn_document']; //
}
