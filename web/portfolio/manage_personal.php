<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>

<?php
$currentStudent = getCurrentStudentByUserId($_SESSION["id"]);
?>

<body class="g-sidenav-show  bg-gray-100">
  <?php
  require_once("side_bar.php");
  ?>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <?php
    require_once("nav.php");
    ?>
    <div class="container-fluid py-4">

      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
            <a href="edit_personal.php?id=<?php echo $data["id"];?>" class="btn btn-warning" style="float: right;margin-right: 25px;">แก้ไข</a>

              <h4 class="card-title">ข้อมูลส่วนตัว</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">ชื่อ-นามสกุล : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["firstname"];?> <?php echo $currentStudent["surname"];?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">ชื่อเล่น : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["nickname"];?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">เลขบัตรประจำตัวประชาชน : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["id_card"];?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">วันเกิด : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo formatDateFull($currentStudent["birth_date"]);?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">เพศ : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["sex"];?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">เชื้อชาติ : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["ethnicity"];?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">สัญชาติ : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["nationality"];?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">ศาสนา : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["religion"];?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">น้ำหนัก : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["weight"];?> กก.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">ส่วนสูง : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["height"];?> ซม.</p>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img class="img-fluid shadow border-radius-xl" src="images/student/<?php echo $currentStudent["image"];?>" />
          </div>
        </div>
      </div>
      <br/>


      <?php
      require_once("footer.php");
      ?>

    </div>
  </main>

</body>

</html>