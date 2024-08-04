<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$cart = $_SESSION['cart'];
$total = 0;

if (count($cart) > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
        echo "<tr>
                <td>{$item['title']}</td>
                <td>\${$item['price']}</td>
                <td>
                    <input type='number' value='{$item['quantity']}' class='form-control' min='1'>
                </td>
                <td>\$" . ($item['price'] * $item['quantity']) . "</td>
                <td>
                    <button class='btn btn-danger btn-sm'>Eliminar</button>
                </td>
              </tr>";
    }
    echo "</tbody></table>";
    echo "<h3>Total a pagar: \$$total</h3>";
    echo "<button class='btn btn-success btn-lg'>Realizar Pedido</button>";
} else {
    echo "<p>El carrito está vacío.</p>";
}
?>
