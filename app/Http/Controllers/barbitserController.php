<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barbitserController extends Controller
{
    public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\barbitser_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'Барановичибытсервис',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
