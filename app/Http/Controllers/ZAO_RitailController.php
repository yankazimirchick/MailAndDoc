<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\i_zao_ritail;
use App\v_zao_ritail;
use Validator;

class ZAO_RitailController extends Controller
{
    //Получение Входящих
    public function getInbox(){
        if(view()->exists('admin.vhods_standart')){
            $vhods=\App\v_zao_ritail::all();
            $vhods = $vhods->sortByDesc('created_at');
            $data=[
             'title' => 'ЗАО Ритейл',
             'spisok' => $vhods
                
    ];
            return view('admin.vhods_standart',$data);
        }
    }
    //Добавление Входящих
    public function addInbox(Request $request){

        if($request->isMethod('post')){
            $input=$request->except('_token');
            $validator = Validator::make($input,[
                
                'content'=>'required',
                'date'=>'required',
                'date_p'=>'required',
                'type'=>'required',
                'ispolnitel'=>'required',
            
            ]);
            if($validator->fails()){
                    return redirect('admin/ritail_v')->with('Error','Ошибка :C		
                    Скорее всего не заполнили все поля');
            }
            if($request->hasFile('urn_document')){
                $file=$request->file('urn_document');
                
                $NewName=date('Y_m_d_His').str_random(15).'.';
                $input['urn_document']=$NewName.$file->getClientOriginalExtension();
            $file->move(public_path().'/vendors/download_File',$input['urn_document']);
            }
            $vhod = new v_zao_ritail();
            $vhod->fill($input);
            //dd($input);

            if($vhod->save()){
            return redirect('admin/ritail_v')->with('status','Запись Добавлена');
            }
        }


if(view()->exists('admin.vhod_add_standart')){

    $data=[

        'title'=>'ЗАО Ритейл'
    ];
    return view('admin.vhod_add_standart',$data);
}


abort(404);
}

    //Получение Исходящих
    public function getOutgoing(){
        if(view()->exists('admin.ishods_standart')){
            $vhods=\App\i_zao_ritail::all();
            $vhods = $vhods->sortByDesc('created_at');
            $data=[
             'title' => 'ЗАО Ритейл',
             'spisok' => $vhods
                
    ];
            return view('admin.ishods_standart',$data);
        }
    }
    //Добавление Исходящего
    public function addOutgoing(Request $request){

        if($request->isMethod('post')){
            $input=$request->except('_token');
            $validator = Validator::make($input,[
                
                'content'=>'required',
            
            ]);
            if($validator->fails()){
                return redirect('admin/ritail_i')->with('Error','Ошибка :C		
                    Скорее всего не заполнили все поля');
            }
            if($request->hasFile('urn_document')){

                $file=$request->file('urn_document');
                
                $NewName=date('Y_m_d_His').str_random(15).'.';
                $input['urn_document']=$NewName.$file->getClientOriginalExtension();
            
            $file->move(public_path().'/vendors/download_File',$input['urn_document']);
            }
            $vhod = new i_zao_ritail();
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
