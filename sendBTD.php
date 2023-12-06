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
$jam_kredit = $_POST['jam_kredit'];
$course1 = $_POST['course1'];
$course2 = $_POST['course2'];
$course3 = $_POST['course3'];
$course4 = $_POST['course4'];
$baki_kredit = $_POST['baki_kredit'];


//Sending form data to sql db.
mysqli_query($con, "INSERT INTO formtarikdiri (fullname, no_ic, semester, no_matrik, prog, tel_no, 
email, student_png, student_pngk, jam_kredit, course1, course2, course3, course4, baki_kredit)
VALUES ('$fullname','$nric','$semester','$nomatrik','$program','$no_tel','$email','$png','$pngk',
'$jam_kredit','$course1','$course2','$course3','$course4','$baki_kredit')");

header("Location: HOMEPAGE.php");
?>