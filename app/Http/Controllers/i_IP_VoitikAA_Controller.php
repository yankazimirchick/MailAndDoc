<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class i_IP_VoitikAA_Controller extends Controller
{
    public function execute(){
   	if(view()->exists('admin.ishods_standart')){
		   $vhods=\App\i_IP_VoitikAA::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ИП Войтик А.А.',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
