<div style="margin:0px 50px 0px 50px;">   

</div>
<div class="container-fluid">

<div class="row">
 <div class="col-md-3">
  <h1 class="display-5 text-center">Исходящие письма</h1>
    <div class="list-group">
<a href="{{route('ritail_i')}}" class="list-group-item {{ Route::currentRouteNamed('ritail_i') ? 'active' : '' }}">ЗАО Ритейл</a>
<a href="{{route('ritail_vhods_i')}}" class="list-group-item {{ Route::currentRouteNamed('ritail_vhods_i') ? 'active' : '' }} ">ЗАО РитейлАктив</a>
<a href="{{route('ritailscapitals_i')}}" class="list-group-item {{ Route::currentRouteNamed('ritailscapitals_i') ? 'active' : '' }}">ЗАО РитейлКапитал</a>
<a href="{{route('barspecstrois_i')}}" class="list-group-item {{ Route::currentRouteNamed('barspecstrois_i') ? 'active' : '' }}">ОАО БарановичиСпец</a>
<a href="{{route('drujbatreid_i')}}" class="list-group-item {{ Route::currentRouteNamed('drujbatreid_i') ? 'active' : '' }}">ОАО Дружба Трейд</a>
<a href="{{route('anvoy_i')}}" class="list-group-item {{ Route::currentRouteNamed('anvoy_i') ? 'active' : '' }}">ООО Анвой</a>
<a href="{{route('domtepla_i')}}" class="list-group-item {{ Route::currentRouteNamed('domtepla_i') ? 'active' : '' }}">ООО Дом Тепла</a>
<a href="{{route('laranvikapital_i')}}" class="list-group-item {{ Route::currentRouteNamed('laranvikapital_i') ? 'active' : '' }}">ООО Ларанвикапитал</a>
<a href="{{route('laranviplus_i')}}" class="list-group-item {{ Route::currentRouteNamed('laranviplus_i') ? 'active' : '' }}">ООО ЛаранвиПлюс</a>
<a href="{{route('raduga_i')}}" class="list-group-item {{ Route::currentRouteNamed('raduga_i') ? 'active' : '' }}">Радуга</a>
<a href="{{route('gosthozvo_i')}}" class="list-group-item {{ Route::currentRouteNamed('gosthozvo_i') ? 'active' : '' }}">ОАО ГостХозВо</a>
<a href="{{route('sovetski_i')}}" class="list-group-item {{ Route::currentRouteNamed('sovetski_i') ? 'active' : '' }}">ОДО Советский</a>
<a href="{{route('barbitser_i')}}" class="list-group-item  {{ Route::currentRouteNamed('barbitser_i') ? 'active' : '' }}">ООО Барановичибытсервис</a>
<a href="{{route('laranvi_i')}}" class="list-group-item {{ Route::currentRouteNamed('laranvi_i') ? 'active' : '' }}">ООО Ларанви</a>
<a href="{{route('laranvifood_i')}}" class="list-group-item {{ Route::currentRouteNamed('laranvifood_i') ? 'active' : '' }}">ООО ЛаранвиФуд</a>
<a href="{{route('mariinsky_i')}}" class="list-group-item {{ Route::currentRouteNamed('mariinsky_i') ? 'active' : '' }}">ООО Отель Мариинский</a>
<a href="{{route('softgroup_i')}}" class="list-group-item {{ Route::currentRouteNamed('softgroup_i') ? 'active' : '' }}">УП СофтГрупп</a>
<a href="{{route('anvoigroup_i')}}" class="list-group-item {{ Route::currentRouteNamed('anvoigroup_i') ? 'active' : '' }}">ЧП АнвойГрупп</a>
<a href="{{route('voitikaa_i')}}" class="list-group-item {{ Route::currentRouteNamed('voitikaa_i') ? 'active' : '' }}">ИП Войтик А.А.</a>
<a href="{{route('voitikva_i')}}" class="list-group-item {{ Route::currentRouteNamed('voitikva_i') ? 'active' : '' }}">ИП Войтик В.А.</a>
<a href="{{route('newfood_i')}}" class="list-group-item {{ Route::currentRouteNamed('newfood_i') ? 'active' : '' }}">ООО НьюФуд</a>
<a href="{{route('anvoifood_i')}}" class="list-group-item {{ Route::currentRouteNamed('anvoifood_i') ? 'active' : '' }}">ООО АнвойФуд</a>
</div>
    </div>
   


<div class="col-md-9">

<h2 class="display jumbotron_2 text-center">{!!$title!!}</h2>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
 
  <div id="toolbar">
  <a class="btn btn-warning" href="{!!$_SERVER['REQUEST_URI']!!}/add" role="button">Новое Исходящее <i class="far fa-envelope"></i></a>
</div>
  <table 
  data-toolbar="#toolbar"
  data-toggle="table"
  data-show-columns="true"
  data-toggle="export"
  data-pagination="true"
  data-search="true" 
data-locale="ru-RU"
  >
       
              <thead>
                <tr>
                  
                  <th data-sortable="true" data-field="id">№</th>
                  <th data-sortable="true" data-field="recipient" >Получатель</th>
                  
                  <th data-sortable="true" data-field="pol" >Тип</th>
                  <th>Содержимое</th>
                  <th data-sortable="true" data-field="date2">Дата Рег.</th>
                  <th data-sortable="true" data-field="numbr">Исполнитель</th>
                  <th>Файл</th>

                </tr>
              </thead>
           
             <tbody>  @foreach($spisok as $item)
                <tr>
                  
                  <td>{{$item['id']}} </td>
                  <td>{{$item['recipient']}} </td>
                  <td>{{$item['type']}}</td>
                  <td>{{$item['content']}}</td>
                  <td>{{$item['date']}}</td>
                  <td>{{$item['ispolnitel']}}</td>
                  <td>   <a href={{ asset('vendors/download_File/'.$item['urn_document']) }}>Открыть</a></td>

               </tr>
               @endforeach
               </tbody>
                

    </table>
 </div>
</div>
   
</div>