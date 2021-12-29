<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>
<?php
$currentEducation = getCurrentEducation($_GET["id"]);
if(isset($_POST["submit"])){
  if($_POST["id"] == ""){
    saveEducation($_POST["users_id"],$_POST["study_class"],$_POST["type_study"],$_POST["grade"],$_POST["school"],$_POST["province"],$_POST["start_year"],$_POST["end_year"]);
  }else{
    editEducation($_POST["id"],$_POST["users_id"],$_POST["study_class"],$_POST["type_study"],$_POST["grade"],$_POST["school"],$_POST["province"],$_POST["start_year"],$_POST["end_year"]);
  }


}
if($_GET["id"] == ""){
  $txtHead = "เพิ่ม การศึกษา";
}else{
  $txtHead = "แก้ไข การศึกษา";
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
        <input type="hidden" class="form-control" name="id" value="<?php echo $currentEducation["id"];?>">
        <input type="hidden" class="form-control" name="users_id" value="<?php echo $_SESSION["id"];?>">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo $txtHead;?></h4>
              </div>

              <div class="card-body">

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">ระดับการศึกษา</label>
                      <select name="study_class" class="form-control" required>
                        <option value="">-- โปรดระบุ --</option>
                        <option value="ประถมศึกษา" <?php if($currentEducation['study_class'] == "ประถมศึกษา"){ ?> selected<?php } ?>>ประถมศึกษา</option>
                        <option value="มัธยมศึกษาตอนต้น" <?php if($currentEducation['study_class'] == "มัธยมศึกษาตอนต้น"){ ?> selected<?php } ?>>มัธยมศึกษาตอนต้น</option>
                        <option value="มัธยมศึกษาตอนปลาย" <?php if($currentEducation['study_class'] == "มัธยมศึกษาตอนปลาย"){ ?> selected<?php } ?>>มัธยมศึกษาตอนปลาย</option>
                      </select>

                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">แผนการเรียน</label>
                      <select name="type_study" class="form-control" required>
                        <option value="">-- โปรดระบุ --</option>
                        <option value="วิทย์-คณิต" <?php if($currentEducation['type_study'] == "วิทย์-คณิต"){ ?> selected<?php } ?>>วิทย์-คณิต</option>
                        <option value="ศิลป์-คำนวณ" <?php if($currentEducation['type_study'] == "ศิลป์-คำนวณ"){ ?> selected<?php } ?>>ศิลป์-คำนวณ</option>
                      </select>

                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">เกรดเฉลี่ย</label>
                      <input type="text" class="form-control" name="grade" value="<?php echo $currentEducation["grade"];?>" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">โรงเรียน</label>
                      <input type="text" class="form-control" name="school" value="<?php echo $currentEducation["school"];?>" required>
                    </div>
                  </div>

                  <div class="col-md 4">
                    <div class="form-group">
                      <label class="bmd-label-floating">จังหวัด</label>
                      <input type="text" class="form-control" name="province" value="<?php echo $currentEducation["province"];?>" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">ปีการศึกษาที่เริ่ม</label>
                      <input type="text" class="form-control" name="start_year" value="<?php echo $currentEducation["start_year"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">ปีการศึกษาที่จบ</label>
                      <input type="text" class="form-control" name="end_year" value="<?php echo $currentEducation["end_year"];?>" required>
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