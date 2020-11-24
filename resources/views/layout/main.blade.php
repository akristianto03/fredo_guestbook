<!doctype html>
@extends('layouts/app')
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/layout1/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout1/Profile-Card.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/layout2/Styled-Header.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/gradient-navbar-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/gradient-navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Simple-footer-by-krissy.css')}}">

    <title>@yield('title')</title>
  </head>
  <body class="text-center">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-dark navbar-expand-md fixed-top" id="app-navbar">
                <div class="container-fluid"><a class="navbar-brand" href="#"><i class="icon ion-pizza" id="brand-logo"></i></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">

{{--                            login act--}}
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest

                            <li class="nav-item" role="presentation"><a class="nav-link active" href="/">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="/jadwal">Jadwal</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="/kontak">Kontak</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="/event">Event</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="/student">Students</a></li>

                            @auth()
                                @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="/user">User</a></li>
                                @endif
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- isi -->

    @yield('container')

    <section class="text-center footer">
        <p style="margin-bottom: 0px;font-size: 15px;color: #ffffff;">Ezralfredo<br></p>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>
