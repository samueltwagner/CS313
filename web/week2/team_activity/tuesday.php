<!DOCTYPE HTML>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Nathan Birch">
        <link rel="shortcut icon" href="../../../shared/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../../../shared/favicon.ico" type="image/x-icon">
		<title>...</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="class.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script>
			// prevents refresh from submitting form and clears out unneeded variables
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
	</head>
	<body>
		<?php include '../../shared/header.php';?><br><br>
		<?php session_start(); ?>
        <h1>PHP Team Activity</h1>
		  <?php for ($i = 0; $i < 10; $i++) { ?>
				<div id="<?php echo $i; ?>" class="numberedDivs"
					<?php if($i % 2 == 0){echo "style='color:red'";} ?>>
					This is div #<?php echo $i; ?></div>
		  <?php } ?>
		<?php include '../shared/footer.php';?><br><br>
	</body>
</html>
