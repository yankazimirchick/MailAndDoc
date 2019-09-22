<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class raduga_vhods_i_Controller extends Controller
{
    public function execute(){
   	if(view()->exists('admin.ishods_standart')){
		   $vhods=\App\raduga_i::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'Радуга',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
