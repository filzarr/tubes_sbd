@extends('layout.navlogin')
@section('title', 'account')
@section('css','css/account.css')
@section('css','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')
@section('konten')
<div class="d-flex p-2 bd-highlight" style="background-color: #f3f3f3"> <br> <br></div>

<main>
        <div class="container">
            <div class="float-end  ms-5 py-3 px-5 rounded-3" style="background-color: #f3f3f3" id="log">
                <img src="img/contohwibu1.jfif" class="rounded-circle ms-4" width="80" height="80">
                <div class="row-2 ms-2">
                    <p class="fs-5 fw-bolder ms-4 mt-2">{{ auth()->user()->name }}</p>
                    <p class="fs-6 nav-lin-active ms-1"><a href=""> Account Setting</a></p>
                    <p class="fs-6 ms-2"><a href=""> My Med List </a></p>
                    <a href="#" class="btn btn-primary" style="width: 100px">Sign Out</a>
                </div>
            </div>
            <div class="col-xl-5 py-4">
                <h2>My Subscriptions</h2>
            </div>
            <ul class="nav nav-tabs border-bottom-3">
                <li class="nav-item rounded-3" id="tabs" style="background-color: black" >
                <a class="nav-link" aria-current="page" href="#" style="color: white">Overview</a>
                </li>
                <li class="nav-item ms-2 rounded-3" id="tabs" >
                    <a class="nav-link" aria-current="page" href="#">Details</a>
                </li>
                <li class="nav-item ms-2 rounded-3" id="tabs">
                    <a class="nav-link" aria-current="page" href="#">Subscriptions</a>
                </li>
            </ul>
        </div>
        <div class="container pt-2 mt-3">
            <div class="row">
              <div class="d-flex col">
                        <div class= "mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                
                            </svg>
                            
                        </div>
                        <div class="ms-2">
                            <a href="#"><h3> Account detail</h3></a>
                            <p>lorem ipsum bapakmu</p>
                        </div>
                    </div>
                    <div class="d-flex  col">
                        <div class= "mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
                            </svg>
                            
                        </div>
                        <div class="ms-2">
                            <a href="#"><h3> My Med List</h3></a>
                            <p>lorem ipsum bapakmu</p>
                        </div>
                    </div>
                    <div class="d-flex  col ">
                        <div class= "mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            
                        </div>
                        <div class="ms-2">
                            <a href="#"><h3> Account detail</h3></a>
                            <p>lorem ipsum bapakmu</p>
                        </div>
                    </div>
            </div>
            <div class="row pt-5 mt-2">
                <div class="d-flex col">
                          <div class= "mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                                <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                                <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                              </svg>
                              
                          </div>
                          <div class="ms-2">
                              <a href="#"><h3> For Profesional</h3></a>
                              <p>lorem ipsum bapakmu</p>
                          </div>
                      </div>
                      <div class="d-flex  col">
                          <div class= "mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                              </svg>
                              
                          </div>
                          <div class="ms-2">
                              <a href="#"><h3> My Med List</h3></a>
                              <p>lorem ipsum bapakmu</p>
                          </div>
                      </div>
                      <div class="d-flex  col ">
                          <div class= "mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                              </svg>
                              
                          </div>
                          <div class="ms-2">
                            <form action="/dashboard/delete" method="post">
                                @method('delete')
                                @csrf
                                  <button type="submit" class="border-0" style="background-color: rgba(255, 255, 255, 0)"><h4> Delete Account </h4></button>

                            </form>
                              
                            <p>lorem ipsum bapakmu</p>
                          </div>
                      </div>
            </div>
            
              
        </div>
        
            
        
</main>

@endsection