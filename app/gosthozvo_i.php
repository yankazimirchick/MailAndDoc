<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gosthozvo_i extends Model
{
  protected $fillable = ['id','recipient','ispolnitel','date','type','content','urn_document'];  //
}
