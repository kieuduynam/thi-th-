<?php
session_start();
require_once '../model/SachModel.php';

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$sachModel = new SachModel();
$sachs = $sachModel->getTop5Sachs();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sách</title>
</head>
<body>
    <h2>Danh sách Sách</h2>
    <table border="1">
        <tr>
            <th>Mã Sách</th>
            <th>Tên Sách</th>
            <th>Số Lượng</th>
        </tr>
        <?php
        foreach($sachs as $sach) {
            echo "<tr>";
            echo "<td>".$sach['MaSach']."</td>";
            echo "<td>".$sach['TenSach']."</td>";
            echo "<td>".$sach['SoLuong']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
