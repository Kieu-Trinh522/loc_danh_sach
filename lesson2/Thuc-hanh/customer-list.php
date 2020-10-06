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
    Tu:<input type="text" name="from" placeholder="dd/mm/yy">
    Den:<input type="text" name="to" placeholder="dd/mm/yy">
    <input type="submit" value="search">
</form>
</body>
</html>
<?php
$customer_list = array(
    "0" => array("name" => "Dam Thi Kieu Trinh", "birthday" => "05/02/2002", "address" => "Ha Noi"),
    "1" => array("name" => "Dam Thi Thu Trang", "birthday" => "13/05/2005", "address" => "Ha Noi"),
    "2" => array("name" => "Dam Khac Khang", "birthday" => "24/08/2009", "address" => "Ha Noi"),
    "3" => array("name" => "Dam Khac Ninh", "birthday" => "27/12/1981", "address" => "Han Noi"),
    "4" => array("name" => "Nguyen Thi Minh Phuong", "birthday" => "06/03/1982", "address" => "Han Noi")
);
function searchByDate($customers, $from_date, $to_date)
{
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }
    $filtered_customers = [];
    foreach ($customers as $customer) {
        if ($from_date !== '' && (strtotime($customer['birthday']) < strtotime($from_date)))
            continue;
        if (!empty($to_date) && (strtotime($customer['birthday']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}

$from_date = NULL;
$to_date = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_date = $_POST["from"];
    $to_date = $_POST["to"];
}
$filtered_customers = searchByDate($customer_list, $from_date, $to_date);
?>
<table border="1">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <!--        <th>Ảnh</th>-->
    </tr>
    <?php if (count($filtered_customers) === 0): ?>
        <tr>
            <td colspan="4" class="message">Không tìm thấy khách hàng nào</td>
        </tr>
    <?php else: ?>

    <?php foreach ($filtered_customers as $key => $customer): ?>
    <tr>
        <td><?php echo $key + 1; ?></td>
        <td><?php echo $customer['name']; ?></td>
        <td><?php echo $customer['birthday']; ?></td>
        <td><?php echo $customer['address']; ?></td>
    </tr>
        <?php endforeach; ?>
        <?php endif; ?>
</table>


