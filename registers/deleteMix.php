<?php
  require_once('../models/mixModel.php');
  $mix = new Mix();

 

  if(isset($_GET['id'])){ 
    $myID=$_GET['id'];
    $mix->deleteMix($myID);
  }
?>