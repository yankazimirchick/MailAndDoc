<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barspecstroisController extends Controller
{
     public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\barspecstroi_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ОАО БарСпецСтрой',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
