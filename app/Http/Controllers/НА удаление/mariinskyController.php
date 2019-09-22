<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mariinskyController extends Controller
{
   public function execute(){
   	if(view()->exists('admin.vhods')){
		   $vhods=\App\mariinsky_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ООО ОтельМариинский',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
