<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class Ishodcontroller extends Controller
{
     public function execute(){
   	if(view()->exists('admin.ishods')){
		   $ishods=\App\Ishod::all();
		   
		   
   		$data=[
			'title' => 'Исходящая ПОЧТА',
			'spisok' => $ishods
   			
   ];
   		return view('admin.ishods',$data);
   	}
   }
}
