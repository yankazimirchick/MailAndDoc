<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anvoy_i_Controller extends Controller
{
     public function execute(){
   	if(view()->exists('admin.ishods_standart')){
		   $vhods=\App\anvoy_i::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ООО Анвой',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
