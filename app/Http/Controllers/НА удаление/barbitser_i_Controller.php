<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barbitser_i_Controller extends Controller
{
    public function execute(){
   	if(view()->exists('admin.ishods_standart')){
		   $vhods=\App\barbitser_i::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'Барановичибытсервис',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
