<header>
      <div class="container-hero">
        <div class="container hero">
          <div class="customer-support">
            <i class="fa-solid fa-headset"></i>
            <div class="content-customer-support">
              <span class="text">Soporte al cliente</span>
              <span class="number">656-125-2659</span>
            </div>
          </div>

          <div class="container-logo">
            <h1 class="logo">
              <a href="{{url('/')}}"
                ><img
                  src="https://cdn.glitch.global/c47676ca-7864-4dad-8a92-5493c9236d18/logo3.png?v=1698280185280"
                  alt="Logo de la empresa"
              /></a>
            </h1>
          </div>
   <!-- HTML: Agrega un contenedor para mostrar los detalles del carrito -->
          <div id="cartDetails" style="display: none">
            <h4>Detalles del Carrito</h4>
            <ul id="cartItemList"></ul>
            <p>Total: $<span id="cartTotal">0.00</span></p>
          </div>
          
          <!-- Actualiza el contenedor del carrito para que sea clickeable -->
          <div class="container-user">
            <div class="user-buttons">
            
            @if (Route::has('login'))

            @auth

            <x-app-layout>
            </x-app-layout>
              
            @else
              
              <a href="{{ route('login') }}" class="btn btn-login" id="logincss">Iniciar sesión</a>
              <a href="{{ route('register') }}" class="btn-register" id="registercss">Registrarse</a>
            @endauth

            @endif
            </div>
          </div>
        </div>
      </div>

      <div class="container-navbar">
        <nav class="navbar container">
          <i class="fa-solid fa-bars"></i>
          <ul class="menu">
            <li><a href="{{url('/')}}">Inicio</a></li>
            <li><a href="{{url('show_cart')}}">Carrito</a></li>
           
          </ul>

          <form class="search-form">
            <input type="search" placeholder="Buscar..." />
            <button class="btn-search">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
        </nav>
      </div>
    </header>