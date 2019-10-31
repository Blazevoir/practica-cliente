<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Laravel</title>
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/jumbotron.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/own.css') }}" rel="stylesheet">
    </head>
    <body>

        <main role="main">
           
            <div class="container">
                
                <!-- contenido a rellenar -->
                @yield('contenido')
            </div>
        </main>
        <footer class="container">
            <p>&copy; Company 2017-2019</p>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="{{ url("assets/js/jquery-3.3.1.slim.min.js")}}"><\/script>')</script>  <!-- problema solucionado-->
        <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>  <!-- problema solucionado-->

    </body>
</html>