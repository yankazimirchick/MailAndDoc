<div style="background-color: #f4f8fd; display: flex;
flex-direction: column;
height: calc(100vh - 62px)">
<div class="ui-15">
				
	<!-- UI Content -->
	<div class="ui-content">
		<div class="text-center " ><h2 style="font-size: 19px;font-weight: 600;">Добавление письма в {{$title}}</h2> </div>
<div class="container-fluid ui-form">
	{!! Form::open(['url' => Route::current()->getName(),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}

	<div class="form-group">
	     {!! Form::label('id', 'Номер Письма:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-10">
		 	{!! Form::text('id', old('id'), ['class' => 'form-control','placeholder'=>'Номер письма']) !!}
		 </div>
    </div>
	<div class="form-group">
	     {!! Form::label('sender', 'Отправитель:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-10">
		 	{!! Form::text('sender', old('sender'), ['class' => 'form-control','placeholder'=>'Введите Отправителя']) !!}
		 </div>
    </div>
	
<div class="form-group">
		
		{!! Form::label('date','Дата ',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-10">
			{!! Form::date('date',old('date'),['class' => 'form-control','placeholder'=>'Дата',])!!}
		</div>	
	</div>

<div class="form-group">
		{!! Form::label('date_p','Дата регистрации',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-10">
			{!! Form::date('date_p',old('date_p'),['class' => 'form-control','placeholder'=>'Дата',])!!}
		</div>	
	</div>


   
    <div class="form-group">
	     {!! Form::label('type', 'Тип отправления:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-10 ">
	     	{{ Form::select('type', array('Письмо' => 'Письмо', 'Бандероль' => 'Бандероль', 'Извещение' => 'Извещение', 'Пакет' => 'Пакет', 'Реклама' => 'Реклама'), null, array('class'=>'form-control','style'=>'' )) }}	 	
		 </div>
    </div>
   
   <div class="form-group">
		{!! Form::label('t_date','Письмо от:',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-10">
			{!! Form::date('t_date',old('t_date'),['class' => 'form-control','placeholder'=>'Письмо от:',])!!}
		</div>
	
	</div>
	<div class="form-group ">
		
		{!! Form::label('t_number','Номер письма',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-10">
			{!! Form::text('t_number',old('t_number'),['class' => 'form-control','placeholder'=>'Номер письма'])!!}
		</div>
	
	</div>


    
    <div class="form-group">
	     {!! Form::label('content', 'Содержание:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-10">
		 	{!! Form::textarea('content', old('content'), ['id'=>'editor','rows'=>'3','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
		 </div>
    </div>
    
<div class="form-group ">
		
		{!! Form::label('ispolnitel','Исполнитель',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-10">
			{!! Form::text('ispolnitel',old('ispolnitel'),['class' => 'form-control','placeholder'=>'Исполнитель'])!!}
		</div>
	
	</div>

    <div class="form-group">
	     {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-10">
		 	{!! Form::file('urn_document', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
		 </div>
    </div>
		<div class="form-group">
                        
				{!! Form::label('email', 'Отправить e-mail:',['class'=>'col-xs-2 control-label']) !!}
				@if(isset($vhod_spis)) 
						<div class="col-xs-8 ">
				{{  Form::select('email', $vhod_spis, null, array('class'=>'form-control','style'=>'' )) }}
						</div>
				@endif              
			 </div>
    
      <div class="form-group ui-input">
	    <div class="">
	      {!! Form::button('Сохранить', ['class' => 'btn btn-green btn-lg btn-block','type'=>'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}
	





	
	<script>
		//CKEDITOR.replace('editor');
	</script>
	
</div>
</div>
					
</div></div>
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