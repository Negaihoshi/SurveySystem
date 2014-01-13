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
<head>
    <script src="../js/Chart.min.js"></script>
    <script src="../js/test.js"></script>
</head>
<?php include_once("pageInfo.php"); ?>
<body>
    <?php include_once("header.php"); ?>

    <script>        
        var ctx = document.getElementById("myChart").getContext("2d");
        var myNewChart = new Chart(ctx).Bar(data);
    </script>
    <canvas id="myChart" width="400" height="400"></canvas>

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
