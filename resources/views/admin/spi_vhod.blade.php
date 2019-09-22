@extends('list.app')
@section('list')
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
</div>
@endsection




