<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class drujbatreid_vhodsController extends Controller
{
    public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\drujbatreid_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ОАО ДружбаТрейд ',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
