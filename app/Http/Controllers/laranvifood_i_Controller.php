<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laranvifood_i_Controller extends Controller
{
    public function execute(){
   	if(view()->exists('admin.ishods_standart')){
   		$vhods=\App\laranvifood_i::all();
   		$data=[
			'title' => 'ООО ЛаранвиФуд',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
