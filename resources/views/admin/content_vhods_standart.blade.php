<div style="margin:0px 50px 0px 50px;"></div>
<div class="container-fluid">
<div class="row">
 <div class="col-md-3">
  <h1 class="display-5 text-center">Входящие письма</h1>
    <div class="list-group">
<a href="{{route('ritail')}}" class="list-group-item {{ Route::currentRouteNamed('ritail') ? 'active' : '' }}">ЗАО Ритейл</a>
<a href="{{route('ritail_vhods')}}" class="list-group-item {{ Route::currentRouteNamed('ritail_vhods') ? 'active' : '' }} ">ЗАО РитейлАктив</a>
<a href="{{route('ritailscapitals')}}" class="list-group-item {{ Route::currentRouteNamed('ritailscapitals') ? 'active' : '' }}">ЗАО РитейлКапитал</a>
<a href="{{route('barspecstrois')}}" class="list-group-item {{ Route::currentRouteNamed('barspecstrois') ? 'active' : '' }}">ОАО БарановичиСпец</a>
<a href="{{route('drujbatreid')}}" class="list-group-item {{ Route::currentRouteNamed('drujbatreid') ? 'active' : '' }}">ОАО Дружба Трейд</a>
<a href="{{route('anvoy')}}" class="list-group-item {{ Route::currentRouteNamed('anvoy') ? 'active' : '' }}">ООО Анвой</a>
<a href="{{route('domtepla')}}" class="list-group-item {{ Route::currentRouteNamed('domtepla') ? 'active' : '' }}">ООО Дом Тепла</a>
<a href="{{route('laranvikapital')}}" class="list-group-item {{ Route::currentRouteNamed('laranvikapital') ? 'active' : '' }}">ООО Ларанвикапитал</a>
<a href="{{route('laranviplus')}}" class="list-group-item {{ Route::currentRouteNamed('laranviplus') ? 'active' : '' }}">ООО ЛаранвиПлюс</a>
<a href="{{route('raduga')}}" class="list-group-item {{ Route::currentRouteNamed('raduga') ? 'active' : '' }}">Радуга</a>
<a href="{{route('gosthozvo')}}" class="list-group-item {{ Route::currentRouteNamed('gosthozvo') ? 'active' : '' }}">ОАО ГостХозВо</a>
<a href="{{route('sovetski')}}" class="list-group-item {{ Route::currentRouteNamed('sovetski') ? 'active' : '' }}">ОДО Советский</a>
<a href="{{route('barbitser')}}" class="list-group-item  {{ Route::currentRouteNamed('barbitser') ? 'active' : '' }}">ООО Барановичибытсервис</a>
<a href="{{route('laranvi')}}" class="list-group-item {{ Route::currentRouteNamed('laranvi') ? 'active' : '' }}">ООО Ларанви</a>
<a href="{{route('laranvifood')}}" class="list-group-item {{ Route::currentRouteNamed('laranvifood') ? 'active' : '' }}">ООО ЛаранвиФуд</a>
<a href="{{route('mariinsky')}}" class="list-group-item {{ Route::currentRouteNamed('mariinsky') ? 'active' : '' }}">ООО Отель Мариинский</a>
<a href="{{route('softgroup')}}" class="list-group-item {{ Route::currentRouteNamed('softgroup') ? 'active' : '' }}">УП СофтГрупп</a>
<a href="{{route('anvoigroup')}}" class="list-group-item {{ Route::currentRouteNamed('anvoigroup') ? 'active' : '' }}">ЧП АнвойГрупп</a>
<a href="{{route('voitikaa')}}" class="list-group-item {{ Route::currentRouteNamed('voitikaa') ? 'active' : '' }}">ИП Войтик А.А.</a>
<a href="{{route('voitikva')}}" class="list-group-item {{ Route::currentRouteNamed('voitikva') ? 'active' : '' }}">ИП Войтик В.А.</a>
<a href="{{route('newfood')}}" class="list-group-item {{ Route::currentRouteNamed('newfood') ? 'active' : '' }}">ООО НьюФуд</a>
<a href="{{route('anvoifood')}}" class="list-group-item {{ Route::currentRouteNamed('anvoifood') ? 'active' : '' }}">ООО АнвойФуд</a>
</div>
    </div>
   


<div class="col-md-9">



<h2 class="display jumbotron_2 text-center">{!!$title!!}</h2>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if (session('Error'))
    <div class="alert alert-danger">
        {{ session('Error') }}
    </div>
@endif

 
  <div id="toolbar">
  <a class="btn btn-warning" href="{!!$_SERVER['REQUEST_URI']!!}/add" role="button">Новое Входящее <i class="far fa-envelope-open"></i></a>
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
                  <th data-sortable="true" data-field="sndr">Отправитель</th>
                  <th data-sortable="true" data-field="date2">Дата Рег.</th>
                  <th data-sortable="true" data-field="pol" >Тип</th>
                  <th>Содержимое</th>
                  <th data-sortable="true" data-field="date">Дата П.</th>
                  <th data-sortable="true" data-field="numbr">Исполнитель</th>
                  <th>Файл</th>
                   
                </tr>
              </thead>
           
             <tbody>  @foreach($spisok as $item)
                <tr>
                  
                  <td>{{$item['id']}}</td>
                  <td>{{$item['sender']}}</td>
                  <td>{{$item['date_p']}}</td>
                  <td>{{$item['type']}} №{{$item['t_number']}} от {{$item['t_date']}} </td>
                  <td>{{$item['content']}}</td>
                  <td>{{$item['date']}}</td>
                  <td>{{$item['ispolnitel']}}</td>
                  <td><a href={{ asset('vendors/download_File/'.$item['urn_document']) }}>Открыть</a></td>



               </tr>@endforeach
               </tbody>
                

    </table>
  </div>
</div>
   
</div>