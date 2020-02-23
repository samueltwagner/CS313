<?php 
  if (!$auth->isLogged()) {
    header('Location: ?page=login');
  }
?>

<!DOCTYPE html>
<html lang="en">

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/head.php';?>
    
<body>
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/nav.php';?>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/header.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/messages.php'; ?>

    <main>
    <br><br><h1>Hi <?=$auth->getUser()->getFullName()?>, <br> Welcome to your P90X Tracker</h1> 

    </main>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/footer.php';?>

</body>
</html>