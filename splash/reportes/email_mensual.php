<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/OAuth.php';
$mail = new PHPMailer(true);               



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

     $rawdata_month=array();//Por mes

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

     $string="";

     foreach ($final_mes as $clave1 => $valor1){
        echo 'Email: ' . $clave1 . "<br />";
        echo 'Repeticiones: ' . $valor1 . "<br/><br/>";

        $string.= utf8_decode('<br/>Email: ' . $clave1 . " inició sesión ".$valor1." veces.");
     }






                            // Passing `true` enables exceptions<h1>
try 
{
                                //Server settings
                                $mail->SMTPDebug = 1;                                 // Enable verbose debug output
                                $mail->isSMTP();                                      // Set mailer to use SMTP
                                $mail->Host = 'intelligenza.com.mx';               // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                $mail->Username = 'maxnunez@intelligenza.com.mx';                 // SMTP username
                                $mail->Password = '..m1234567';                           // SMTP password
                                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = 465;                                    // TCP port to connect to

                                //Recipients
                                $mail->setFrom('noreply@eno.com.mx', 'Reporte Mensual ENO');
                                // $mail->addAddress($email);     // Add a recipient

                                // $mail->addAddress('gustavos@eno.com.mx');  
                                $mail->addAddress('dev.intelligenza@gmail.com');     // Add a recipient
                                $mail->addCC('gustavos@eno.com.mx ');
                                //Content
                                $mail->isHTML(true);  
                                $mail->AddAttachment('reportesExcel/reporteENOMensual.xlsx'); // attachment
                                                                // Set email format to HTML
                                $mail->Subject = 'Reporte de registros ENO';
                                $mail->Body    = 'Por medio de este correo hacemos llegar el reporte mensual de los usuarios que accedieron al sitio ENO. <br>Top 5: .'.$string.' <br> <strong>Saludos</strong>.<br>';

                                $mail->send();
                                echo '<h1>Se envio un correo electronico con el reporte</h1>';
                                // unset($_SESSION["session_aux"]);
                                         //$db->disconnect();
                            } catch (Exception $e) 
                            {
                                echo 'Message could not be sent.';
                                echo 'Mailer Error: ' . $mail->ErrorInfo;
                                // unset($_SESSION["session_aux"]);
                                       //$db->disconnect();


                            }



     $conn->close();

                            ?>