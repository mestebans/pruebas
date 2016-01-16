<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/responsive.css" type="text/css">
<!-- <link rel="stylesheet" href="css/normalize.css" type="text/css">
 -->
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' >

<link rel="stylesheet" href="style.css" type="text/css">


  <meta charset="UTF-8">
  <title>My Blog</title>
</head>
<body>

<header>
  <div id="logo">
    <h1>Empresa </h1>
    <span>Por Manuel Esteban</span>
  </div>

<?php 
  require_once 'menu.php';
  

 ?>

</header>

<div id="contenedor">
 
   <section id="listaArticulos">
        <h2 id="NombreCategoria">Nombre de Categoria</h2>
      <article>
       
       <h2><a href="">Titulo del Articulo</a></h2>
       <p class="fecha">Fecha en <a href="">Categoria1</a></p>
        <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut in ea officia quasi sequi distinctio culpa ipsam ratione consequatur, temporibus explicabo velit nostrum quidem praesentium rerum, similique totam, aspernatur quo nobis. Libero, tempore et modi eius eaque sit fugit quaerat veritatis, ea accusamus! Incidunt, eius illum. Consectetur, saepe molestiae ut optio quae! Laboriosam illum corporis tempore est minima consequuntur dolore delectus perferendis inventore similique aperiam, veritatis accusamus aliquid quam, sint ad, rerum praesentium et exercitationem iste atque. Dicta amet, quos. Voluptatem, minima? Quo dolorem laboriosam repudiandae, dolore consequatur veritatis ex facere nobis amet dignissimos vitae odio. Ullam, molestiae officia cumque quia consequatur earum nulla fugit assumenda nemo est beatae repudiandae aperiam eligendi similique totam nostrum, officiis debitis ipsum accusantium obcaecati dolorem ipsa sed. Adipisci, incidunt.<br><br>
          <img src="http://lorempixel.com/500/300" >
          <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut in ea officia quasi sequi distinctio culpa ipsam ratione consequatur, temporibus explicabo velit nostrum quidem praesentium rerum, similique totam, aspernatur quo nobis. Libero, tempore et modi eius eaque sit fugit quaerat veritatis, ea accusamus! Incidunt, eius illum. Consectetur, saepe molestiae ut optio quae! Laboriosam illum corporis tempore est minima consequuntur dolore delectus perferendis inventore similique aperiam, veritatis accusamus aliquid quam, sint ad, rerum praesentium et exercitationem iste atque. Dicta amet, quos. Voluptatem, minima? Quo dolorem laboriosam repudiandae, dolore consequatur veritatis ex facere nobis amet dignissimos vitae odio. Ullam, molestiae officia cumque quia consequatur earum nulla fugit assumenda nemo est beatae repudiandae aperiam eligendi similique totam nostrum, officiis debitis ipsum accusantium obcaecati dolorem ipsa sed. Adipisci, incidunt.  </p>       
      </article>
      
      <section id="comentarios">
        <h3>Comentarios</h3>
        <div id="cajaComentarios">
          
        </div>
      </section>
      <div class="pagination">
        <p class="parrafoPaginacion">
          <a href=""><- Post Anteriores</a>
          <a href="">Post Siguientes -></a>
        </p>
      </div>
    </section>
    <aside>
       <section class="widget">
          <h3>Articulos</h3>
        <ul>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
        </ul>
       </section>
       <section class="widget">
          <h3>Articulos</h3>
        <ul>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
        </ul>
       </section>

    </aside>
</div>
<footer>
  <section class="footerWidget">
     <section class="widget">
          <h3>Articulos</h3>
        <ul>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
        </ul>
       </section>
       <section class="widget">
          <h3>Articulos</h3>
        <ul>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
        </ul>
       </section>
       <section class="widget">
          <h3>Articulos</h3>
        <ul>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
          <li><a href="">Eres un Articulo</a></li>
        </ul>
       </section>
      
  </section>
  
         <p id="copyright">MyBlog  &copy;   Manuel Esteban --  Todos los derechos Reservados</p>
       

</footer>
</body>
</html>

