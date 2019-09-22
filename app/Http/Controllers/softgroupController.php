<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class softgroupController extends Controller
{
     public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\softgroup_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'СофтГрупп',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
