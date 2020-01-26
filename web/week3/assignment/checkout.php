<!-- http://localhost/web/week3/assignment/addItems.php -->

<?php 
   // start session
   session_start();
?>
<!DOCTYPE html>
<html>
   <body>
      <h1>Checkout:</h1>
      <form action="confirmation.php" method="post">
         <input type="text" name="street">
         <input type="text" name="city">
         <input type="text" name="state">
         <input type="text" name="zipcode">
         <input type="submit" name="Submit" value="Submit">
      </form>
      <br>
      <a href="http://localhost/web/week3/assignment/cart.php ">View Cart</a>
      <br>
   </body>
</html>