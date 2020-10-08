<?php
include_once "Personnel.php";
include_once "Manager.php";
$p1 = new Personnel("Hoa Nhu Anh", "21", "Ha Noi");
$p2 = new Personnel("Vu Duc Duong", "18", "Ninh Binh");
$p3 = new Personnel("Nguyen Duc Viet", "23", "Ha Noi");
$personnel_list = array(
  "0" => $p1,
  "1" => $p2,
  "2" => $p3
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

<body>
<caption><h1>Quan ly nhan su</h1></caption>
<form method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="age" placeholder="Age">
    <input type="text" name="address" placeholder="Address">
    <input type="submit" value="Add">
    <input type="submit" value="Edit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $address = $_REQUEST["address"];
    $per = new Personnel($name, $age, $address);
    array_push($personnel_list, $per);
}
?>
<table border="1">
    <tr>
        <th>STT</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>ADDRESS</th>
<!--        <th>Action</th>-->
    </tr>
    <?php foreach ($personnel_list as $index => $personnel): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $personnel->getName(); ?></td>
            <td><?php echo $personnel->getAge(); ?></td>
            <td><?php echo $personnel->getAddress(); ?></td>
          <td><input type="submit" value="Edit">-->
              <input type="submit" value="Delete">-->
            </td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>
