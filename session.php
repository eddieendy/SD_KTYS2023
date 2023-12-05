<?php
   include('conn.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con ,"select username from studentlogin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
    //student info
   $nomatrik = mysqli_query($con, "SELECT studentID FROM studentinfo WHERE studentinfo.student_name = '$login_session'");
   $row = mysqli_fetch_array($nomatrik,MYSQLI_ASSOC);
   $nomatrik = $row['studentID'];

   $nric = mysqli_query($con, "SELECT ic_num FROM studentinfo WHERE studentinfo.student_name = '$login_session'");
   $row = mysqli_fetch_array($nric,MYSQLI_ASSOC);
   $nric = $row['ic_num'];


   $program = mysqli_query($con, "SELECT program FROM studentinfo WHERE studentinfo.student_name = '$login_session'");
   $row = mysqli_fetch_array($program,MYSQLI_ASSOC);
   $program = $row['program'];


   $telno = mysqli_query($con, "SELECT phone_num FROM studentinfo WHERE studentinfo.student_name = '$login_session'");
   $row = mysqli_fetch_array($telno,MYSQLI_ASSOC);
   $telno = $row['phone_num'];


   $course = mysqli_query($con, "SELECT course FROM studentinfo WHERE studentinfo.student_name = '$login_session'");
   $row = mysqli_fetch_array($course,MYSQLI_ASSOC);
   $course = $row['course'];


   $address = mysqli_query($con, "SELECT address FROM studentinfo WHERE studentinfo.student_name = '$login_session'");
   $row = mysqli_fetch_array($address,MYSQLI_ASSOC);
   $address = $row['address'];


   $penasihat = mysqli_query($con, "SELECT academic_advisor FROM studentinfo WHERE studentinfo.student_name = '$login_session'");
   $row = mysqli_fetch_array($penasihat,MYSQLI_ASSOC);
   $penasihat = $row['academic_advisor'];



   

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>