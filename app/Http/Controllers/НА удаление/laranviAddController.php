<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laranvi_v;

use Validator;
class laranviAddController extends Controller
{
    
	public function execute(Request $request){

				if($request->isMethod('post')){
					$input=$request->except('_token');
					$validator = Validator::make($input,[
						
						'content'=>'required',
						'date'=>'required',
						'date_p'=>'required',
						'type'=>'required',
						't_date'=>'required',
						't_number'=>'required',
						'ispolnitel'=>'required',
					
					]);
					if($validator->fails()){
					return redirect('admin/laranvi')->with('status','Ошибка :C		
							Скорее всего не заполнили все поля');
					}
					if($request->hasFile('urn_document')){
					$file=$request->file('urn_document');				
					$input['urn_document']= $file->getClientOriginalName();
					$file->move(public_path().'/vendors/download_File',$input['urn_document']);
					}
					$vhod = new laranvi_v();
					$vhod->fill($input);
					//dd($input);

					if($vhod->save()){
					return redirect('admin/laranvi')->with('status','Запись Добавлена');
					}
				}


		if(view()->exists('admin.vhod_add_standart')){

			$data=[

				'title'=>'ООО  Ларанви'
			];
			return view('admin.vhod_add_standart',$data);
		}


		abort(404);
	}
}
