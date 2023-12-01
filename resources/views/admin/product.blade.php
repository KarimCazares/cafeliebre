<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    @include('admin.css') 

    <style type="text/css">

    .div_center
    {
      text-align: center;
      padding-top: 40px;
      font-weight: bold;
    }
    .font_size
    {
      font-size: 40px;
      padding-bottom: 40px;
    }
    .text_color
    {
      color: black;
      padding-bottom: 20px;
    }
    
    label{
      display: incline-block;
        width: 200px;
    }
    .div_design
    {
      padding-bottom: 15px;
    }
    </style>

  </head> 
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.slidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(Session::has('message'))
            
            <div class="alert alert-success">
             
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
   
            {{session()->get('message')}}
   
            </div> 
            @endif

         <div class="div_center">

         <h1 class="font_size">Agregar Producto</h1>

         <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

        @csrf

         <div class="div_design">

         <label>Titulo Producto: </label>
         <input class="text_color" type="text" name="title" placeholder="Escribe el producto" required="">

         </div>

         <div class="div_design">
         <label>Descripcion Producto: </label>
         <input class="text_color" type="text" name="description" placeholder="Escribe una descripcion" required="">
         </div>

         <div class="div_design">
         <label>Precio Producto: </label>
         <input class="text_color" type="float" name="price" placeholder="Escribe un precio" required="">
         </div>
         
         <div class="div_design">
         <label>Descuento de precios: </label>
         <input class="text_color" type="number" name="disc_price" placeholder="Escribe un descuento si aplica">
         </div>

         <div class="div_design">
         <label>Cantidad de productos: </label>
         <input class="text_color" type="float" min="0" name="quantity" placeholder="Escribe una cantidad" required="">
         </div>

         <div class="div_design">

         <label>Categoria de producto: </label>
        <select class="text_color" name="catagory" required="">
            <option value="" selected="">Añadir una categoria aqui</option>

            @foreach($catagory as $catagory)
            <option value="{{$catagory->catagory_name}}"> {{$catagory->catagory_name}}</option>
            @endforeach
        </select>

         </div>

         <div class="div_design">
         <label>Imagen del producto: </label>
       
         <input type="file" name="image" required=""> 

         </div>

         <div class="div_design">
         
         <input type="submit" value="Añadir producto" class="btn btn-primary"> 

         </div>

         </form>

         </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>