<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\voitikaa_i;
use Validator;

class voitikaa_i_AddController extends Controller
{
    public function execute(Request $request){

				if($request->isMethod('post')){
					$input=$request->except('_token');
					$validator = Validator::make($input,[
						
						'content'=>'required',
						'type'=>'required',
						'ispolnitel'=>'required',
						'date'=>'required',
					
					]);
					if($validator->fails()){
							return redirect('admin/voitikaa_i')->with('status','Ошибка :C		
							Скорее всего не заполнили все поля');
					}
					if($request->hasFile('urn_document')){
					$file=$request->file('urn_document');
					
					$NewName=date('Y_m_d_His').str_random(15).'.';
					$input['urn_document']=$NewName.$file->getClientOriginalExtension();
					//$input['urn_document']= $file->getClientOriginalName();
					//$file->move(public_path().'/vendors/download_File',$input['urn_document']);//
					$file->move(public_path().'/vendors/download_File',$input['urn_document']);
					
					}
					$vhod = new voitikaa_i();
					$vhod->fill($input);
					//dd($input);

					if($vhod->save()){
					return redirect('admin/voitikaa_i')->with('status','Запись Добавлена');
					}
				}


		if(view()->exists('admin.ishods_add_standart')){

			$data=[

				'title'=>'ИП Войтик'
			];
			return view('admin.ishods_add_standart',$data);
		}


		abort(404);
	}
}
