<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    @include('admin.css') 

    <style type="text/css">

    .center
    {
      margin:auto;
      width: 50%;
      border: 2px solid white;
      text-align:center;
      margin-top:40px;
    }
    .font_size
    {
        text-align:center;
        font-size: 40px;
        padding-top: 20px;
        font-weight: bold;
    }
    .th_color
    {
        background-color: #4CAF50;
        color: white;
    }
    .th_deg
    {
        padding: 30px;
        
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

          <h2 class="font_size">Todos los productos</h2>

          <table class="center">

        <tr class="th_color">
            <th class="th_deg">Titulo de producto</th>
            <th class="th_deg">Descripcion</th>
            <th class="th_deg">Cantidad</th>
            <th class="th_deg">Categoria</th>
            <th class="th_deg">Precio</th>
            <th class="th_deg">Descuento</th>
            <th class="th_deg">Imagen de Producto</th>
            <th class="th_deg">Eliminar</th>
            <th class="th_deg">Editar</th>
        </tr>

        @foreach($product as $product)

        <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->catagory}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->discount_price}}</td>
            <td><img src="{{url('product/'.$product->image)}}" style="height: 150px; width: 150px;">
        </td>

         <td><a class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar esto?')" 
         href="{{url('delete_product', $product->id)}}">Eliminar</a></td>

        <td><a class="btn btn-success" href="{{ url('update_product', $product->id) }}">Editar</a></td>
        </tr>

        @endforeach

        </table>

          </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>