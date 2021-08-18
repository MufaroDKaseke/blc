<?php
// Functions

//require '../../includes/db_connect.php';

/*

Helper Functions
*/
// Generate Id
function generateId() {
  return uniqid();
}

// Format Date For Database
function formatDate($date) {
  $newDate = new DateTime($date);
  return $newDate->format('Y-m-d H:i:s');
}

// De-format Date From Database
function deformatDate($date) {
  $newDate = new DateTime($date);
  $date = $newDate->format('Y-m-d'); 
  $time = $newDate->format('H:i'); 
  return $date . 'T' . $time; 
}

function deleteFiles($files) {
  foreach ($files as $file) {
    if (!unlink($file)) {
      return false;
    }
  }

  return true;
}

/*

Materials

*/


// Upload Material
function uploadMaterial($file, $code) {
  if ($file['error'] === 0) {
    $ext = explode('.', $file['name']);
    $newName = 'mat_' . $code . '.' . $ext[count($ext) - 1];
    $destination = '../uploads/materials/' . $newName;
    $success = move_uploaded_file($file['tmp_name'], $destination);
    if ($success) {
      return $newName;
    } else {
      die('Error : Could\'t upload new material ,error uploading material file ,try again!!!');
    }
  } else {
    die('Error : Could\'t upload new material ,file has error ,try again!!!');
  }
}

// Upload Preview Image
function uploadMaterialPreview($file, $code) {
  if ($file['error'] === 0) {
    $ext = explode('.', $file['name']);
    $newName = 'mcap_' . $code . '.' . $ext[count($ext) - 1];
    $destination = '../uploads/captions/' . $newName;
    $success = move_uploaded_file($file['tmp_name'], $destination);
    if ($success) {
      return $newName;
    } else {
      die('Error : Could\'t upload new material ,error material preview ,try again!!!');
    }
  } else {
    die('Error : Could\'t upload new material ,material preview has error ,try again!!!');
  }
}

// Insert New Material Record
function insertNewMaterial($conn ,$data) {
  $stmt = mysqli_prepare($conn, "INSERT INTO materials VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
  mysqli_stmt_bind_param($stmt, 'sssssss', $data['code'], $data['title'], $data['author'], $data['pub_date'], $data['category'], $data['preview'], $data['link']);

  if(mysqli_stmt_execute($stmt)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
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

// Update Material Record
function updateMaterial($conn, $data) {
  $stmt = mysqli_prepare($conn, "UPDATE materials SET title=?, author=?, pub_date=?, category=?, preview=? WHERE code='" . $data['code'] ."'");
  mysqli_stmt_bind_param($stmt, 'sssss', $data['title'], $data['author'], $data['pub_date'], $data['category'], $data['preview']);

  if(mysqli_stmt_execute($stmt)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
}


// Delete Material Record
function deleteMaterial($conn, $ref) {

  $material = getMaterial($conn, $ref);
  $materialCaption = '../uploads/captions/' . $material['preview'];
  $materialFile = '../uploads/materials/' . $material['link'];


  $sql = "DELETE FROM materials WHERE code='" . $ref . "'";
  if (mysqli_query($conn, $sql)) {
    deleteFiles([$materialCaption, $materialFile]);
    return true;
  } else {
    return false;
  }
}


/*

Videos

*/

// Upload Video Preview
function uploadVideoPreview($file, $code) {
    if ($file['error'] === 0) {
    $ext = explode('.', $file['name']);
    $newName = 'vcap_' . $code . '.' . $ext[count($ext) - 1];
    $destination = '../uploads/captions/' . $newName;
    $success = move_uploaded_file($file['tmp_name'], $destination);
    if ($success) {
      return $newName;
    } else {
      die('Error : Could\'t upload new video preview ,error uploading video preview ,try again!!!');
    }
  } else {
    die('Error : Could\'t upload new video preview ,file has error ,try again!!!');
  }
}

// Upload Video
function uploadVideo($file, $code) {
  if ($file['error'] === 0) {
    $ext = explode('.', $file['name']);
    $newName = 'vid_' . $code . '.' . $ext[count($ext) - 1];
    $destination = '../uploads/videos/' . $newName;
    $success = move_uploaded_file($file['tmp_name'], $destination);
    if ($success) {
      return $newName;
    } else {
      die('Error : Could\'t upload new video ,error uploading video file ,try again!!!');
    }
  } else {
    die('Error : Could\'t upload new video ,file has error ,try again!!!');
  }
}

// Insert New Video Record
function insertNewVideo($conn, $data) {
  $stmt = mysqli_prepare($conn, "INSERT INTO videos VALUES (NULL, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
  mysqli_stmt_bind_param($stmt, 'sssss', $data['code'], $data['title'], $data['description'], $data['caption'], $data['link']);

  if(mysqli_stmt_execute($stmt)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
}


// Update Video Details
function updateVideo($conn, $data) {
  $stmt = mysqli_prepare($conn, "UPDATE videos SET title=?, description=?, caption=? WHERE code='" . $data['code'] ."'");
  mysqli_stmt_bind_param($stmt, 'sss', $data['title'], $data['description'], $data['caption']);

  if(mysqli_stmt_execute($stmt)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
}

// Delete Video
function deleteVideo($conn, $ref) {
  $sql = "DELETE FROM videos WHERE code='" . $ref . "'";

  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}

// Get Video Details
function getVideo($conn, $ref) {
  $sql = "SELECT * FROM videos WHERE code='" . $ref . "'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $video = mysqli_fetch_assoc($result);
    return $video;
  }
  return false;
}

// Get All Videos Details
function getAllVideos($conn) {
  $sql = "SELECT * FROM videos";
  $result = mysqli_query($conn, $sql);

  $videos = [];

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $videos[$row['code']] = $row;
    }
    return $videos;
  } 
  return false;
}

/*
  
Events

*/
//$form = array('code' => '328992', 'title' => 'Thta that swswevent', 'date' => '2021-08-14 00:00:00', 'description' => '3ii3ei3ue3eui3eudjehhrh', 'caption' => 'thetejh.jpg', 'link' => 'ie3je/e3kkj/3ekj');

// Upload Event Caption
function uploadEventCaption($file, $code) {
  if ($file['error'] === 0) {
    $ext = explode('.', $file['name']);
    $newName = 'ecap_' . $code . '.' . $ext[count($ext) - 1];
    $destination = '../uploads/captions/' . $newName;
    $success = move_uploaded_file($file['tmp_name'], $destination);
    if ($success) {
      return $newName;
    } else {
      die('Error : Could\'t create new event ,error uploading image ,try again!!!');
    }
  } else {
    die('Error : Could\'t create new event ,image has error ,try again!!!');
  }
}

// Insert New Event Record
function insertNewEvent($conn, $data) {
  $stmt = mysqli_prepare($conn, "INSERT INTO events VALUES (NULL, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
  mysqli_stmt_bind_param($stmt, 'ssssss', $data['code'], $data['title'], $data['date'], $data['description'], $data['caption'], $data['link']);

  if(mysqli_stmt_execute($stmt)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
}


// Update Event Record
function updateEvent($conn, $data) {
  $stmt = mysqli_prepare($conn, "UPDATE events SET title=?, date=?, description=?, caption=?, link=? WHERE code='" . $data['code'] ."'");
  mysqli_stmt_bind_param($stmt, 'sssss', $data['title'], $data['date'], $data['description'], $data['caption'], $data['link']);

  if(mysqli_stmt_execute($stmt)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
}

// Delete Event
function deleteEvent($conn, $ref) {
  $sql = "DELETE FROM events WHERE code='" . $ref . "'";

  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}

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


/*

Students

*/


// Insert New User
function insertNewStudent($conn, $data) {
  $stmt = mysqli_prepare($conn, "INSERT INTO students VALUES (NULL, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
  mysqli_stmt_bind_param($stmt, 'ssss', $data['student_id'], $data['name'], $data['username'], $data['password']);

  if(mysqli_stmt_execute($stmt)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
}

// Update User Details
function updateStudent($conn, $data) {
  $stmt = mysqli_prepare($conn, "UPDATE students SET name=?, username=?, password=? WHERE student_id='" . $data['student_id'] ."'");
  mysqli_stmt_bind_param($stmt, 'sss', $data['name'], $data['username'], $data['password']);

  if(mysqli_stmt_execute($stmt)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
}

// Delete User
function deleteStudent($conn, $ref) {
  $sql = "DELETE FROM students WHERE student_id='" . $ref . "'";

  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}

// Get Student Details
function getStudent($conn, $ref) {
  $sql = "SELECT * FROM students WHERE student_id='" . $ref . "'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $student = mysqli_fetch_assoc($result);
    return $student;
  }
  return false;
}

// Get All Student Details
function getAllStudents($conn) {
  $sql = "SELECT * FROM students ORDER BY entry_date DESC";
  $result = mysqli_query($conn, $sql);

  $students = [];

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $students[$row['student_id']] = $row;
    }
    return $students;
  } 
  return false;
}



?>