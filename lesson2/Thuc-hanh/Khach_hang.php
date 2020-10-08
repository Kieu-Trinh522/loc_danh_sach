<?php
include("Khachhang.php");
$k1= new Khachhang("Đàm Kiều Trinh","05/02/2002","Tân Minh");
$k2= new Khachhang("Tạ Thị Thùy","07/02/2002","Quang Tiến");
$k3= new Khachhang("Đào Cỏ","14/11/2002","Nam Định");
$list= array(
        "0"=>$k1,
        "1"=>$k2,
        "2"=>$k3
);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    h1 {
        background-color: #0098ff;
        color: white;
    }


    th {
        background-color: #d7faf5;
    }

</style>
<body>
<table border="1">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>

    </tr>

    <?php foreach ($list as $index=>$khach):?>
    <tr>
        <td><?php echo $index +1;?></td>
        <td><?php echo $khach->getTên();?></td>
        <td><?php echo $khach->getNgaySinh();?></td>
        <td><?php echo $khach->getDiachi();?></td>
    </tr>
    <?php endforeach; ?>

</table>
</body>
</html>


