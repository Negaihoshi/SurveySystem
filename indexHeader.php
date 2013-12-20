<nav class="uk-navbar">
    <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="index.php">問卷系統</a></li>
    </ul>

    <div class="uk-navbar-flip">
        <ul class="uk-navbar-nav">
            <?
            session_start();
            if (empty($_SESSION['email']) == true || isset($_SESSION['email']) == false ) {
                echo "<li><a href='lib/login.php'>登入</a></li>";
                echo "<li><a href='lib/register.php'>註冊</a></li>";
            }
            else {
                if(isset($_SESSION['admin'])==true){
                    if($_SESSION['admin']==1) echo "<li><a href='lib/member.php'>主控台</a></li>";
                    else echo "<li><a href='lib/member.php'>主控台</a></li>";
                }else{
                    echo "<li><a href='lib/member.php'>主控台</a></li>";
                }
                echo "<li><a href='lib/logout.php'>登出</a></li>";
            }
            ?>
        </ul>
    </div>
</nav>
