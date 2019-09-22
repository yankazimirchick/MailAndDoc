<div style="margin:0px 50px 0px 50px;">   

</div>
<div class="container">
<a class="btn btn-warning" href="{!!route('vhodAdd')!!}" role="button">Добавить Входящее</a>


 
 
	<table data-toggle="table"
  
  data-pagination="true"
  data-search="true" >
        
              <thead>
                <tr>
                  <th data-sortable="true" data-field="id">#</th>
                  <th data-sortable="true" data-field="numbr">Исполнитель</th>
                  <th data-sortable="true" data-field="date">Дата</th>
                  <th data-sortable="true" data-field="date2">Дата</th>
                  <th data-sortable="true" data-field="type">Тип</th>
                  <th data-sortable="true" data-field="sndr">Отправитель</th>
                  <th data-sortable="true" data-field="pol" >Получатель</th>
                  <th>Содержимое</th>
                  <th>Файл</th>
                  
                  
                  <th>Действие</th>
                   
                </tr>
              </thead>
             @foreach($spisok as $item)
                <tr>
                  
                  <td> 
        {!! Html::link(route('vhodEdit',['item'=>$item->id]),$item->id,['alt'=>$item->item]) !!}</td>
                  <td>{{$item['ispolnitel']}}</td>
                  <td>{{$item['date']}}</td>
                  <td>{{$item['date_p']}}</td>
                  <td>{{$item['type']}}</td>
                  <td>{{$item['sender']}}</td>
                  <td>{{$item['recep']}}</td>
                  <td>{{$item['content']}}</td>
                  
            
                  <td>   <a href={{ asset('vendors/download_File/'.$item['urn_document']) }}>Открыть</a></td>
<td>
                    {!! Form::open(['url'=>route('vhodEdit',['item'=>$item->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        
                    {!! Form::close() !!}
                </td>


               </tr>
                @endforeach

    </table>
 

   
</div>