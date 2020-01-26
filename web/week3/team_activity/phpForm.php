<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <form action="phpFormPost.php" method="post">
        <div class="form-group">
            <label for="emailForPHP">Email address</label>
            <input name="emailForPHP" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="passwordForPHP">Password</label>
            <input name="passwordForPHP" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        
        <script src="" async defer></script>
    </body>
</html>

<!doctype html>
<html lang="en_us">
<head>
  <meta charset="utf-8">
  <title>team activity 3</title>
  <meta name="description" content="team activity">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Justin Lilly">
  <link href="" rel="stylesheet" type="text/css" media="screen">
<body>
  <main>
      <header>
          <nav></nav>
      </header>
<form action="tuesdayPost.php" method="post">
  <div class="form-group">
    <label for="inputName">Name</label>
    <input name="nameForPHP" type="text" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input name="emailForPHP" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="passwordForPHP" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <form action="tuesdayPost.php" method="get">
    <label for="majorInput">Major</label>
    <input type="radio" class="majorInput" name="majorForPHP" type="Computer Science">
    <input type="radio" class="majorInput" name="majorForPHP" type="Web Design and Development">
    <input type="radio" class="majorInput" name="majorForPHP" type="Computer Information Technology">
    <input type="radio" class="majorInput" name="majorForPHP" type="Computer Engineering">
</form>
  <textarea name="comment" form="tuesdayPost.php">Enter text here...</textarea>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </main>
</body>
</html>