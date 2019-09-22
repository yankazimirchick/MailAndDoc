<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laranviController extends Controller
{
   public function execute(){
   	if(view()->exists('admin.vhods')){
		   $vhods=\App\laranvi_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ООО Ларанви',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
