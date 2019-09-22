<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laranvikapital_v extends Model
{
	public $incrementing = false;
   protected $fillable = ['id','ispolnitel','date','date_p','t_number','t_date','sender','type','content','urn_document']; 
}
