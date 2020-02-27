<?php 
  if (!$auth->isLogged()) {
    header('Location: ?page=login');
  }
?>

<!DOCTYPE html>
<html lang="en">

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/head.php';?>
    
<body id="body-container">
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/nav.php';?>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/header.php';?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/messages.php'; ?>

    <main>
    <br><br><h2>Welcome <?=$auth->getUser()->getFullName()?><br></h2> 

    </main>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/week7/p90x-php/modules/footer.php';?>

</body>
</html>