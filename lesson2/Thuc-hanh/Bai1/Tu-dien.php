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
<caption><h1>TỪ ĐIỂN ANH-VIỆT</h1></caption>
<form method="post">

    <input type="text" name="search" placeholder="Nhap tu can tim">
    <input type="submit" value="Search">

</form>
</body>
</html>
<?php
$dictionary= array("hello"=>"xin chào", "how"=>"thế nào", "book"=>"quyển vở", "computer"=>"máy tính");
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $searchword = $_REQUEST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }

    }
    if($flag==0){
        echo "khong thay tu can tim";
    }

}

