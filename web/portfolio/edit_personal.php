<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>
<?php
$currentStudent = getCurrentStudentByUserId($_SESSION["id"]);
$allProvince = getAllProvince();
$allAmphur = getAllAmphur($currentStudent["province"]);
$allTambol = getAllTambol($currentStudent["amphur"]);

if(isset($_POST["submit"])){

  saveStudent($_POST["users_id"],$_POST["firstname"],$_POST["surname"],$_POST["nickname"],$_POST["id_card"],$_POST["birth_date"],$_POST["sex"],$_POST["ethnicity"],$_POST["nationality"],$_POST["religion"],$_POST["weight"],$_POST["height"],$_POST["email_student"],$_POST["phone_student"],$_POST["motto"],$_POST["disease"],$_POST["facebook"],$_POST["line_id"],$_POST["home_no"],$_POST["tambol"],$_POST["amphur"],$_POST["province"],$_POST["zipcode"],$_FILES["image"]["name"]);
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
        <input type="hidden" class="form-control" name="users_id" value="<?php echo $_SESSION["id"];?>">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">ข้อมูลนักเรียน</h4>
              </div>

              <div class="card-body">
                <legend>ข้อมูลส่วนตัว</legend>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">ชื่อ</label>
                      <input type="text" class="form-control" name="firstname" value="<?php echo $currentStudent["firstname"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">นามสกุล</label>
                      <input type="text" class="form-control" name="surname" value="<?php echo $currentStudent["surname"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">ชื่อเล่น</label>
                      <input type="text" class="form-control" name="nickname" value="<?php echo $currentStudent["nickname"];?>" required>
                    </div>
                  </div>


                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">เลขบัตรประจำตัวประชาชน</label>
                      <input type="text"  maxlength=13 minlength=13 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="id_card" value="<?php echo $currentStudent["id_card"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">วันเกิด</label>
                      <input type="text" class="form-control" name="birth_date" id="birth_date" value="<?php echo formatDateFull($currentStudent["birth_date"]);?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">เพศ</label>
                      <select name="sex" class="form-control" required>
                        <option value="ชาย" <?php if($currentStudent['sex'] == "ชาย"){ ?> selected<?php } ?>>ชาย</option>
                        <option value="หญิง" <?php if($currentStudent['sex'] == "หญิง"){ ?> selected<?php } ?>>หญิง</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="row">
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">เชื้อชาติ</label>
                      <input type="text" class="form-control" name="ethnicity" value="<?php echo $currentStudent["ethnicity"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">สัญชาติ</label>
                      <input type="text" class="form-control" name="nationality" value="<?php echo $currentStudent["nationality"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">ศาสนา</label>
                      <select name="religion" class="form-control" required>
                        <option value="พุทธ" <?php if($currentStudent['religion'] == "พุทธ"){ ?> selected<?php } ?>>พุทธ</option>
                        <option value="อิสลาม" <?php if($currentStudent['religion'] == "อิสลาม"){ ?> selected<?php } ?>>อิสลาม</option>
                        <option value="คริสต์" <?php if($currentStudent['religion'] == "คริสต์"){ ?> selected<?php } ?>>คริสต์</option>
                        <option value="พราหมณ์-ฮินดู" <?php if($currentStudent['religion'] == "พราหมณ์-ฮินดู"){ ?> selected<?php } ?>>พราหมณ์-ฮินดู</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">น้ำหนัก</label>
                      <small id="passwordHelpInline" class="text-muted"> (กิโลกรัม)</small>
                      <input type="text" class="form-control" name="weight" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $currentStudent["weight"];?>" required>

                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">ส่วนสูง</label>
                      <small id="passwordHelpInline" class="text-muted"> (เซนติเมตร) </small>
                      <input type="text" class="form-control" name="height" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $currentStudent["height"];?>" required>
                      </div>
                  </div>

                      <div class="col-md-4">
                        <div class="form-group">
                      <label class="bmd-label-floating">รูปภาพนักเรียน</label>
                      <input type="file" class="form-control" name="image">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">อีเมลนักเรียน</label>
                      <input type="text" class="form-control" name="email_student" value="<?php echo $currentStudent["email_student"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">เบอร์โทรศัพท์นักเรียน</label>
                      <input type="text" maxlength=10 minlength=10 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="phone_student" value="<?php echo $currentStudent["phone_student"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">คติประจำใจ</label>
                      <input type="text" class="form-control" name="motto" value="<?php echo $currentStudent["motto"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">โรคประจำตัว</label>
                      <input type="text" class="form-control" name="disease" value="<?php echo $currentStudent["disease"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Fackbook</label>
                      <input type="text" class="form-control" name="facebook" value="<?php echo $currentStudent["facebook"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Line</label>
                      <input type="text" class="form-control" name="line_id" value="<?php echo $currentStudent["line_id"];?>" required>
                    </div>
                  </div>
                </div>
                <hr/>
                <legend>ที่อยู่</legend>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">บ้านเลขที่</label>
                      <input type="text" class="form-control" name="home_no" value="<?php echo $currentStudent["home_no"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">จังหวัด</label>
                      <select name="province" class="form-control" id="province">
                        <option value="">-- โปรดเลือก --</option>
                        <?php foreach($allProvince as $dataProvince){ ?>
                          <?php $selected = "";
                          if($currentStudent['province'] == $dataProvince['id']){
                            $selected = " selected";

                          }
                          ?>
                          <option value="<?php echo $dataProvince['id']?>" <?php echo $selected;?>><?php echo $dataProvince['name_th']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">อำเภอ</label>
                      <?php if($currentStudent["amphur"] == "" || $currentStudent["amphur"] == 0){ ?>
                        <select name="amphur" class="form-control" id="amphures"></select>
                      <?php }else{ ?>
                        <select name="amphur" class="form-control" id="amphures">
                          <option value="">-- โปรดเลือก --</option>
                          <?php foreach($allAmphur as $dataAm){ ?>
                            <?php $selected = "";
                            if($currentStudent['amphur'] == $dataAm['id']){
                              $selected = " selected";

                            }
                            ?>
                            <option value="<?php echo $dataAm['id']?>" <?php echo $selected;?>><?php echo $dataAm['name_th']?></option>
                          <?php } ?>
                        </select>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">ตำบล</label>

                      <?php if($currentStudent["tambol"] == "" || $currentStudent["tambol"] == 0){ ?>
                        <select name="tambol" class="form-control" id="districts"></select>
                      <?php }else{ ?>
                        <select name="tambol" class="form-control" id="districts">
                          <option value="">-- โปรดเลือก --</option>
                          <?php foreach($allTambol as $dataTam){ ?>
                            <?php $selected = "";
                            if($currentStudent['tambol'] == $dataTam['id']){
                              $selected = " selected";

                            }
                            ?>
                            <option value="<?php echo $dataTam['id']?>" <?php echo $selected;?>><?php echo $dataTam['name_th']?></option>
                          <?php } ?>
                        </select>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">รหัสไปรษณีย์</label>
                      <input type="text" class="form-control" name="zipcode" id="zip_code" value="<?php echo $currentStudent["zipcode"];?>" required>
                    </div>
                  </div>
                </div>

                <hr/>

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


      <script>
        $(function() {
          $("#amphur").autocomplete({
            source: "api/api.php?load=allAmphur",
            select: function( event, ui ) {
              event.preventDefault();
              $("#amphur").val(ui.item.value);
            }
          });
        });
      </script>
      <script>
        $(function() {
          $("#province").autocomplete({
            source: "api/api.php?load=allProvince",
            select: function( event, ui ) {
              event.preventDefault();
              $("#province").val(ui.item.value);
            }
          });
        });
      </script>

      <script>
        $(function(){
          var defaultOption = '<option value=""> ------- เลือก ------ </option>';
          $('#province').change(function() {
            $("#amphures").html(defaultOption);
            $.ajax({
      // A string containing the URL to which the request is sent.
      url: "json_filter/jsonAction.php",
      // Data to be sent to the server.
      data: ({ nextList : 'amphures', provinceId: $('#province').val() }),
      // The type of data that you're expecting back from the server.
      dataType: "json",
      beforeSend: function() {
      },
      // success is called if the request succeeds.
      success: function(json){
        // Iterate over a jQuery object, executing a function for each matched element.
        $.each(json, function(index, value) {
          // Insert content, specified by the parameter, to the end of each element
          // in the set of matched elements.
          $("#amphures").append('<option value="' + value.id + '">' + value.name_th + '</option>');
        });
      }
    });
          });

          $('#amphures').change(function() {
            $("#districts").html(defaultOption);
            $.ajax({
      // A string containing the URL to which the request is sent.
      url: "json_filter/jsonAction.php",
      // Data to be sent to the server.
      data: ({ nextList : 'districts', amphuresId: $('#amphures').val() }),
      // The type of data that you're expecting back from the server.
      dataType: "json",
      beforeSend: function() {
      },
      // success is called if the request succeeds.
      success: function(json){
        // Iterate over a jQuery object, executing a function for each matched element.
        $.each(json, function(index, value) {
          // Insert content, specified by the parameter, to the end of each element
          // in the set of matched elements.
          $("#districts").append('<option value="' + value.id + '">' + value.name_th + '</option>');
        });
      }
    });
          });

          $('#districts').change(function() {
            var dis_id = $('#districts').val();
            $.get('api/api.php?load=zip_code&dis_id='+dis_id,function(data){
              equ_line = jQuery.parseJSON(data);
              for (var i = 0, len = equ_line.length; i < len; i++) {
                $('#zip_code').val(equ_line[i].zip_code);
              }


            });
          });




        });
      </script>

      <script>

      $('#birth_date').datetimepicker({
        lang:'th',
        timepicker:false,
        format:'d/m/Y'
      });


    </script>


      <?php
      require_once("footer.php");
      ?>

    </div>
  </main>

</body>

</html>