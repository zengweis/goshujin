<?php
// 连接数据库
$servername = "localhost";
$username = "ClickCount";
$password = "ClickCount";
$dbname = "ClickCount";

$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 处理点击事件
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 更新点击次数
    $sql = "UPDATE click_counts SET count = count + 1 WHERE id = 1";
    $conn->query($sql);
}

// 获取当前点击次数
$sql = "SELECT count FROM click_counts WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count = $row["count"];
    echo json_encode(["count" => $count]); // 返回当前点击次数给前端
} else {
    echo json_encode(["error" => "Count not found"]);
}

$conn->close();
?>
