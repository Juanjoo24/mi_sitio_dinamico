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
    // Obtiene primero todas las claves del array y luego
    // accede a los valores usando $productos[$clave].
    // Útil si solo te interesa recorrer o modificar las claves.
    foreach (array_keys($productos) as $nombre):
      $precio = $productos[$nombre]; ?>
      <tr>
        <td><?= htmlspecialchars($nombre) ?></td>
        <td><?= number_format($precio, 2, ',', '.') ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
