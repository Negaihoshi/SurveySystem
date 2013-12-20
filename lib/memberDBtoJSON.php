<?php
    include("connect_db.php");
    $sql = "SELECT * FROM member";
    $result = mysql_query($sql);
    $JsonTable = array();
    while($row = mysql_fetch_array($result)){
        $JsonTable[] = array("id"=>"$row[0]","username"=>"$row[1]","email"=>"$row[2]", "password"=>"$row[3]","registerDate"=>"$row[4]");
    }
    echo json_encode($JsonTable, JSON_UNESCAPED_UNICODE);
?>