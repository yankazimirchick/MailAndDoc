<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gosthozvo_i_Controller extends Controller
{
    public function execute(){
   	if(view()->exists('admin.ishods_standart')){
		   $vhods=\App\gosthozvo_i::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'Гостиничное хозяйство',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
