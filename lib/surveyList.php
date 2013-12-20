<?
    session_start();
?>

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
                <caption>會員資料</caption>
                <thead>
                    <tr>
                        <th>mid</th>
                        <th>使用者名稱</th>
                        <th>信箱</th>
                        <th>密碼</th>
                        <th>管理員</th>
                        <th>註冊時間</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="customer in customers | filter:query | orderBy:orderProp">
                        <td>{{customer.mid}}</td>
                        <td>{{customer.username}}</a></td>
                        <td>{{customer.email}}</td>
                        <td>{{customer.password}}</td>
                        <td>
                            <form  class="uk-form" action="adminModify.php?mid={{customer.mid}}" method="POST">
                                <label><input type="checkbox" name='admin' ng-module="customer.admin" ng-checked="customer.admin==1">管理員</label>
                                <button class="uk-button uk-button-danger uk-button-mini" type="submit">確定</button>
                            </form>
                        </td>
                        <td>{{customer.registerDate}}</td>
                    </tr>
                </tbody>
            </table>
    </div>
</body>

</html>
