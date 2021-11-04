<?php

// Library

// Format Date For Database
function getNewDate($date) {
  $newDate = new DateTime($date);
  return $newDate->format('Y-m-d H:i:s');
}

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

// Get Materials By Category
function getMaterialsByCategory($conn, $category) {
  $sql = "SELECT * FROM materials WHERE category='" . $category . "'";
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

// Get Materials By Category
function getMaterialsByTitle($conn) {
  $sql = "SELECT * FROM materials ORDER BY entry_date";
  $result = mysqli_query($conn, $sql);

  $materials = array();

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $materials[$row['code']] = $row;
    }
    return $materials;
  } 
  return false;
}

// Search Materials
function searchMaterials($conn, $q) {
  $searchWords = array();

  $words = explode(' ', trim($q));
  foreach ($words as $word) {
    array_push($searchWords, "title LIKE '%" . $word . "%' OR author LIKE '%" . $word . "%'"); 
  }

  $searchQuery = implode(" OR ", $searchWords);

  
  $sql = "SELECT * FROM materials WHERE (" . $searchQuery . ") ORDER BY entry_date DESC";
  $result = mysqli_query($conn, $sql);

  $materials = array();

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $materials[$row['code']] = $row;
    }
    return $materials;
  } 
  return false;
}

?>