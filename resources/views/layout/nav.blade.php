<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="@yield('css')">
    <title> @yield('title') </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff" style="padding: 16px">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="" width="250" height="60">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <!-- dropwdown -->
          <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: center">
            <ul class="navbar-nav" id="list">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Drugs A-Z &nbsp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">&nbsp Pill Identifier &nbsp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">&nbsp Interaction Checker &nbsp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">&nbsp New Drugs &nbsp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">&nbsp Pro Edition &nbsp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">&nbsp More &nbsp</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/register">&nbsp &nbsp &nbsp Register</a>
              </li>   
              <li class="nav-item">
                <form class="container-fluid justify-content-start">
                  <button class="btn btn-outline-success me-2" type="button">Sign In</button>
                </form>
              </li>
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu show" aria-labelledby="navbarDropdown" >
                  <li><a class="dropdown-item" href="#">My Account</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item">Log Out</button></form>
                  </li>
                </ul>
              </li>
              @endauth
            </ul>
            <br><br>
          </div>
          
        </div>
     
    </nav>
    <div class="d-flex p-2 bd-highlight" style="background-color: #ffffff"> <br></div>
    @yield('konten')

    <div class="container pb-0 mb-0">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
          <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

</body>
</html>