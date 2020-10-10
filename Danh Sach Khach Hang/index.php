<!doctype html>
<html lang="en">
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="10">
    <caption><h1> Danh Sach Khach Hang</h1></caption>
    <tr>
        <td>STT</td>
        <td>Ten</td>
        <td>Ngay Sinh</td>
        <td>Dia Chi </td>
        <td>Anh</td>
    </tr>
</table>
</body>
</html>
<?php
$customerlist = array(
    "1" => array("ten" => "Đào Mạnh Quỳnh",
        "ngaysinh" => "2002-07-31",
        "diachi" => "Trái Đất",
        "anh" => ""),
    "2" => array("ten" => "Quỳnh Đẹp Trai Dã Man",
        "ngaysinh" => "2002-07-31",
        "diachi" => "Trái Đất",
        "anh" => ""),
    "3" => array("ten" => "Ơ Quỳnh Đẹp Trai Vãi Lúa",
        "ngaysinh" => "2002-07-31",
        "diachi" => "Trái Đất",
        "anh" => ""),
    "4" => array("ten" => "Quỳnh Đẹp Trai",
        "ngaysinh" => "2002-07-31",
        "diachi" => "Trái Đất",
        "anh" => ""),
    "5" => array("ten" => "Quỳnh Siêu Đẹp Trai",
        "ngaysinh" => "2002-07-31",
        "diachi" => "Trái Đất",
        "anh" => "")
);
foreach($customerlist as $key => $values){
    echo "<tr>"."<br/>";

    echo "<td>".$key."</td>";

    echo "<td>".$values['ten']."</td>";

    echo "<td>".$values['ngaysinh']."</td>";

    echo "<td>".$values['diachi']."</td>";

    echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>"."<br/>";

    echo "</tr>";
}

?>