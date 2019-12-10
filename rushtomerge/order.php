<?php
    session_start();
    if (!$_SESSION['login'])
    {
        header('Location: /');
        exit();
    }
    if (count($_SESSION['cart']) < 1)
    {
        header('Location: /');
        exit();
    }

    include('./back/db.php');
    $result = mysqli_query($link, "INSERT INTO `orders` (`id`, `userid`, `time`, `sum`) VALUES (NULL, ${_SESSION['login']}, NOW(), ${_SESSION['sum']})");
    $orderid = mysqli_insert_id($link);
    foreach ($_SESSION['cart'] as $productid => $product)
    {
        mysqli_query($link, "INSERT INTO `orders_products` (`order_id`, `product_id`) VALUES (${orderid}, ${productid})");
    }

    //$_SESSION['cart'] = array();
    //header('Location: /');

    /*
    $result = mysqli_query($link, "SELECT * FROM users WHERE ");
	while ($row = mysqli_fetch_assoc($result)) {

    header('Location: /');
    */
?>