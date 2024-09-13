<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $A + $B;

    echo "<p>La suma de $A y $B es: $C</p>";
  }
  ?>

</body>
</html>