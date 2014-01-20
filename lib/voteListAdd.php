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
    <script src="../js/xcharts.js"></script>
    <link href="../css/xcharts.css" rel="stylesheet">
    <script src="../js/d3.v3.js"></script>
</head>
<?php include_once("pageInfo.php"); ?>
<body>
    <?php include_once("header.php"); ?>
    <button id="button_click1">Bar Chart</button>
    <button id="button_click2">Linear Chart</button>
    <figure style="width: 600px; height: 500px;" id="myChart"></figure>
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


    $(document).ready(function()
    {
            var myChart1 = new xChart('bar', data1, '#myChart');

            $("#button_click1").click(function() {
              $("#myChart").html("");
              var myChart1 = new xChart('bar', data1, '#myChart');
            });
            $("#button_click2").click(function() {
              $("#myChart").html("");    
              var myChart2 = new xChart('line', data2, '#myChart', opts);
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
