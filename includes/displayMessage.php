<?php
  if(isset($_GET['error'])){
      ?>
<div class="conatiner alert alert-danger"><?=urldecode($_GET['error'])?></div>

<?php
  }elseif(isset($_GET['success'])){
    ?>
<div class="conatiner alert alert-success"><?=urldecode($_GET['success'])?></div>

<?php
  }

?>