<?php
include('conn.php');
include('session.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);

    $sql = "INSERT INTO studentfeedback (student_name, feedback) VALUES ('$login_session', '$feedback')";
    $run = mysqli_query($con, $sql);
}
?>

<html>
    
    <body>
        <a href="HOMEPAGE.php"><button type="button">Home</button></a>
        <br><br>
        <form action=" " method="post" style="font-family: 'Lato', sans-serif;">
            <label>Feedback</label><br>
            <textarea type="text" name="feedback" style="height:500px;width:100%;"></textarea>

            <br>
            <p>Max. Words: 500</p>
            <input type="submit" value="Submit">
        </form>
    </body>