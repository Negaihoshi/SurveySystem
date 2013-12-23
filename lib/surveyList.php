<?
    session_start();
?>

<!doctype html>
<html lang="zh-tw" ng-app="CustomerList">

<?php include_once("pageInfo.php"); ?>
<body ng-controller="SearchCtrl">
    <?php include_once("header.php"); ?>

    <div id="content">
        <form class="uk-form">
            <fieldset>
                <div class="uk-form-row">
                    <form class="uk-search" data-uk-search>
                        <input class="uk-search-field" ng-model="query" type="search" placeholder="搜尋...">
                    </form>
                    <select ng-model="orderProp">
                        <option value="RegisterDate">最新</option>
                        <option value="name">按照字母順序</option>
                    </select>
                </div>
            </fieldset>
        </form>
        <table class="uk-table uk-table-striped">
            <caption>客戶資料</caption>
            <thead>
                <tr>
                    <th>id</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>registerDate</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="customer in customers | filter:query | orderBy:orderProp">
                    <td>{{customer.id}}</td>
                    <td>{{customer.username}}</td>
                    <td>{{customer.email}}</td>
                    <td>{{customer.password}}</td>
                    <td>{{customer.registerDate}}</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
