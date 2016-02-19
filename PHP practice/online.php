<HTML>
<head>
<title>Store Form</title>
<link href="main3.css" rel="stylesheet">
</head>
<body>
<div id="container">
<?php
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];

if ($product == 'Necklace') {
        $price = "100";
}
elseif ($product == 'Earrings') {
        $price = "50";
}

$total = (int)$price * (int)$quantity;
print("<h3>Your Order:</h3><br>
        Name: $first $last <br>
        Email: $email <br>
        Item: $product <br>
        Item price: $$price <br>
        Quantity: $quantity <br>
        Total: $$total");
?>
</div>
</body>
</html>

