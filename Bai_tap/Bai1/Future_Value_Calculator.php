<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>Future Value Calculator</h1>
<body>
<form method="post">
    <input type="text" name="InventmentAmount" placeholder="Lượng tiền đầu tư ban đầu">
    <input type="text" name="YearlyInterestRate" placeholder="Lãi suất năm">
    <input type="text" name="NumberofYears" placeholder="Số năm đầu tư">
    <input type="submit" value="Calculate">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_REQUEST["InventmentAmount"];
    $y = $_REQUEST["YearlyInterestRate"];
    $z = $_REQUEST["NumberofYears"];

    $a=$x+($x*$y);

    for($x=1;$x<$z;$x++){
        $a=$x+($x*$y);
    }
    echo $a;

}
