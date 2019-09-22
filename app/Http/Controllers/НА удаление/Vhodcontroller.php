<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class Vhodcontroller extends Controller
{
   public function execute(){
   	if(view()->exists('admin.vhods')){
		   $vhods=\App\Vhod::all();
		   $vhods = $vhods->sortByDesc('created_at');
   		$data=[
			'title' => 'ВХОДЯЩАЯ ПОЧТА',
			'spisok' => $vhods
   			
   ];
   		return view('admin.vhods',$data);
   	}
   }
}
