<?php
$file = $_GET['!'];
$sites = array_map("trim", file("https://raw.githubusercontent.com/ahmednitul/r/master/$file"));
$redirect = $sites[array_rand($sites)];
header("Location:$redirect"); die();
?>
