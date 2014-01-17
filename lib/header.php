    <nav class="uk-navbar" id="header">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="../index.php">問卷系統</a></li>
            <li><a href="surveyList.php">舊問卷</a></li>
            <li class="uk-parent"><a href="surveyListAdd.php">新問卷</a></li>
        </ul>

        <div class="uk-navbar-flip">
            <ul class="uk-navbar-nav">
                <li class="uk-parent" data-uk-dropdown="">
                    <a href="memberEdit.php"><?$loginName = $_SESSION['loginName'];echo "$loginName";?> <i class="uk-icon-caret-down"></i></a>

                    <div style="" class="uk-dropdown uk-dropdown-navbar">
                        <ul class="uk-nav uk-nav-navbar">
                            <li><a href="memberEdit.php">修改會員資料</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="logout.php">登出</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <script>
      $(document).ready(function(){
       var
       $menuItem = $('.menu a.item'),
          $dropdown = $('.menu .dropdown'),
          // alias
          handler = {

              activate: function () {
                  if (!$(this).hasClass('dropdown')) {
                      $(this)
                          .addClass('active')
                          .closest('.ui.menu')
                          .find('.item')
                          .not($(this))
                          .removeClass('active');
                  }
              }

          };

      $dropdown.dropdown({
          on: 'hover'
      });

      $('.ui.selection.dropdown').dropdown();

      $menuItem.on('click', handler.activate);
      $('.demo.menu .item')
          .tab('change tab', 'second')
        ;
    });

    </script>