<?php

// Email Mailist Processes


// Insert New Email
function insertNewEmail($conn ,$data) {
  $stmt = mysqli_prepare($conn, "INSERT INTO email_subscribers VALUES (NULL, ?, CURRENT_TIMESTAMP)");
  mysqli_stmt_bind_param($stmt, 's', $data['email']);

  if(mysqli_stmt_execute($stmt)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
}

// Send Confirmation Email
function sendConfirmationEmail() {}

// Confirm Email
function confirmEmail() {}

// Delete Email
function deleteEmail($conn, $email) {
  $sql = "DELETE FROM email_subscribers WHERE email='" . $email . "'";
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}
?>