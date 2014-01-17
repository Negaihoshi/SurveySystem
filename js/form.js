
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
            var origin2 = document.getElementById('origin2');
            $('#nextText').click(function(){
                qestCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + qestCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>單行文字</p></div></div></div><div class="three wide column"></div></div>';
                origin2.innerHTML += '<div class="ui teal inverted segment"><label>第 1 題</label><br><label>題目</label><p>{{text1}}</p><label>題目說明</label><p>{{textarea1}}</p><div class="ui form"><label>作答</label><input type="text" name="" id=""></div></div>';
            });
            $('#nextTextArea').click(function(){
                qestCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + qestCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>多行文字</p></div></div></div><div class="three wide column"></div></div>';
            });
            $('#nextRadioBtn').click(function(){
                qestCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + qestCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>單選按鈕</p></div></div></div><div class="three wide column"></div></div>';
            });
            $('#nextCheck').click(function(){
                qestCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + qestCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>核取方塊</p></div></div></div><div class="three wide column"></div></div>';
            });
            $('#nextDropList').click(function(){
                qestCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + qestCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>下拉式選單</p></div></div></div><div class="three wide column"></div></div>';
            });
            $('#nextNumberLevel').click(function(){
                qestCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + qestCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>以數字表示程度</p></div></div></div><div class="three wide column"></div></div>';
            });
            $('#nextDatePicker').click(function(){
                qestCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + qestCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>時間</p></div></div></div><div class="three wide column"></div></div>';
            });
});