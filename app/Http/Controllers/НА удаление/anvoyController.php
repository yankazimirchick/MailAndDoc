<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anvoyController extends Controller
{
     public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\anvoy_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ООО Анвой',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
