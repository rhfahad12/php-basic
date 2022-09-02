<?php

session_start(['cookie_lifetime' =>0, 'cookie_secure' =>1,]);
$_SESSION['user_id']=42;
//session_unset();

echo $_SESSION['user_id'];