<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class ritailController extends Controller
{
    public function execute(){
   	if(view()->exists('admin.vhods_standart')){
		   $vhods=\App\ritail_v::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ЗАО Ритейл',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods_standart',$data);
   	}
   }
}
