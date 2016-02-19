<HTML>
<head>
<title>Calculator</title>
<link href="main3.css" rel="stylesheet">
</head>
<body>
<div id="container">
<?php
$num1 = $_POST['1'];
$num2 = $_POST['2'];
$operator = $_POST['op'];

if ($operator == "+") {
        $result =(float)$num1 + (float)$num2;

}
elseif ($operator == "-") {
        $result = (float)$num1 - (float)$num2;
}
elseif ($operator == "/") {
        $result = (float)$num1 / (float)$num2;
}
elseif ($operator == "*") {
        $result =(float)$num1 * (float)$num2;
}

print("<h3>Result:</h3><br> $num1 $operator $num2 = $result");
?>
</div>
</body>
</html>