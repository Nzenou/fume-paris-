<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
    <title>Fume paris</title>
    <!-- bullet scroll menu pluggin-->
    </head>

  <!--HEADER-->
      <?php
      include 'header.php';
      ?>

  <body class="text-center">


<!-- Use any element to open the sidenav -->

    <section  class="swiper-container">
      <section  class="swiper-wrapper">
    <section id="section0" class="swiper-slide" data-section-title="Home">
      <span onclick="openNav()" class="menu icon  " ></span>
      <img src="logoG.png" alt="logo fume" class="logoG">
      <p> <img src="cuisinefondmenu.jpg" alt="imagefondmenu" class="imagefondmenu hide"/> </p>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Acceuil</a>
        <a href="#">Reservation</a>
        <a href="#">Le Chef</a>
        <a href="#">Le Restaurant</a>
        <a href="#">Privatisation</a>
      </div>

    </section>

    <section id="section1" class="swiper-slide">

      <div  href="" class="div1">
        <article class="articlerub" >
          <h4> le chef </h4>
          <p> </p>
          En cuisine, c’est le Chef Ruben Sarfati (Top Chef 2012) qui interprète à sa sauce la vision des fondateurs Benjamin Chemla et Kevin Jelty, qui rêvaient d’un lieu convivial où l’on puisse manger de la très bonne viande, le côté healthy and partage en plus.
        </article>
      </div>
    </section>

    <section id="section2" class="swiper-slide" >

    </section>
    <section id="section3" class="swiper-slide"  >
    </section>
   </section>
  <!-- Add Pagination -->
 <div class="swiper-pagination"></div>
</section>




  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>2420 production</p>
    </div>
  </footer>
</div>
<script src="js/swiper.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>
var mySwiper = new Swiper ('.swiper-container', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})
</script>

<!-- Bullet scroll menu -->

</body>

</html>
