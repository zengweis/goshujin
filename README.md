本作品网址http://www.goshujin.cc
环境要求：
php、mysql
代码有详细注释，服务器需创建sql，sql库名可在两份php文件中自行更改，默认为
$servername = "localhost";
$username = "ClickCount";
$password = "ClickCount";
$dbname = "clickcount";
同时，需要对sql进行配置
1.打开sql  mysql -u ClickCount -p
2.选择创建的库  USE clickcount
3.创建表  CREATE TABLE click_counts (
    id INT PRIMARY KEY,
    count INT
);

4.插入数据  INSERT INTO click_counts (id, count) VALUES (1, 0);

请按照GPL3.0协议进行转载，使用，欢迎创作更多同类作品 Ciallo～～
