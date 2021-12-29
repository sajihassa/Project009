<?php

require_once('tcpdf/tcpdf.php');
session_start();
require("function/function.php");

$currentStudent = getCurrentStudentByUserId($_SESSION["id"]);
$currentFamily = getCurrentFamilyByUserId($_SESSION["id"]);
$allEducation = getAllEducation($_SESSION["id"]);
$allActivity = getAllActivity($_SESSION["id"]);
$bDate = formatDateFull($currentStudent["birth_date"]);
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('My Portfolio');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------
// set font

//$fontname = $pdf->addTTFfont('fonts/Browa.ttf', 'TrueTypeUnicode', '', 32);
$pdf->SetFont('cordiaupc', '', 12, '', true);


$line_html="";
//PAGE 3 >> PAGE 1
$pdf->AddPage();

$pdf->setPageOrientation ('P', $autopagebreak='', $bottommargin='');
// get the current page break margin
$bMargin = $pdf->getBreakMargin();
// get current auto-page-break mode
$auto_page_break = $pdf->getAutoPageBreak();
// disable auto-page-break
$pdf->SetAutoPageBreak(true, 0);
// Set some content to print

//$total_price = $price + 40;
$countDate = 0;
$i = 0;

foreach($allEducation as $data){

    $i++;
    $line_html1  .= <<<EOD
        <tr>
            <td style="text-align:center;">{$i}</td>
            <td style="text-align:center;">{$data['study_class']}</td>
            <td style="text-align:center;">{$data['type_study']}</td>
            <td style="text-align:center;">{$data['grade']}</td>
            <td style="text-align:center;">{$data['school']}</td>
            <td style="text-align:center;">{$data['province']}</td>

        </tr>


EOD;
}

$j = 0;
foreach($allActivity as $data2){

    $j++;
    $line_html2  .= <<<EOD
        <tr>
            <td style="text-align:center;">{$j}</td>
            <td style="text-align:center;">{$data2['activity_type']}</td>
            <td style="text-align:center;">{$data2['activity_topic']}</td>
            <td style="text-align:center;">{$data2['activity_detail']}</td>
        </tr>


EOD;
}

$body_html  .= <<<EOD
<div style="text-align:left;margin:0"><b style="font-size:26px;">Portfolio</b></div>
<br/>
<div style="text-align:left;margin:0"><b style="font-size:26px;">ข้อมูลส่วนตัว</b></div>
<table style="width:100%;">
    <tr>
        <td style="width:80%;">
            <table style="width:80%;">
                <tr>
                    <td>ชื่อ-นามสกุล : {$currentStudent['firstname']} {$currentStudent['surname']}</td>
                </tr>
                <tr>
                    <td>รหัสนักเรียน : {$currentStudent['student_id']}</td>
                </tr>
                <tr>
                    <td>ชื่อเล่น : {$currentStudent['nickname']}</td>
                </tr>
                <tr>
                    <td>เลขบัตรประจำตัวประชาชน : {$currentStudent['id_card']}</td>
                </tr>
                <tr>
                    <td>เชื้อชาติ : {$currentStudent['ethnicity']} สัญชาติ : {$currentStudent['nationality']} ศาสนา : {$currentStudent['religion']}</td>
                </tr>
                <tr>
                    <td>น้ำหนัก : {$currentStudent['weight']} กก.</td>
                </tr>
                <tr>
                    <td>ส่วนสูง : {$currentStudent['height']} ซม.</td>
                </tr>
                <tr>
                    <td>ที่อยู่ : {$currentStudent['home_no']} {$currentStudent['dname_th']} {$currentStudent['aname_th']} {$currentStudent['pname_th']} {$currentStudent['zipcode']}</td>
                </tr>
            </table>
        </td>
        <td style="width:20%;">
            <img src="images/student/{$currentStudent['image']}" style="width:100px;height:100px;">
        </td>
    </tr>
</table>
<br/>
<div style="text-align:left;margin:0"><b style="font-size:26px;">ข้อมูลผู้ปกครอง</b></div>
<table style="width:100%;">
    <tr>
        <td style="width:50%;">
            <table style="width:100%;">
                <tr>
                    <td>ชื่อ-นามสกุลบิดา : {$currentFamily['father_firstname']} {$currentFamily['father_surname']}</td>
                </tr>
                <tr>
                    <td>อาชีพบิดา : {$currentFamily['father_carrier']}</td>
                </tr>
                <tr>
                    <td>หมายเลขโทรศัพท์บิดา : {$currentFamily['father_phone']}</td>
                </tr>
            </table>
        </td>
        <td style="width:50%;">
            <table style="width:100%;">
                <tr>
                    <td>ชื่อ-นามสกุลมารดา : {$currentFamily['mother_firstname']} {$currentFamily['mother_surname']}</td>
                </tr>
                <tr>
                    <td>อาชีพมารดา : {$currentFamily['mother_carrier']}</td>
                </tr>
                <tr>
                    <td>หมายเลขโทรศัพท์มารดา : {$currentFamily['mother_phone']}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<br/>
<div style="text-align:left;margin:0"><b style="font-size:26px;">การศึกษา</b></div>
<table style="width:100%;">
    <tr>
        <td style="border-bottom: 1px solid #000;text-align:center;">ลำดับ</td>
        <td style="border-bottom: 1px solid #000;text-align:center;">ระดับการศึกษา</td>
        <td style="border-bottom: 1px solid #000;text-align:center;">แผนการเรียน</td>
        <td style="border-bottom: 1px solid #000;text-align:center;">เกรดเฉลี่ย</td>
        <td style="border-bottom: 1px solid #000;text-align:center;">โรงเรียน</td>
        <td style="border-bottom: 1px solid #000;text-align:center;">จังหวัด</td>
    </tr>
    {$line_html1}
</table>
<br/>
<div style="text-align:left;margin:0"><b style="font-size:26px;">กิจกรรมและผลงาน</b></div>
<table style="width:100%;">
    <tr>
        <td style="border-bottom: 1px solid #000;text-align:center;width:10%;">ลำดับ</td>
        <td style="border-bottom: 1px solid #000;text-align:center;width:20%;">ประเภทกิจกรรม</td>
        <td style="border-bottom: 1px solid #000;text-align:center;width:20%;">หัวข้อผลงาน/กิจกรรม</td>
        <td style="border-bottom: 1px solid #000;text-align:center;width:50%;">คำอธิบายผลงาน</td>
    </tr>
    {$line_html2}
</table>

EOD;

$html = <<<EOD
{$body_html}
<div style="text-align:center;">
</div>
EOD;


// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
ob_end_clean();
$pdf->Output('รายงาน.pdf', 'I');
?>

<?php die(); ?>
