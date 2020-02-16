<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
	require("dbConnect.php");
	$db = get_db();
?>
<body>
   <div class="container" style="margin-top:50px;">
      <form action="insert.php" method="POST">
         <div class="form-row">
            <div class="col">
               <input type="text" class="form-control" placeholder="First name" name="first">
            </div>
            <div class="col">
               <input type="text" class="form-control" placeholder="Last name" name="last">
            </div>
            <div class="col">
                  <select id="inputFood" class="form-control" name="workout">
                     <?php
                        $statement = $db->prepare("SELECT * FROM workout");
                        $statement->execute();
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                        {
                           $id   = $row['id'];
                           $workout = $row['workout'];
                           echo "<option value='$id'>$workout</option>";
                        }
                     ?>
                  </select>
               </div>
               <div class="col">
                  <button class="btn btn-primary" type="submit">Save me some food</button>
               </div>
         </div>
      </form>
   </div>
</body>