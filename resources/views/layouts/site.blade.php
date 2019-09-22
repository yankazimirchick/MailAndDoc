<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{  asset('favicon.ico')  }}">

    <title>ДокументоОборот</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendors/bootstrap.min.css')  }}" rel="stylesheet">
    <link href="{{asset('vendors/popper.min.css')}}" >
    <link href="{{asset('vendors/bootstrap-table.min.css')}}" rel="stylesheet" >
    <!-- Custom styles for this template -->
    <link href="{{asset('vendors/jumbotron.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>

  <body>
<header>
   @yield('header')
</header>
    <main role="main">

@yield('content')
     <!-- /container -->

    </main>

    <footer class="text-center bg-dark ">
      <div style="color: #fff;
      font-family: inherit;
      font-weight: 500;
      ">&copy;Куйбышева 42, 2018-{{ date('Y') }} Последнее обновление 07:04:2019г.<br>Текущее время:  {{ date('Y-m-d H:i') }}</div>
    </footer>
  </body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>-->
    
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{asset('vendors/popper.min.js')}}"></script>
    
    <script src="{{asset('vendors/bootstrap.min.js')}}"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    
       
    <script type="text/javascript" src="{{asset('vendors/tableExport.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-table.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-table-locale-all.min.js')}}"></script>
    <script src="{{asset('vendors/extensions/export/bootstrap-table-export.js')}}"></script>
 
</html>
