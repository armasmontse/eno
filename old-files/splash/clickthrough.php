<html>
<head>
  <title>ENO - Bienvenido</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel='stylesheet' href='css/style.css' >
</head>
<body>
  <div class="intro">
    <div class="imagen_eno"><img src="images/eno.png"></div>
    <h3>BIENVENIDO</h3>
    Esperamos que disfrutes tu estancia en ENO y sea toda una experiencia gastronómica. El uso de Internet es gratuito, sólo necesitamos que nos proporciones una dirección de correo electrónico para registrarte.
    <div>
      <br><br>


      <?php
      $base_grant_url = urldecode($_GET['base_grant_url']);
      $user_continue_url = urldecode($_GET['user_continue_url']);
      $override_continue_url = 'http://mycompany.com/you_are_now_authenticated';
      
      $override_the_users_request = false;
      if ($override_the_users_request) {
        $grant_url = $base_grant_url . "?continue_url=" . urlencode($override_continue_url);
      } else {
        $grant_url = $base_grant_url . "?continue_url=" . urlencode($user_continue_url);
      }

      // The following parameters may be used for tracking purposes. They are not necessary for authentication.
      $node_id = urldecode($_GET['node_id']);
      $gateway_id = urldecode($_GET['gateway_id']);
      $client_ip = urldecode($_GET['client_ip']);

      //$grant_url='http://www.youtube.com.mx';
      ?>

      <div>
        <form action="controlador.php" method="post">
          <input data-msg-required="Por favor ingresa tu nombre" maxlength="100" class="form-control" name="email" id="email" placeholder="Email" required="" type="text">
          <input type="hidden" name="urlEno" value="<?php echo $grant_url; ?>">
          <input type="submit" class="entrar button medium rounded gray font-open-sans" style="text-decoration:none;" value="Entrar">
        </form>
      </div>





    </body>
    </html>
