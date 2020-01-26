<!-- http://localhost/web/week3/assignment/addItems.php -->

<?php 
   // start session
   session_start();
?>
<!DOCTYPE html>
<html>
   <body>
   <?php 
      unset($_SESSION['tv']);
      unset($_SESSION['xbox']);
      unset($_SESSION['playstation']);
   ?>
      <h1>Select items for your Cart:</h1>
      <form action="cart.php" method="post">
         <img src="https://image-us.samsung.com/SamsungUS/home/televisions-and-home-theater/tvs/gallery01-heroimage-UN43NU6900FXZA-060818.jpg?$product-details-jpg$" style="width: 200px"/>
         <input type="checkbox" name="tv" value="TV">
         <img src="https://cdn.vox-cdn.com/thumbor/GgbmpZNIXQa1FSfdO4NLd9Ba6aA=/0x0:950x623/1220x813/filters:focal(399x236:551x388):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/60988327/Xbox_One_X_Screenshot_05.0.jpg" style="width: 200px"/>
         <input type="checkbox" name="xbox" value="Xbox">
         <img src="https://media.playstation.com/is/image/SCEA/playstation-4-slim-vertical-product-shot-01-us-07sep16?$native_t$" style="width: 200px"/>
         <input type="checkbox" name="playstation" value="Playstation">
         <input type="submit" name="Submit" value="Add to Cart">
      </form>
      <a href="http://localhost/web/week3/assignment/cart.php ">View Cart</a>
   </body>
</html>