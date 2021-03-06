<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ritail_i;
use Validator;

class ritail_i_AddController extends Controller
{
    public function execute(Request $request){

				if($request->isMethod('post')){
					$input=$request->except('_token');
					$validator = Validator::make($input,[
						
						'content'=>'required',
					
					]);
					if($validator->fails()){
						return redirect('admin/ritail_i')->with('status','Ошибка :C		
							Скорее всего не заполнили все поля');
					}
					if($request->hasFile('urn_document')){
					$file=$request->file('urn_document');				
					$input['urn_document']= $file->getClientOriginalName();
					$file->move(public_path().'/vendors/download_File',$input['urn_document']);
					}
					$vhod = new ritail_i();
					$vhod->fill($input);
					//dd($input);

					if($vhod->save()){
					return redirect('admin/ritail_i')->with('status','Запись Добавлена');
					}
				}


		if(view()->exists('admin.ishods_add_standart')){

			$data=[

				'title'=>'ЗАО Ритейл'
			];
			return view('admin.ishods_add_standart',$data);
		}


		abort(404);
	}
}
