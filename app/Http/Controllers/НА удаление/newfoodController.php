<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newfoodController extends Controller
{
   public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\newfood::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'НьюФуд',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
