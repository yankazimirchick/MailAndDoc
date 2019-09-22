 <!-- Main jumbotron for a primary marketing message or call to action -->
      
    


 <div class="">

    <div class="container">
            
      <div class="row">
    
   
       
        <div class="col-md-12" style="display: "><!--none-->
                 @if(isset($vhod_spis)) 
          
          
                <table 
                    data-toggle="table"
                    data-show-columns="true"
                    data-locale="ru-RU"
                    data-pagination="true"
                    data-search="true"> 
                  <thead class="thead-dark">
                   <tr>
                      <th>№</th>
                      <th>Исполнитель</th>
                      <th>Дата</th>
                      <th>Дата регистрации</th>
                      <th>Тип</th>
                      <th>Содержание</th>
                         <th>Получатель</th>
                         <th>Отправитель</th>
                      
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($vhod_spis as $item)      
                    <tr>
                            <td>{{$item['sender']}}</td>
                          <td>{{$item['id']}}</td>
                          <td>{{$item['ispolnitel']}}</td>
                          <td>{{$item['date']}}</td>
                          <td>{{$item['date_p']}}</td>
                          <td>{{$item['type']}}</td>
                          <td>{{$item['content']}}</td>
                              <td>{{$item['recep']}}</td>
                   </tr>
                    @endforeach
                  </tbody>
                </table>
                @endif
                
            <!-- Example row of columns -->
            
    
            <hr>
            </div>
    </div>
    </div>
          </div>
    
              @if(isset($vhod_spis)) 
          <div class="container" style="display:none ">
              <h1 class="display-3">Все письма</h1>
                <table class="table">
      
     
                  <thead>
                    <tr>
                      <th data-sortable="true" data-field="id">№</th>
                      <th data-sortable="true" data-field="sndr">Отправитель</th>
                      <th data-sortable="true" data-field="date2">Дата Рег.</th>
                      
                      <th data-sortable="true" data-field="pol" >Тип</th>
                      <th>Содержимое</th>
                      <th data-sortable="true" data-field="date">Дата П.</th>
                      <th data-sortable="true" data-field="numbr">Исполнитель</th>
                      
                      
                      
                    
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($vhod_spis as $item)      
                    <tr>
                      <td>{{$item['id']}}</td>
                      <td>{{$item['sender']}}</td>
                      <td>{{$item['date_p']}}</td>
                      <td>{{$item['type']}} №{{$item['t_number']}} от {{$item['t_date']}} </td>
                      <td>{{$item['content']}}</td>
                      <td>{{$item['date']}}</td>
                      <td>{{$item['ispolnitel']}}</td>
                    
                      
                          
                         
                   </tr>
                    @endforeach
                  </tbody>
                </table>
                @endif
            <hr></div> 