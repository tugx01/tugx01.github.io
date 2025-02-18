<?php

txtRtnCall = "index.html.php";
$txtAction = $_POST['txtAction'];
switch($txtAction){
  case "Main":
  $txtRtnCall = "index.html.php";
    echo "here";
  break;
}

include ($txtRtnCall);
?>
