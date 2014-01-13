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
    <script>
        $(document).ready(function(){

             var offset = $("#choose").offset();    <!--固定選單-->
            $(window).scroll(function() {
                var scrollTop = $(window).scrollTop();

                if(offset.top < scrollTop) {

                $("#choose").addClass("fixed");
                }else {

                $("#choose").removeClass("fixed");
                }
            });

            $(function(){   <!--回到最上層-->
                $('#gotoheader').click(function(){
                    var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
                    $body.animate({
                        scrollTop: $('#header').offset().top
                    }, 300);

                    return false;
                });
            });

            var qestCount = 1;
            var origin = document.getElementById('origin');
            $('#nextText').click(function(){
                qestCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + qestCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui form"><div class="field"><label>答題方式</label><div id="add_column"></div></div></div></div></div><div class="three wide column"></div></div>';
            });
            $('#nextTextArea').click(function(){

            });
            $('#nextRadioBtn').click(function(){

            });
            $('#nextCheck').click(function(){

            });
            $('#nextDropList').click(function(){

            });
            $('#nextNumberLevel').click(function(){

            });
            $('#nextDatePicker').click(function(){

            });
        });
    </script>
    <?php include_once("header.php"); ?>
    <div class="ui purple inverted menu" id="choose">

        <a class="item" id="nextText">單行文字</a>
        <a class="item" id="nextTextArea">多行文字</a>
        <a class="item" id="nextRadioBtn">單選按鈕</a>
        <a class="item" id="nextCheck">核取方塊</a>
        <a class="item" id="nextDropList">下拉式選單</a>
        <a class="item" id="nextNumberLevel">以數字表示程度</a>
        <a class="item" id="nextDatePicker">時間</a>
        <a class="item" id="nextNewTab">新分頁</a>
        <div class="right menu">
            <a class="item" onclick="" id="gotoheader">回到頂端</a>
        </div>
    </div>
    <div id="content" >
        <div class="ui grid">
            <div class="three wide column">
            </div>
            <div class="ten wide column" id="questions">
                <div class="ui form">
                    <div class="ui segment">
                        <div class="ui form">
                            <label>問卷標題</label>
                            <input type="text">
                        </div>
                        <div class="ui form">
                            <div class="field">
                                <label>說明</label>
                                <textarea placeholder="問卷說明"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="three wide column">
            </div>
        </div>
        <div class="ui grid" id="origin">
            <div class="three wide column"></div>
            <div class="ten wide column" id="questions">
                <div class="ui segment">
                    <form class="ui form">
                        <label>第 1 題</label>
                        <textarea placeholder="題目說明"></textarea>
                    </form>

                    <label>答題方式</label>
                </div>
            </div>
            <div class="three wide column"></div>
        </div>

    </div>
</body>

</html>
