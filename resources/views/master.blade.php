<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cabify</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:100,700" rel="stylesheet" type="text/css">

    <!--Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>

    <!--CSS -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">

  </head>

  <body>
    <div class="container">
    @section('title')
      <div class="row">
        <div class="logo">
           <img src="http://prospects.cabify.zarego.com/img/logo.png" border="0">
         </div>
      </div>
    @show

      <div class="row">
        @yield('content')
        @yield('links')
        @yield('footer')
      </div>
    </div>
  </body>

</html>
