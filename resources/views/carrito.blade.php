<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Carrito - SION System Wireless</title>
  <link rel="stylesheet" href="{{ asset('css/esticarrito.css') }}">
</head>
<body>
    <!--falta poner la barra de navegación y el logo -->

  <!-- Contenedor principal del carrito -->
  <section class="contenedor-carrito">
    <h1>Mi carrito</h1>

    <!-- Tabla de productos y resumen -->
    <div class="contenido-carrito">

      <!-- Lista de productos -->
      <div class="lista-productos">
        
        <!-- Producto individual -->
        <div class="producto">
          <img src="{{ asset('img/images (2).jpeg') }}" alt="Cámara AHD">
          <div class="info-producto">
            <h3>Cámara de seguridad analógica 1080P al aire libre IP66 cámara de vigilancia CCTV</h3>
            <p class="precio">Precio $400</p>
            <div class="acciones">
              <button>Eliminar</button>
              <div class="cantidad">
                <button>-</button>
                <input type="text" value="1">
                <button>+</button>
              </div>
              <p class="total">$400</p>
            </div>
          </div>
        </div>

        <!-- Otro producto -->
        <div class="producto">
          <img src="{{ asset('img/images (3).jpeg') }}" alt="Cámara CCTV">
          <div class="info-producto">
            <h3>Switch 24 puertos marca Cisco</h3>
            <p class="precio">Precio $500</p>
            <div class="acciones">
              <button>Eliminar</button>
              <div class="cantidad">
                <button>-</button>
                <input type="text" value="2">
                <button>+</button>
              </div>
              <p class="total">$1000</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Resumen de compra -->
      <aside class="resumen-compra">
        <h3>Resumen de compra</h3>
        <p>Productos (3)</p>
        <h2>Total: <span class="total-final">$1400</span></h2>
        <button class="boton-comprar">Comprar</button>
      </aside>

    </div>
  </section>

  <!-- Sección de productos vistos recientemente -->
  <section class="vistos-recientemente">
    <h2>Viste recientemente</h2>
    <div class="productos-recientes">

      <!-- Cada tarjeta de producto -->
      <div class="tarjeta-producto">
        <img src="{{ asset('img/images (2).jpeg') }}" alt="">
        <p>$400</p>
        <button>Agregar al carrito</button>
      </div>

      <div class="tarjeta-producto">
        <img src="{{ asset('img/images (3).jpeg') }}" alt="">
        <p>$500</p>
        <button>Agregar al carrito</button>
      </div>

      <div class="tarjeta-producto">
        <img src="{{ asset('img/images (4).jpeg') }}" alt="">
        <p>$200</p>
        <button>Agregar al carrito</button>
      </div>

      <div class="tarjeta-producto">
        <img src="{{ asset('img/descarga (1).jpeg') }}" alt="">
        <p>$700</p>
        <button>Agregar al carrito</button>
      </div>

      <div class="tarjeta-producto">
        <img src="{{ asset('img/descarga (2).jpeg') }}" alt="">
        <p>$2500</p>
        <button>Agregar al carrito</button>
      </div>

    </div>
  </section>

  <!-- Pie de página con información de contacto y empresa -->
  <footer class="pie-pagina">
    <img src="{{ asset('img/LOGO/sin fondo.png') }}" alt="Logo SION" height="150">
    <div class="info-footer">
      <div>
        <h4>Contactos</h4>
        <p>Correo</p>
        <p>Número</p>
        <p>Tienda Física</p>
      </div>
      <div>
        <h4>Empresa</h4>
        <p>Política de privacidad</p>
        <p>Términos y condiciones</p>
        <p>Promoción y ofertas</p>
      </div>
    </div>
  </footer>

</body>
</html>