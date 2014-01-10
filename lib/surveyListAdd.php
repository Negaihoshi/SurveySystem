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
    <script id="formTemplate" type="text/x-jquery-tmpl">
        <div class="three wide column"></div>
        <div class="ten wide column" id="questions">
            <div class="ui segment">
                <form class="ui form">
                    <label>第 ${qestCount} 題</label>
                    <input type="text" placeholder="問卷說明">
                </form>
                <div class="ui form">
                    <div class="field">
                        <label>答題方式</label>
                    <div id="add_column"></div>
                </div>
                </div>
                <div class="ui text menu" id="choose">
                    <div class="ui buttons">
                        <a class="ui blue button" id="nextQuest">下一題</a>
                        <a class="ui purple button" onclick="">單行文字</a>
                        <a class="ui teal button" onclick="">多行文字</a>
                        <a class="ui orange button" onclick="">單選按鈕</a>
                        <a class="ui black button" onclick="">核取方塊</a>
                        <a class="ui green button" onclick="">下拉式選單</a>
                        <a class="ui red button" onclick="">以數字表示程度</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="three wide column"></div>
    </script>
    <script>
        $(document).ready(function(){
             var offset = $("#choose").offset();
            $(window).scroll(function() {
                var scrollTop = $(window).scrollTop();

                if(offset.top < scrollTop) {

                $("#choose").addClass("fixed")
                }else {

                $("#choose").removeClass("fixed")
                }
            })
            $(function(){
    // 幫 a.abgne_gotoheader 加上 click 事件
    $('#gotoheader').click(function(){
        // 讓捲軸用動畫的方式移動到 0 的位置
        // 感謝網友 sam 修正 Opera 問題
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        $body.animate({
            scrollTop: $('#header').offset().top
        }, 300);

        return false;
    });
});
            var qestCountValue = 1
            var data ={
                qestCount : qestCountValue
            } ;
            $('#nextQuest').click(function(){
                qestCountValue = qestCountValue + 1;
                $("#formTemplate").tmpl(data).appendTo("#origin");
            });
        });
    </script>
    <?php include_once("header.php"); ?>
    <div class="ui purple inverted menu" id="choose">

        <a class="item" id="nextQuest">單行文字</a>
        <a class="item" onclick="">多行文字</a>
        <a class="item" onclick="">單選按鈕</a>
        <a class="item" onclick="">核取方塊</a>
        <a class="item" onclick="">下拉式選單</a>
        <a class="item" onclick="">以數字表示程度</a>
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
                        <textarea placeholder="問卷說明"></textarea>
                    </form>
                    <div class="ui form">
                        <div class="field">
                            <label>答題方式</label>
                            <div id="add_column"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="three wide column"></div>
        </div>

    </div>
</body>

</html>
