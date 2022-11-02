<!DOCTYPE html>
<html>
<head>
<title>Confirmed Details </title>
</head>
<body>
<?php
	

 	include "4connec.php";

    echo "<h1>Your Payment Details Successfully Submitted </h1>"."<br>";

	$name=$_POST['uname'];
	echo "<h2>Name : ". $name.'<br></h2>';

	$id=$_POST['id_num'];
	echo "<h2>Id No. : ". $id.'<br></h2>';

    $class=$_POST['year'];
	echo "<h2>Class & Year : ". $class.'<br></h2>';

    $cell=$_POST['cell'];
	echo "<h2>Mobile : ". $cell.'<br></h2>';

    $mail=$_POST['email'];
	echo "<h2>Mail : ". $mail.'<br></h2>';

    $money=$_POST['money'];
	echo "<h2>Amount : ". $money.'<br></h2>';

    $remark=$_POST['remark'];
	echo "<h2>Remarks : ". $remark.'<br></h2>';

    $date=$_POST['date'];
	echo "<h2>Date : ". $date.'<br></h2>';

 	$query = "INSERT INTO sbi_collect values('$name','$id','$class','$cell','$mail','$money','$remark','$date');";
	if(mysqli_query($connection,$query)){
		echo " "."<br>";
	}
	else{
		echo "error:".mysqli_error($connection);
	}
	include "card.html"
?> 
</body>
</html>