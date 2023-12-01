<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Café Liebre</title>
        <script src="home/js/carrito.js" defer></script>
        <link rel="stylesheet" href="home/css/principal.css" />    

        <style type="text/css">
                .center{
                        margin: auto;
                        width: 70%;
                        text-align: center;
                        padding: 30px;
                }
                table, th, td
                {
                        border: 1px solid black;
                     
                }
                .th_deg{

                        font-size: 20px;
                        padding: 10px;
                        background-color: #c7a17a;
                }
                .img_deg{

                        width: 200px;
                        height: 200px;
                }
                .total_deg
                {
                    font-size: 20px;
                    padding: 40px;
                }
                .btn-danger {
                        background-color: red;
                        color: white;
                        padding: 10px 20px;
                        border-radius: 5px;
                        font-size: 16px;
                        font-weight: bold;
                        text-decoration: none;
                }
                </style>
    </head>
    <body>


    <div class="hero_area">
                 <!-- header section strats -->
                 @include('home.header')
                 <!-- end header section -->
        
                
        </div>

        @if(session()->has('message'))
            
            <div class="alert alert-success">
             
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
   
            {{session()->get('message')}}
   
            </div> 
            @endif


            <div class="center">

                    <table>

                        <tr>
                                <th class="th_deg">Titulo Producto</th>
                                <th class="th_deg">Cantidad</th>
                                <th class="th_deg">Precio</th>
                                <th class="th_deg">Imagen del producto</th>
                                <th class="th_deg">Action</th>
                        </tr>

                        <?php $totalprice=0; ?>

                        @foreach($cart as $cart)
                        <tr>
                                <td>{{$cart->product_title}}</td>
                                <td>{{$cart->quantity}}</td>
                                <td>${{$cart->price}}</td>
                                <td><img class="img_deg" src="/product/{{$cart->image}}"</td>
                                <td>
                                        <a class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar este producto?')
                                        "href="{{url('/remove_cart',
                                            $cart->id)}}">Eliminar Producto</a>
                                </td>

                        </tr>

                        <?php $totalprice=$totalprice + $cart->price ?>

                        @endforeach

                    </table>
                    <div>
                                <h1 class="total_deg">Precio Total: ${{$totalprice}}</h1>
                    </div>

                    <div>
                    <h1 style="font-size: 25px; padding-bottom: 15px;">Proceder al pago del pedido</h1>
                                <a class="btn btn-danger" href="{{url('cash_order')}}">Pagar al recibir</a>
                                <a class="btn btn-danger" href="{{url('stripe',$totalprice)}}">Pago con tarjeta</a>
                                </div>

            </div>

        <main class="main-content"> 

        <script
            src="https://kit.fontawesome.com/81581fb069.js"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
