<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Café Liebre</title>
    <script src="home/js/carrito.js" defer></script>
    <link rel="stylesheet" href="home/css/principal.css" />    
  </head>
  <body>
  <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
        
      </div>
      @include('home.categories')

      @include('home.product')

      @include('home.gallery')

      @include('home.footer')

    <main class="main-content"> 

    <script
      src="https://kit.fontawesome.com/81581fb069.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
