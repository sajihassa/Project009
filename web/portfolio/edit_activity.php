<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>
<?php
$currentActivity = getCurrentActivity($_GET["id"]);

if(isset($_POST["submit"])){
  if($_POST["id"] == ""){
    saveActivity($_POST["users_id"],$_POST["activity_type"],$_POST["activity_topic"],$_POST["activity_detail"],$_FILES["activity_image"]["name"]);
  }else{
    editActivity($_POST["id"],$_POST["users_id"],$_POST["activity_type"],$_POST["activity_topic"],$_POST["activity_detail"],$_FILES["activity_image"]["name"]);
  }
  

}
if($_GET["id"] == ""){
  $txtHead = "เพิ่ม กิจกรรมและผลงาน";
}else{
  $txtHead = "แก้ไข กิจกรรมและผลงาน";
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
        <input type="hidden" class="form-control" name="id" value="<?php echo $currentActivity["id"];?>">
        <input type="hidden" class="form-control" name="users_id" value="<?php echo $_SESSION["id"];?>">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo $txtHead;?></h4>
              </div>

              <div class="card-body">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">ประเภทกิจกรรม</label>
                      <input type="text" class="form-control" name="activity_type" value="<?php echo $currentActivity["activity_type"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">หัวข้อผลงาน/กิจกรรม</label>
                      <input type="text" class="form-control" name="activity_topic" value="<?php echo $currentActivity["activity_topic"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">คำอธิบายผลงาน</label>
                      <input type="text" class="form-control" name="activity_detail" value="<?php echo $currentActivity["activity_detail"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">รูปภาพกิจกรรม</label>
                      <input type="file" class="form-control" name="activity_image">
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