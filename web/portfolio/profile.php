<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>
<?php
$currentUser = getCurrentUser($_SESSION["id"]);
if(isset($_POST["submit"])){
  editProfile($_POST["id"],$_POST["firstname"],$_POST["surname"],$_POST["username"],$_POST["password"]);
}

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


      <form name="prduct_detail_form" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id" value="<?php echo $currentUser["id"];?>">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Proflie ผู้ใช้งาน</h4>
              </div>

              <div class="card-body">
                <div class="row">
                  <fieldset disabled>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">ชื่อ</label>
                        <input type="text" class="form-control" name="firstname" value="<?php echo $currentUser["firstname"];?> <?php echo $currentUser["surname"];?>" required>
                      </div>
                    </div>



                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">ชื่อผู้ใช้งาน</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $currentUser["username"];?>" required>
                      </div>
                    </div>
                  </fieldset>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">รหัสผ่าน</label>
                      <input type="password" class="form-control" name="password" value="<?php echo $currentUser["password"];?>" required>
                    </div>
                  </div>

                  <div align="center">
                    <input type="submit" name="submit" class="btn btn-success btn-round" value="บันทึก">
                    <input type="button" name="button" class="btn btn-danger btn-round" onClick="javascript:history.go(-1)" value="ย้อนกลับ">

                  </div>
                <div class="clearfix"></div>

                </div>
              </div>
          </div>

        </div>
      </form>


      <?php
      require_once("footer.php");
      ?>

    </div>
  </main>

</body>

</html>