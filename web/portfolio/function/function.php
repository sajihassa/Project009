<?php
error_reporting(0);

//เชื่อมต่อ Database
$con = mysqli_connect("localhost","root","","portfolio");

$con->set_charset("utf8");
date_default_timezone_set("Asia/Bangkok");

function checkLogin($username,$password){
	$data = array();
	global $con;
	$sql = "select * from users where username = '".$username."' AND password='".$password."'";
	$res = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($res)) {
		$data['id'] = $row['id'];

	}
	if (!empty($data)) {

		session_start();
		$id = $data['id'];
		$_SESSION['id'] = $data['id'];
		echo ("<script language='JavaScript'>
			window.location.href='dashboard.php';
			</script>");

	}else{
		echo "<script type='text/javascript'>alert('ไม่สามารถเข้าสู่ระบบได้ ');</script>";
	}

	mysqli_close($con);

}


function logout(){
	session_start();
	session_unset();
	session_destroy();
	echo ("<script language='JavaScript'>
		window.location.href='index.php';
		</script>");
	exit();
}

function getUser($id){

	global $con;

	$res = mysqli_query($con,"SELECT * FROM users WHERE id = '".$id."'");
	$result=mysqli_fetch_array($res,MYSQLI_ASSOC);
	return $result;

	mysqli_close($con);

}

function formatDateFull($date){
	if($date=="0000-00-00"){
		return "";
	}
	if($date=="")
		return $date;
	$raw_date = explode("-", $date);
	return  $raw_date[2] . "/" . $raw_date[1] . "/" . $raw_date[0];
}

function saveRegister($firstname,$surname,$username,$password){
	global $con;

	$sql = "INSERT INTO users (firstname,surname,username, password) VALUES('".$firstname."','".$surname."','".$username."','".$password."')";
	mysqli_query($con,$sql);

	mysqli_close($con);
	echo ("<script language='JavaScript'>
		alert('ลงทะเบียนเรียบร้อย');
		window.location.href='index.php';
		</script>");
}

function saveStudent($users_id,$firstname,$surname,$nickname,$id_card,$birth_date,$sex,$ethnicity,$nationality,$religion,$weight,$height,$email_student,$phone_student,$motto,$disease,$facebook,$line_id,$home_no,$tambol,$amphur,$province,$zipcode,$image){
	global $con;

	$arrDateNow = explode("/", $birth_date);
	$convert_birth_date = $arrDateNow[2].'-'.$arrDateNow[1].'-'.$arrDateNow[0];

	$sql_check = "select * from students where users_id = '".$users_id."' ";
	$res = mysqli_query($con,$sql_check);

	while($row = mysqli_fetch_array($res)) {
		$data['users_id'] = $row['users_id'];

	}
	if (empty($data)) {

		if($image != null){
			if(move_uploaded_file($_FILES["image"]["tmp_name"],"images/student/".$_FILES["image"]["name"]))
			{

				$sql_ins = "INSERT INTO students (users_id, firstname, surname, nickname, id_card, birth_date, sex, ethnicity, nationality, religion, weight, height, email_student, phone_student, motto, disease, facebook, line_id, home_no, tambol, amphur, province, zipcode, image) VALUES('".$users_id."','".$firstname."','".$surname."','".$nickname."','".$id_card."','".$convert_birth_date."','".$sex."','".$ethnicity."','".$nationality."','".$religion."','".$weight."','".$height."','".$email_student."','".$phone_student."','".$motto."','".$disease."','".$facebook."','".$line_id."','".$home_no."','".$tambol."','".$amphur."','".$province."','".$zipcode."','".$_FILES["image"]["name"]."')";
				mysqli_query($con,$sql_ins);

			}
		}else{

			$sql_ins = "INSERT INTO students (users_id, firstname, surname, nickname, id_card, birth_date, sex, ethnicity, nationality, religion, weight, height, email_student, phone_student, motto, disease, facebook, line_id, home_no, tambol, amphur, province, zipcode) VALUES('".$users_id."','".$firstname."','".$surname."','".$nickname."','".$id_card."','".$convert_birth_date."','".$sex."','".$ethnicity."','".$nationality."','".$religion."','".$weight."','".$height."','".$email_student."','".$phone_student."','".$motto."','".$disease."','".$facebook."','".$line_id."','".$home_no."','".$tambol."','".$amphur."','".$province."','".$zipcode."')";
			mysqli_query($con,$sql_ins);

		}

	}else{

		if($image != null){
			if(move_uploaded_file($_FILES["image"]["tmp_name"],"images/student/".$_FILES["image"]["name"]))
			{
				$sql_update = "UPDATE students SET firstname='".$firstname."',surname='".$surname."',nickname='".$nickname."',id_card='".$id_card."',birth_date='".$convert_birth_date."',sex='".$sex."',ethnicity='".$ethnicity."',nationality='".$nationality."',religion='".$religion."',weight='".$weight."',height='".$height."',email_student='".$email_student."',phone_student='".$phone_student."',motto='".$motto."',disease='".$disease."',facebook='".$facebook."',line_id='".$line_id."',home_no='".$home_no."',tambol='".$tambol."',amphur='".$amphur."',province='".$province."',zipcode='".$zipcode."',image='".$_FILES["image"]["name"]."' WHERE users_id = '".$users_id."'";
				mysqli_query($con,$sql_update);
			}
		}else{

			$sql_update = "UPDATE students SET firstname='".$firstname."',surname='".$surname."',nickname='".$nickname."',id_card='".$id_card."',birth_date='".$convert_birth_date."',sex='".$sex."',ethnicity='".$ethnicity."',nationality='".$nationality."',religion='".$religion."',weight='".$weight."',height='".$height."',email_student='".$email_student."',phone_student='".$phone_student."',motto='".$motto."',disease='".$disease."',facebook='".$facebook."',line_id='".$line_id."',home_no='".$home_no."',tambol='".$tambol."',amphur='".$amphur."',province='".$province."',zipcode='".$zipcode."' WHERE users_id = '".$users_id."'";
			mysqli_query($con,$sql_update);

		}
	}

	mysqli_close($con);
	echo ("<script language='JavaScript'>
		alert('บันทึกข้อมูลเรียบร้อย');
		window.location.href='manage_personal.php';
		</script>");
}

function getCurrentStudentByUserId($users_id){

	global $con;
	$sql = "SELECT *,s.id as sid,p.name_th as pname_th,a.name_th as aname_th,d.name_th as dname_th
	FROM students s
	LEFT JOIN provinces p ON s.province = p.id
	LEFT JOIN amphures a ON s.amphur = a.id
	LEFT JOIN districts d ON s.tambol = d.id
	WHERE s.users_id = '".$users_id."'";
	$res = mysqli_query($con,$sql);
	$result=mysqli_fetch_array($res,MYSQLI_ASSOC);
	return $result;

	mysqli_close($con);

}

function saveFamily($users_id,$father_firstname,$father_surname,$father_carrier,$father_earning,$father_phone,$mother_firstname,$mother_surname,$mother_carrier,$mother_earning,$mother_phone,$parent_firstname,$parent_surname,$parent_carrier,$parent_earning,$parent_phone,$relationship,$parent_home_no,$parent_tambol,$parent_amphur,$parent_province,$parent_zipcode){
	global $con;

	$sql_check = "select * from families where users_id = '".$users_id."' ";
	$res = mysqli_query($con,$sql_check);

	while($row = mysqli_fetch_array($res)) {
		$data['users_id'] = $row['users_id'];

	}
	if (empty($data)) {

		$sql_ins = "INSERT INTO families (users_id, father_firstname, father_surname, father_carrier, father_earning, father_phone, mother_firstname, mother_surname, mother_carrier, mother_earning, mother_phone, parent_firstname, parent_surname, parent_carrier, parent_earning, parent_phone, relationship, parent_home_no, parent_tambol, parent_amphur, parent_province, parent_zipcode) VALUES('".$users_id."','".$father_firstname."','".$father_surname."','".$father_carrier."','".$father_earning."','".$father_phone."','".$mother_firstname."','".$mother_surname."','".$mother_carrier."','".$mother_earning."','".$mother_phone."','".$parent_firstname."','".$parent_surname."','".$parent_carrier."','".$parent_earning."','".$parent_phone."','".$relationship."','".$parent_home_no."','".$parent_tambol."','".$parent_amphur."','".$parent_province."','".$parent_zipcode."')";
		mysqli_query($con,$sql_ins);

	}else{
		$sql_update = "UPDATE families SET father_firstname='".$father_firstname."',father_surname='".$father_surname."',father_carrier='".$father_carrier."',father_earning='".$father_earning."',father_phone='".$father_phone."',mother_firstname='".$mother_firstname."',mother_surname='".$mother_surname."',mother_carrier='".$mother_carrier."',mother_earning='".$mother_earning."',mother_phone='".$mother_phone."',parent_firstname='".$parent_firstname."',parent_surname='".$parent_surname."',parent_carrier='".$parent_carrier."',parent_earning='".$parent_earning."',parent_phone='".$parent_phone."',relationship='".$relationship."',parent_home_no='".$parent_home_no."',parent_tambol='".$parent_tambol."',parent_amphur='".$parent_amphur."',parent_province='".$parent_province."',parent_zipcode='".$parent_zipcode."' WHERE users_id = '".$users_id."'";
		mysqli_query($con,$sql_update);

	}

	mysqli_close($con);
	echo ("<script language='JavaScript'>
		alert('บันทึกข้อมูลเรียบร้อย');
		window.location.href='edit_family.php';
		</script>");
}

function getCurrentFamilyByUserId($users_id){

	global $con;
	$sql = "SELECT *,f.id as fid,p.name_th as pname_th,a.name_th as aname_th,d.name_th as dname_th
	FROM families f
	LEFT JOIN provinces p ON f.parent_province = p.id
	LEFT JOIN amphures a ON f.parent_amphur = a.id
	LEFT JOIN districts d ON f.parent_tambol = d.id
	WHERE f.users_id = '".$users_id."'";
	$res = mysqli_query($con,$sql);
	$result=mysqli_fetch_array($res,MYSQLI_ASSOC);
	return $result;

	mysqli_close($con);

}

function saveActivity($users_id,$activity_type,$activity_topic,$activity_detail,$activity_image){
	global $con;

	if($activity_image != null){
		if(move_uploaded_file($_FILES["activity_image"]["tmp_name"],"images/activity/".$_FILES["activity_image"]["name"]))
		{

			$sql = "INSERT INTO activities (users_id, activity_type, activity_topic, activity_detail, activity_image) VALUES('".$users_id."','".$activity_type."','".$activity_topic."','".$activity_detail."','".$_FILES["activity_image"]["name"]."')";
		}
	}else{

		$sql = "INSERT INTO activities (users_id, activity_type, activity_topic, activity_detail) VALUES('".$users_id."','".$activity_type."','".$activity_topic."','".$activity_detail."')";

	}
	mysqli_query($con,$sql);


	mysqli_close($con);
	echo ("<script language='JavaScript'>
		alert('เพิ่มข้อมูลเรียบร้อย');
		window.location.href='manage_activity.php';
		</script>");
}

function editActivity($id,$users_id,$activity_type,$activity_topic,$activity_detail,$activity_image){

	global $con;

	if($activity_image != null){
		if(move_uploaded_file($_FILES["activity_image"]["tmp_name"],"images/activity/".$_FILES["activity_image"]["name"]))
		{
			$sql = "UPDATE activities SET activity_type='".$activity_type."',activity_topic='".$activity_topic."',activity_detail='".$activity_detail."',activity_image='".$_FILES["activity_image"]["name"]."' WHERE id = '".$id."'";
		}
	}else{

		$sql = "UPDATE activities SET activity_type='".$activity_type."',activity_topic='".$activity_topic."',activity_detail='".$activity_detail."' WHERE id = '".$id."'";

	}
	mysqli_query($con,$sql);

	mysqli_close($con);


	echo ("<script language='JavaScript'>
		alert('แก้ไขข้อมูลเรียบร้อยแล้ว');
		window.location.href='manage_activity.php';
		</script>");

}

function deleteActivity($id){
	global $con;

	mysqli_query($con,"DELETE FROM activities WHERE id='".$id."'");
	mysqli_close($con);
	echo ("<script language='JavaScript'>
		alert('ลบข้อมูลเรียบร้อย');
		window.location.href='manage_activity.php';
		</script>");

}

function getAllActivity($users_id){
	global $con;

	$sql = "SELECT *
	FROM activities
	WHERE users_id = '".$users_id."'
	ORDER BY id DESC";

	$res = mysqli_query($con,$sql);

	$data = array();
	while($row = mysqli_fetch_assoc($res)) {
		$namesArray[] = array(
			'id' => $row['id'],
			'users_id' => $row['users_id'],
			'activity_type' => $row['activity_type'],
			'activity_topic' => $row['activity_topic'],
			'activity_detail' => $row['activity_detail'],
			'activity_image' => $row['activity_image']);
	}

	$data = $namesArray;

	return $data;
	mysqli_close($con);

}

function getCurrentActivity($id){

	global $con;

	$sql = "SELECT * FROM activities WHERE id = '".$id."'";

	$res = mysqli_query($con,$sql);
	$result=mysqli_fetch_array($res,MYSQLI_ASSOC);
	return $result;

	mysqli_close($con);

}

function saveEducation($users_id,$study_class,$type_study,$grade,$school,$province,$start_year,$end_year){
	global $con;


	$sql = "INSERT INTO educations (users_id, study_class, type_study, grade, school, province, start_year, end_year) VALUES('".$users_id."','".$study_class."','".$type_study."','".$grade."','".$school."','".$province."','".$start_year."','".$end_year."')";
	mysqli_query($con,$sql);

	mysqli_close($con);
	echo ("<script language='JavaScript'>
		alert('เพิ่มข้อมูลเรียบร้อย');
		window.location.href='manage_education.php';
		</script>");
}

function editEducation($id,$users_id,$study_class,$type_study,$grade,$school,$province,$start_year,$end_year){

	global $con;

	$sql = "UPDATE educations SET study_class='".$study_class."',type_study='".$type_study."',grade='".$grade."',school='".$school."',province='".$province."',start_year='".$start_year."',end_year='".$end_year."' WHERE id = '".$id."'";
	mysqli_query($con,$sql);

	mysqli_close($con);


	echo ("<script language='JavaScript'>
		alert('แก้ไขข้อมูลเรียบร้อยแล้ว');
		window.location.href='manage_education.php';
		</script>");

}

function deleteEducation($id){
	global $con;

	mysqli_query($con,"DELETE FROM educations WHERE id='".$id."'");
	mysqli_close($con);
	echo ("<script language='JavaScript'>
		alert('ลบข้อมูลเรียบร้อย');
		window.location.href='manage_education.php';
		</script>");

}

function getAllEducation($users_id){
	global $con;

	$sql = "SELECT *
	FROM educations
	WHERE users_id = '".$users_id."'
	ORDER BY id DESC";

	$res = mysqli_query($con,$sql);

	$data = array();
	while($row = mysqli_fetch_assoc($res)) {
		$namesArray[] = array(
			'id' => $row['id'],
			'users_id' => $row['users_id'],
			'study_class' => $row['study_class'],
			'type_study' => $row['type_study'],
			'grade' => $row['grade'],
			'school' => $row['school'],
			'province' => $row['province'],
			'start_year' => $row['start_year'],
			'end_year' => $row['end_year']);
	}

	$data = $namesArray;

	return $data;
	mysqli_close($con);

}

function getCurrentEducation($id){

	global $con;

	$sql = "SELECT * FROM educations WHERE id = '".$id."'";

	$res = mysqli_query($con,$sql);
	$result=mysqli_fetch_array($res,MYSQLI_ASSOC);
	return $result;

	mysqli_close($con);

}

function editProfile($id,$firstname,$surname,$username,$password){

	global $con;

	$sql = "UPDATE users SET password='".$password."' WHERE id = '".$id."'";
	mysqli_query($con,$sql);

	mysqli_close($con);


	echo ("<script language='JavaScript'>
		alert('บันทึกข้อมูลเรียบร้อย');
		window.location.href='profile.php';
		</script>");

}

function getCurrentUser($id){

	global $con;

	$res = mysqli_query($con,"SELECT * FROM users WHERE id = '".$id."'");
	$result=mysqli_fetch_array($res,MYSQLI_ASSOC);
	return $result;

	mysqli_close($con);

}

function getAllProvince(){
	global $con;

	$res = mysqli_query($con,"SELECT * FROM provinces ORDER BY id DESC");

	$data = array();
	while($row = mysqli_fetch_assoc($res)) {
		$namesArray[] = array(
			'id' => $row['id'],
			'code' => $row['code'],
			'name_th' => $row['name_th'],
			'name_en' => $row['name_en'],
			'geography_id' => $row['geography_id']);
	}

	$data = $namesArray;

	return $data;
	mysqli_close($con);

}

function getAllAmphur($province){
	global $con;

	$sql = "SELECT * FROM amphures WHERE province_id = '".$province."' ORDER BY id DESC";
	$res = mysqli_query($con,$sql);

	$data = array();
	while($row = mysqli_fetch_assoc($res)) {
		$namesArray[] = array(
			'id' => $row['id'],
			'code' => $row['code'],
			'name_th' => $row['name_th'],
			'name_en' => $row['name_en'],
			'province_id' => $row['province_id']);
	}

	$data = $namesArray;

	return $data;
	mysqli_close($con);

}

function getAllTambol($amphur){
	global $con;

	$res = mysqli_query($con,"SELECT * FROM districts WHERE amphure_id = '".$amphur."' ORDER BY id DESC");

	$data = array();
	while($row = mysqli_fetch_assoc($res)) {
		$namesArray[] = array(
			'id' => $row['id'],
			'zip_code' => $row['zip_code'],
			'name_th' => $row['name_th'],
			'name_en' => $row['name_en'],
			'amphure_id' => $row['amphure_id']);
	}

	$data = $namesArray;

	return $data;
	mysqli_close($con);

}

?>