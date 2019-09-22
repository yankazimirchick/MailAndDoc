<?php

namespace App\Http\Controllers;
use App\i_zao_barspecstroi;
use App\v_zao_barspecstroi;
use Illuminate\Http\Request;
use Validator;
use Mail;
use App\User;
use App\Task;

class naming{
    //Название контроллера
    static $title='ЗАО БарановичиСпецСтрой';
}  
class OAO_BarSpecStroiController extends Controller
{
    

     //Получение Входящих
     public function getInbox(){
        if(view()->exists('admin.vhods_standart')){
            $vhods=\App\v_zao_barspecstroi::all();
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
                    return redirect('admin/barspecstrois')->with('Error','Ошибка :C		
                    Скорее всего не заполнили все поля');
            }
            if($request->hasFile('urn_document')){
                $file=$request->file('urn_document');                
                $NewName=date('Y_m_d_His').str_random(15).'.';
                $input['urn_document']=$NewName.$file->getClientOriginalExtension();
            $file->move(public_path().'/vendors/download_File',$input['urn_document']);
            }            
            $vhod = new v_zao_barspecstroi();
            $vhod->fill($input);
           


            //получение переменных с формы
            $ispolnitelMessage = $request->input('ispolnitel');
            $senderMessage = $request->input('sender');
            $contentMessage = $request->input('content');
            $dateMessage = $request->input('date_p');
            $mailText='Содержание письма: '.$contentMessage. '.   Дата регистрации письма: ' .$dateMessage.'.  Исполнитель '.$ispolnitelMessage;
            //Отправка письма
            Mail::raw($mailText, function($message) use($senderMessage) 
                    { 
                $message->to('yankazimirchick@yandex.ru','name')->subject($senderMessage);
                $message->from('yankazimirchick@yandex.ru','Новое Письмо');
                    }
            );

            if($vhod->save()){
            return redirect('admin/barspecstrois')->with('status','Запись Добавлена');
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
            $vhods=\App\i_zao_barspecstroi::all();
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
                return redirect('admin/barspecstrois_i')->with('Error','Ошибка :C		
                    Скорее всего не заполнили все поля');
            }
            if($request->hasFile('urn_document')){

                $file=$request->file('urn_document');
                
                $NewName=date('Y_m_d_His').str_random(15).'.';
                $input['urn_document']=$NewName.$file->getClientOriginalExtension();
            
            $file->move(public_path().'/vendors/download_File',$input['urn_document']);
            }
            $vhod = new i_zao_barspecstroi();
            $vhod->fill($input);
            //dd($input);

            if($vhod->save()){
            return redirect('admin/barspecstrois_i')->with('status','Запись Добавлена');
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
