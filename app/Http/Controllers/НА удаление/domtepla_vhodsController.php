<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class domtepla_vhodsController extends Controller
{
     public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\domtepla_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ООО ДомТепла',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
