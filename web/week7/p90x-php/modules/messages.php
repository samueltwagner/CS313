<main>
  <?php
    if ($message->hasError()) {
      ?>
        <div class="alert alert-danger" role="alert">
          <?=$message->getError()?>
        </div>
      <?php
    }
    if ($message->hasInfo()) {
      ?>
        <div class="alert alert-info" role="alert">
          <?=$message->getInfo()?>
        </div>
      <?php
    }
  ?>
</main>