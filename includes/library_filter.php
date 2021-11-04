<?php
require './config.php';
require './db_connect.php';
require './library_processes.php';


// Libary Filter
if (isset($_POST['filterType'])) {

  $filterType = $_POST['filterType'];

  if ($filterType === 'category') {
    $category = $_POST['filterVal'];

    $materials = getMaterialsByCategory($conn, $category);

    if ($materials !== false) {
      foreach ($materials as $material) {
        $material = (object) $material;
        ?>
        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="material-container">
            <img src="<?=ROOT;?>/uploads/captions/<?=$material->preview;?>" width="100%" alt="" class="img-fluid material-img">
            <a href="<?=ROOT;?>/uploads/materials/<?=$material->link;?>" class="material-name"><?=$material->title;?></a>
            <span class="material-author"><?=$material->author;?></span>
          </div>
        </div>

        <?php
      }
    }  else {
      ?>
      <div class="col">
        <p class="text-muted text-center">No '<?=$category;?>' materials found!</p>
      </div>
      <?php
    }
    // code...
  } else if ($filterType === 'filter-by') {
    $filterBy = $_POST['filterVal'];

    switch ($filterBy) {
      case 'recent':
      $materials = getAllMaterials($conn);
      break;
      case 'title':
      $materials = getMaterialsByTitle($conn);
      break;
      default:
      $materials = false;
      break;
    }

    if ($materials !== false) {
      foreach ($materials as $material) {
        $material = (object) $material;
        ?>
        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="material-container">
            <img src="<?=ROOT;?>/uploads/captions/<?=$material->preview;?>" width="100%" alt="" class="img-fluid material-img">
            <a href="<?=ROOT;?>/uploads/materials/<?=$material->link;?>" class="material-name"><?=$material->title;?></a>
            <span class="material-author"><?=$material->author;?></span>
          </div>
        </div>

        <?php
      }
    }  else {
      ?>
      <div class="col">
        <p class="text-muted text-center">No materials found!</p>
      </div>
      <?php
    }


  }
}
?>