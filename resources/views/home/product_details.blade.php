<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">

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

                
                        </div>
                        
                        <div class="card-product" style="margin: auto; width: 30%; padding:30px">
                        <div class="container-img">
                            <img
                                src="product/{{$product->image}}"
                                alt=""
                                
                            />
                            <span class="discount">-22%</span>
                            <div class="button-group">

                                <a href="{{url('product_details', $product->id)}}">
                                   
                                    <span>
                                        <i class="fa-regular fa-eye"></i>
                                    </span>
                                </a>
                               
                            </div>
                        </div>
                        <div class="content-card-product" style="font-size: 14px;">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>{{$product->title}}</h3>
                            <span class= id="cartIcon">
                                
                            </span>
                            @if($product->discount_price!=null)
                            <p class="price">${{$product->discount_price}}<span>${{$product->price}}</span></p>
                            @else
                            <p class="price">${{$product->price}}</p>
                            @endif

                            <h6 style="font-size: 15px;">Categoria del producto: {{$product->catagory}}</h6>
                            <br>
                            <h6 style="font-size: 15px;">Detalles: {{$product->description}}</h6>
                            <br>
                            <h6 style="font-size: 15px;">Cantidad Disponible: {{$product->quantity}}</h6>
                            
                            <form action="{{url('add_cart', $product->id)}}" method="Post">

                            @csrf
                            <div class="row">

                                  <div class="col-md-4">

                                    <input type="number" name="quantity" value="1" min="1"> 

                            </div>

                            <div class="col-md-4">

                                    <input  type="submit" value="Añadir al carrito">

                            </div>

                              </div>

                       </form>


                        </div>
                    </div>
                   

                        @include('home.footer')

                    <main class="main-content"> 

                    <script
                        src="https://kit.fontawesome.com/81581fb069.js"
                        crossorigin="anonymous"
                    ></script>
                </body>
            </html>
        
       <style>

        .btn_style{
            background-color: #c7a17a;
            border: 1px solid #f5f5f5;
            color: #000;
            padding: 10px 10px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 5px;
            transition: all 0.3s ease 0s;
            text-decoration: none;
            margin-top: 20px;
        }
       </style>