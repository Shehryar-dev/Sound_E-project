<?php
require("Connection/config.php");

$delete_id = $_GET['deleteId'];
$query = "DELETE FROM `artist` WHERE  `artist_id` = $delete_id";
$run = mysqli_query($conn,$query);

if($run)
{
    header("location:mus-artists.php");
}

?>