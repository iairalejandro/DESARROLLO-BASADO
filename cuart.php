<?php
    for ($i = 0; $i < 10; $i++) {
      echo "<label for='elemento$i'>Elemento $i:</label>";
      echo "<input type='number' id='elemento$i' name='elemento$i' required><br><br>";
    }
    ?>
<input type="submit" value="Calcular Sumatoria">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $suma = 0;

    for ($i = 0; $i < 10; $i++) {
      $suma += $_POST["elemento$i"];
    }

    echo "<p>La sumatoria de los elementos es: $suma</p>";
  }
  ?>

</body>
</html>