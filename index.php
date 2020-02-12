<?php include 'header.php' ?>

 <div class="row">

  <!-- PAGE STARTS HERE -->

<div class="twelve columns" id="main">

  
  <p class=" alt">human, designer and creative technologist</p>


<div id="container">
<noscript>Your browser does not support JavaScript!</noscript>
  

   <div class="item w3"><a href="https://www.instagram.com/p/BtJBUYjFv9s/" target="_blank"><img src="images/nite_jogger.jpg" alt=""></a></div>
       <div class="item w3"><a href="/octavius" target="_blank"><img src="images/oc1.jpg" alt=""></a></div>
         <div class="item w3"><a href="/vent"><img src="images/vent1.jpg" alt=""></div></a>


   <div class="item w3"><a href="/inka"><img src="images/resp3.jpg" alt=""></a></div>
   <div class="item w3"><a href="https://invis.io/SJ2MY0FE3" target="_blank"><img src="images/simpler_screen.jpg" alt=""></a></div>
  <div class="item w3"><a href="/"><img src="images/1111.jpg" alt="" class=""></a></div>
   <!-- <div class="item w3" id="follow"><h5>check out my <a href="https://www.instagram.com/deantaytay/">instagram</a></h5></div> -->
   <div class="item w3"><a href="/foldibook"><img src="images/foldibook.jpg" alt=""></a></div>
   <div class="item w3"><a href="/infowish"><img src="images/info.jpg" alt=""></a></div>


</div>

</div>
</div>



<?php include 'footer.php' ?>
  <script>
  var container = document.querySelector('#container');
  var msnry = new Masonry( container, {
  // options
  itemSelector: '.item',
  transitionDuration: 0  
});
  imagesLoaded( container, function() {
  msnry.layout();
});
</script>