<?php include 'header.php';?>

<?php 
   // start session
   session_start();
?>
      <h1 class="title">Checkout</h1>
      <h3 class="title">Enter your shipping address below:</h3>
      <form class="title" action="confirmation.php" method="post">
         <label>Street:</label>
         <input type="text" name="street">
         <br>
         <label>City:</label>
         <input type="text" name="city">
         <br>
         <label>State:</label>
         <input type="text" name="state">
         <br>
         <label>Zip Code:</label>
         <input type="text" name="zipcode">
         <br>
         <input type="submit" name="Submit" value="Submit">
      </form>
   </body>
</html>