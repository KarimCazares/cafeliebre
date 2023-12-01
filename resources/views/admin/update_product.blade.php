<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
  
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

         <h1 class="font_size">Actualizar Producto</h1>

         <form action="{{url('/update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">

        @csrf

         <div class="div_design">

         <label>Titulo Producto: </label>
         <input class="text_color" type="text" name="title" placeholder="Escribe el producto" required="" 
         value="{{$product->title}}">

         </div>

         <div class="div_design">
         <label>Descripcion Producto: </label>
         <input class="text_color" type="text" name="description" placeholder="Escribe una descripcion" required=""
         value="{{$product->description}}">
         </div>

         <div class="div_design">
         <label>Precio Producto: </label>
         <input class="text_color" type="float" name="price" placeholder="Escribe un precio" required=""
         value="{{$product->price}}">
         </div>
         
         <div class="div_design">
         <label>Descuento de precios: </label>
         <input class="text_color" type="number" name="disc_price" placeholder="Escribe un descuento si aplica"
         value="{{$product->discount_price}}">
         </div>

         <div class="div_design">
         <label>Cantidad de productos: </label>
         <input class="text_color" type="float" min="0" name="quantity" placeholder="Escribe una cantidad" required=""
         value="{{$product->quantity}}">
         </div>

         <div class="div_design">

         <label>Categoria de producto: </label>
        <select class="text_color" name="catagory" required="">
            <option value="{{$product->catagory}}" selected="" >{{$product->catagory}}</option>

            @foreach($catagory as $catagory)
            <option value="{{$catagory->catagory_name}}"> {{$catagory->catagory_name}}</option>
            @endforeach

        </select>

         </div>
          
         <div class="div_design">
         <label>Imagen actual: </label>
       
         <img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}"> 

         </div>


         <div class="div_design">
         <label>Cambiar Imagen del producto: </label>
       
         <input type="file" name="image" required=""> 

         </div>

         <div class="div_design">
         
         <input type="submit" value="Actualizar producto" class="btn btn-primary"> 

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