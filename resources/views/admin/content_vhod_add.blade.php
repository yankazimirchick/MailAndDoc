<div class="container">

	{!! Form::open(['url' => route('vhodAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
<div class="form-group">
	     {!! Form::label('recep', 'Организация:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8 ">
	     	{{ Form::select('recep', array('АнвойГрупп' => 'АнвойГрупп', 'Барановичиспецстрой ' => 'Барановичиспецстрой ','ООО ЛаранВи' => 'ООО ЛаранВи', 'ООО "АнвойМаркет"' => 'ООО "АнвойМаркет"'), null, array('class'=>'form-control','style'=>'' )) }}
		 	
		 </div>
    </div>

<div class="form-group">
	     {!! Form::label('sender', 'Отправитель:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('sender', old('sender'), ['class' => 'form-control','placeholder'=>'Введите Отправителя']) !!}
		 </div>
    </div>
	<div class="form-group">
		
		{!! Form::label('ispolnitel','Исполнитель',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('ispolnitel',old('ispolnitel'),['class' => 'form-control','placeholder'=>'Исполнитель'])!!}
		</div>
	
	</div>

<div class="form-group">
		
		{!! Form::label('date','Дата',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::date('date',old('date'),['class' => 'form-control','placeholder'=>'Дата',])!!}
		</div>
	</div>
	<div class="form-group">
		
		{!! Form::label('date_p','Дата',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::date('date_p',old('date_p'),['class' => 'form-control','placeholder'=>'Дата',])!!}
		</div>
	</div>


<div class="form-group">
	     {!! Form::label('type', 'Тип отправления:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8 ">
	     	{{ Form::select('type', array('Письмо' => 'Письмо', 'Бандероль' => 'Бандероль', 'Извещение' => 'Извещение', 'Пакет' => 'Пакет', 'Реклама' => 'Реклама'), null, array('class'=>'form-control','style'=>'' )) }}
		 	
		 </div>
    </div>
     
    <div class="form-group">
	     {!! Form::label('content', 'Содержание:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('content', old('content'), ['id'=>'editor','rows'=>'3','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('urn_document', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
		 </div>
    </div>
    
    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}
	
	<script>
		//CKEDITOR.replace('editor');
	</script>
	
</div>
