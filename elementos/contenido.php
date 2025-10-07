<?php
// Estructura asociativa: producto => precio
$productos = [
  "Pan de Camas"        => 1.20,
  "Aceitunas aliñadas"  => 2.50,
  "Tortas de aceite"    => 3.00
];
?>

<h2 class="text-success text-center mt-4">Productos locales de Camas</h2>

<table class="table table-bordered table-striped w-75 mx-auto mt-4 text-center align-middle">
  <thead class="table-primary">
    <tr>
      <th>Producto</th>
      <th>Precio (€)</th>
    </tr>
  </thead>
  <tbody>
     <?php
     echo "while" ;
  // Usa un índice numérico para recorrer las claves.

    $keys = array_keys($productos);
    $i = 0;
    $n = count($keys);
    while($i < $n){
       $nombre = $keys[$i];
      $precio = $productos[$nombre]; 
      echo "<tr><td>". htmlspecialchars($nombre) . "</td><td>"
              . number_format($precio, 2, ',', '.') . "</td></tr>";
      $i++;
    }
  ?>
  </tbody>
</table>
