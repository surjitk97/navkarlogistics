<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
        @vite(['resources/sass/app.scss','resources/js/app.js'])
       
    </head>
    <body class="main">

        <nav class="navbar navbar-expand-lg ">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="{{url('images/NL1.jpg')}}" alt="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/our-services">Our Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/service-area">Service Area</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact-us">Contact Us</a>
                  </li>
                 
                </ul>
                  
                  <button class="btn btn-primary" type="submit">Service Request Form</button>
               
              </div>
            </div>
          </nav>