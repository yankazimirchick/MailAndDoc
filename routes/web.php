<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('login', '\App\Http\Controllers\Auth\LoginController@login');
//Route::get('tasks', 'defctrl@index');
//Route::get('/', 'defctrl@index')->name('index');
Route::get('/cat', 'defctrl@cat');
Route::get('/cat', 'defctrl@cat');
//Route::post('tasks/store', 'defctrl@store')->name('store');
Route::group(['middleware'=>'web'],function(){

	//Route::get('/home', 'defctrl@store')->name('home');
	//Route::Post('/home2', 'defctrl@send')->name('home2');
	
	

	Route::match(['get','post'], '/', ['uses'=>'IndexController@execute','as'=>'home']);
	Route::match(['get','post'], '/vhods_all', ['uses'=>'vhods_allController@execute','as'=>'vhods_all']);
	Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);
	Route::auth();


});
//admin/service
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
	//admin 
	Route::get('/',function(){
		if(view()->exists('admin.index')){
			$data=['title'=>'Панель Администратора'];
					return view ('admin.index',$data);
		}

	});
	
	Route::match(['get','post'], '/home', ['uses'=>'defctrl@store','as'=>'home']);
	Route::match(['get','post'], '/home2', ['uses'=>'defctrl@send','as'=>'home2']);

//ЗАО РИТЕЙЛ
Route::group(['prefix'=>'ritail_v'], function(){
	Route::get('/',['uses'=>'ZAO_RitailController@getInbox','as'=>'ritail']);
	Route::match(['get','post'], '/add', ['uses'=>'ZAO_RitailController@addInbox']);});
Route::group(['prefix'=>'ritail_i'], function(){
	Route::get('/',['uses'=>'ZAO_RitailController@getOutgoing','as'=>'ritail_i']);
	Route::match(['get','post'], '/add', ['uses'=>'ZAO_RitailController@addOutgoing']);});
//ЗАО РИТЕЙЛАКТИВ
Route::group(['prefix'=>'ritailaktive_v'], function(){
	Route::get('/',['uses'=>'ZAO_RitailAktiveController@getInbox','as'=>'ritail_vhods']);
	Route::match(['get','post'], '/add', ['uses'=>'ZAO_RitailAktiveController@addInbox']);});
Route::group(['prefix'=>'ritailaktive_i'], function(){
	Route::get('/',['uses'=>'ZAO_RitailAktiveController@getOutgoing','as'=>'ritail_vhods_i']);
	Route::match(['get','post'], '/add', ['uses'=>'ZAO_RitailAktiveController@addOutgoing']);});
//РитейлКапитал
Route::group(['prefix'=>'ritailscapital'], function(){
	Route::get('/',['uses'=>'ZAO_RitailCapitalController@getInbox','as'=>'ritailscapitals']);
	Route::match(['get','post'], '/add', ['uses'=>'ZAO_RitailCapitalController@addInbox']);});
Route::group(['prefix'=>'ritailscapitals_i'], function(){
	Route::get('/',['uses'=>'ZAO_RitailCapitalController@getOutgoing','as'=>'ritailscapitals_i']);
	Route::match(['get','post'], '/add', ['uses'=>'ZAO_RitailCapitalController@addOutgoing']);});
//БАРАНОВИЧИСПЕЦСТРОЙ
Route::group(['prefix'=>'barspecstrois'], function(){
	Route::get('/',['uses'=>'OAO_BarSpecStroiController@getInbox','as'=>'barspecstrois']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_BarSpecStroiController@addInbox']);});
Route::group(['prefix'=>'barspecstrois_i'], function(){
	Route::get('/',['uses'=>'OAO_BarSpecStroiController@getOutgoing','as'=>'barspecstrois_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_BarSpecStroiController@addOutgoing']);});
//ДружбаТрейд
Route::group(['prefix'=>'drujbatreid'], function(){
	Route::get('/',['uses'=>'OAO_DrujbaTreidСontroller@getInbox','as'=>'drujbatreid']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_DrujbaTreidСontroller@addInbox']);});
Route::group(['prefix'=>'drujbatreid_i'], function(){
	Route::get('/',['uses'=>'OAO_DrujbaTreidСontroller@getOutgoing','as'=>'drujbatreid_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_DrujbaTreidСontroller@addOutgoing']);});
//Анвой
Route::group(['prefix'=>'anvoy'], function(){
	Route::get('/',['uses'=>'OOO_AnvoiController@getInbox','as'=>'anvoy']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_AnvoiController@addInbox']);
	Route::match(['get','post','delete'],'/edit/{anvoy}',['uses'=>'anvoyEditController@execute']);});
Route::group(['prefix'=>'anvoy_i'], function(){
	Route::get('/',['uses'=>'OOO_AnvoiController@getOutgoing','as'=>'anvoy_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_AnvoiController@addOutgoing']);
	Route::match(['get','post','delete'],'/edit/{anvoy}',['uses'=>'anvoyEditController@execute']);});
//Дом Тeпла
Route::group(['prefix'=>'domtepla'], function(){
	Route::get('/',['uses'=>'OOO_DomTeplaController@getInbox','as'=>'domtepla']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_DomTeplaController@addInbox']);});
Route::group(['prefix'=>'domtepla_i'], function(){
	Route::get('/',['uses'=>'OOO_DomTeplaController@getOutgoing','as'=>'domtepla_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_DomTeplaController@addOutgoing']);});
//ЛаранвиКапитал
Route::group(['prefix'=>'laranvikapitals'], function(){
	Route::get('/',['uses'=>'OOO_LaranviCapitalController@getInbox','as'=>'laranvikapital']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_LaranviCapitalController@addInbox']);});			
Route::group(['prefix'=>'laranvikapitals_i'], function(){
	Route::get('/',['uses'=>'OOO_LaranviCapitalController@getOutgoing','as'=>'laranvikapital_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_LaranviCapitalController@addOutgoing']);});
//ЛаранвиПлюс
Route::group(['prefix'=>'laranviplus'], function(){
	Route::get('/',['uses'=>'OOO_LaranviPlusController@getInbox','as'=>'laranviplus']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_LaranviPlusController@addInbox']);});
Route::group(['prefix'=>'laranviplus_i'], function(){
	Route::get('/',['uses'=>'OOO_LaranviPlusController@getOutgoing','as'=>'laranviplus_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_LaranviPlusController@addOutgoing']);});
//Радуга
Route::group(['prefix'=>'raduga'], function(){
	Route::get('/',['uses'=>'OOO_RadugaController@getInbox','as'=>'raduga']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_RadugaController@addInbox']);});
Route::group(['prefix'=>'raduga_i'], function(){
	Route::get('/',['uses'=>'OOO_RadugaController@getOutgoing','as'=>'raduga_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_RadugaController@addOutgoing']);});
//Гостиничное Хозяйство
Route::group(['prefix'=>'gosthozvo'], function(){
	Route::get('/',['uses'=>'OAO_GostHozVoController@getInbox','as'=>'gosthozvo']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_GostHozVoController@addInbox']);});
Route::group(['prefix'=>'gosthozvo_i'], function(){
	Route::get('/',['uses'=>'OAO_GostHozVoController@getOutgoing','as'=>'gosthozvo_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_GostHozVoController@addOutgoing']);});
//Советский
Route::group(['prefix'=>'sovetski'], function(){
	Route::get('/',['uses'=>'ODO_SovetskiController@getInbox','as'=>'sovetski']);
	Route::match(['get','post'], '/add', ['uses'=>'ODO_SovetskiController@addInbox']);
	Route::match(['get','post','delete'],'/edit/{sovetski}',['uses'=>'sovetskiEditController@execute']);});
Route::group(['prefix'=>'sovetski_i'], function(){
	Route::get('/',['uses'=>'ODO_SovetskiController@getOutgoing','as'=>'sovetski_i']);
	Route::match(['get','post'], '/add', ['uses'=>'ODO_SovetskiController@addOutgoing']);
	Route::match(['get','post','delete'],'/edit/{sovetski}',['uses'=>'sovetskiEditController@execute']);});
//БарановичиБытСервис
Route::group(['prefix'=>'barbitser'], function(){
	Route::get('/',['uses'=>'OOO_BarBitServisController@getInbox','as'=>'barbitser']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_BarBitServisController@addInbox']);});
Route::group(['prefix'=>'barbitser_i'], function(){
	Route::get('/',['uses'=>'OOO_BarBitServisController@getOutgoing','as'=>'barbitser_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_BarBitServisController@addOutgoing']);});
//Ларанви
Route::group(['prefix'=>'laranvi'], function(){
	Route::get('/',['uses'=>'OAO_LaranviController@getInbox','as'=>'laranvi']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_LaranviController@addInbox']);});
Route::group(['prefix'=>'laranvi_i'], function(){
	Route::get('/',['uses'=>'OAO_LaranviController@getOutgoing','as'=>'laranvi_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_LaranviController@addOutgoing']);});
//ЛаранвиФуд
Route::group(['prefix'=>'laranvifood'], function(){
	Route::get('/',['uses'=>'OAO_LaranviFoodController@getInbox','as'=>'laranvifood']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_LaranviFoodController@addInbox']);});
Route::group(['prefix'=>'laranvifood_i_i'], function(){
	Route::get('/',['uses'=>'OAO_LaranviFoodController@getOutgoing','as'=>'laranvifood_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OAO_LaranviFoodController@addOutgoing']);});
//Мариинский
Route::group(['prefix'=>'mariinsky'], function(){
	Route::get('/',['uses'=>'OOO_MariinskiController@getInbox','as'=>'mariinsky']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_MariinskiController@addInbox']);
	Route::match(['get','post','delete'],'/edit/{mariinsky}',['uses'=>'mariinskyEditController@execute']);});
Route::group(['prefix'=>'mariinsky_i'], function(){
	Route::get('/',['uses'=>'OOO_MariinskiController@getOutgoing','as'=>'mariinsky_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_MariinskiController@addOutgoing']);
	Route::match(['get','post','delete'],'/edit/{mariinsky}',['uses'=>'mariinskyEditController@execute']);});
//СофтГрупп
Route::group(['prefix'=>'softgroup'], function(){
	Route::get('/',['uses'=>'UP_SoftGroupController@getInbox','as'=>'softgroup']);
	Route::match(['get','post'], '/add', ['uses'=>'UP_SoftGroupController@addInbox']);});
Route::group(['prefix'=>'softgroup_i'], function(){
		Route::get('/',['uses'=>'UP_SoftGroupController@getOutgoing','as'=>'softgroup_i']);
		Route::match(['get','post'], '/add', ['uses'=>'UP_SoftGroupController@addOutgoing']);});
//АнвойГрупп
Route::group(['prefix'=>'anvoigroup'], function(){
	Route::get('/',['uses'=>'CHP_AnvoiGroupController@getInbox','as'=>'anvoigroup']);
	Route::match(['get','post'], '/add', ['uses'=>'CHP_AnvoiGroupController@addInbox']);});
Route::group(['prefix'=>'anvoigroup_i'], function(){
	Route::get('/',['uses'=>'CHP_AnvoiGroupController@getOutgoing','as'=>'anvoigroup_i']);
	Route::match(['get','post'], '/add', ['uses'=>'CHP_AnvoiGroupController@addOutgoing']);});
//Войтик АА
Route::group(['prefix'=>'voitikaa'], function(){
	Route::get('/',['uses'=>'IP_VoitikAAController@getInbox','as'=>'voitikaa']);
	Route::match(['get','post'], '/add', ['uses'=>'IP_VoitikAAController@addInbox']);
	Route::match(['get','post','delete'],'/edit/{voitikaa}',['uses'=>'voitikaaEditController@execute']);});
Route::group(['prefix'=>'voitikaa_i'], function(){
	Route::get('/',['uses'=>'IP_VoitikAAController@getOutgoing','as'=>'voitikaa_i']);
	Route::match(['get','post'], '/add', ['uses'=>'IP_VoitikAAController@addOutgoing']);
	Route::match(['get','post','delete'],'/edit/{voitikaa}',['uses'=>'IP_VoitikAAController@execute']);});
//Войтик ВА
Route::group(['prefix'=>'voitikva'], function(){
	Route::get('/',['uses'=>'IP_VoitikVAController@getInbox','as'=>'voitikva']);
	Route::match(['get','post'], '/add', ['uses'=>'IP_VoitikVAController@addInbox']);
	Route::match(['get','post','delete'],'/edit/{voitikva}',['uses'=>'voitikvaEditController@execute']);});
Route::group(['prefix'=>'voitikva_i'], function(){
	Route::get('/',['uses'=>'IP_VoitikVAController@getOutgoing','as'=>'voitikva_i']);
	Route::match(['get','post'], '/add', ['uses'=>'IP_VoitikVAController@addOutgoing']);
	Route::match(['get','post','delete'],'/edit/{voitikva}',['uses'=>'voitikvaEditController@execute']);});
//НьюФуд
Route::group(['prefix'=>'newfood'], function(){
	Route::get('/',['uses'=>'OOO_NewFoodController@getInbox','as'=>'newfood']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_NewFoodController@addInbox']);});
Route::group(['prefix'=>'newfood_i'], function(){
	Route::get('/',['uses'=>'OOO_NewFoodController@getOutgoing','as'=>'newfood_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_NewFoodController@addOutgoing']);
	Route::match(['get','post','delete'],'/edit/{voitikva}',['uses'=>'voitikvaEditController@execute']);});
//АнвойФуд
Route::group(['prefix'=>'anvoifood'], function(){
	Route::get('/',['uses'=>'OOO_AnvoiFoodController@getInbox','as'=>'anvoifood']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_AnvoiFoodController@addInbox']);});
Route::group(['prefix'=>'anvoifood_i'], function(){
	Route::get('/',['uses'=>'OOO_AnvoiFoodController@getOutgoing','as'=>'anvoifood_i']);
	Route::match(['get','post'], '/add', ['uses'=>'OOO_AnvoiFoodController@addOutgoing']);
	Route::match(['get','post','delete'],'/edit/{voitikva}',['uses'=>'voitikvaEditController@execute']);});


		//admin/pages
Route::group(['prefix'=>'pages'], function(){
		//admin/pages
				Route::get('/',['uses'=>'PagesController@execute','as'=>'pages']);
		//admin/pages/add
				Route::match(['get','post'], '/add', ['uses'=>'PagesAddController@execute','as'=>'pagesAdd']);
		//admin/edit/2
				Route::match(['get','post','delete'],'/edit/{page}',['uses=>PageEditController','as'=>'pagesEdit']);});
Route::group(['prefix'=>'portfolios'], function(){
				Route::get('/',['uses'=>'PortfolioController@execute','as'=>'portfolio']);
				Route::match(['get','post'], '/add', ['uses'=>'PortfolioAddController@execute','as'=>'portfolioAdd']);
				Route::match(['get','post','delete'],'/edit/{portfolio}',['uses=>PortfolioEditController','as'=>'portfolioEdit']);});
Route::group(['prefix'=>'services'], function(){
				Route::get('/',['uses'=>'ServiceController@execute','as'=>'portfolio']);
				Route::match(['get','post'], '/add', ['uses'=>'ServiceAddController@execute','as'=>'serviceAdd']);
				Route::match(['get','post','delete'],'/edit/{service}',['uses=>ServiceEditController','as'=>'serviceEdit']);});
Route::group(['prefix'=>'vhods'], function(){
				Route::get('/',['uses'=>'VhodController@execute','as'=>'vhods']);
				Route::get('/',['uses'=>'VhodController@execute','as'=>'vhods']);
				Route::match(['get','post'], '/add', ['uses'=>'VhodAddController@execute','as'=>'vhodAdd']);
				Route::match(['get','post','delete'],'/edit/{vhod}',['uses'=>'VhodEditController@execute','as'=>'vhodEdit']);});	
Route::group(['prefix'=>'ishods'], function(){
				Route::get('/',['uses'=>'Ishodcontroller@execute','as'=>'ishods']);
				Route::match(['get','post'], '/add', ['uses'=>'IshodAddcontroller@execute','as'=>'ishodAdd']);
				Route::match(['get','post','delete'],'/edit/{ishod}',['uses'=>'IshodEditController@execute','as'=>'ishodEdit']);});



//ИСХОДЯЩИЕ


});

