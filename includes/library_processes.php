<?php

// Library


// Get Material Details
function getMaterial($conn, $ref) {
  $sql = "SELECT * FROM materials WHERE code='" . $ref . "'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $material = mysqli_fetch_assoc($result);
    return $material;
  }
  return false;
}

// Get All Materials Details
function getAllMaterials($conn) {
  $sql = "SELECT * FROM materials ORDER BY entry_date DESC";
  $result = mysqli_query($conn, $sql);

  $materials = [];

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $materials[$row['code']] = $row;
    }
    return $materials;
  } 
  return false;
}

?>