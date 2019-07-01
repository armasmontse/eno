 <?php

 date_default_timezone_set('UTC');
 require_once 'Classes/PHPExcel.php';

	// Crea un nuevo objeto PHPExcel
 $objPHPExcel = new PHPExcel();

	// Establecer propiedades
 $objPHPExcel->getProperties()
 ->setCreator("Reporte")
 ->setLastModifiedBy("Reporte")
 ->setTitle("Reporte semanal de usuarios ENO")
 ->setSubject("Reporte semanal ENO")
 ->setDescription("Reporte semanal ENO.")
 ->setKeywords("Excel Office 2007 openxml php")
 ->setCategory("Reporte semanal ENO");




 $today= date('Y-m-d');
	$nuevafecha = strtotime ( '+6 day' , strtotime ( $today ) ) ; //Primer dia de la semana
	$nuevafecha = date ( 'Y-m-j' , $nuevafecha ); //ultimo de la semana


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
	$sql = "SELECT DISTINCT(fecha), email,ubicacion FROM users WHERE fecha Between '$today' AND '$nuevafecha'";

	$result = $conn->query($sql);
	$result_complete = $conn->query($sql);

	 $rawdata = array(); //Por dias de la semana
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



	 echo "<h2>Por semana del ".$today." al ".$nuevafecha."</h2>";
	 $valores = array_count_values($rawdata);
	 arsort($valores);
	 $final_day = array_slice($valores, 0, 5);


	 foreach ($final_day as $clave => $valor){
	 	
	 	echo 'Email: ' . $clave . "<br />";
	 	echo 'Repeticiones: ' . $valor . "<br /><br />";


	 }


	 $hoja=$objPHPExcel->setActiveSheetIndex(0);
	 $hoja->setCellValue('A1', 'Email' )
		 ->setCellValue('B1', 'Fecha')
		 ->setCellValue('C1', 'Ubicación');

	 echo "<h2>Completo por semana</h2>";
	
	 $contador=1;
	 foreach ($rawdata_complete as $key) {
	 	$contador++;

	 	echo "Usuario:".$key['email']."<br>";
	 	echo "Fecha:".$key['fecha']."<br><br>";


	 	$hoja->setCellValue('A'.$contador, $key['email'])
	 	->setCellValue('B'.$contador, $key['fecha'])
	 	->setCellValue('C'.$contador, $key['ubicacion']);
	 }



	 $conn->close();



	// Renombrar Hoja
	 $objPHPExcel->getActiveSheet()->setTitle('Reporte ENO');

	// Establecer la hoja activa, para que cuando se abra el documento se muestre primero.
	 $objPHPExcel->setActiveSheetIndex(0);

	// Se modifican los encabezados del HTTP para indicar que se envia un archivo de Excel.
	// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	// header('Content-Disposition: attachment;filename="reporteKia.xlsx"');
	// header('Cache-Control: max-age=0');
	 $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	 $objWriter->save('reportesExcel/reporteENOSemanal.xlsx');
	 exit;




	 ?> 