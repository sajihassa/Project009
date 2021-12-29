<!DOCTYPE html>
<html lang="en">

<?php
require_once("header.php");
?>

<body class="g-sidenav-show">
    <?php
    require_once("nav.php");
    ?>
    <div class="main-content" id="panel">
    <div class="row">
        <?php
        require_once("slides.php");
        ?>
        <div class="container-fluid pt-3">
            <!-- เลือกแบบ Portfolio -->
            <p class=""></p>
            <div>เลือกแบบ Portfolio</div>
            <p></p>
            <div class="row removable ">
                <div class="col-lg-3 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#Modal">
                    วิศวกรรมโยธา
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog  col-xl-8" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">วิศวกรรมโยธา</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="images/portfolio/p1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio1
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                                        
                </div>
                <div class="col-lg-3 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#Modal2">
                    วิศวกรรมไฟฟ้า
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel2" aria-hidden="true">
                        <div class="modal-dialog  col-xl-8" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel2">วิศวกรรมไฟฟ้า</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="images/portfolio/p2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio1
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                                                                  
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                                        
                </div>                
                <div class="col-lg-3 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#Modal3">
                    ปิโตรเคมีและพอลิเมอร์
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="ModalLabel3" aria-hidden="true">
                        <div class="modal-dialog  col-xl-8" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel3">ปิโตรเคมีและพอลิเมอร์</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio1
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio2
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio3
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                                        
                </div> 
                <div class="col-lg-3 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#Modal4">
                    วิศวกรรมเครื่องกลและหุ่นยนต์
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel4" aria-hidden="true">
                        <div class="modal-dialog  col-xl-8" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel4">วิศวกรรมเครื่องกลและหุ่นยนต์</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio1
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                                        
                </div>           
            </div>
            <div class="row removable">               
                <div class="col-lg-3 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#Modal5">
                    วิศวกรรมเคมีและเคมีเภสัชกรรม
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="ModalLabel5" aria-hidden="true">
                        <div class="modal-dialog  col-xl-8" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel5">วิศวกรรมเคมีและเคมีเภสัชกรรม</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio1
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio2
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio3
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                                        
                </div>                
                <div class="col-lg-3 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#Modal6">
                    วิศวกรรมคอมพิวเตอร์และปัญญาประดิษฐ์
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="Modal6" tabindex="-1" role="dialog" aria-labelledby="ModalLabel6" aria-hidden="true">
                        <div class="modal-dialog  col-xl-8" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel6">วิศวกรรมคอมพิวเตอร์และปัญญาประดิษฐ์</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio1
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio2
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio3
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                                        
                </div>
                <div class="col-lg-3 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#Modal7">
                    วิศวกรรมซอฟต์แวร์
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="Modal7" tabindex="-1" role="dialog" aria-labelledby="ModalLabel7" aria-hidden="true">
                        <div class="modal-dialog  col-xl-8" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel7">วิศวกรรมซอฟต์แวร์</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio1
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio2
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <a href="javascript:;">
                                                <h5>
                                                Portfolio3
                                                </h5>
                                            </a>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>                                          
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                                        
                </div>            
            </div>

            <!-- Portfolio แนะนำ< -->
            <div class="row removable mb-4">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-1">Portfolio แนะนำ</h6>
                            <p class="text-sm"></p>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">

                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="images/portfolio/p1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <p class="text-gradient text-dark mb-2 text-sm">วิศวกรรมโยธา</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Portfolio1
                                                </h5>
                                            </a>                                           
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6 mb-4">

                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                            <img src="images/portfolio/p2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <p class="text-gradient text-dark mb-2 text-sm">วิศวกรรมซอฟต์แวร์</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Portfolio2
                                                </h5>
                                            </a>
                                            
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ขั้นตอนการสร้าง Portfolio -->
            <p class="">ขั้นตอนการสร้าง Portfolio</p>
            <div class="card mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-2 text-bold"></p>
                                <h5 class="font-weight-bolder">
                                    <div>เข้าสู่ระบบ</div>
                                </h5>
                                <p class="mb-5">สมัครเข้าใช้งานระบบหรือเข้าสู่ระบบด้วย Google</p>
                                <h5 class="font-weight-bolder">
                                    <div>เลือกรูปแบบ Portfolio</div>
                                </h5>
                                <p class="mb-5">เลือกรูปแบบ Portfolio ที่ต้องการและกรอกข้อมูลให้ครบถ้วน</p>
                                <h5 class="font-weight-bolder">
                                    <div>รับ Portfolio</div>
                                </h5>
                                <p class="mb-5">กดดาวน์โหลดเพื่อรับ Portfolio และสามารถดาวน์โหลดซ้ำได้</p>   
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                            <div class="bg-gradient-primary border-radius-lg h-100">
                                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                    <img class="w-100 position-relative z-index-2 pt-4" src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/illustrations/rocket-white.png">
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
        
</body>

</html>




