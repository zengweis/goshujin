<?php
// 连接数据库
$servername = "localhost";
$username = "ClickCount";
$password = "ClickCount";
$dbname = "clickcount";

$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 更新数据库中的点击次数
$sql = "UPDATE click_counts SET count = count + 1 WHERE id = 1";
$conn->query($sql);

// 关闭数据库连接
$conn->close();
?>
