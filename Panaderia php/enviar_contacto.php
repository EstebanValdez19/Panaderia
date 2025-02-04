<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes hacer lo que quieras con los datos, como enviarlos por correo o almacenarlos en una base de datos.
    echo "Gracias por contactarnos, $nombre. Te responderemos pronto al correo $email.";
  }
?>
