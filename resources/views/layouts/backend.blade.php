<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{  asset('backend/css/mdb.min.css') }}" rel="stylesheet"   type="text/css" />
       
        <link href="{{  asset('backend/css/mycss.css') }}" rel="stylesheet"   type="text/css" />
    </head>
    <body>
   
     
     
     @yield('content')
 

   


   
        <!-- Bootstrap core JS-->
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

        <!-- Core theme JS-->
        <script type="text/javascript"  src="{{ asset('backend/js/myjs.js') }}"></script>
    </body>
</html>
