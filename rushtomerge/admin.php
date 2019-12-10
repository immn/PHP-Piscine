<?php
    session_start();
    if ($_SESSION['admin'] != 1)
        die("Go away");
    
    include('./back/db.php');

    $result = mysqli_query($link, "SELECT * FROM orders");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ORDER ${row['id']} <br>User info: <br>";
        $users = mysqli_query($link, "SELECT * FROM users WHERE id = ${row['userid']}");
        $user = mysqli_fetch_assoc($users);
        echo <<<HTML
            nickname: ${user['nickname']}
            <br>
            email: ${user['mail']}
            <br>
            name: ${user['name']}
            <br>
            lastname: ${user['lastname']}
            <br>
            address: ${user['address']}
            <br>
HTML;
        $products = mysqli_query($link, "SELECT * FROM orders_products, products WHERE products.id=orders_products.product_id AND order_id = ${row['id']}");
        echo "BUY LIST: <br>";
        while ($product = mysqli_fetch_assoc($products)) {
            $price = $product['price'] / 100 * $product['quantity'];
            echo "product name: ${product['name']} x ${product['quantity']} - ${price} <br>";
        }
        echo "----------------------------------------<br><br>";
    }
    
    //$result = mysqli_query($link, "SELECT * FROM orders, orders_products, products, users WHERE products.id=orders_products.product_id AND users.id = orders.userid");
?>