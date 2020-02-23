<div id="nav" class="nav">
	<div class="text" class="icon">
		<ul>
				<li><a class="link" title="Home" href="?page=home"><i class="fa fa-home "></i></a><a class="link" title="Home" href="?page=home">Home</a></li>
        <?php 
          if ($auth->isLogged()) {
            ?>
              <li><a class="link" href="?page=workouts"><i class="fa fa-edit "></i>Workouts</a></li>
              <!-- <li><a href="?page=categories" >Categories</a></li> -->
              <li><a class="link" href="?logout"><i class="fa fa-sign-out"></i></a><a class="link" href="?logout">Logout</a></li>
            <?php
          }
        ?>
		</ul>
  </div> 
</div>
