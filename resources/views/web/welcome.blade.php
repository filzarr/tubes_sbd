<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/css.css">
    
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- navbar -->
      <!-- navbar bagian pertama -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f3f3f3">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="" width="250" height="60">
        </a>
        

        <!-- dropwdown -->
        <div class="navbar" id="navbarNav" style="justify-content: center">
          <ul class="navbar-nav" id="list">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Drugs A-Z &nbsp</a>
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
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="danger">Logout</button>
                
              </form>
            </li>   
            <li class="nav-item">
              <form class="container-fluid justify-content-start">
                <button class="btn btn-outline-success me-2" type="button"> {{ auth()->user()->name }} </button>
              </form>
            </li>
            @else
            <li class="nav-item dropdown">
              <form class="container-fluid justify-content-start" >
                <button class="btn btn-outline-success me-2" type="button" ><a href="/login"> Signin </a></button>
              </form>
            </li>
            @endauth
            



            
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar baris ke2 -->
    <nav class="navbar navbar-light" style="background-color: #f3f3f3">
      <div class="container-fluid" style="justify-content: center">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <h1>Find Drugs & Condition</h1>
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar baris ke 3 search form & button -->
    <nav class="navbar navbar-light" style="background-color: #f3f3f3">
      <div class="container-fluid" style="justify-content: center">
        <form class="d-flex" id="search" style="height: 50px">
          <input class="form-control me-2" type="search" placeholder="Enter a drug name, condition, pill imprint, etc." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
            <svg class="ddc-icon ddc-icon-search" width="16" height="16" viewBox="0 0 24 24" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a8 8 0 016.32 12.9l5.6 5.6-1.42 1.41-5.6-5.59A8 8 0 1110 2zm0 2a6 6 0 100 12 6 6 0 000-12z"></path></svg>
          </button>
        </form>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- carousel -->
    <section class="jumbotron shadow col-md-12" id="caro">
      <div class="container text-center my-0" id="carousel">
        <div class="row mx-auto my-auto justify-content-center" >
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 1</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 2</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 3</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 4</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 5</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 6</div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
  </section>
  <!-- akhir carousel -->
  <!-- table cardnya bro -->
  <section id="table" style="background-color: #f3f3f3" style="padding: 16px" style="margin-bottom: 40px">
    <div class="container mt-2 col-md-12 mb-2" style="padding-bottom: 1rem">
      <div class="row justify-content-center">
        <div class="col-3">
          <div class="card">
           <a href="#"> <img src="img/contoh1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
           </a>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
             <a href="#"> <img src="img/contoh1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
             </a>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
               <a href="#"> <img src="img/contoh1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
               </a>
                </div>
              </div>
      </div>      
    </div>
  </section>
  <!-- main bodynya -->
  <main>
    <!-- bagian info sebelah kiri -->
    <div class="float-sm-start mx-4" id="main">
      <div class="container" id="kotak">

        <div class="float-sm-start" id="isi">
          <h4>Drugs information</h4>
          <ul class="list-group list-group-horizontal flex-fill" id="info">
            <li class="list-group-item p-0 bd-highligh col border border-white"><a href="#">A to Z Drug List</a></li>
            <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
          </ul>
          <ul class="list-group list-group-horizontal flex-fill " id>
            <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#">Side Effects</a></li>
            <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#">Generic Drugs</a></li>
          </ul>
          <ul class="list-group list-group-horizontal flex-fill">
            <li class="list-group-item  p-0 col border border-white"><a href="#">Pregnancy Warning</a></li>
            <li class="list-group-item p-0 col border border-white"><a href="#">OTC Database</a></li>
          </ul>
        </div>
      </div>
      <div class="container" id="kotak">
        <div class="float-sm-start" id="isi">
          <h4><br> <br> Top 100 Drugs <br></h4>
          <ul class="list-group list-group-horizontal flex-fill" id="info">
            <li class="list-group-item p-0 bd-highligh col border border-white"><a href="#">A to Z Drug List</a></li>
            <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
          </ul>
          <ul class="list-group list-group-horizontal flex-fill " id>
            <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#">Side Effects</a></li>
            <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#">Generic Drugs</a></li>
          </ul>
          <ul class="list-group list-group-horizontal flex-fill">
            <li class="list-group-item  p-0 col border border-white"><a href="#">Pregnancy Warning</a></li>
            <li class="list-group-item p-0 col border border-white"><a href="#">OTC Database</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <!--  bagian main tengah -->
    <div class="d-flex justify-content-center row">
      <div class="card mb-3" style="max-width: 900px;"  id="content">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/contohwibu1.jfif" class="img-fluid rounded-start">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="w-100"></div>
      <div class="card mb-3" style="max-width: 900px;" id="content">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/contohwibu1.jfif" class="img-fluid rounded-start">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="w-100"></div>
      <div class="card mb-3" style="max-width: 900px;" id="content">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/contohwibu1.jfif" class="img-fluid rounded-start">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="w-100"></div>
    </div>
    
  </main>

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