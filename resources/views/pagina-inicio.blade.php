<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria Hellcat</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>
<!-- Encabezado -->
<header>
    <h1>Cafeteria Hellcat</h1>
    <img src="{{asset("storage/images/food_coffee-1.png")}}" width="40" height="40">
</header>

<!-- Navegación. En esta parte, al dar click sobre cada enlace, nos llevará a
    una nueva página, dependiendo de lo que queramos ver -->
<nav>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Menú</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Acerca de Nosotros</a></li>
        <li><a href="#">Ubicacion</a></li>
        <li><a href="#">Horario</a></li>
        <li><a href="{{route("login")}}">Login</a></li>
        <li><a href="{{route("register")}}">Registrarse</a></li>
    </ul>
</nav>

<!-- Sección de Menú -->
<div class="menu-section">
    <h1>Menú</h1>
        <img src="{{asset("storage/images/300064053_168446992401540_4309676909326943623_n.png")}}" width="250" height="250">
</div>

<!-- Tarjetas -->
<section class="wrap">
    <div class="wrap-title-section">
        <h2>Bebidas</h2>
    </div>
    <div class="wrap column-2 carta">
        @foreach($bebidas as $bebida )
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{asset("storage/".$bebida["imagen"])}}" alt="">
            </div>
            <div class="title-plato-carta">
                <h4>{{$bebida["nombre"]}}</h4>
                <p>{{$bebida["descripcion"]}}.</p>
            </div>
            <div class="precio-plato-carta">
                <span>${{$bebida["precio"]}}</span>
            </div>
            <!--agregar carrito-->
            <div class="cantidad-plato-carta">
                <button class="decrease">➖</button>
                <span class="cantidad" data-name="Capuccino" data-price="45">1</span>
                <button class="increase">➕</button>
                <a href="{{route("add-to-cart",["id"=>$bebida->id])}}">
                    <button class="add-to-cart">Agregar</button>
                </a>
            </div>



        </div>
        @endforeach

        <!--<div class="plato-carta">
            <div class="img-plato-carta">
                <img src="img/bocadillo-carta.png" alt="">
            </div>
            <div class="title-plato-carta">
                <h4>Lorem, ipsum dolor.</h4>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="precio-plato-carta">
                <span>9€</span>
            </div>
        </div> -->
    </div>
    <div class="wrap-title-section">
        <h2>Postres</h2>
    </div>
    <div class="wrap column-2 carta">
        @foreach($postres as $postre )
            <div class="plato-carta">
                <div class="img-plato-carta">
                    <img src="{{asset("storage/".$postre["imagen"])}}" alt="">
                </div>
                <div class="title-plato-carta">
                    <h4>{{$postre["nombre"]}}</h4>
                    <p>{{$postre["descripcion"]}}.</p>
                </div>
                <div class="precio-plato-carta">
                    <span>${{$postre["precio"]}}</span>
                </div>
                <!--agregar carrito-->
                <div class="cantidad-plato-carta">
                    <button class="decrease">➖</button>
                    <span class="cantidad" data-name="Capuccino" data-price="45">1</span>
                    <button class="increase">➕</button>
                    <button class="add-to-cart">Agregar</button>
                </div>



            </div>
        @endforeach


    </div>
    <div class="wrap-title-section">
        <h2>Comida</h2>
    </div>
    <div class="wrap column-2 carta">
        @foreach($comidas as $comida )
            <div class="plato-carta">
                <div class="img-plato-carta">
                    <img src="{{asset("storage/".$comida["imagen"])}}" alt="">
                </div>
                <div class="title-plato-carta">
                    <h4>{{$comida["nombre"]}}</h4>
                    <p>{{$comida["descripcion"]}}.</p>
                </div>
                <div class="precio-plato-carta">
                    <span>${{$comida["precio"]}}</span>
                </div>
                <!--agregar carrito-->
                <div class="cantidad-plato-carta">
                    <button class="decrease">➖</button>
                    <span class="cantidad" data-name="Capuccino" data-price="45">1</span>
                    <button class="increase">➕</button>
                    <button class="add-to-cart">Agregar</button>
                </div>



            </div>
        @endforeach
    </div>
</section>

<!-- Botón para abrir el carrito -->
{{--<button id="open-cart">🛒 Ver Carrito</button>--}}
<a href="{{route("view-cart")}}">
    <button id="open-cart">🛒 Ver Carrito</button>
</a>

<!-- Carrito (oculto por defecto) -->
<div id="cart-modal" class="cart-modal">
    <h2>Carrito de Compras</h2>
    <ul id="cart-items"></ul>
    <p>Total: $<span id="cart-total">0.00</span></p>
    <button id="clear-cart">Vaciar Carrito</button>
    <button id="close-cart">Cerrar</button>
</div>

<style>
    #open-cart {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #00ff6f;
        color: #070606;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .cart-modal {
        display: none;
        position: fixed;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -20%);
        background: white;
        padding: 20px;
        border: 2px solid #ccc;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
</style>

<script>
    // document.getElementById("open-cart").addEventListener("click", function () {
    //     document.getElementById("cart-modal").style.display = "block";
    // });

    document.getElementById("close-cart").addEventListener("click", function () {
        document.getElementById("cart-modal").style.display = "none";
    });
</script>



<!-- Sección de Contacto -->
<div class="contact-section">



    <h2>Café</h2>
    <img src="{{asset("storage/images/9f5417b7e5edf5f0623d4d2a855bdf82.jpg")}}"">

</div>

<hr>

<!-- Pie de página -->
<footer>
    <p>&copy; 2025 Cafetería Hellcat</p>
</footer>
</body>
</html>
