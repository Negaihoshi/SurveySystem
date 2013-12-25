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



    <script>
        $(document).ready(function(){
            $("#add_button").click
            (
                function(){
                    $("#add_file_button").append('<input type="file" name="f[]">&nbsp;檔案名稱：<input type="text" name="file_show_name[]" value="" size="32" maxlength="64"><br>');
                }
            );
            $("a[id='del_file[]']").click(function(){
                if (confirm('確定刪除檔案')) {
                    return true;
                }
                return false;
            });
        });

        function RemoveCustomer(){

            TableLength = document.getElementById('customerTable').rows.length;
            if (TableLength > 2) {
                document.getElementById("customerTable").deleteRow(-1);
            };
        }
    </script>
    <div class="ui text menu">
        <div class="ui buttons">
            <a class="ui blue button" onclick="">下一題</a>
            <a class="ui purple button" onclick="">單行文字</a>
            <a class="ui teal button" onclick="">多行文字</a>
            <a class="ui orange button" onclick="">單選按鈕</a>
            <a class="ui black button" onclick="">核取方塊</a>
            <a class="ui green button" onclick="">下拉式選單</a>
            <a class="ui red button" onclick="">以數字表示程度</a>
        </div>
    </div>
    <div id="content" >
        <div class="ui grid">
            <div class="three wide column"></div>
            <div class="ten wide column" id="questions">
                <div class="ui segment">
                    <div class="ui form">
                        <label>問卷標題</label>
                        <input type="text">
                    </div>
                    <div class="ui form">
                        <div class="field">
                            <label>說明</label>
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
