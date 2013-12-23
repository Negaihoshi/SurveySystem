<?
    session_start();
?>

<!doctype html>
<html lang="zh-tw" ng-app="CustomerList">

<head>
    <meta charset="UTF-8">

    <title>SurveySystem</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Negaihoshi">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.png"> -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
    <script src="../js/uikit.min.js"></script>
    <link href="../css/uikit.gradient.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/semantic/input.min.css" rel="stylesheet">
    <link href="../css/semantic/semantic.min.css" rel="stylesheet">
    <script src="../js/semantic.min.js"></script>
    <script src="../js/memberList.js"></script>
    <script src="../js/semantic.js"></script>
</head>

<body ng-controller="SearchCtrl">
    <?php include_once("header.php"); ?>

    <div id="content">
        <form class="uk-form">
            <fieldset>
                <legend>請各位同學填寫</legend>
                <div class="uk-form-row">
                    <p>1.</p>
                    <div class="ui slider checkbox">
                      <input name="q1_1" type="checkbox">
                      <label>Allow others to see when your dog is on a walk</label>
                    </div><br>
                    <div class="ui slider checkbox">
                      <input name="q1_2" type="checkbox">
                      <label>Allow others to see when your dog is on a walk</label>
                    </div>
                </div>
                <div class="uk-form-row">
                    <p>2.</p>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input name="fruit" checked="" type="radio">
                        <label>Apples</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input name="fruit" type="radio">
                        <label>Oranges</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input name="fruit" type="radio">
                        <label>Pears</label>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input name="fruit" type="radio">
                        <label>Grapefruit</label>
                      </div>
                    </div>
                  </div>                <div class="uk-form-row">
                    <p>3.</p>
                    <label>a. 你喜歡憑事實、證據或數據作決定<input type="checkbox"></label><br>
                    <label>b. 你喜歡憑感覺、經驗或人際關係作決定<input type="checkbox"></label>
                </div>
                <div class="uk-form-row">
                    <p>4.</p>
                    <label>a. 你喜歡憑事實、證據或數據作決定<input type="checkbox"></label><br>
                    <label>b. 你喜歡憑感覺、經驗或人際關係作決定<input type="checkbox"></label>
                </div>
                <div class="uk-form-row">
                    <p>5.</p>
                    <label>a. 你喜歡憑事實、證據或數據作決定<input type="checkbox"></label><br>
                    <label>b. 你喜歡憑感覺、經驗或人際關係作決定<input type="checkbox"></label>
                </div>
                <div class="uk-form-row">
                    <p>6.</p>
                    <label>a. 你喜歡憑事實、證據或數據作決定<input type="checkbox"></label><br>
                    <label>b. 你喜歡憑感覺、經驗或人際關係作決定<input type="checkbox"></label>
                </div>
                <div class="uk-form-row">
                    <p>7.</p>
                    <label>a. 你喜歡憑事實、證據或數據作決定<input type="checkbox"></label><br>
                    <label>b. 你喜歡憑感覺、經驗或人際關係作決定<input type="checkbox"></label>
                </div>
                <div class="uk-form-row">
                    <p>8.</p>
                    <label>a. 你喜歡憑事實、證據或數據作決定<input type="checkbox"></label><br>
                    <label>b. 你喜歡憑感覺、經驗或人際關係作決定<input type="checkbox"></label>
                </div>
                <div class="uk-form-row">
                    <p>9.</p>
                    <label>a. 你喜歡憑事實、證據或數據作決定<input type="checkbox"></label><br>
                    <label>b. 你喜歡憑感覺、經驗或人際關係作決定<input type="checkbox"></label>
                </div>
                <div class="uk-form-row">
                    <p>10.</p>
                    <label>a. 你喜歡憑事實、證據或數據作決定<input type="checkbox"></label><br>
                    <label>b. 你喜歡憑感覺、經驗或人際關係作決定<input type="checkbox"></label>
                </div>
            </fieldset>
        </form>
    </div>

</body>

</html>
