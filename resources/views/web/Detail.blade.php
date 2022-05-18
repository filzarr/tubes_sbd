@extends('layout.navlogin')
@section('title', 'account')
@section('css','css/account.css')
@section('css','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')
@section('konten')
<div class="d-flex p-2 bd-highlight" style="background-color: #f3f3f3"> <br> <br></div>

<main>
        <div class="container pb-4">
            <div class="float-end  ms-5 py-3 px-5 rounded-3" style="background-color: #f3f3f3" id="log">
                <img src="img/contohwibu1.jfif" class="rounded-circle ms-4" width="80" height="80">
                <div class="row-2 ms-2">
                    <p class="fs-5 fw-bolder ms-4 mt-2">Filza</p>
                    <p class="fs-6 nav-lin-active ms-1"><a href=""> Account Setting</a></p>
                    <p class="fs-6 ms-2"><a href=""> My Med List </a></p>
                    <a href="#" class="btn btn-primary" style="width: 100px">Sign Out</a>
                </div>
            </div>
            <div class="col-xl-5 py-4">
                <h2>Account Details</h2>
            </div>
            <ul class="nav nav-tabs border-bottom-3">
                <li class="nav-item rounded-3" id="tabs"  >
                <a class="nav-link" aria-current="page" href="#" >Overview</a>
                </li>
                <li class="nav-item ms-2 rounded-3" id="tabs" style="background-color: black" >
                    <a class="nav-link" aria-current="page" href="#" style="color: white">Details</a>
                </li>
                <li class="nav-item ms-2 rounded-3" id="tabs">
                    <a class="nav-link" aria-current="page" href="#">Subscriptions</a>
                </li>
            </ul>
        </div>
        <div class="d-flex col-4 justify-content-start ps-5 " id="tabsl">
            <table class="table">
                <tbody >
                    <tr >
                    <td>Username</td>
                    <td style="margin-left: 2rem; padding-left: 3rem;">{{ auth()->user()->name }}</td>
                    </tr>
                </tbody>
                
                <tbody>
                    <tr>
                    <td>Email</td>
                    <td><Div class="row ms-3 ps-4">{{ auth()->user()->email }} <a href="">change email</a></Div></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                    <td>Password</td>
                    <td><Div class="row ps-4 ms-3">****** <a href="">change Password</a></Div></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                    <td>Password</td>
                    <td><Div class="row ps-4 ms-3">Health care professional? No<a href="">change</a></Div></td>
                    </tr>
                </tbody>
                
            </table>
        </div>
</main>
@endsection