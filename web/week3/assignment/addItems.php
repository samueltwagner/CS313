<!-- http://localhost/web/week3/assignment/addItems.php -->

   <?php include 'header.php';?>
   <?php 
      // start session
      session_start();
   ?>
   <?php 
      unset($_SESSION['tv']);
      unset($_SESSION['xbox']);
      unset($_SESSION['playstation']);
   ?>

      <form id="catalog" action="cart.php" method="post">
         <div>
            <label>HDTV 4k 50in </label>
            <img src="https://image-us.samsung.com/SamsungUS/home/televisions-and-home-theater/tvs/gallery01-heroimage-UN43NU6900FXZA-060818.jpg?$product-details-jpg$" style="width: 200px"/>
            <input type="checkbox" name="tv" value="HDTV 4k 50in">
         </div>
         <div>
            <label>Xbox One X</label>
            <img src="https://cdn.vox-cdn.com/thumbor/GgbmpZNIXQa1FSfdO4NLd9Ba6aA=/0x0:950x623/1220x813/filters:focal(399x236:551x388):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/60988327/Xbox_One_X_Screenshot_05.0.jpg" style="width: 200px"/>
            <input type="checkbox" name="xbox" value="Xbox One X">
         </div>
         <div>
            <label>Playstation 4</label>
            <img src="https://media.playstation.com/is/image/SCEA/playstation-4-slim-vertical-product-shot-01-us-07sep16?$native_t$" style="width: 200px"/>
            <input type="checkbox" name="playstation" value="Playstation 4">
         </div>
         <input id="cartButton" type="submit" name="Submit" value="Add to Cart">
      </form>
   </body>
</html>