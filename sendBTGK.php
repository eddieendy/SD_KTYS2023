<?php
include('conn.php');
$fullname = $_POST['fullname'];
$nric = $_POST['nric'];
$semester = $_POST['semester'];
$nomatrik = $_POST['nomatrik'];
$program = $_POST['program'];
$no_tel = $_POST['no_tel'];
$email = $_POST['email'];
$poskod = $_POST['poskod'];
$daerah = $_POST['daerah'];
$add_kursus = $_POST['add_kursus'];
$del_kursus = $_POST['del_kursus'];
$jam_kredit = $_POST['jam_kredit'];



//Sending form data to sql db.
mysqli_query($con, "INSERT INTO formbtgk (fullname, no_ic, semester, no_matrik, prog, tel_no, 
email, poskod, daerah, add_kursus, del_kursus, jam_kredit)
VALUES ('$fullname','$nric','$semester','$nomatrik','$program','$no_tel','$email','$poskod','$daerah',
'$add_kursus','$del_kursus','$jam_kredit')");

header("Location: HOMEPAGE.html");
?>