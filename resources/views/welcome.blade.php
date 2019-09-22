<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
               
                
                
                






            <form method="post" action="{{ action('defctrl@send') }}" accept-charset="UTF-8">
            <form action="{{ action('defctrl@send') }}" method="post">
                



                 @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                 </div>
                 @endif
                    {!! Form::open(['route'=>'home2']) !!}
                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::label('Отправитель:') !!}
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Отправитель']) !!}
                 <span class="text-danger">{{ $errors->first('name') }}</span>
                 </div>
                   
                 <div class="form-group">
                        
                {!! Form::label('email', 'Получатель:',['class'=>'col-xs-2 control-label']) !!}
                @if(isset($vhod_spis)) 
                    <div class="col-xs-8 ">
                {{  Form::select('email', $vhod_spis, null, array('class'=>'form-control','style'=>'' )) }}
                    </div>
                @endif              
               </div>
                 
                 <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                {!! Form::label('Сообщение:') !!}
                {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                 <span class="text-danger">{{ $errors->first('message') }}</span>
                 </div>
                 <div class="form-group">
                 <button class="btn btn-success">Contact US!</button>
                 </div>
                {!! Form::close() !!}
                 </div>

            <div class="content">


                    
        


                <div class="title m-b-md">
                    ОШИБКА.<br>Такое тоже случается                                       
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
