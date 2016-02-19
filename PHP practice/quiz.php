        
<HTML>
<head>
<title>Quiz</title>
<link href="main3.css" rel="stylesheet">
</head>
<body>
<div id="container">
<?php

$rightAns = array("B", "D", "C");

$correct1 = "incorrect";
$correct2 = "incorrect";
$correct3 = "incorrect";
$numCorrect = 0;

$ans1 = $_POST['1'];
$ans2 = $_POST['2'];
$ans3 = $_POST['3'];

if ($ans1 == $rightAns[0]) {
        $correct1 = "correct";
        $numCorrect++;
}
if ($ans2 == $rightAns[1]) {
        $correct2 = "correct";
        $numCorrect++;
}
if ($ans3 == $rightAns[2]) {
        $correct3 = "correct";
        $numCorrect++;
}

$grade = round($numCorrect / 3 * 100, 2);
print("<h1>Results:</h1>
        <h3>Question 1:</h3>
        Correct Answer: $rightAns[0] <br>
        Your Answer: $ans1 <br>
        You are $correct1 <br>
        <h3>Question 2:</h3>
        Correct Answer: $rightAns[1] <br>
        Your Answer: $ans2 <br>
        You are $correct2 <br>
        <h3>Question 3:</h3>
        Correct Answer: $rightAns[2] <br>
        Your Answer: $ans3 <br>
        You are $correct3 <br><br>
        <h3>Percent answered correctly: $grade%</h3>");
?>
</div>
</body>
</html>

