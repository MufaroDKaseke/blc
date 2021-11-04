<?php
require '../../includes/db_connect.php';
require './functions.php';

if (isset($_GET['action']) && $_GET['action'] === 'update_user') {

  $user = getUser($conn, $_GET['user_id']);
  $user = (object) $user;

  ?>
  <form action="users.php" method="post">
    <div class="form-row">
      <div class="col-12">
        <label for="">Name Of Student</label>
        <input type="text" name="name" value="<?php echo $user->name;?>" id="" class="form-control form-control-sm mb-2" placeholder="Name">
      </div>
      <div class="col-12">
        <label for="">Username</label>
        <input type="text" name="username" value="<?php echo $user->username;?>" id="" class="form-control form-control-sm mb-2" placeholder="Username">
      </div>
      <div class="col-12">
        <label for="">Password</label>
        <input type="text" name="password" value="<?php echo $user->password;?>" id="" class="form-control form-control-sm mb-2" placeholder="Password">
      </div>
      <div class="col-12">
        <hr class="my-3">
        <!-- Student Id -->
        <input type="hidden" name="user_id" value="<?php echo $user->user_id?>">
        <button type="submit" name="action" value="update_user" class="btn btn-success btn-block">Update User</button>
      </div>
    </div>
  </form>
  <?php
}
?>

