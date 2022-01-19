<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>@section('title') -  @show</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset ('css/bootstrap.min.css')}}" rel="stylesheet" >

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>

  
  <x-header></x-header>
  
<div class="container-fluid">
  <div class="row">
  <x-sidebar></x-sidebar>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     
    <section class="py-5 text-center container">
     @yield('header')
    </section>
    
    <div class="album py-5 bg-light">
   
   <div class="container">   
     @yield('content')
   </div>
 </div>
</main>
    


  </div>
</div>
<x-footer></x-footer>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
  
  </body>
</html>