<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css') 
    <style type="text/css">
      .div_center{
        text-align: center;
        padding-top: 40px;
        font-weight: bold;
      }
       .h2_font{
            font-size: 40px;        
            padding-bottom: 40px;
        }
        .input_color
        {
          color: black;
        }

        .center{
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top: 30px;
          border: 3px solid white;
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

        <h2 class="h2_font">Añadir Categoria</h2>   
        
        <form action="{{url('/add_catagory')}}"method="POST">

        @csrf

        <input class="input_color" type="text" name="catagory" placeholder="Escribe la categoria">

        <input type="submit" class="btn btn-primary" name="submit" value="Agregar">
        </form>
          </div>

          <table class="center">
            
           <tr>
                <td>Nombre de la categoria</td>
                <td>Acciones</td>
           </tr>

            @foreach($data as $data)

           <tr>

                <td>{{$data->catagory_name}}</td>

                <td>
                    <a onclick="return confirm('¿Estás seguro de que deseas eliminar esto?')" 
                    class="btn btn-danger" href="{{url('delete_catagory', $data->id)}}">Eliminar</a>
                </td>
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