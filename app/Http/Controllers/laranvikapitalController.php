<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laranvikapitalController extends Controller
{
    public function execute(){
   	if(view()->exists('admin.vhods')){
   		$vhods=\App\laranvikapital_v::all();
      $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ООО Ларанвикапитал',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
