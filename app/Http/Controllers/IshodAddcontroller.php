<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Ishod;
use Validator;

class IshodAddcontroller extends Controller
{
    public function execute(Request $request){

				if($request->isMethod('post')){
					$input=$request->except('_token');
					$validator = Validator::make($input,[
						'number' =>'required|max:255',
						'sender'=>'required',
						'date'=>'required',
						'recep'=>'required',
						'content'=>'required',
							]);
					if($validator->fails()){
						return redirect()->route('ishodAdd')->withErrors($validator)->withInput();
					}
					if($request->hasFile('urn_document')){
					$file=$request->file('urn_document');				
					$input['urn_document']= $file->getClientOriginalName();
					$file->move(public_path().'/vendors/download_File',$input['urn_document']);
					}
					$ishod = new Ishod();
					$ishod->fill($input);
					//dd($input);

					if($ishod->save()){
					return redirect('admin')->with('status','Запись Добавлена');
					}
				}


		if(view()->exists('admin.ishod_add')){

			$data=[

				'title'=>'Новое Исходящее'
			];
			return view('admin.ishod_add',$data);
		}


		abort(404);
	}
}
