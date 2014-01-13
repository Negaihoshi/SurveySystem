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
    $(document).ready(function(){
        
                 var barChartData = {   
                labels : ["January","February","March","April","May","June","July"],   
                datasets : [   
                    {   
                        fillColor : "rgba(220,220,220,0.5)",   
                        strokeColor : "rgba(220,220,220,1)",   
                        data : [65,59,90,81,56,55,40]   
                    },   
                    {   
                        fillColor : "rgba(151,187,205,0.5)",   
                        strokeColor : "rgba(151,187,205,1)",   
                        data : [28,48,40,19,96,27,100]   
                    }   
                ]   
                   
            }   
      
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(barChartData);  
    });
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
