<?php

require_once ("dbConnection.php");


$id = $_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM product WHERE id = $id");


header("Location:index.php");
