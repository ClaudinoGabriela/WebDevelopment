<?php
if($_SESSION["------"]!='------' ){
    session_destroy ();
    header("Location: index.php");
}
?>