<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>

<?php
$currentFamily = getCurrentFamilyByUserId($_SESSION["id"]);
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
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <a href="edit_family.php?id=<?php echo $data["id"];?>" class="btn btn-warning" style="float: right;margin-right: 25px;">แก้ไข</a>

              <h4>ข้อมูลครอบครัว</h4>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

                <div class="col-md-12">
                  <div class="card">

                    <div class="card-header pb-0">
                      <h6>ข้อมูลบิดา</h6>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">ชื่อ-นามสกุล บิดา : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["father_firstname"];?> <?php echo $currentFamily["father_surname"];?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">อาชีพบิดา : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["father_carrier"];?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">รายได้บิดา : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["father_earning"];?></p>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">เบอร์ติดต่อมารดา : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["father_phone"];?></p>
                          </div>
                        </div>
                      </div>

                      <div class="clearfix"></div>

                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="card">

                    <div class="card-header pb-0">
                      <h6>ข้อมูลมารดา</h6>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">ชื่อ-นามสกุล มารดา : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["mother_firstname"];?> <?php echo $currentFamily["mother_surname"];?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">อาชีพมารดา : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["mother_carrier"];?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">รายได้มารดา : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["mother_earning"];?></p>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">เบอร์ติดต่อบิดา : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["mother_phone"];?></p>
                          </div>
                        </div>
                      </div>



                      <div class="clearfix"></div>

                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="card">

                    <div class="card-header pb-0">
                      <h6>ข้อมูลผู้ปกครอง</h6>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">ชื่อ-นามสกุล ผู้ปกครอง : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["parent_firstname"];?> <?php echo $currentFamily["parent_surname"];?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">อาชีพผู้ปกครอง : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["parent_carrier"];?></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">รายได้ผู้ปกครอง : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["parent_earning"];?></p>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">เบอร์ติดต่อผู้ปกครอง : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["parent_phone"];?></p>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">ความสัมพันธ์ : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["relationship"];?></p>
                          </div>
                        </div>
                      </div>


                      <!-- <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <p class="mb-4 text-sm">ที่อยู่ผู้ปกครอง : </p>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <p class="mb-4 text-sm"><?php echo $currentFamily["parent_home_no"];?> <?php echo $currentFamily["parent_tambol"];?> <?php echo $currentFamily["parent_amphur"];?> <?php echo $currentFamily["parent_province"];?> <?php echo $currentFamily["parent_zipcode"];?></p>
                          </div>
                        </div>
                      </div> -->


                      <div class="clearfix"></div>

                    </div>
                  </div>
                </div>


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