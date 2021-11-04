<?php

// Events


// Get Event Details
function getEvent($conn, $ref) {
  $sql = "SELECT * FROM events WHERE code='" . $ref . "'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $event = mysqli_fetch_assoc($result);
    return $event;
  }
  return false;
}

// Get All Events Details
function getAllEvents($conn) {
  $sql = "SELECT * FROM events ORDER BY entry_date DESC";
  $result = mysqli_query($conn, $sql);

  $events = [];

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $events[$row['code']] = $row;
    }
    return $events;
  } 
  return false;
}


// Get Month From Date
function getMonth($date) {
  $newDate = new DateTime($date);
  return $newDate->format('M');
}

// Get Day Of Month From Date
function getDay($date) {
  $newDate = new DateTime($date);
  return $newDate->format('d');
}
?>