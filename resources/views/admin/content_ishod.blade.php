<div style="margin:0px 50px 0px 50px;">   

   
</div>
<div class="container">
  
<a  class="btn btn-warning" href="{!!route('ishodAdd')!!}" role="button">Добавить исходящее</a>



 
	<table data-toggle="table"
  
  data-pagination="true"
  data-search="true" >
        
              <thead>
                <tr>
                  <th>#</th>
                  <th data-sortable="true" data-field="numbr">Исполнитель</th>
                  <th data-sortable="true" data-field="time">Дата</th>
                  <th>Получатель</th>
                  <th data-sortable="true" data-field="sender">Отправитель</th>
                  <th>Содержание</th>
                  <th>Файл</th>
                  <th>Действие</th>

                   
                </tr>
              </thead>
             @foreach($spisok as $item)
        
       
                <tr>
                  
                  <td>
               {!! Html::link(route('ishodEdit',['item'=>$item->id]),$item->id,['alt'=>$item->item])!!} 
       

      </td>

                  <td>{{$item['number']}}</td>
                  <td>{{$item['date']}}</td>
                  <td>{{$item['recep']}}</td>
                  <td>{{$item['sender']}}</td>
                  <td>{{$item['content']}}</td>
               
                  <td>  

                   <a href={{ asset('vendors/download_File/'.$item['urn_document']) }}>Открыть</a></td>
<td>
                    {!! Form::open(['url'=>route('ishodEdit',['item'=>$item->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}
                    {{ method_field('DELETE') }}
                    {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                    {!! Form::close() !!}

                </td>


               </tr>
                @endforeach

    </table>
 
</div>
