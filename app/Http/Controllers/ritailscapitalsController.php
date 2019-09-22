<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ritailscapitalsController extends Controller
{
     public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\ritailscapital_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ЗАО РитейлКапиал',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
