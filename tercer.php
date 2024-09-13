<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $A = $_POST['A'];
    $B = $_POST['B'];
    $operation = $_POST['operation'];
switch ($operation) {
      case 'Sumar':
        $C = $A + $B;
        echo "<p>La suma de $A y $B es: $C</p>";
        break;
      case 'Restar':
        $C = $A - $B;
        echo "<p>La resta de $A y $B es: $C</p>";
        break;
      case 'Multiplicar':
        $C = $A * $B;
        echo "<p>La multiplicación de $A y $B es: $C</p>";
break;
      case 'Dividir':
        if ($B != 0) {
          $C = $A / $B;
          echo "<p>La división de $A y $B es: $C</p>";
        } else {
          echo "<p>No se puede dividir entre cero.</p>";
        }
        break;
    }
  }
  ?>

</body>
</html>