<!DOCTYPE html>
<?php
include('conn.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $myusername = mysqli_real_escape_string($con ,$_POST['txtUser']);
  $mypassword = mysqli_real_escape_string($con ,$_POST['txtPass']); 
  
  $sql = "SELECT * FROM studentlogin WHERE username = '$myusername' and password = '$mypassword'";
  $result = mysqli_query($con ,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];
  
  $count = mysqli_num_rows($result);
  
  // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {
     $_SESSION['login_user'] = $myusername;
     
     header("location: HOMEPAGE.php");
  }else {
     $error = "Your Login Name or Password is invalid";
  }
}
?>

<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Student Portal | KTYS</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/colorbox.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>
    <script src="js/jquery.colorbox.js"></script>
    <script>
      function openColorBox(){
$.colorbox({ 
    href:"popup/popup.jpg", 
    open:true, 
    onComplete:function(){ 
        $('#cboxLoadedContent').click(function(){ 
            window.open('https://www.facebook.com/photo.php?fbid=2157667324346667&set=a.392994837480600&type=3&theater','_blank');
        }) 
    }
}); 		  
 <!--window.location.replace('https://www.facebook.com/photo.php?fbid=2157667324346667&set=a.392994837480600&type=3&theater','_blank');-->
   $.colorbox({iframe:true, width:"70%", height:"98%",title:"To close this dialog click <font style='color:red;'>X</font> icon at the right", href: "popup/popup.jpg"});
     }
      //enable popup - 26022020
      //setTimeout(openColorBox, 1000);
    </script>

</head>
    

<!--<body bgcolor="#003366" class="Jenis_Tulisan">-->
<body bgcolor="FBB777" class="Jenis_Tulisan">
<table width="70%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody><tr bgcolor="FBB777">
    <td width="0.1%">&nbsp;</td>
    <td width="0.5%">&nbsp;</td>

    <td width="150.5%">&nbsp;</td>
    <td width="0.1%">&nbsp;</td>
  </tr>
  <tr bgcolor="FBB777">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="FBB777">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFFF" align="center"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF" align="center"><img src="KTYSLOGO.png"></td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"></td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF" class="Biru_Bold_Shadow">
      <div align="center"><p style="color:#880808;">KOLEJ TEKNOLOGI YAYASAN SABAH - Student Portal v1.0</div>
      <marquee>____________</marquee></td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  
      </table></td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="FBB777">
        <tbody><tr>
          <td width="50%" valign="top"><table width="80%" border="0" cellspacing="0" cellpadding="0" align="center" class="Box">
              <tbody><tr>
                <td><br>
                  <fieldset style="border:none">
                  <legend class="Biru_Bold_Shadow"><p style="color:#880808;">LOGIN</legend>
                  <br>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td><form id="form1" name="form1" method="POST" action=" ">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0" height="75">
                            <tbody><tr>
                              <td width="30%"><p style="color:#880808;">Nama</td>
                              <td width="50%"><span id="sprytextfield1">
                                <input name="txtUser" type="text" size="20" maxlength="50" autocomplete="off">
                                <span class="textfieldRequiredMsg"> &nbsp;?&nbsp; </span></span></td>
                              <td width="20%" rowspan="3" align="center"><img src="KTYS.png" width="62" height="62"></td>
                            </tr>
                            <tr>
                              <td><p style="color:#880808;">Kata Laluan</td>
                              <td><span id="sprytextfield2">
                                <input name="txtPass" type="password" size="20" maxlength="50" autocomplete="off">
                                <span class="textfieldRequiredMsg"> &nbsp;?&nbsp; </span></span></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input name="Submit" type="submit" value="Login"></td>
                            </tr>
                          </tbody></table>
                        </form></td>
                    </tr>
                  </tbody></table>
                  </fieldset></td>
              </tr>
            </tbody></table></td>
            
          <td width="50%" valign="top"><table width="80%" border="0" cellspacing="0" cellpadding="0" align="center" class="Box">
              <tbody><tr>
                <td><br>
                  <fieldset style="border:none">
                  <legend class="Biru_Bold_Shadow"><p style="color:#880808;">MAKLUMAT</legend>
                  <br>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">

                    <tbody><tr>
                      <td>:-Kalendar Akademik Sesi 2023/2024<img src="new.png" width="20" height="20"></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>  
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>  
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>  
 <!--                                       <tr>
                      <td>:-</td>
                      <td>Muat Turun Soalan Peperiksaan </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>  
                    <tr>
                      <td>:-</td>
                      <td><a href="sys/doc/pekeliling.pdf">Pekeliling Pendaftaran Kursus Pelajar Kanan</a></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>  
                    <tr>
                      <td>:-</td>
                      <td>Kalendar Akademik Sem I 2020/2021. Sila muat turun di sini</a></td>
                      <td>&nbsp;</td>
                    </tr>-->
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    
                  </tbody></table>
                  <br>
                  </fieldset></td>
              </tr>
            </tbody></table>
            <br></td>
        </tr>
      </tbody></table></td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF" align="center"><table width="90%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr class="Biru_Sahaja">
          <td><p style="color:#880808;">Jika ada sebarang permasalahan, sila berhubung dengan ICT<br><br>
      <br>
            </p>
          </td>
        </tr>
      </tbody></table></td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td width="50%" valign="top"><table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tbody><tr>
                <td><strong>City Campus, Sembulan,</strong><br>
                 Jalan Ibu Pejabat JKR, Off Jalan Mat Salleh,<br>
                 88100 Kota Kinabalu, Sabah.<br>
                 Tel : 088 - 239639 / 319854 / 239498 Fax : 088 - 239430 / 319857 / 239548</td>
              </tr>
            </tbody></table>
            <br>
          </td>

        </tr>
      </tbody></table></td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr bgcolor="FBB777">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFFF" align="center">© ICT 2018</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="FBB777">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFFF" align="center"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>  
  <tr bgcolor="FBB777">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</tbody></table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none");
</script>



<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>
