<?php

session_start();

if(isset($_SESSION['name'])){

}
else{
    header("Refresh:0; url=index.php");

}

?>