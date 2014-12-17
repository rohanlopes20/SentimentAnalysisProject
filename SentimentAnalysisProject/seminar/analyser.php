<?php
$feedback = $_POST['feedback'];

if($feedback) {
	$connect =mysql_connect("localhost","root","") or die("Couldn't connect MySql!");
	mysql_select_db("data") or die("Couldn't find MySql database!");
	$query =mysql_query("SELECT * FROM feedback WHERE feedback='$feedback'");
	$numrows =mysql_num_rows($query);
	
	if ($numrows != 0) {
		while ($row =mysql_fetch_assoc($query)) {
			$type =$row['type'];
			$scores =$row['scores'];
		}
		if($feedback==$feedback){
			echo "Student Information...<br>".$dbrollno;
			echo "<br>".$dbstudentname;
			echo "<br>".$dbclass;
			echo "<br>".$dbmarks;
		} else {
			echo "Incorrect password!";
		}
	}
} else {
	die("Please enter the customer feedback !!");
}
?>
<!DOCTYPE html>
<html>
<body bgcolor="#cdcdcd">
    <p align="center">&nbsp;</p>
    <hr>
    <div style="background:#cf2255;width:'80%';" align="center">
        <font color="#ffffcc" size="8pt"><b>Hotel customer Feedback review System</b>&copy</font>,v 1.0.3</div>
    <br>
    <br>
    <hr>
    <b>
	<br><br><br><br><br><br>
		<form name="form" action="analyser.php" method="POST">
			Feedback for athe Hotel
			<input type="text" name="feedback" maxlength=50><br>
			<input type="submit" name="Analyse"><br>
		</form>
</html>
