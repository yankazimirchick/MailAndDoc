<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class i_ip_voitikaa extends Model
{
    protected $fillable = ['id','recipient','ispolnitel','date','type','content','urn_document']; //
}
