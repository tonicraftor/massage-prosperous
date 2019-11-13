<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['email'])){
    $email = $_POST['email'];
    echo $email;
  }
  else echo '';
  exit();
}
?>