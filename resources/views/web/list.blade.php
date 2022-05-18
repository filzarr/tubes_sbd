@extends('layout.nav')
@section('title','list Drugs')
@section('konten')
<div class="d-flex p-2 bd-highlight" style="background-color: #f3f3f3"> <br> <br></div>
<main>
  <div class="container py-4" style="padding-left: 9rem" style="display: block" style="margin: 12px" style="box-sizing: inherit">
    <h1> Drugs Index A to Z</h1>
    <p style="margin: 12px">Detailed and accurate information is provided on over 24,000 prescription and over-the-counter medicines for both consumers and healthcare professionals. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet euismod velit. Sed lacus justo, dapibus nec tincidunt quis, pharetra quis augue. Maecenas magna felis, dapibus id orci quis, semper tristique orci. Pellentesque id porta tortor. Suspendisse sed pretium sem. Morbi lacinia rutrum iaculis. Phasellus varius et nisi vel luctus. Donec ultricies, orci egestas gravida congue, leo libero hendrerit metus, nec commodo augue elit et metus. Cras gravida dapibus finibus. Curabitur eleifend maximus ultrices. Sed at massa pretium, rhoncus nisl accumsan, dictum lorem. Suspendisse condimentum vulputate neque et blandit. Suspendisse vel nisl id est finibus euismod at vel nunc. Phasellus ipsum justo, egestas at tincidunt a, porta lobortis mi.</p>
  </div>


  <div class="container py-4" style="padding-left: 9rem" style="display: block" style="margin: 12px" style="box-sizing: inherit">
    <h1> Search</h1>
    <form class="d-flex" id="search-list">
      <input class="form-control me-1" type="search" placeholder="Enter a drug name, condition, pill imprint, etc." aria-label="Search">
      <button class="btn btn-outline-success" type="submit">
        <svg class="ddc-icon ddc-icon-search" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a8 8 0 016.32 12.9l5.6 5.6-1.42 1.41-5.6-5.59A8 8 0 1110 2zm0 2a6 6 0 100 12 6 6 0 000-12z"></path></svg>
      </button>
    </form>
  </div>

  <div class="container py-4" style="padding-left: 9rem" style="display: block" style="margin: 12px" style="box-sizing: inherit">
    <h1> Drugs Index A to Z</h1>
    <ul class="list-group list-group-horizontal flex-fill" id="info">
      <li class="list-group-item p-0 bd-highligh col border border-white"><a href="#">A to Z Drug List</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
    </ul>
    <ul class="list-group list-group-horizontal flex-fill" id="info">
      <li class="list-group-item p-0 bd-highligh col border border-white"><a href="#">A to Z Drug List</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
    </ul>
    <ul class="list-group list-group-horizontal flex-fill" id="info">
      <li class="list-group-item p-0 bd-highligh col border border-white"><a href="#">A to Z Drug List</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
    </ul>
    <ul class="list-group list-group-horizontal flex-fill" id="info">
      <li class="list-group-item p-0 bd-highligh col border border-white"><a href="#">A to Z Drug List</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
    </ul>
    <ul class="list-group list-group-horizontal flex-fill" id="info">
      <li class="list-group-item p-0 bd-highligh col border border-white"><a href="#">A to Z Drug List</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
      <li class="list-group-item p-0 bd-highlight col border border-white"><a href="#"> Drugs by Class</a></li>
    </ul>
  </div>
</main>


@endsection