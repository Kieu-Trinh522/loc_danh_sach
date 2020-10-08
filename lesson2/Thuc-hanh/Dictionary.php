<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="search" placeholder="enter a word">
    <input type="submit" value="Tìm">
</form>
</body>
</html>
<?php
$dictionary = array(
    "hello"=>"xin chào",
    "how"=>"thế nào",
    "book"=>"quyển vở",
    "computer"=>"máy tính");
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $word = $_REQUEST["search"];
    $flag = 0;
    foreach ($dictionary as $index => $wordSearch) {
        if ($index === $word) {
            echo "Từ:" . $index . ".<br> Co nghia la:" . $wordSearch;
            echo "<br>";
            $flag = 1;
        }
        if ($flag == 0) {
            echo "khong tim thay tu";
        }


    }
}



