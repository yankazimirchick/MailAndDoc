<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Task;
use Mail;
use App\User;

class defctrl extends Controller
{
    //
    public function index(){
    	return view('tasks/index');
        //return view('welcome');
    
    }
public function send(Request $request){
    $input=$request->except('_token');
    $name = $request->input('name');
    $email = $request->input('email');
    $contentMessage = $request->input('message');
    dd($input);    
    
            Mail::raw($contentMessage, function($message){
            //Mail::send(['text'=>"hello"],['name','webblog'], function($message){
            $message->to('yankazimirchick@yandex.ru','name')->subject('Отправитель');
            $message->from('yankazimirchick@yandex.ru','От кого');
        });
        return redirect()->route('home');
    	
}
public function create(){
   return view('tasks/create');
}
public function scopeTest(){
    echo "This is a test function";
    echo "Сюда вставить отправку email";
   }

public function listEmail(){
    $menu=array();
    $allItems1 = new \Illuminate\Database\Eloquent\Collection;
    $allItems1 = $allItems1->merge(User::all())->sortByDesc('created_at');
    foreach ($allItems1 as $vhod2 ) {
    $item=($vhod2->email);
    $item2=($vhod2->name);
    $item3=array($item=>$item2);
    array_push($menu,$item3);}
    return ($menu);
}

public function sendEmail($request){
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
}


public function store(Request $request){
    defctrl::scopeTest();
    $menu=array();
    $allItems1 = new \Illuminate\Database\Eloquent\Collection;
    $allItems1 = $allItems1->merge(User::all())->sortByDesc('created_at');
    foreach ($allItems1 as $vhod ) {
    //$item=array('name'=>$vhod->name);
    //$item=array($vhod->name);
    $item=($vhod->email);
    $item2=($vhod->name);
    $item3=array($item=>$item2);
    array_push($menu,$item3);}
    //dd($menu);
        return view('welcome', array('vhod_spis'=>$menu));      
        
        //$task= new Task;
    //	$task->number=$request->get('number');
    //	$task->sends=$request->get('sends');
    //	$task->save();
    //	return redirect()->route('index');
   //dd($request->all());
}


}
