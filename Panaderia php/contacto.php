<?php
  include('header.php');
?>

<div class="contacto">
  <h2>Contáctanos</h2>
  <form action="enviar_contacto.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" required></textarea>

    <button type="submit">Enviar</button>
  </form>
</div>

<?php
  include('footer.php');
?>
