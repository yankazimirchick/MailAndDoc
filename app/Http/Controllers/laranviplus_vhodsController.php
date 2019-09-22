<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laranviplus_vhodsController extends Controller
{
    
     public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\laranviplus_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ООО ЛаранвиПлюс',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
