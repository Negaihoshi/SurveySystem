$(document).load(function(){
	$('ui.vk.button').click(function(){
		        $('.addOptionZone').append('<input type="text" name="">');
	});
});
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

            $('#gotoheader').click(function(){ <!--回到最上層-->
                var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
                $body.animate({
                    scrollTop: $('#header').offset().top
                }, 300);
                return false;
            });

            var questCount = 0;
            var origin = document.getElementById('origin');
            //var origin2 = document.getElementById('origin2');


            var title = document.getElementById('title');
            title.onkeyup = title.onkeypress = function () {
            	document.getElementById('displayTitle').innerHTML = this.value.replace(/\n/g,"<br />").replace("<","&lt;").replace(">","&gt;").replace("\"","&quot;");
            }
            var titleTextarea = document.getElementById('titleTextarea');
            titleTextarea.onkeyup = titleTextarea.onkeypress = function () {
            	document.getElementById('displayTexArea').innerHTML = this.value.replace(/\n/g,"<br />").replace("<","&lt;").replace(">","&gt;").replace("\"","&quot;");
            }

            $('ui.vk.button').click(function(){
		        $('.addOptionZone').append('<input type="text" name="">');
		    });

            $('#nextText').click(function(){
                questCount++;
                $('#origin').append('<div class="ui two column relaxed grid"><div class="column"><div class="ui segment"><form class="ui form"><div class="ui form"><label>第  題</label><textarea placeholder="問卷說明" id="titleTextarea" name="surveyDetail" style="overflow:hidden"></textarea></div><div class="ui form"><div class="field"><label>答題方式</label><p>單選</p></div></div></form></div></div><div class="column" ><div class="ui segment" id="origin2"><div class="ui orange inverted segment"><h2 id="displayTitle" class="ui center aligned  orange inverted segment"></h2><label>說明</label><p id="displayTexArea"></p><div class="ui input"><input type="text" name="" id="" disabled></div></div></div></div></div>');

            });
            $('#nextTextArea').click(function(){
                questCount++;
                $('#origin').append('<div class="ui two column relaxed grid"><div class="column"><div class="ui segment"><form class="ui form"><div class="ui form"><label>第  題</label><textarea placeholder="問卷說明" id="titleTextarea" name="surveyDetail" style="overflow:hidden"></textarea></div><div class="ui form"><div class="field"><label>答題方式</label><p>單選</p></div></div></form></div></div><div class="column" ><div class="ui segment" id="origin2"><div class="ui orange inverted segment"><h2 id="displayTitle" class="ui center aligned  orange inverted segment"></h2><label>說明</label><p id="displayTexArea"></p><input type="text" name="" id="" disabled></div></div></div></div>');
            });
            $('#nextRadioBtn').click(function(){
                questCount++;
                $('#origin').append('<div class="ui two column relaxed grid"><div class="column"><div class="ui segment"><form class="ui form"><div class="ui form"><label>第 '+ questCount + ' 題</label><textarea placeholder="問卷說明" id="titleTextarea" name="surveyDetail" style="overflow:hidden"></textarea></div><div class="ui form"><div class="field"><div class="addOptionZone"><label>選項名稱</label><input type="button" value="添加選項"  class="ui vk button"><input type="text" name=""></div></div></div></form></div></div><div class="column" ><div class="ui segment" id="origin2"><div class="ui orange inverted segment"><h2 id="displayTitle" class="ui center aligned  orange inverted segment"></h2><label>說明</label><p id="displayTexArea"></p></div></div></div></div>');
            });
            $('#nextCheck').click(function(){
                questCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + questCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>核取方塊</p></div></div></div><div class="three wide column"></div></div>';
            });
            $('#nextDropList').click(function(){
                questCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + questCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>下拉式選單</p></div></div></div><div class="three wide column"></div></div>';
            });
            $('#nextNumberLevel').click(function(){
                questCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + questCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>以數字表示程度</p></div></div></div><div class="three wide column"></div></div>';
            });
            $('#nextDatePicker').click(function(){
                questCount++;
                origin.innerHTML += '<div class="three wide column"></div><div class="ten wide column" id="questions"><div class="ui segment"><form class="ui form"><label>第 ' + questCount +' 題</label><textarea placeholder="題目說明"></textarea></form><div class="ui blue inverted segment"><label>答題方式</label><p>時間</p></div></div></div><div class="three wide column"></div></div>';
            });
});
/*
<div class="ui two column relaxed grid" id="origin"><div class="column"><div class="ui segment"><form class="ui form"><div class="ui form"><label>問卷標題</label><input type="text" name="surveyTitle" id="title" autofocus></div><div class="ui form"><div class="field"><label>說明</label><textarea placeholder="問卷說明" id="titleTextarea" name="surveyDetail" style="overflow:hidden"></textarea></div></div></form></div></div>
<div class="column" ><div class="ui segment" id="origin2"><div class="count1"><div class="ui orange inverted segment"><h2 id='displayTitle' class="ui center aligned  orange inverted segment"></h2><label>說明</label><p id="displayTexArea"></p></div></div></div></div></div>
    */