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
    <script src="../js/form.js"></script>
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
            <a class="item" onclick="" id="upload">送出</a>
            <a class="item" onclick="" id="gotoheader">回到頂端</a>
        </div>
    </div>
<div class="ui two column relaxed grid">
    <div class="column" id="origin">
        <div class="ui segment">
            <form class="ui form">
                <div class="ui form">
                    <label>問卷標題</label>
                    <input type="text" name="surveyTitle" id="title" autofocus>
                </div>
                <div class="ui form">
                    <div class="field">
                        <label>說明</label>
                        <textarea placeholder="問卷說明" id="titleTextarea" name="surveyDetail" style="overflow:hidden"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="ui segment">
            <form class="ui form">
                <label>第 1 題</label>
                <textarea placeholder="題目說明" name="qestion" style="overflow:hidden"></textarea>
            </form>
            <div class="ui blue inverted segment">
                <label>答題方式</label>
                <p>單選</p>
            </div>
        </div>
    </div>
    <div class="column" >
        <div class="ui segment" id="origin2">
            <div class="count1">
                <div class="ui orange inverted segment">
                    <h1 id='displayTitle'></h1>
                    <label>說明</label>
                    <p id="displayTexArea"></p>
                </div>
                <div class="ui teal inverted segment">
                    <label>第 1 題</label><br>
                    <label>題目說明</label>
                    <p>{{textarea1}}</p>
                    <div class="ui form">
                        <label>作答</label>
                        <input type="text" name="" id="" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
    </script>
</body>
</html>