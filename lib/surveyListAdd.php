<?
    session_start();
?>
<?
    if($_SESSION['email'] == null){
        echo '您無權限觀看此頁面!';
        $url = "../index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    }
?>
<?php include_once("pageInfo.php"); ?>
<body>
    <?php include_once("header.php"); ?>



    <div id="content">
        <?php
        include("connect_db.php");

        //此判斷為判定觀看此頁有沒有權限
        //說不定是路人或不相關的使用者
        //因此要給予排除

echo "<table class='uk-table'><caption>會員資料</caption><thead>";
echo "<tr><th>ID</th><th>UserName</th><th>Email</th><th>Password</th><th>Admin</th><th>RegisterDate</th></tr></thead><tbody>";
        if($_SESSION['email'] != null)
        {
                //將資料庫裡的所有會員資料顯示在畫面上
                $sql = "SELECT * FROM member";
                $result = mysql_query($sql);
                while( $row = mysql_fetch_row($result))
                {
                   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>Admin</td><td>$row[4]</td></tr>";
                }
        }
        else
        {
                echo '您無權限觀看此頁面!';
                $url = "../index.php";
                echo "<script type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>";
        }
        echo "</tbody></table>";
        ?>

    </div>
    <!--
    <div class="tm-footer">
        <div class="uk-container uk-container-center uk-text-center">
            <p>&copy; Company 2013</p>
        </div>
    </div>
    -->
    <!-- Javascript -->
    <script scr="../js/uikit.min.js"></script>
</body>

</html>
