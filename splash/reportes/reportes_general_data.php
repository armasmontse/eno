 <?php

 	$today= date('Y-m-d');
	$nuevafecha = strtotime ( '+6 day' , strtotime ( $today ) ) ; //Primer dia de la semana
	$nuevafecha = date ( 'Y-m-j' , $nuevafecha ); //ultimo de la semana

	//Obtener el primer dia del mes
	$first_month = new DateTime();
	$first_month->modify('first day of this month');
	$first_month=$first_month->format('Y-m-j');

	//Obtener el ultimo dia del mes
	$last_month = new DateTime();
	$last_month->modify('last day of this month');
	$last_month=$last_month->format('Y-m-j');


	//Conexión a la base de datos
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
	$sql = "SELECT DISTINCT(fecha), email FROM users WHERE fecha Between '$today' AND '$nuevafecha'";
	$sql_month="SELECT DISTINCT(fecha), email FROM users WHERE fecha Between '$first_month' AND '$last_month'";

	$result = $conn->query($sql);
	$result_complete = $conn->query($sql);
	$result_month=$conn->query($sql_month);
	$result_month_complete=$conn->query($sql_month);

	 $rawdata = array(); //Por dias de la semana
	 $rawdata_month=array();//Por mes

	 $rawdata_month_complete=array();//Por mes
	 $rawdata_complete = array(); //Por dias de la semana



    //POR DIAS
	 if ($result->num_rows > 0) {
	 	$i=0;
	 	while($row = $result->fetch_assoc()) {
	 		$rawdata[$i] = $row['email'];
	 		$i++;
	 	}
	 } else {
	 	echo "0 results";
	 }



	//POR SEMANA DETALLE
	 if ($result_complete->num_rows > 0) {
	 	$z=0;
	 	while($row_complete = $result_complete->fetch_assoc()) {
	 		$rawdata_complete[$z] = $row_complete;
	 		$z++;
	 	}
	 } else {
	 	echo "0 results";
	 }





	//POR MES
	 if ($result_month->num_rows > 0) {
	 	$o=0;
	 	while($row_month = $result_month->fetch_assoc()) {
	 		$rawdata_month[$o] = $row_month['email'];
	 		$o++;
	 	}
	 } else {
	 	echo "0 results";
	 }




	//POR MES DETALLE
	 if ($result_month_complete->num_rows > 0) {
	 	$y=0;
	 	while($row_month_complete = $result_month_complete->fetch_assoc()) {
	 		$rawdata_month_complete[$y] = $row_month_complete;
	 		$y++;
	 	}
	 } else {
	 	echo "0 results";
	 }





	 echo "<h2>Por semana del ".$today." al ".$nuevafecha."</h2>";
	 $valores = array_count_values($rawdata);
	 arsort($valores);
	 $final_day = array_slice($valores, 0, 5);
	 // echo "<pre>";
	 // print_r($final_day);
	 // echo "</pre>";


	 foreach ($final_day as $clave => $valor){
	 	echo 'Email: ' . $clave . "<br />";
	 	echo 'Repeticiones: ' . $valor . "<br /><br />";
	 }



	 echo "<h2>Por mes de ".$first_month." al ".$last_month."</h2>";
	 $valores_month = array_count_values($rawdata_month);
	 arsort($valores_month);
	// echo "<pre>";
	// print_r($valores_month);
	// echo "</pre>";
	 $final_mes = array_slice($valores_month, 0, 5);
	 // echo "<pre>";
	 // print_r($final_mes);
	 // echo "</pre>";


	 foreach ($final_mes as $clave1 => $valor1){
	 	echo 'Email: ' . $clave1 . "<br />";
	 	echo 'Repeticiones: ' . $valor1 . "<br /><br />";
	 }



	 echo "<h2>Completo por semana</h2>";
	 // echo "<pre>";
	 // print_r($rawdata_complete);
	 // echo "</pre>";		

	 foreach ($rawdata_complete as $key) {
	 	echo "Email: ".$key['email']."<br>";
	 	echo "Fecha: ".$key['fecha']."<br><br>";
	 }

	//rawdata_month_complete

	 echo "<h2>Completo por mes</h2>";
	 // echo "<pre>";
	 // print_r($rawdata_month_complete);
	 // echo "</pre>";


	 foreach ($rawdata_month_complete as $key2) {
	 	echo "Email: ".$key2['email']."<br>";
	 	echo "Fecha: ".$key2['fecha']."<br><br>";
	 }

	 $conn->close();




	 ?> 