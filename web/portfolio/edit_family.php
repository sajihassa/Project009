<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>
<?php
$currentFamily = getCurrentFamilyByUserId($_SESSION["id"]);
$allProvince = getAllProvince();
$allAmphur = getAllAmphur($currentFamily["parent_province"]);
$allTambol = getAllTambol($currentFamily["parent_amphur"]);
if(isset($_POST["submit"])){
  saveFamily($_POST["users_id"],$_POST["father_firstname"],$_POST["father_surname"],$_POST["father_carrier"],$_POST["father_earning"],$_POST["father_phone"],$_POST["mother_firstname"],$_POST["mother_surname"],$_POST["mother_carrier"],$_POST["mother_earning"],$_POST["mother_phone"],$_POST["parent_firstname"],$_POST["parent_surname"],$_POST["parent_carrier"],$_POST["parent_earning"],$_POST["parent_phone"],$_POST["relationship"],$_POST["parent_home_no"],$_POST["parent_tambol"],$_POST["parent_amphur"],$_POST["parent_province"],$_POST["parent_zipcode"]);
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
                <h4 class="card-title">ข้อมูลครอบครัว</h4>
              </div>

              <div class="card-body">
                <legend>ข้อมูลบิดา</legend>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">ชื่อบิดา</label>
                      <input type="text" class="form-control" name="father_firstname" value="<?php echo $currentFamily["father_firstname"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">นามสกุลบิดา</label>
                      <input type="text" class="form-control" name="father_surname" value="<?php echo $currentFamily["father_surname"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">อาชีพบิดา</label>
                      <input type="text" class="form-control" name="father_carrier" value="<?php echo $currentFamily["father_carrier"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">รายได้บิดา</label>
                      <input type="text" class="form-control" name="father_earning" value="<?php echo $currentFamily["father_earning"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">หมายเลขโทรศัพท์บิดา</label>
                      <input type="text" maxlength=10 minlength=10 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="father_phone" value="<?php echo $currentFamily["father_phone"];?>" required>
                    </div>
                  </div>
                </div>
                <hr/>
                <legend>ข้อมูลผู้มารดา</legend>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">ชื่อมารดา</label>
                      <input type="text" class="form-control" name="mother_firstname" value="<?php echo $currentFamily["mother_firstname"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">นามสกุลมารดา</label>
                      <input type="text" class="form-control" name="mother_surname" value="<?php echo $currentFamily["mother_surname"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">อาชีพมารดา</label>
                      <input type="text" class="form-control" name="mother_carrier" value="<?php echo $currentFamily["mother_carrier"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">รายได้มารดา</label>
                      <input type="text" class="form-control" name="mother_earning" value="<?php echo $currentFamily["mother_earning"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">หมายเลขโทรศัพท์มารดา</label>
                      <input type="text"  maxlength=10 minlength=10 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="mother_phone" value="<?php echo $currentFamily["mother_phone"];?>" required>
                    </div>
                  </div>
                </div>
                <hr/>
                <legend>ข้อมูลผู้ปกครอง</legend>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">ชื่อผู้ปกครอง</label>
                      <input type="text" class="form-control" name="parent_firstname" value="<?php echo $currentFamily["parent_firstname"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">นามสกุลผู้ปกครอง</label>
                      <input type="text" class="form-control" name="parent_surname" value="<?php echo $currentFamily["parent_surname"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">อาชีพผู้ปกครอง</label>
                      <input type="text" class="form-control" name="parent_carrier" value="<?php echo $currentFamily["parent_carrier"];?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">รายได้ผู้ปกครอง</label>
                      <input type="text" class="form-control" name="parent_earning" value="<?php echo $currentFamily["parent_earning"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">หมายเลขโทรศัพท์ผู้ปกครอง</label>
                      <input type="text"  maxlength=10 minlength=10 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="parent_phone" value="<?php echo $currentFamily["parent_phone"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">ความสัมพันธ์</label>
                      <select name="relationship" class="form-control" required>
                        <option value="">-- โปรดระบุ --</option>
                        <option value="บิดา" <?php if($currentFamily['relationship'] == "บิดา"){ ?> selected<?php } ?>>บิดา</option>
                        <option value="มารดา" <?php if($currentFamily['relationship'] == "มารดา"){ ?> selected<?php } ?>>มารดา</option>
                        <option value="ลุง / ป้า" <?php if($currentFamily['relationship'] == "ลุง / ป้า"){ ?> selected<?php } ?>>ลุง / ป้า</option>
                        <option value="น้า / อา" <?php if($currentFamily['relationship'] == "น้า / อา"){ ?> selected<?php } ?>>น้า / อา</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">บ้านเลขที่</label>
                      <input type="text" class="form-control" name="parent_home_no" value="<?php echo $currentFamily["parent_home_no"];?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">จังหวัด</label>
                      <select name="parent_province" class="form-control" id="province">
                        <option value="">-- โปรดเลือก --</option>
                        <?php foreach($allProvince as $dataProvince){ ?>
                          <?php $selected = "";
                          if($currentFamily['parent_province'] == $dataProvince['id']){
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
                      <!--<input type="text" class="form-control" name="parent_amphur" value="<?php echo $currentFamily["parent_amphur"];?>" required>-->
                      <?php if($currentFamily["parent_amphur"] == "" || $currentFamily["parent_amphur"] == 0){ ?>
                        <select name="parent_amphur" class="form-control" id="amphures"></select>
                      <?php }else{ ?>
                        <select name="parent_amphur" class="form-control" id="amphures">
                          <option value="">-- โปรดเลือก --</option>
                          <?php foreach($allAmphur as $dataAm){ ?>
                            <?php $selected = "";
                            if($currentFamily['parent_amphur'] == $dataAm['id']){
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
                      <!--<input type="text" class="form-control" name="parent_tambol" value="<?php echo $currentFamily["parent_tambol"];?>" required>-->
                      <?php if($currentFamily["parent_tambol"] == "" || $currentFamily["parent_tambol"] == 0){ ?>
                        <select name="parent_tambol" class="form-control" id="districts"></select>
                      <?php }else{ ?>
                        <select name="parent_tambol" class="form-control" id="districts">
                          <option value="">-- โปรดเลือก --</option>
                          <?php foreach($allTambol as $dataTam){ ?>
                            <?php $selected = "";
                            if($currentFamily['parent_tambol'] == $dataTam['id']){
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
                      <input type="text" class="form-control" name="parent_zipcode" id="zip_code" value="<?php echo $currentFamily["parent_zipcode"];?>" required>
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


      <?php
      require_once("footer.php");
      ?>

    </div>
  </main>

</body>

</html>