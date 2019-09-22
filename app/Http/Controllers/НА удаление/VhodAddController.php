<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vhod;
use Validator;


class VhodAddController extends Controller
{

	public function execute(Request $request){

				if($request->isMethod('post')){
					$input=$request->except('_token');
					$validator = Validator::make($input,[
						
						'date'=>'required',
						'sender'=>'required',
						'recep'=>'required',
						'content'=>'required',
					
					]);
					if($validator->fails()){
						return redirect()->route('vhodAdd')->withErrors($validator)->withInput();
					}
					if($request->hasFile('urn_document')){
					$file=$request->file('urn_document');				
					$input['urn_document']= $file->getClientOriginalName();
					$file->move(public_path().'/vendors/download_File',$input['urn_document']);
					}
					$vhod = new Vhod();
					$vhod->fill($input);
					//dd($input);

					if($vhod->save()){
					return redirect('admin')->with('status','Запись Добавлена');
					}
				}


		if(view()->exists('admin.vhod_add')){

			$data=[

				'title'=>'Ларанви'
			];
			return view('admin.vhod_add',$data);
		}


		abort(404);
	}
    //
}
