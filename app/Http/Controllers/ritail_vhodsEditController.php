<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ritailaktive_v;

class ritail_vhodsEditController extends Controller
{
      public function execute(ritailaktive_v $ritail_vhods,Request $request){
		$vhod=$ritail_vhods;
		if($request->isMethod('delete')) {
			$vhod->delete();
			return redirect('admin')->with('status','Страница удалена');
		}

		if($request->isMethod('post')) {
						
			$input = $request->except('_token');
			$vhod->fill($input);
			if($vhod->update()) {return redirect('admin')->with('status','Страница обновлена');	}
			
		}


    $old = $vhod->toArray();
		if(view()->exists('admin.vhods_edit')) {
			
			$data = [
					'title' => 'Редактирование страницы - '.$old['number'],
					'data' => $old
					];
			return view('admin.vhods_edit',$data);	

    }
}
}
