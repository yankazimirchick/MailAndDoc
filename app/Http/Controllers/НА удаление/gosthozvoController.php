<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gosthozvoController extends Controller
{
    public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\gosthozvo_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'Гостиничное хозяйство',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
