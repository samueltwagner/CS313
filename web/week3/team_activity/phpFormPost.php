<?php 

$email = htmlspecialchars($_POST["emailForPHP"]);
$password = htmlspecialchars($_POST["passwordForPHP"]);

echo "Here is the $email and the password is $password";
?>

<html>
    <body>
        <button>Checkout?</button>
    </body>
</html>