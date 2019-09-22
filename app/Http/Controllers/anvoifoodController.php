<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anvoifoodController extends Controller
{
   public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\anvoifood::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ООО АнвойФуд',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
