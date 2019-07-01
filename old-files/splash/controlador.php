<?php
$email=$_POST['email'];
$urlEno=$_POST['urlEno'];


$fecha=	date('Y-m-d H:i:s');

$servername = "localhost";
$username = "sitioeno_user";
$password = "Svartalfheim18?";
$dbname = "sitioeno_splash";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (email, fecha)
VALUES ('$email', '$fecha')";

if (mysqli_query($conn, $sql)) {
	//echo $urlEno;
    header("Location:$urlEno");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






//echo $urlEno;


?>