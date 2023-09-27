<?php
require("Connection/config.php");

$delete_id = $_GET['deleteId'];
$query = "DELETE FROM `albums` WHERE  `albums_id` = $delete_id";
$run = mysqli_query($conn,$query);

if($run)
{
    header("location:mus-albums.php");
}

?>