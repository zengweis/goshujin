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

// 查询数据库获取当前点击次数
$sql = "SELECT count FROM click_counts WHERE id = 1";
$result = $conn->query($sql);

// 检查查询结果是否有效
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["count"];
} else {
    echo "0";
}

// 关闭数据库连接
$conn->close();
?>
