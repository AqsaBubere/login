<?php
//get data from html form
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $retype_password = $_POST["retype_password"];
    $Mobile_no = $_POST["mobile_no"];
    $date_of_birth = $_POST["date_of_birth"];
    $bio = $_POST["bio"];

    if($_POST["password"]!=$_POST["retype_password"])
            echo "password must be same!";
    else
	{
		//connect to database
		$connect = mysqli_connect("localhost", "root", "", "registration") or
        die("Could not connect " . mysqli_error($connect));
		$sql= "insert into login values('$first_name','$last_name','$email','$password','$retype_password','$Mobile_no' , '$date_of_birth','$bio' ) ";
		$result = mysqli_query($connect, $sql);
		if($result==1)
			echo "Congratulation!!! You are successfully logged in";
		else
		  echo "Error :"  . mysqli_error();
        mysqli_close($connect);
	}
?>