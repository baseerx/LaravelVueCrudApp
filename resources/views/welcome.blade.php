<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CrudApp</title>
{{--        <link rel="icon" href="{{ asset('favicon') }}" />--}}
        <link rel="icon" type="image/png"  href="{{asset('images/logo.png')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

       <div id="app" class="mt-3">
           <nav class="nav navbar nav-tabs navbar-expand-sm justify-content-end pt-0">
               <a class="navbar-brand" href="#">Logo</a>
               <button class="btn btn-link ml-auto disabled"></button>
               <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                   <ul class="navbar-nav text-right">
                       <li class="nav-item active">
                           <router-link class="nav-link" to="/sample">Sample</router-link>
                       </li>
                       <li class="nav-item active">
                           <router-link class="nav-link" to="/home">Home</router-link>
                       </li>
                   </ul>
               </div>
           </nav>

                   <router-view></router-view>
       </div>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
