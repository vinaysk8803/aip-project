<?php
require 'connection.php';
$conn = Connect();
$email = $conn->real_escape_string($_POST['email']);
$remark = $conn->real_escape_string($_POST['remark']);
if(isset($_POST["rating"]))
			{
				foreach ($_POST['rating'] as $Rating)
				print "";		
			}
			else
			echo "Hii";	
$query = "INSERT into review(email,remark,rating) VALUES('" . $email . "','" . $remark . "','" . $Rating . "')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}
else
{
	header("location: foodlist.php"); 
}
$conn->close();
?>
<html>
<head>
	<title></title>
</head>
<body>
<h2> <?php echo "Welcome $email!" ?> </h2>
<h1>Your Review has been recorded.</h1>
<p>Order food from <a href="foodlist.php">HERE</a></p>
</body>
</html>