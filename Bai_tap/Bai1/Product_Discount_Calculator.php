<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>Product Discount Calculator</h1>
<body>
<form method="post">
    <input type="text" name="p" placeholder="Mô tả của sản phẩm">
    <input type="text" name="l" placeholder="Giá niêm yết của sản phẩm">
    <input type="text" name="d" placeholder="Tỷ lệ chiết khấu (phần trăm)">
    <input type="submit" value="Calculate Discount">

</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $z=$_REQUEST['p'];
    $x=$_REQUEST['l'];
    $y=$_REQUEST['d'];
    $c=$x*$y*0.1;
    for($x=1;$x<$y;$x++){
        $c=$x*$y*0.1;
    }
    echo $z.$c;
}
