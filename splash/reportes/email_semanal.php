<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/OAuth.php';
$mail = new PHPMailer(true);               



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
    $sql = "SELECT DISTINCT(fecha), email FROM users WHERE fecha Between '$today' AND '$nuevafecha'";

    $result = $conn->query($sql);

     $rawdata = array(); //Por dias de la semana



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



     echo "<h2>Por semana del ".$today." al ".$nuevafecha."</h2>";
     $valores = array_count_values($rawdata);
     arsort($valores);
     $final_day = array_slice($valores, 0, 5);
    
     $string="";
     foreach ($final_day as $clave => $valor){
        echo 'Email: ' . $clave . "<br />";
        echo 'Repeticiones: ' . $valor . "<br /><br />";


        $string.= utf8_decode('<br/>Email: ' . $clave . " inició sesión ".$valor." veces.");
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
                                $mail->setFrom('noreply@eno.com.mx', 'Reporte Semanal ENO');
                                // $mail->addAddress($email);     // Add a recipient

                                // $mail->addAddress('gustavos@eno.com.mx'); 
                                $mail->addAddress('dev.intelligenza@gmail.com');     // Add a recipient
                                $mail->addCC('gustavos@eno.com.mx ');
                                //Content
                                $mail->isHTML(true);  
                                $mail->AddAttachment('reportesExcel/reporteENOSemanal.xlsx'); // attachment
                                                                // Set email format to HTML
                                $mail->Subject = 'Reporte de registros ENO';
                                $mail->Body    = 'Por medio de este correo hacemos llegar el reporte semanal de los usuarios que accedieron a sitio eno. <br>Top 5: .'.$string.' <br> <strong>Saludos</strong>.<br>';

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