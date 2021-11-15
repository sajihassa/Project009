<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>
<?php
$allEducation = getAllEducation($_SESSION["id"]);
if (isset($_GET['delete'])) {
  deleteEducation($_GET['delete']);
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


      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>ข้อมูลการศึกษา</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <a href="edit_education.php" class="btn btn-success" style="float: right;margin-right: 25px;">เพิ่ม</a>
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
                      <th></th>
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
                          <td style="text-align: right;">
                            <a href="edit_education.php?id=<?php echo $data["id"];?>" class="btn btn-warning">แก้ไข</a>
                            <a href="?delete=<?php echo $data['id'];?>" class="btn btn-danger" onClick="javascript: return confirm('ยืนยันการลบ');">ลบ</a>
                          </td>
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