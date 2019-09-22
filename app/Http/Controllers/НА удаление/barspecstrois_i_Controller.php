<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barspecstrois_i_Controller extends Controller
{
     public function execute(){
   	if(view()->exists('admin.ishods_standart')){
		   $vhods=\App\barspecstroi_i::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ОАО БарСпецСтрой',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
