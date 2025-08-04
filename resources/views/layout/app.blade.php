<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiendita Mx</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head> 

<body style="background-color: rgb(40, 92, 78)">
    
    <div class="container text-center">
  <div class="row">
    <div class="col-sm-10">
      
      @include('fragments.navbar')
    </div>
    <div class="col-sm-2">
      
       @include('fragments.login_Start')
    </div>
  </div>
  <div class="row">
    <div class="col">
      
      @include('fragments.search')
    </div>
   </div>
   <div class="row">
    <div class="col">
      
       @yield('content')
    </div>
      <div class="row">
    <div class="col-sm-8">
      
      @include('fragments.slider')
    </div>
    <div class="col-sm-4">
     
      @include('fragments.infotext')
    </div>
  </div>
     <div class="row">
    <div class="col-sm-7">
      
      @include('fragments.footer')
    </div>
    <div class="col-sm-5">
     
      @include('fragments.socialmedia')
    </div>
  </div>
</div>
    
       

   
 

</body>
</html>