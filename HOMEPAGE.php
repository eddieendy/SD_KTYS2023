<?php 
include('session.php');
?>

<html lang="en">
<head>
		<meta charset="utf-8">
		<title>KTYS - Student Portal</title>
		<meta name="description" content="overview &amp; stats">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
		<link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
		<link rel="stylesheet" href="assets/css/datepicker.css">
        <link rel="stylesheet" href="assets/css/daterangepicker.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
		<link rel="stylesheet" href="css/ace.min.css">
		<link rel="stylesheet" href="css/ace-responsive.min.css">
		<link rel="stylesheet" href="css/ace-skins.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: E1AB74;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color:black;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: E1AB74;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: E1AB74;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color:E1AB74;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
	
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
<link rel="stylesheet" href="css/colorbox.css">
<script src="js/box.jquery.min.js"></script>
<script src="js/jquery.colorbox.js"></script>	
<style>
table { background-color:7BC2CA; }
tr { background-color: 7BC2CA; }
td { background-color: 7BC2CA; }
</style>			

<body>
<div id="mySidebar" class="sidebar">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<p><a href="results.php">Keputusan</a></p>
<p><a href="PDFupload.html">Upload PDF</a></p>
<p><a href="e-borang.html">E-Borang</a></p>
<p><a href="feedback.php">Feedback</a></p>
<p><a href="logout.php">Logout</a></p>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
  
</div>
<div align="center">
<table width="90%" border="1" class="contents">
  <tbody><tr class="contents">
   <td align="right" width="20%">Nama &nbsp;</td>
    <td align="center" width="1%">:</td>
    <td align="left" width="30%"> &nbsp;<?php echo $login_session; ?></td>
    <td align="right" width="10%">No Matrik &nbsp;</td>
    <td align="center" width="1%">:</td>
    <td align="left" width="40%" style="text-transform: uppercase;"> &nbsp;<?php echo $nomatrik; ?></td>
  </tr>
  <tr class="contents">
  	<td align="right">MyKAD &nbsp;</td>
  	<td align="center">:</td>
  	<td align="left"> &nbsp;<?php echo $nric; ?></td>
  	<td align="right">Program &nbsp;</td>
  	<td align="center">:</td>
  	<td align="left"> &nbsp;<?php echo $program; ?></td>
  </tr>
  <tr class="contents">
  	<td align="right">No.HP &nbsp;</td>
  	<td align="center">:</td>
  	<td align="left"> &nbsp;<?php echo $telno; ?></td>
  	<td align="right">Kursus &nbsp;</td>
  	<td align="center">:</td>
  	<td align="left">&nbsp;<?php echo $course; ?></td>
  </tr>  
  <tr class="contents">
  	<td align="right" valign="top">Alamat &nbsp;</td>
  	<td align="center" valign="top">:</td>
  	<td align="left" colspan="4">&nbsp;<?php echo $address; ?></td>
  </tr>    
  
    <tr class="contents">
  	<td align="left" colspan="6">&nbsp; </td>
  </tr>    
   
  <tr class="contents">
  	<td align="right" valign="top"> Nama Penasihat Akademik &nbsp;</td>
  	<td align="center" valign="top">:</td>
  	<td align="left" colspan="4"> &nbsp;<strong><?php echo $penasihat; ?></strong></td>
  </tr>    
    
</tbody></table>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>   
</body>

</div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button type="button" id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button type="button" id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div></body></html>
