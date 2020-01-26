<?php 
   // start session
   session_start();
?>
<!DOCTYPE html>
<html>
   <body>
      <h1>Items in your cart: </h1>
      <br>
      <!-- If Item Selected then set Session Variable -->
      <?php if(isset($_POST['tv'])) { 
            $_SESSION['tv'] = $_POST['tv'];
            $television = $_SESSION['tv'];?>
      <?php } ?>
      <?php if(isset($_POST['xbox'])) { 
            $_SESSION['xbox'] = $_POST['xbox'];
            $xbox = $_SESSION['xbox'];?>
      <?php } ?>
      <?php if(isset($_POST['playstation'])) { 
            $_SESSION['playstation'] = $_POST['playstation'];
            $playstation = $_SESSION['playstation'];?>
      <?php } ?>

      <!-- Display Image and URL -->
      <?php if(isset($_SESSION['tv'])) { ?>
            <?php $tv = $_SESSION['tv'];
                  echo $tv; ?>
            <img src="https://image-us.samsung.com/SamsungUS/home/televisions-and-home-theater/tvs/gallery01-heroimage-UN43NU6900FXZA-060818.jpg?$product-details-jpg$" style="width: 200px"/>
      <?php } ?>
      <?php if(isset($_SESSION['xbox'])) { ?>
            <?php $xbox = $_SESSION['xbox'];
                  echo $xbox; ?>
            <img src="https://cdn.vox-cdn.com/thumbor/GgbmpZNIXQa1FSfdO4NLd9Ba6aA=/0x0:950x623/1220x813/filters:focal(399x236:551x388):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/60988327/Xbox_One_X_Screenshot_05.0.jpg" style="width: 200px"/>
      <?php } ?>
      <?php if(isset($_SESSION['playstation'])) { ?>
            <?php $playstation = $_SESSION['playstation'];
                  echo $playstation; ?>
            <img src="https://media.playstation.com/is/image/SCEA/playstation-4-slim-vertical-product-shot-01-us-07sep16?$native_t$" style="width: 200px"/>
      <?php } ?>
         <br>
         <a href="http://localhost/web/week3/assignment/addItems.php ">Return to Products</a>
         <br>
         <a href="http://localhost/web/week3/assignment/checkout.php ">Checkout</a>
   </body>
</html>