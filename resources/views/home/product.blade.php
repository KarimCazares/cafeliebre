<section class="container top-products">
  <h1 class="heading-1">Productos de Café Liebre</h1>

  <div class="container-options">
    <span class="active">Destacados</span>
    <span>Más recientes</span>
    <span>Mejores Vendidos</span>
  </div>

  <div class="container-products">
    @foreach($product as $products)
    <div class="card-product">
      <div class="container-img">
        <img
          src="product/{{$products->image}}"
          alt=""
        />
        
        <span class="discount">-22%</span>
        <div class="button-group">

          <a href="{{url('product_details', $products->id)}}">
            <span>
              <i class="fa-regular fa-eye"></i>
            </span>
       
          </a>

          <form action="{{url('add_cart', $products->id)}}" method="Post">

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
      <div class="content-card-product">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star"></i>
        </div>
        <h3>{{$products->title}}</h3>
       
   
        @if($products->discount_price!=null)
        <p class="price">${{$products->discount_price}}<span>${{$products->price}}</span></p>
        @else
        <p class="price">${{$products->price}}</p>
        @endif
      </div>
    </div>
    @endforeach

    <span style="padding-top: 20px;">
    {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
    </span>
    
  </div>
</section>

<style>
  .container-products {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
  }

  .card-product {
    background-color: #f2f2f2;
    padding: 32px;
    border-radius: 10px;
  }

  /* Agrega aquí los estilos adicionales que desees para los productos */
</style>
