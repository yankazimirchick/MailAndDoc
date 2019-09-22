<div class="container">

	{!! Form::open(['url' => route('ishodAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		
		{!! Form::label('number','Исполнитель',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('number',old('number'),['class' => 'form-control','placeholder'=>'Исполнитель'])!!}
		</div>
	
	</div>
<div class="form-group">
		
		{!! Form::label('date','Дата',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::date('date',old('date'),['class' => 'form-control','placeholder'=>'Дата',])!!}
		</div>
	
	</div>


<div class="form-group">
	     {!! Form::label('sender', 'Отправитель:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('sender', old('sender'), ['class' => 'form-control','placeholder'=>'Введите Отправителя']) !!}
		 </div>
    </div>
    
    
    <div class="form-group">
	     {!! Form::label('recep', 'Получатель:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('recep', old('recep'), ['class' => 'form-control','placeholder'=>'Введите Получателя']) !!}
		 </div>
    </div>
   
    

	<div class="form-group">
	     {!! Form::label('content', 'Содержание',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('content', old('content'), ['class' => 'form-control','placeholder'=>'Содержание']) !!}
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
		CKEDITOR.replace('editor');
	</script>
	
</div>
