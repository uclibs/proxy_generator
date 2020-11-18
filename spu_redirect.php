<?php
  $url = $_GET["spu"];
  $http = substr($url,0,4);


  if ($http == "http") {
    $url; }
  else {
    $url = "http://".$url; }


   header("Location: http://proxy.libraries.uc.edu/login?url=$url"); 
?>
