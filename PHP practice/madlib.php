<HTML>
<head>
<title>Madlibs</title>
<link href="main3.css" rel="stylesheet">
</head>
<body>
<div id="container">
<?php
$adj1 = $_POST['adj1'];
$adj2 = $_POST['adj2'];
$noun1 = $_POST['noun1'];
$verb1 = $_POST['verb1'];
$noun2 = $_POST['noun2'];
$num = $_POST['num'];
$verb2 = $_POST['verb2'];
$noun3 = $_POST['noun3'];

print("<h3>Here is your madlib:</h3><br>The $adj1 $noun1 $verb1 the $adj2 house.
There she saw a $noun2 $verb2 with $num $noun3.");

?>
</div>
</body>
</html>

