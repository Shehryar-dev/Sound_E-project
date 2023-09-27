<?php
require("Connection/config.php");

$delete_id = $_GET['deleteId'];
$query = "DELETE FROM `genre` WHERE  `genre_id` = $delete_id";
$run = mysqli_query($conn,$query);

if($run)
{
    header("location:mus-genres.php");
}

?>