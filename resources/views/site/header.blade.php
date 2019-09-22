 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="{{route('home')}}">ДокументоОборот</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
	


      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        
		
		

        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Главная <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="{{route('vhods_all')}}">Все Входящие </a>            
          </li>
          <li class="nav-item active">
            
          </li>
         
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
          
          <a class="nav-link" href="{{route('logout')}}">Выход <span class="sr-only">(current)</span></a>
        </form>
      </div>
    </nav>