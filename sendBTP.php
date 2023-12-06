<?php
include('conn.php');
$fullname = $_POST['fullname'];
$nric = $_POST['nric'];
$semester = $_POST['semester'];
$nomatrik = $_POST['nomatrik'];
$program = $_POST['program'];
$no_tel = $_POST['no_tel'];
$email = $_POST['email'];
$png = $_POST['png'];
$pngk = $_POST['pngk'];
$level = $_POST['level'];
$parentname = $_POST['parentname'];
$biltangguh = $_POST['biltangguh'];
$poskod = $_POST['poskod'];
$daerah = $_POST['daerah'];
$negeri = $_POST['states'];
$sebab = $_POST['sebab'];


//Sending form data to sql db.
mysqli_query($con, "INSERT INTO formbtp (fullname, no_ic, semester, no_matrik, prog, tel_no, 
email, student_png, student_pngk, level_pengajian, parent_name, bil_tangguh, poskod, daerah, negeri, sebab)
VALUES ('$fullname','$nric','$semester','$nomatrik','$program','$no_tel','$email','$png','$pngk',
'$level','$parentname','$biltangguh','$poskod','$daerah','$negeri','$sebab')");

header("Location: HOMEPAGE.php");
?>