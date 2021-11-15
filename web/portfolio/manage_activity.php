<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>
<?php
$allActivity = getAllActivity($_SESSION["id"]);
if (isset($_GET['delete'])) {
  deleteActivity($_GET['delete']);
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
              <h6>ข้อมูลกิจกรรมและผลงาน</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <a href="edit_activity.php" class="btn btn-success" style="float: right;margin-right: 25px;">เพิ่ม</a>
                <table class="table align-items-left">
                  <thead>
                    <tr>
                      <th></th>
                      <th>ประเภทกิจกรรม</th>
                      <th>หัวข้อผลงาน/กิจกรรม</th>
                      <th>คำอธิบายผลงาน</th>
                      <th></th>
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
                          <td style="text-align: right;">
                            <a href="edit_activity.php?id=<?php echo $data["id"];?>" class="btn btn-warning">แก้ไข</a>
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