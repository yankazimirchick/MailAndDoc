<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mariinsky_i_Controller extends Controller
{
   public function execute(){
   	if(view()->exists('admin.ishods_standart')){
		   $vhods=\App\mariinsky_i::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ООО ОтельМариинский',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
