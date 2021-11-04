<?php


function getStudent($conn, $username, $password) {
  $sql = "SELECT * FROM students WHERE username='" . $username . "' AND password='" . $password . "'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);
    return $user;
  }
  return false;
}


function loginFailed() {
  /* Redirect to a different page in the current directory that was requested */
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'login.php?result=login_failed';
  header("Location: http://$host$uri/$extra");
}

function loginSuccess() {
 /* Redirect to a different page in the current directory that was requested */
 $host  = $_SERVER['HTTP_HOST'];
 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
 $extra = 'index.php?result=login_success';
 header("Location: http://$host$uri/$extra"); 
}

if (isset($_GET['action'])) {
  if ($_GET['action'] === 'logout_student') {
    session_start();
    session_destroy();
  }
}

if (isset($_POST['action'])) {
  if ($_POST['action'] == 'login_student') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $student = getStudent($conn, $username, $password);

    if (!$student) {
      loginFailed();
    } else {
      session_start(['cookie_lifetime' => 86400]);
      $_SESSION['login_status'] = true;
      $_SESSION['user_type'] = 'student';
      $_SESSION += $student;
      loginSuccess();
    }
  } 
}
?>