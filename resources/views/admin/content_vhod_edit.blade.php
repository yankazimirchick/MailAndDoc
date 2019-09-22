<div class="wrapper container-fluid">
{!! Form::open(['url' => route('pagesEdit',array('page'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
  
    
    <div class="form-group">
	     {!! Form::label('number', '№ Входящего:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('number', $data['number'], ['class' => 'form-control','placeholder'=>'Введите № Входящего']) !!}
		 </div>
    </div>
    <div class="form-group">
	     {!! Form::label('sender', 'Отправитель:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('sender', $data['sender'], ['class' => 'form-control','placeholder'=>'Введите Отправителя']) !!}
		 </div>
    </div>
    <div class="form-group">
	     {!! Form::label('recep', 'Получатель:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('recep', $data['recep'], ['class' => 'form-control','placeholder'=>'Введите Получателя']) !!}
		 </div>
    </div>

    <div class="form-group">
	     {!! Form::label('date', 'Дата:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::date('date', $data['date'], ['class' => 'form-control','placeholder'=>'Дата']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('date', 'Текст:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('date', $data['content'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
		 </div>
    </div>
    
    <div class="form-group">
    	<a href={{ asset('vendors/download_File/'.$data['urn_document']) }}>Просмотреть Документ</a>
    	<div class="col-xs-offset-2 col-xs-10">
			
    	</div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
		 </div>
    </div>
    

    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}

 <script>
	CKEDITOR.replace( 'editor' );
</script>
</div>