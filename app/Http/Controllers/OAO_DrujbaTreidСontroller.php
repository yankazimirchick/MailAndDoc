<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\i_oao_drujbatreid;
use App\v_oao_drujbatreid;
use Validator;

class naming{
    //Название контроллера
    static $title='ОАО ДружбаТрейд';
} 
class OAO_DrujbaTreidСontroller extends Controller
{
    
  
     

     //Получение Входящих
     public function getInbox(){
        if(view()->exists('admin.vhods_standart')){
            $vhods=\App\v_oao_drujbatreid::all();
            $vhods = $vhods->sortByDesc('created_at');
            $title=naming::$title;
            $data=[
             'title' => $title,
             'spisok' => $vhods
                
    ];
            return view('admin.vhods_standart',$data);
        }
    }
    //Добавление Входящих
    public function addInbox(Request $request){
        $title=naming::$title;
        
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
                    return redirect('admin/drujbatreid')->with('Error','Ошибка :C		
                    Скорее всего не заполнили все поля');
            }
            if($request->hasFile('urn_document')){
                $file=$request->file('urn_document');
                
                $NewName=date('Y_m_d_His').str_random(15).'.';
                $input['urn_document']=$NewName.$file->getClientOriginalExtension();
            $file->move(public_path().'/vendors/download_File',$input['urn_document']);
            }
            $vhod = new v_oao_drujbatreid();
            $vhod->fill($input);
            //dd($input);

            $defctrl2 = new defctrl();
            $defctrl2->sendEmail($request);


            if($vhod->save()){
            return redirect('admin/drujbatreid')->with('status','Запись Добавлена');
            }
        }


if(view()->exists('admin.vhod_add_standart')){

    $defctrl = new defctrl();
    $var=$defctrl->listEmail();
    $data=[
        'title'=>$title
    ];
    return view('admin.vhod_add_standart', array('vhod_spis'=>$var),$data);
}


abort(404);
}

    //Получение Исходящих
    public function getOutgoing(){
        $title=naming::$title;
        if(view()->exists('admin.ishods_standart')){
            $vhods=\App\i_oao_drujbatreid::all();
            $vhods = $vhods->sortByDesc('created_at');
            $data=[
             'title' => $title,
             'spisok' => $vhods
                
    ];
            return view('admin.ishods_standart',$data);
        }
    }
    //Добавление Исходящего
    public function addOutgoing(Request $request){
        $title=naming::$title;
        if($request->isMethod('post')){
            $input=$request->except('_token');
            $validator = Validator::make($input,[
                
                'content'=>'required',
            
            ]);
            if($validator->fails()){
                return redirect('admin/drujbatreid_i')->with('Error','Ошибка :C		
                    Скорее всего не заполнили все поля');
            }
            if($request->hasFile('urn_document')){

                $file=$request->file('urn_document');
                
                $NewName=date('Y_m_d_His').str_random(15).'.';
                $input['urn_document']=$NewName.$file->getClientOriginalExtension();
            
            $file->move(public_path().'/vendors/download_File',$input['urn_document']);
            }
            $vhod = new i_oao_drujbatreid();
            $vhod->fill($input);
            //dd($input);

            if($vhod->save()){
            return redirect('admin/drujbatreid_i')->with('status','Запись Добавлена');
            }
        }


if(view()->exists('admin.ishods_add_standart')){

    $data=[

        'title'=>$title
    ];
    return view('admin.ishods_add_standart',$data);
}


abort(404);
}
}
