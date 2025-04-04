
一个可以让从雨一直叫你主人的项目


本作品网址http://goshujin.site <br>
环境要求：<br>
php、mysql
代码有详细注释，服务器需创建sql，sql库名可在两份php文件中自行更改，默认为  <br>
$servername = "localhost"; <br>
$username = "ClickCount"; <br>
$password = "ClickCount"; <br>
$dbname = "clickcount"; <br>
同时，需要对sql进行配置 <br>
1.打开sql  mysql -u ClickCount -p <br>
2.选择创建的库  USE clickcount <br>
3.创建表  CREATE TABLE click_counts ( <br>
    id INT PRIMARY KEY, <br>
    count INT <br>
); <br>

4.插入数据  INSERT INTO click_counts (id, count) VALUES (1, 0); <br>

