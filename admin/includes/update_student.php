<?php
require '../../includes/db_connect.php';
require './functions.php';

if (isset($_GET['action']) && $_GET['action'] === 'update_student') {

  $student = getStudent($conn, $_GET['student_id']);
  $student = (object) $student;

  ?>
  <form action="students.php" method="post">
    <div class="form-row">
      <div class="col-12">
        <label for="">Name Of Student</label>
        <input type="text" name="name" value="<?php echo $student->name;?>" id="" class="form-control form-control-sm mb-2" placeholder="Name">
      </div>
      <div class="col-12">
        <label for="">Username</label>
        <input type="text" name="username" value="<?php echo $student->username;?>" id="" class="form-control form-control-sm mb-2" placeholder="Username">
      </div>
      <div class="col-12">
        <label for="">Password</label>
        <input type="text" name="password" value="<?php echo $student->password;?>" id="" class="form-control form-control-sm mb-2" placeholder="Password">
      </div>
      <div class="col-12">
        <hr class="my-3">
        <!-- Student Id -->
        <input type="hidden" name="student_id" value="<?php echo $student->student_id?>">
        <button type="submit" name="action" value="update_student" class="btn btn-success btn-block">Update Student</button>
      </div>
    </div>
  </form>
  <?php
}
?>

