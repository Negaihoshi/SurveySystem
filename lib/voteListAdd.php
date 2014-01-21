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
    <script src="../js/xcharts.min.js"></script>
    <link href="../css/xcharts.min.css" rel="stylesheet">
    <script src="../js/d3.v3.min.js"></script>
    <script src="../js/Chart.min.js"></script>
</head>
<?php include_once("pageInfo.php"); ?>
<body>
    <?php include_once("header.php"); ?>
    <button id="button_click1">Bar Chart</button>
    <button id="button_click2">Linear Chart</button>
    <button id="button_click3">Pie Chart</button>
    <div>
    <canvas id="myChart3" width="600" height="500"></canvas>
    <figure style="width: 600px; height: 500px;" id="myChart"></figure>
    </div>
    <script>

        var data1 = {
                  "xScale": "ordinal",
                  "yScale": "linear",
                  "main": [
                    {
                      "className": ".pizza",
                      "data": [
                        {
                          "x": "Pepperoni",
                          "y": 4
                        },
                        {
                          "x": "Cheese",
                          "y": 10
                        }
                      ]
                    }
                  ]
        };

        var data2 = {
                    "xScale": "time",
                    "yScale": "linear",
                    "type": "line",
                    "main": [
                      {
                        "className": ".pizza",
                        "data": [
                          {
                            "x": "2012-11-05",
                            "y": 0
                          },
                          {
                          "x": "2012-11-06",
                          "y": 0
                          },
                          {
                          "x": "2012-11-07",
                          "y": 0
                          },
                          {
                          "x": "2012-11-08",
                          "y": 0
                          },
                          {
                          "x": "2012-11-09",
                          "y": 0
                          },
                          {
                          "x": "2012-11-10",
                          "y": 0
                          },
                          {
                          "x": "2012-11-11",
                          "y": 10
                          }
                        ]
                      }
                    ]
                  };
        var opts = {
        "dataFormatX": function (x) { return d3.time.format('%Y-%m-%d').parse(x); },
        "tickFormatX": function (x) { return d3.time.format('%A')(x); }
        };

        var data3 = [
          {
            value: 30,
            color:"#F38630"
          },
          {
            value : 50,
            color : "#E0E4CC"
          },
          {
            value : 100,
            color : "#69D2E7"
          }     
        ]


    $(document).ready(function()
    {
            var myChart1 = new xChart('bar', data1, '#myChart');
            $("#myChart3").hide();
            $("#button_click1").click(function() {
              $("#myChart").html("").show();
              $("#myChart3").hide();
              var myChart1 = new xChart('bar', data1, '#myChart');
            });
            $("#button_click2").click(function() {
              $("#myChart").html("").show();
              $("#myChart3").hide();    
              var myChart3 = new xChart('line', data2, '#myChart', opts);
            });
            $("#button_click3").click(function() {
              $("#myChart").hide();
              $("#myChart3").show();    
              var b = new Chart($("#myChart3").get(0).getContext("2d")).Pie(data3);
            });

    });
    </script>

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
