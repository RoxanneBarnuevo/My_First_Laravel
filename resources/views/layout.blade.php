<html>
    <head>
        <title>@yield('title')- Page</title>
        <link rel ='stylesheet' type='text/css' href='<?php echo asset('storage/css/style.css')?>'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       

    <body>
    <nav class="navbar navbar-expand-lg container-fluid sticky-top shadow-sm bg-primary" id="navbar">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar"> <
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
             
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('employees-list')}}">Employees</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('user-list')}}">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login')}}">Login</a>
              </li>
            </ul>
</nav>
        </div>
        @yield('content')
    </body>
</html>