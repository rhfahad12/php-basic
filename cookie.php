<?php
setcookie("UserWishlist", "Shopping Bag", "time()+3600");

// echo $_COOKIE["UserWishlist"];
// echo $_COOKIE[$domain];
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

