<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>
<?php
$currentStudent = getCurrentStudentByUserId($_SESSION["id"]);
$currentFamily = getCurrentFamilyByUserId($_SESSION["id"]);
$allEducation = getAllEducation($_SESSION["id"]);
$allActivity = getAllActivity($_SESSION["id"]);
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
              <h4 class="card-title">ข้อมูลส่วนตัว</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <p class="mb-4 text-sm">รหัสนักเรียน : </p>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <p class="mb-4 text-sm"><?php echo $currentStudent["student_id"];?></p>
                  </div>
                </div>
              </div>
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
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>ข้อมูลการศึกษา</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-left">
                  <thead>
                    <tr>
                      <th>ระดับการศึกษา</th>
                      <th>แผนการเรียน</th>
                      <th>เกรดเฉลี่ย</th>
                      <th>โรงเรียน</th>
                      <th>จังหวัด</th>
                      <th>ปีการศึกษาที่เริ่ม</th>
                      <th>ปีการศึกษาที่จบ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(empty($allEducation)){ ?>
                    <?php }else{?>
                      <?php foreach($allEducation as $data){ ?>
                        <tr>
                          <td><?php echo $data["study_class"];?></td>
                          <td><?php echo $data["type_study"];?></td>
                          <td><?php echo $data["grade"];?></td>
                          <td><?php echo $data["school"];?></td>
                          <td><?php echo $data["province"];?></td>
                          <td><?php echo $data["start_year"];?></td>
                          <td><?php echo $data["end_year"];?></td>
                        </tr>
                      <?php } ?>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br/>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>ข้อมูลกิจกรรมและผลงาน</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-left">
                  <thead>
                    <tr>
                      <th></th>
                      <th>ประเภทกิจกรรม</th>
                      <th>หัวข้อผลงาน/กิจกรรม</th>
                      <th>คำอธิบายผลงาน</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(empty($allActivity)){ ?>
                    <?php }else{?>
                      <?php foreach($allActivity as $data){ ?>
                        <tr>
                          <td style="text-align: center;"><img src="images/activity/<?php echo $data["activity_image"];?>" class="img-fluid" style="width: 80px;height: 80px;"></td>
                          <td><?php echo $data["activity_type"];?></td>
                          <td><?php echo $data["activity_topic"];?></td>
                          <td><?php echo $data["activity_detail"];?></td>
                        </tr>
                      <?php } ?>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      <?php
      require_once("footer.php");
      ?>

    </div>
  </main>
  
</body>

</html>