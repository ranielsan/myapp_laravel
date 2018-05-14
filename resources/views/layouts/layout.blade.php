
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Post Example</title>

    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet"> 
  </head>

  <body>

    <header>
      @include('layouts.nav')
    </header>
    <div class=container>
   		@yield('content')
	</div>
    <footer class="text-muted">
      @include('layouts.footer')
    </footer>
  </body>
</html>
