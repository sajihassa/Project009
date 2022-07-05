	<?php
	if (isset($_GET['logout'])) {
		logout();
	}

	?>
	<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
		<div class="sidenav-header">
			<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
			<a class="navbar-brand m-0" href="#" target="_blank">
				<img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
				<span class="ms-1 font-weight-bold">Portfolio</span>
			</a>
		</div>
		<hr class="horizontal dark mt-0">
		<div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
			<ul class="navbar-nav">
				<?php if($_SESSION["id"] == "" && empty($_SESSION["id"])){ ?>
					<li class="nav-item">
						<a class="nav-link " href="index.php">
							<span class="nav-link-text ms-1">เข้าสู่ระบบ</span>
						</a>
					</li>
				<?php }else{ ?>

					<li class="nav-item">
						<a class="nav-link " href="dashboard.php">
							<span class="nav-link-text ms-1">หน้าหลัก</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  " href="manage_personal.php">
							<span class="nav-link-text ms-1">ข้อมูลนักเรียน</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  " href="manage_family.php">
							<span class="nav-link-text ms-1">ข้อมูลครอบครัว</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  " href="manage_education.php">
							<span class="nav-link-text ms-1">ข้อมูลการศึกษา</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  " href="manage_activity.php">
							<span class="nav-link-text ms-1">ข้อมูลกิจกรรมและผลงาน</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  " href="all_portfolio.php">
							<span class="nav-link-text ms-1">ตัวอย่าง Portfolio</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  " href="profile.php">
							<span class="nav-link-text ms-1">Profile</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  " href="?logout=true">
							<span class="nav-link-text ms-1">ออกจากระบบ</span>
						</a>
					</li>
				<?php } ?>

			</ul>
		</div>

	</aside>