<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class raduga_vhodsController extends Controller
{
    public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\raduga_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'Радуга',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
