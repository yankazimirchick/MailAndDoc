<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class ritail_vhods_i_Controller extends Controller
{
    public function execute(){
   	if(view()->exists('admin.ishods_standart')){
		   $vhods=\App\ritailaktive_i::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ЗАО РитейлАктив',
			'spisok' => $vhods
   			
   ];
   		return view('admin.ishods_standart',$data);
   	}
   }
}
