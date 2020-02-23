<div id="nav" class="nav">
	<div class="icon">
		<ul>
			<li><a class="link" title="Home" href="?page=home"><i class="fa fa-home "></i></a></li>
        <?php

          if ($auth->isLogged()) {
            ?>
              <li><a href="?page=workouts"><i class="fa fa-edit "></i></a></li>
              <!-- <li><a href="?page=categories"><i class="fa fa-list-alt"></i></a></li> -->
              <li><a href="?logout"><i class="fa fa-sign-out"></i></a></li>
            <?php
          }
        ?>
    </ul>
  </div>
    
	<div class="text">
		<ul>
				<li><a class="link" title="Home" href="?page=home">Home</a></li>
        <?php 
          if ($auth->isLogged()) {
            ?>
              <li><a class="link" href="?page=workouts" >My Workouts</a></li>
              <!-- <li><a href="?page=categories" >Categories</a></li> -->
              <li><a class="link" href="?logout" >Logout</a></li>
            <?php
          }
        ?>
		</ul>
  </div> 
</div>
