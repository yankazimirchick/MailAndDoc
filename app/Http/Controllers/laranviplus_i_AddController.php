<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laranviplus_i;
use Validator;
class laranviplus_i_AddController extends Controller
{
    public function execute(Request $request){

				if($request->isMethod('post')){
					$input=$request->except('_token');
					$validator = Validator::make($input,[
						
						'content'=>'required',
					
					]);
					if($validator->fails()){
							return redirect('admin/laranviplus_i')->with('status','Ошибка :C		
							Скорее всего не заполнили все поля');
					}
					if($request->hasFile('urn_document')){
					$file=$request->file('urn_document');				
					$input['urn_document']= $file->getClientOriginalName();
					$file->move(public_path().'/vendors/download_File',$input['urn_document']);
					}
					$vhod = new laranviplus_i();
					$vhod->fill($input);
					//dd($input);

					if($vhod->save()){
					return redirect('admin/laranviplus_i')->with('status','Запись Добавлена');
					}
				}


		if(view()->exists('admin.ishods_add_standart')){

			$data=[

				'title'=>'Новое капитал'
			];
			return view('admin.ishods_add_standart',$data);
		}


		abort(404);
	}
}
