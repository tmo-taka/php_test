<html>
<head>
    <title>PHP Test</title>
</head>
<body>
    <p>テスト:t</p>
<?php

//古い記述 PHP7.0.0以下
// $link = mysql_connect('localhost:3306', 'root', 'root');
    try {
        $db = new PDO('mysql:dbname=test;host=localhost;charset=utf8','root','root');
        echo "接続OK！";
        $result = $db->prepare('select * from member');
        $result->execute();
        $PDO = null;
            while($row = $result->fetch()){
                echo $row['name'];
                echo $row['part'];
            }
        } catch (PDOException $e) {
        echo 'DB接続エラー！: ' . $e->getMessage();
    }
?>
</body>
</html>
