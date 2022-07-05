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
              <h6>Template Portfolio</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">

              <!-- Template Port-->
              <div class="col-lg-3 col-sm-6">
                <div class="card">
                  <a href="pdf_port1.php" style="text-align:center;" target="_blank">
                    <img src="images/template.jpg"  class="img-fluid" style="width: 80px;height: 80px;">
                    <hr />
                    <div class="stats">
                      <p style="text-align:center;"><a href="pdf_port1.php" class="btn btn-warning" target="_blank">แสดง</a></p>
                    </div>
                  </a>
                </div>
              </div>
              <!-- Template Port-->


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