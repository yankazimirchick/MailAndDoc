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
	     <div class="col-xs-8">
		 	{!! Form::text('id', old('id'), ['class' => 'form-control','placeholder'=>'Заполняется автоматически, если не указывать!']) !!}
		 </div>		 	
		</div>	
	
<div class="form-group">
		
		{!! Form::label('date','Дата ',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::date('date',old('date'),['class' => 'form-control','placeholder'=>'Дата',])!!}
		</div>
	
	</div>


<div class="form-group ">
		
		{!! Form::label('recipient','Получатель',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('recipient',old('recipient'),['class' => 'form-control','placeholder'=>'Получатель'])!!}
		</div>
	
	</div>

   
    <div class="form-group">
	     {!! Form::label('type', 'Тип отправления:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8 ">
	     	{{ Form::select('type', array('Письмо' => 'Письмо', 'Письмо заказное' => 'Письмо заказное', 'Письмо с увед.' => 'Письмо с увед.', 'Пакет' => 'Пакет', 'Реклама' => 'Реклама'), null, array('class'=>'form-control','style'=>'' )) }}
		 	
		 </div>
    </div>
   
	


    
    <div class="form-group">
	     {!! Form::label('content', 'Содержание:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('content', old('content'), ['id'=>'editor','rows'=>'3','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
		 </div>
    </div>
    
<div class="form-group ">
		
		{!! Form::label('ispolnitel','Исполнитель',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('ispolnitel',old('ispolnitel'),['class' => 'form-control','placeholder'=>'Исполнитель'])!!}
		</div>
	
	</div>

    <div class="form-group">
	     {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('urn_document', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
		 </div>
    </div>
    
    
      <div class="form-group">
	    <div class="">
	      {!! Form::button('Сохранить', ['class' => 'btn btn-green btn-lg btn-block','type'=>'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}
	
	<script>
		//CKEDITOR.replace('editor');
	</script>
	
</div></div></div></div></div>


