<?php

session_start();

function userNotLoggedIn() {
  /* Redirect to a different page in the current directory that was requested */
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'login.php?result=not_logged_in';
  header("Location: http://$host$uri/$extra");
}


if (!$_SESSION['login_status'] || $_SESSION['user_type'] !== 'student') {
  userNotLoggedIn();
}
?>