<?php
include('conn.php');
include('session.php');

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT semester, kod, subjek, gred, gpa FROM studentresults WHERE student_name = '$login_session'";
$result = $con->query($sql);

echo "<style type='text/css'>
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row["semester"] == 1){
        echo "<br><br><br>";
        echo "<h4> Semester 1</h4><br>";
        echo "<table class='tg' id='sem2'><thead><tr><th class='tg-0lax'>Kod</th><th class='tg-0lax'>Subjek</th><th class='tg-0lax'>Gred</th><th class='tg-0lax'>GPA</th></tr></thead>";
        echo "<tr><td class='tg-0lax'>".$row["kod"]."</td><td class='tg-0lax'>".$row["subjek"]."</td><td class='tg-0lax'>".$row["gred"]."</td><td class='tg-0lax'>".$row["gpa"]."</td></tr></table>";
    } elseif($row["semester"] == 2){
        echo "<br>";
        echo "<h4> Semester 2</h4><br>";
        echo "<table class='tg' id='sem3'><thead><tr><th class='tg-0lax'>Kod</th><th class='tg-0lax'>Subjek</th><th class='tg-0lax'>Gred</th><th class='tg-0lax'>GPA</th></tr></thead>";
        echo "<tr><td class='tg-0lax'>".$row["kod"]."</td><td class='tg-0lax'>".$row["subjek"]."</td><td class='tg-0lax'>".$row["gred"]."</td><td class='tg-0lax'>".$row["gpa"]."</td></tr></table>";
    }elseif($row["semester"] == 3){
        echo "<br>";
        echo "<h4> Semester 3</h4><br>";
        echo "<table class='tg' id='sem4'><thead><tr><th class='tg-0lax'>Kod</th><th class='tg-0lax'>Subjek</th><th class='tg-0lax'>Gred</th><th class='tg-0lax'>GPA</th></tr></thead>";
        echo "<tr><td class='tg-0lax'>".$row["kod"]."</td><td class='tg-0lax'>".$row["subjek"]."</td><td class='tg-0lax'>".$row["gred"]."</td><td class='tg-0lax'>".$row["gpa"]."</td></tr></table>";
    }elseif($row["semester"] == 4){
        echo "<br>";
        echo "<h4> Semester 4</h4><br>";
        echo "<table class='tg' id='sem5'><thead><tr><th class='tg-0lax'>Kod</th><th class='tg-0lax'>Subjek</th><th class='tg-0lax'>Gred</th><th class='tg-0lax'>GPA</th></tr></thead>";
        echo "<tr><td class='tg-0lax'>".$row["kod"]."</td><td class='tg-0lax'>".$row["subjek"]."</td><td class='tg-0lax'>".$row["gred"]."</td><td class='tg-0lax'>".$row["gpa"]."</td></tr></table>";
    }elseif($row["semester"] == 5){
        echo "<br>";
        echo "<h4> Semester 5</h4><br>";
        echo "<table class='tg' id='sem6'><thead><tr><th class='tg-0lax'>Kod</th><th class='tg-0lax'>Subjek</th><th class='tg-0lax'>Gred</th><th class='tg-0lax'>GPA</th></tr></thead>";
        echo "<tr><td class='tg-0lax'>".$row["kod"]."</td><td class='tg-0lax'>".$row["subjek"]."</td><td class='tg-0lax'>".$row["gred"]."</td><td class='tg-0lax'>".$row["gpa"]."</td></tr></table>";
    }elseif($row["semester"] == 6){
        echo "<br>";
        echo "<h4> Semester 6</h4><br>";
        echo "<table class='tg' id='sem6'><thead><tr><th class='tg-0lax'>Kod</th><th class='tg-0lax'>Subjek</th><th class='tg-0lax'>Gred</th><th class='tg-0lax'>GPA</th></tr></thead>";
        echo "<tr><td class='tg-0lax'>".$row["kod"]."</td><td class='tg-0lax'>".$row["subjek"]."</td><td class='tg-0lax'>".$row["gred"]."</td><td class='tg-0lax'>".$row["gpa"]."</td></tr></table>";
    }
    
  }
} else {
  echo "0 results";
}
$con->close();
?> 

<html>
    <head>
        <title>KTYS - Student Results</title>
    </head>
    <body>
        <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #E1AB74;
              font-family:Arial, sans-serif;
              font-size:14px;
              position: fixed;
              top:0;
              left:0;
              overflow: hidden;
            }
            
            li {
              float: left;
            }
            
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-family:Arial, sans-serif;
              font-size:14px;
            }
            
            li a:hover:not(.active) {
              background-color: #111;
            }
            
            .active {
              background-color: #bd8804;
            }
        </style>
        <ul>
            <li><a href="#sem1">Semester 1</a></li>
            <li><a href="#sem2">Semester 2</a></li>
            <li><a href="#sem3">Semester 3</a></li>
            <li><a href="#sem4">Semester 4</a></li>
            <li><a href="#sem5">Semester 5</a></li>
            <li><a href="#sem6">Semester 6</a></li>
            <li><a href="HOMEPAGE.php">Home</a></li>
        </ul>
        
        </body>
        </html>