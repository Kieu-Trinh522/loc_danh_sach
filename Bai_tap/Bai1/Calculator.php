<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>Simple Calculator</h1>
<body>
<form method="post">
    Fist operand: <input type="text"name="f">
    Operator: <select name="o">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    Second operand: <input type="text" name="s">
    <input type="submit" value="Calculator">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

}
