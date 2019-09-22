<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voitikvaController extends Controller
{
    public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\voitikva_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ИП Войтик В.А.',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
