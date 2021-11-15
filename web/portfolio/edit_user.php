<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>
<?php
$currentUser = getCurrentUser($_GET["id"]);
if(isset($_POST["submit"])){
  if($_POST["id"] == ""){
    saveUser($_POST["user_number"],$_POST["password"],$_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["telephone"],$_POST["status"]);
  }else{
    editUser($_POST["id"],$_POST["user_number"],$_POST["password"],$_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["telephone"],$_POST["status"]);
  }
  

}
if($_GET["id"] == ""){
  $txtHead = "เพิ่ม ข้อมูลใหม่";
}else{
  $txtHead = "แก้ไข ข้อมูล";
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
                <h4 class="card-title"><?php echo $txtHead;?></h4>
              </div>

              <div class="card-body">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">รหัสผู้ดูแลระบบ/รหัสผู้ใช้งานระบบ</label>
                      <input type="text" class="form-control" name="user_number" value="<?php echo $currentUser["user_number"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">รหัสผ่าน</label>
                      <input type="password" class="form-control" name="password" value="<?php echo $currentUser["password"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">ชื่อ</label>
                      <input type="text" class="form-control" name="firstname" value="<?php echo $currentUser["firstname"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">นามสกุล</label>
                      <input type="text" class="form-control" name="lastname" value="<?php echo $currentUser["lastname"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">อีเมล</label>
                      <input type="text" class="form-control" name="email" value="<?php echo $currentUser["email"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">เบอร์โทร</label>
                      <input type="text" class="form-control" name="telephone" value="<?php echo $currentUser["telephone"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">สถานะ</label>
                      <select name="status" class="form-control" required>
                        <option value="">-- โปรดระบุ --</option>
                        <option value="1" <?php if($currentUser['status'] == 1){ ?> selected<?php } ?>>ผู้ใช้งานระบบ</option>
                        <option value="2" <?php if($currentUser['status'] == 2){ ?> selected<?php } ?>>ผู้ดูแลระบบ</option>
                      </select>
                    </div>
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