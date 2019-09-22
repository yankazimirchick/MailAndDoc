<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{anvoifood,anvoigroup_v,anvoy_v,barbitser_v,barspecstroi_v,domtepla_v,drujbatreid_v,gosthozvo_v,laranvifood_v,laranvikapital_v,laranviplus_v,laranvi_v,mariinsky_v,newfood,raduga_v,ritailaktive_v,ritailscapital_v,ritail_v,softgroup_v,sovetski_v,voitikaa_v,voitikva_v,Ishod};
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function execute(Request $request){
    	
    	
	$menu=array();
	$menu2=array();
/*
$allItems1 = new \Illuminate\Database\Eloquent\Collection;
$allItems2 = new \Illuminate\Database\Eloquent\Collection;
$allItems3 = new \Illuminate\Database\Eloquent\Collection;
$allItems4 = new \Illuminate\Database\Eloquent\Collection;
$allItems5 = new \Illuminate\Database\Eloquent\Collection;
$allItems6 = new \Illuminate\Database\Eloquent\Collection;
$allItems7 = new \Illuminate\Database\Eloquent\Collection;
$allItems8 = new \Illuminate\Database\Eloquent\Collection;
$allItems9 = new \Illuminate\Database\Eloquent\Collection;
$allItems10 = new \Illuminate\Database\Eloquent\Collection;
$allItems11 = new \Illuminate\Database\Eloquent\Collection;
$allItems12 = new \Illuminate\Database\Eloquent\Collection;
$allItems13 = new \Illuminate\Database\Eloquent\Collection;
$allItems14 = new \Illuminate\Database\Eloquent\Collection;
$allItems15 = new \Illuminate\Database\Eloquent\Collection;
$allItems16 = new \Illuminate\Database\Eloquent\Collection;
$allItems17 = new \Illuminate\Database\Eloquent\Collection;
$allItems18 = new \Illuminate\Database\Eloquent\Collection;
$allItems19 = new \Illuminate\Database\Eloquent\Collection;
$allItems20 = new \Illuminate\Database\Eloquent\Collection;
$allItems21 = new \Illuminate\Database\Eloquent\Collection;
$allItems22 = new \Illuminate\Database\Eloquent\Collection;

$allItems1 = $allItems1->merge(anvoifood::all())->sortByDesc('created_at');
$allItems2 = $allItems2->merge(anvoigroup_v::all())->sortByDesc('created_at');
$allItems3 = $allItems3->merge(anvoy_v::all())->sortByDesc('created_at');
$allItems4 = $allItems4->merge(barbitser_v::all())->sortByDesc('created_at');
$allItems5 = $allItems5->merge(barspecstroi_v::all())->sortByDesc('created_at');
$allItems6 = $allItems6->merge(domtepla_v::all())->sortByDesc('created_at');
$allItems7 = $allItems7->merge(drujbatreid_v::all())->sortByDesc('created_at');
$allItems8 = $allItems8->merge(gosthozvo_v::all())->sortByDesc('created_at');
$allItems9 = $allItems9->merge(laranvifood_v::all())->sortByDesc('created_at');
$allItems10 = $allItems10->merge(ritailscapital_v::all())->sortByDesc('created_at');
$allItems11 = $allItems11->merge(laranviplus_v::all())->sortByDesc('created_at');
$allItems12 = $allItems12->merge(laranvi_v::all())->sortByDesc('created_at');
$allItems13 = $allItems13->merge(mariinsky_v::all())->sortByDesc('created_at');
$allItems14 = $allItems14->merge(newfood::all())->sortByDesc('created_at');
$allItems15 = $allItems15->merge(raduga_v::all())->sortByDesc('created_at');
$allItems16 = $allItems16->merge(ritailaktive_v::all())->sortByDesc('created_at');
$allItems17 = $allItems17->merge(laranvikapital_v::all())->sortByDesc('created_at');
$allItems18 = $allItems18->merge(ritail_v::all())->sortByDesc('created_at');
$allItems19 = $allItems19->merge(softgroup_v::all())->sortByDesc('created_at');
$allItems20 = $allItems20->merge(sovetski_v::all())->sortByDesc('created_at');
$allItems21 = $allItems21->merge(voitikaa_v::all())->sortByDesc('created_at');
$allItems22 = $allItems22->merge(voitikva_v::all())->sortByDesc('created_at');


foreach ($allItems1 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}

foreach ($allItems2 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems3 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems4 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems5 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems6 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems7 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems8 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems9 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems10 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems11 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems12 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems13 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}

foreach ($allItems14 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}	


foreach ($allItems15 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}


foreach ($allItems16 as $vhod ) {
		$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
		array_push($menu,$item);}

		
foreach ($allItems17 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}

	
foreach ($allItems18 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems19 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems20 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems21 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	
foreach ($allItems22 as $vhod ) {
	$item=array('id'=>$vhod->id,'ispolnitel'=>$vhod->ispolnitel,'date'=>$vhod->date,'date_p'=>$vhod->date_p,'sender'=>$vhod->sender,'t_date'=>$vhod->t_date,'type'=>$vhod->type,'recep'=>'---','type'=>$vhod->type, 'content'=>$vhod->content, 't_number'=>$vhod->t_number);
	array_push($menu,$item);}
	

		

			
		$t=0;
		$mail2 = ishod::all();
		$menu2=array();
			foreach ($mail2 as $ishod ) {
				$item2=array('id'=>$ishod->id,'number'=>$ishod->number,'date'=>$ishod->date,'sender'=>$ishod->sender,'content'=>$ishod->content,'recep'=>$ishod->recep,'urn_document'=>$ishod->urn_document);
			array_push($menu2,$item2);
			if($t==2){break;}
			$t++;
			
		}

*/



    	return view('site.Index', array(
		'ishod_spis'=>$menu2,
		'vhod_spis'=>$menu ));
    }
}
