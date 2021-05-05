<html>

<head>

    <link rel = "stylesheet" type="text/css" href="{{asset('/public/css.bootstrap.css)"/>
    <meta name =viewport content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>  

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<Body>


<nav class = "navbar navbar-expand-lg navbar-light">

    <div class="collapse navbar-collapse" id = "navbarNavAltMarkup">

        <ul class = "navbar-nav" style="float:right;">

            <li class = " nav-item">
             <a class=" nav-link" href="Hotels">Hotel </a>
             </li>

             
            <li class = " nav-item">
             <a class=" nav-link" href="HotelRate">Hotel Rate</a>
             </li>

             
            <li class = " nav-item">
             <a class=" nav-link" href="user">User </a>
             </li>
        </ul>


    <div>

        
</nav>

@yield('body')

</body>
