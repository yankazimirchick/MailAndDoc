<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\i_zao_ritailaktive;
use App\v_zao_ritailaktive;
use Validator;
class ZAO_RitailAktiveController extends Controller
{
    //Получение Входящих
    public function getInbox(){
        if(view()->exists('admin.vhods_standart')){
            $vhods=\App\v_zao_ritailaktive::all();
            $vhods = $vhods->sortByDesc('created_at');
            $data=[
             'title' => 'ЗАО РитейлАктив',
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
                    return redirect('admin/ritailaktive_v')->with('Error','Ошибка :C		
                    Скорее всего не заполнили все поля');
            }
            if($request->hasFile('urn_document')){
                $file=$request->file('urn_document');
                
                $NewName=date('Y_m_d_His').str_random(15).'.';
                $input['urn_document']=$NewName.$file->getClientOriginalExtension();
            $file->move(public_path().'/vendors/download_File',$input['urn_document']);
            }
            $vhod = new v_zao_ritailaktive();
            $vhod->fill($input);
            //dd($input);

            if($vhod->save()){
            return redirect('admin/ritailaktive_v')->with('status','Запись Добавлена');
            }
        }


if(view()->exists('admin.vhod_add_standart')){

    $data=[

        'title'=>'ЗАО РитейлАктив'
    ];
    return view('admin.vhod_add_standart',$data);
}


abort(404);
}

    //Получение Исходящих
    public function getOutgoing(){
        if(view()->exists('admin.ishods_standart')){
            $vhods=\App\i_zao_ritailaktive::all();
            $vhods = $vhods->sortByDesc('created_at');
            $data=[
             'title' => 'ЗАО РитейлАктив',
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
                return redirect('admin/ritailaktive_i')->with('Error','Ошибка :C		
                    Скорее всего не заполнили все поля');
            }
            if($request->hasFile('urn_document')){

                $file=$request->file('urn_document');
                
                $NewName=date('Y_m_d_His').str_random(15).'.';
                $input['urn_document']=$NewName.$file->getClientOriginalExtension();
            
            $file->move(public_path().'/vendors/download_File',$input['urn_document']);
            }
            $vhod = new i_zao_ritailaktive();
            $vhod->fill($input);
            //dd($input);

            if($vhod->save()){
            return redirect('admin/ritailaktive_i')->with('status','Запись Добавлена');
            }
        }


if(view()->exists('admin.ishods_add_standart')){

    $data=[

        'title'=>'ЗАО РитейлАктив'
    ];
    return view('admin.ishods_add_standart',$data);
}


abort(404);
}
}
