 <?php
 	 date_default_timezone_set('UTC');
	 require_once 'Classes/PHPExcel.php';

		// Crea un nuevo objeto PHPExcel
	 $objPHPExcel = new PHPExcel();

		// Establecer propiedades
	 $objPHPExcel->getProperties()
	 ->setCreator("Reporte")
	 ->setLastModifiedBy("Reporte")
	 ->setTitle("Reporte mensual de usuarios ENO")
	 ->setSubject("Reporte mensual ENO")
	 ->setDescription("Reporte mensual ENO.")
	 ->setKeywords("Excel Office 2007 openxml php")
	 ->setCategory("Reporte mensual ENO");



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
	$sql_month="SELECT DISTINCT(fecha), email,ubicacion FROM users WHERE fecha Between '$first_month' AND '$last_month'";

	$result_month=$conn->query($sql_month);
	$result_month_complete=$conn->query($sql_month);

	 $rawdata_month=array();//Por mes
	 $rawdata_month_complete=array();//Por mes

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




	 echo "<h2>Completo por mes</h2>";
	 $contador=1;
	 $hoja=$objPHPExcel->setActiveSheetIndex(0);
	 $hoja->setCellValue('A1', 'Email' )
		 ->setCellValue('B1', 'Fecha')
		 ->setCellValue('C1', 'Ubicación');

	 foreach ($rawdata_month_complete as $key2) {
	 	$contador++;

	 	echo "Email: ".$key2['email']."<br>";
	 	echo "Fecha: ".$key2['fecha']."<br><br>";

	 	$hoja->setCellValue('A'.$contador, $key2['email'])
	 	->setCellValue('B'.$contador, $key2['fecha'])
	 	->setCellValue('C'.$contador, $key2['ubicacion']);
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
	 $objWriter->save('reportesExcel/reporteENOMensual.xlsx');
	 exit;






	 ?> 