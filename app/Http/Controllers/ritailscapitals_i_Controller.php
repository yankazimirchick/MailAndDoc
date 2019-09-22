<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ritailscapitals_i_Controller extends Controller
{
     public function execute(){
   	if(view()->exists('admin.ishods_standart')){
		   $vhods=\App\ritailscapital_i::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ЗАО РитейлКапитал',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
