<!doctype html>
<html>
<head>
  <title>7년 전쟁- 30년 전쟁 이후의 유럽</title>
  <meta charset="utf-8">
  <script>
  var Links = {
    setColor:function (color){
      var alist = document.querySelectorAll('a');
      var i = 0;
      while(i < alist.length){
         alist[i].style.color = color;
          i = i+1;
      }
    }
  }
  var Body = {
    BodysetColor:function (color){
      document.querySelector('body').style.color = color;
    },
    backsetColor:function (color){
      document.querySelector('body').style.backgroundColor = color;
    }
  }
  function nightdayhandler(self){
    var target = document.querySelector('body')
    if (self.value === 'night'){
      Body.backsetColor('black');
      Body.BodysetColor('white');
      self.value = 'day';

      Links.setColor('red');

    } else {
      Body.backsetColor('white');
      Body.BodysetColor('black');
        self.value = 'night';

      Links.setColor('blue');

    }
  }
  var BodyB = {
    BodysetColorb:function(color){
      document.querySelector('body').style.backgroundColor = color;
    },
    setColorb:function(color){
      document.querySelector('#B_colorchange').value = color;
    }
  }
  function Bcolorhandler(self){
    var target = document.querySelector('body');
    if(self.value === 'SlateGray'){
      BodyB.BodysetColorb('SlateGray');
      BodyB.setColorb('SeaGreen');
    } else if(self.value === 'SeaGreen'){
      BodyB.BodysetColorb('SeaGreen');
      BodyB.setColorb('SeaShell');
    } else if(self.value === 'SeaShell'){
      BodyB.BodysetColorb('SeaShell');
      BodyB.setColorb('LightCoral');
    } else{
      BodyB.BodysetColorb('LightCoral');
      BodyB.setColorb('SlateGray');
    }
  }
  var BodyT = {
    BodysetColort:function(color){
      document.querySelector('body').style.color = color;
    },
    setColort:function(color){
      document.querySelector('#T_colorchange').value = color;
    }
  }
  function Tcolorhandler(self){
    var target = document.querySelector('body');
    if(self.value === 'Purple'){
      BodyT.BodysetColort('Purple');
      BodyT.setColort('Indigo');
    } else if(self.value === 'Indigo'){
      BodyT.BodysetColort('Indigo');
      BodyT.setColort('CadetBlue');
    } else if(self.value === 'CadetBlue'){
      BodyT.BodysetColort('CadetBlue');
      BodyT.setColort('salmon');
    } else{
      BodyT.BodysetColort('salmon');
      BodyT.setColort('Purple');
    }
  }
  var seemSize = 1,
     zoomSize = 1,
     browser = navigator.userAgent.toLowerCase();
function zoomIn()
  {
    seemSize += 0.05;
        zoomSize *= 1.2;
    zoom();
  }
  function zoomOut(){
    seemSize -= 0.05;
        zoomSize /= 1.2;
    zoom();
  }
  function zoom(){
       if (browser.indexOf("firefox") != -1) { //브라우저가 firefox일때
        document.body.style.webkitTransform =    'scale('+seemSize+')';
        document.body.style.webkitTransformOrigin = '50% 0 0'; //늘리고 줄였을때위치,
        document.body.style.msTransform =   'scale('+seemSize+')';
        document.body.style.msTransformOrigin = '50% 0 0';
        document.body.style.transform = 'scale('+seemSize+')';
        document.body.style.transformOrigin='50% 0 0';
        document.body.style.OTransform = 'scale('+seemSize+')';
        document.body.style.OTransformOrigin='50% 0 0';
       }else{
        document.body.style.zoom = zoomSize;
        }
  }
  </script>
  <style>
   body{
     margin: 0px;
   }
   a {
     color:blue;
   }
   h1 {
     font-size: 60px;
     text-align: center;
     margin:0px;
     padding: 20px
   }
   #big {
     font-size: 30px;
     width: 200px;
     margin: 0px;
     padding: 40px;
   }
   #small {
     font-size: 20px;
     width: 200px;
     margin: 0px;
     padding: 40px;
   }
  #grid{
    display: grid;
    grid-template-columns: 300px 1fr;
  }
  #introduce{
    float: right;
  }
  @media(max-width:800px){
    #grid{
      display:block;
    }
    h1{
      font-size: 45px
    }
    #big{
      font-size: 20px
    }
    #small{
      font-size: 20px
    }
    #introduce{
      float: none;
    }
  }
    .area-zoom-btn {
    display: block;
    margin: 6px auto;
    text-align: right;
  }
  .area-zoom-btn .zoom-btn {
    display: inline-block;
  }
  .area-zoom-btn .zoom-btn i {
    font-size: 1rem;
    letter-spacing: -1px;
    vertical-align: middle;
    height: 25px;
    border-top: 1px solid #777777;
    float: left;
    border-bottom: 1px solid #777777;
    padding: 0 9px;
    line-height: 22px;
  }
  .area-zoom-btn .zoom-btn .zoom {
    float: left;
    width: 22px;
    height: 25px;
    border: 1px solid #777777;
    text-indent: -9999px;
    background-color: #ffffff;
    background-image: url("https://jinnny.github.io/blog_source/img_comn.png");
    background-repeat: no-repeat;
    background-position: 5px 6px;
  }
  .area-zoom-btn .zoom-btn .zoom.zoomout {
    background-position: 5px -53px;
  }
  </style>
</head>
<body>
    <h1><a href="index.html">7 years war</a></h1>
    <input id="night_day" type="button" value="night" onclick="
    nightdayhandler(this);
    ">
    <input id="introduce" type="button" value="welcome" onclick="
    alert('Hi. welcome to visit my website. i made this website to provide high quality imformaton about 7 years war and share personal oppinion about this event. you can communicate with me through comment and chatting. thank you')
    ">
    <br><input id="B_colorchange" type="button" value="SlateGray" onclick="
    Bcolorhandler(this);
    "><br>
    <input id="T_colorchange" type="button" value="Purple" onclick="
    Tcolorhandler(this);
     ">
     <div class="area-zoom-btn">
  <div class="zoom-btn">
    <button class="zoom" onclick="javascript:zoomIn('body');">확대</button>
    <i>글자크기</i>
    <button class="zoom zoomout" onclick="javascript:zoomOut('body');">축소</button>
  </div>
</div>
    <div id="grid">
      <div>
      <ol id="big">
        <li><a href="1.php?id=30년 전쟁 이후의 유럽">30년 전쟁 이후의 유럽</a></li>
        <li><a href="2.php?id=프로이센의 탄생과 발전">프로이센의 탄생과 발전</a></li>
        <li><a href="3.php?id=전쟁의 서막">전쟁의 서막</a></li>
        <li><a href="4.php?id=오스트리아 왕위 계승 전쟁">오스트리아 왕위 계승 전쟁</a></li>
        <li><a href="5.php?id=7년 전쟁">7년 전쟁</a></li>
      </ol>
      <script>
        var content = ['<a href="#box1">30년 전쟁이후 독일과 17 세기에서 18세기로 넘어오며 벌어진 전술변화</a>','<a href="#box2">절대왕정이란 무엇인가?</a>','<a href="#box3">절대왕정으로 나아가는 방향</a>','<a href="#box4">유럽 최강국 프랑스</a>']
      </script>
      <ol id="small">
        <script>
          var i = 0;
          while(i < content.length){
            document.write('<li>'+content[i]+ '</li>');
            i = i + 1;
        }
        </script>
      </ol>
    </div>
    <div>
    <div id="box1">
    <h2>
     <?php
       echo $_GET['id'];
     ?>
    </h2>
    <p style="margin-top:45px;"><strong><a href="https://ko.wikipedia.org/wiki/30%EB%85%84_%EC%A0%84%EC%9F%81" target="_blank" title="30년 전쟁">30년 전쟁</a>이후 독일과 17 세기에서 18세기로 넘어오며 벌어진 전술변화</strong>: 30년 전쟁에 간단히 설명하자면 유럽에서 로마 가톨릭교회를 지지하는 국가들과 개신교를 지지하는 국가들 사이에서 벌어진 종교 전쟁이다.(당시 사람들은 30년 전쟁을 같은 전쟁이라 생각하지 않았지만 후대에 역사학자들이 이 당시 여러 종교전쟁들을 통합하여 부르게 되었다: 최초로 부른이는 <a href="https://ko.wikipedia.org/wiki/%EC%82%AC%EB%AC%B4%EC%97%98_%ED%8F%B0_%ED%91%B8%ED%8E%9C%EB%8F%84%EB%A5%B4%ED%94%84" target="_blank" title="사무엘 폰 푸텐도르프"> 사무엘 폰 푸펜도르프</a>이다) 유럽 뿐만 아니라 인류의 전쟁사에서 가장 잔혹하고 사망자가 많은 전쟁 중 하나였으며, 사망자수는 약 800만 명이었다. 이 끔찍한 전쟁은 1648년 5월 15일 그 유명한 <a href="https://ko.wikipedia.org/wiki/%EB%B2%A0%EC%8A%A4%ED%8A%B8%ED%8C%94%EB%A0%8C_%EC%A1%B0%EC%95%BD" target="_blank" title="베스트팔렌 조약">베스트팔렌 조약</a>으로 막을 내리게 되었다. 30년 전쟁은 17세기 전쟁을 대표하는 전쟁으로 전쟁에서 총과 대포 그리고 직업군인이 등장하며 과거와 다르게 높은 훈련도와 많은 돈이 필요하였다. 18세기 부터는 파이크병이 사라지고 국가단위 군단이 등장하며 더욱더 스케일이 커지게 된다. 또한 사각형 밀집대형<a href="https://ko.wikipedia.org/wiki/%ED%85%8C%EB%A5%B4%EC%8B%9C%EC%98%A4" target="_blank"  title="테르시오">테르시오</a>가 사라지고 횡으로 길게 늘어서는 <a href="https://namu.wiki/w/%EC%A0%84%EC%97%B4%EB%B3%B4%EB%B3%91" target="_blank" title="전열보병">전열대형 보병</a>이 등장한다. 18세기의 특징이라 할 수 있는 점은 절대왕정과 국가단위 군단이라 할 수 있다. 절대왕정의 심볼은 중앙 집중된 권력, 즉 상료제와 상비군이라 할 수 있는데 이때 시대만 해도 굉장히 비싼 <strong>총, 대포, 말, 화약</strong> 등 무기부터 이러한 무기를 다루고 전열보병 대형을 맞추어 이동, 전투 할 수 있는 훈련된 직업군인(상비군)을 유지하기 위해선 막대한 돈이 필요하고 이를 위해 국가단위의 군대가 필요했던 것이다. 18세기는 절대왕정이 들어오고 거의 봉건제가 끝나며(동유럽 제외) 국가의 권력이 세지고 부가 늘어난다. 이에 따라 군대의 질과 규모도 커지게 된다. 따라서 18세기에 들어오며 국가의 경제력이 곧 군사력과 직결되는 현대전의 양상을 띄게 된 것이다.<br>그렇다면 30년 전쟁 직후 30년 전쟁의 주무대이자 프로이센을 포함하는 독일지방은 어떻했을까? 당시 독일 지방의 상황은 지옥 그 자체 였다고 할 수 있었다. 전쟁이 끝나갈수록 용병들의 약탈은 점점 심해저서 당시 독일은 식량도 재신도 거의 다 털린 상황에서 사람들은 살아남기 위해 식인을 했다고 전해질 정도이다. 실제로 독일 지방은 전쟁이 끝난후 인구의 3분의 2가 죽거나 떠났다고 한다.</p><br>
    <img src="베스트팔렌.jpg" width="300"><u>베스트팔렌 조약</u><br><img src="파이크병과 머스킷병.jpg" width="300"><u>파이크병과 머스킷(총)병으로 이루어진 밀집보병대형 테르시오</u>
   </div>
   <div id="box2">
    <p><strong>절대왕정이란 무엇인가</strong><a href="https://namu.wiki/w/%EC%A0%88%EB%8C%80%EC%99%95%EC%A0%95" target="_blank" title="절대왕정"><strong>절대왕정(絶對王政)</strong></a>은 중세 후기부터 근세까지 약 3세기간 기존의 봉건제적 관습이 약화되고 왕에게 권력이 집중되는 현상을 일컫는 역사학계의 용어이다.본래는 <a href="https://namu.wiki/w/%ED%94%84%EB%9E%91%EC%8A%A4%20%ED%98%81%EB%AA%85" target="_blank" title="프랑스 혁명">프랑스 혁명</a> 이후 부르주아 민주주의 체제에서 구제도를 가르키는 앙시앙 레짐과 같이 왕을 폭정의 핵심으로 지목하면서 사용한 용어이나 후에 역사학계에서 단어를 차용해서 근세에 서구에서 진행된 중앙집권화 경향을 가르키는 말로 사용되었다.전제군주제와 비슷하게 여겨지지만 같은 것은 아니다. 특히, 전제군주제 하에서는 군주가 군림하는 것이 법적으로 명문화되어 있지만, 절대왕정에서는 왕의 군림이 법적으로 명문화되어 있는 것은 아니었다.<br>사람들이 절대왕정에 대해 가장 착각하는 것은 <a href="https://ko.wikipedia.org/wiki/%EB%A3%A8%EC%9D%B4_14%EC%84%B8" target"_blank" title="루이 14세">루이 14세</a>의 <strong>"짐이 곧 국가다."</strong>라는 말처럼 꼭 이시대 군주들을 진시황같은 중국황제같은 권력을 가졌다고 생각하는 것이다. 그러나 절대왕정시기는 <strong>"절대왕정"</strong>이 아니라 <strong>"절대왕정으로 가는 과정"</strong>으로 보는 것이 맞다. 우리가 학교에서 배웠던 절대왕정의 정책들이 있는데 그중 중요한 것을 꼽아 보자면 <a href="" targrt="_blank" title="중상주의정책"><strong>중상주의 정책</strong></a>과<strong>해외 식민지 정책</strong>이다. 이러한 절대왕정의 심볼이라 할 수 있는 인물은 영국의 "엘리자베스 1세", 에스파냐의 "펠리페 2세", 프랑스의 "루이 14세", 러시아의 "표트르 대제" 그리고 사실상 이 거대한 스토리의 주인공이라 할 수 있는 프로이센의 계몽군주 <strong>"<a href="https://ko.wikipedia.org/wiki/%ED%94%84%EB%A6%AC%EB%93%9C%EB%A6%AC%ED%9E%88_2%EC%84%B8_(%ED%94%84%EB%A1%9C%EC%9D%B4%EC%84%BC" target="_blank" title="프리드리히 2세">프리드리히 2세</a>"</strong>이다.(아쉽지만 조금 이따 자세히 소개 하도록 할 것이다.)<br><img src="프리드리히.jpg" width="300">프로이센의 왕 프리드리히 2세 (프리드리히 대제라고도 부른다.)
    </p>
   </div>
   <div id="box3">
    <p><strong>절대왕정으로 나아가는 방향</strong>절대왕정 시기 모든 유럽 국가의 왕들은하나의 목표:절대왕정 을 향해 달려가고 있었다. 그러나 가는 방향은 다를 수 밖에 없다. 국가마다 경제력, 인구수 등등 상황이 너무 달랐가 때문이다. 여러가지 길들 중 크게 <strong>"프랑스식 절대왕정"</strong>과<strong>"프로이센식 절대왕정"</strong>으로 나눌 수 있다. 바로 이 둘의 차이점을 비교하며 설명하고는 싶지만, 당시 각 국가의 역사, 상황 등등을 설명하지 않고는 왜 이 두 국가의 선택이 달랐는가? 이 둘의 결과가 왜 달랐는가? 를 이해하기 어려울 뿐더러 앞으로 7년 전쟁이라는 거대한 스토리 전체의 이해가 어려워진다. 따라서 본격적인 이야기전 각 국가의 배경을 설명하도록 하겠다.</p>
   </div>
   <div id="box4">
    <p><iframe width="560" height="315" src="https://www.youtube.com/embed/8JZSbScLl9o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p><br>이해를 돕기위한 동영상, 국방티비의 "<a href="https://ko.wikipedia.org/wiki/%ED%86%A0%ED%81%AC%EB%A9%98%ED%84%B0%EB%A6%AC_%EC%A0%84%EC%9F%81%EC%82%AC target="_blank" title="토전사">토크멘터리 전쟁사"</a>: 좋은 자료니 참고하세요.
    <p><strong>유럽 최강국 프랑스</strong>: <a href="https://ko.wikipedia.org/wiki/%ED%94%84%EB%9E%91%EC%8A%A4" target="_blank" title="프랑스">프랑스</a>는 누구나 알만큼 유명한 나라이다. 간단히 소개하자면 서유럽의 본토와 남아메리카의 프랑스령 기아나를 비롯해 여러 대륙에 걸쳐 있는 해외 레지옹과 해외 영토로 이루어진 국가로서, 유럽 연합 소속 국가 중 영토가 가장 넓다. 수도는 <a href="https://ko.wikipedia.org/wiki/%ED%8C%8C%EB%A6%AC_(%ED%94%84%EB%9E%91%EC%8A%A4)" target="_blank" title="파리">파리</a>이며, 프랑스 본토는 남북으로는 지중해에서 영국 해협과 북해까지, 동서로는 라인강에서 대서양에 이른다. 그 지형적 모양으로 인해 프랑스인들은 종종 이곳을 L'Hexagone(육각형)이라고 부른다. 주요 도시로는 파리, 마르세유, 리옹, 툴루즈, 니스, 낭트, 몽펠리에 등이 있다. 흔히 프랑스를 패션, 관광등으로 기억할 것이다.<br><img src="에펠탑.jpg" width="300"> 프랑스와 파리의 상징 "<a href="https://ko.wikipedia.org/wiki/%EC%97%90%ED%8E%A0%ED%83%91" target="_blank" title="에펠탑">에펠탑</a>"<br><br>프랑스는 지금이나 옜날이나 군사적, 경제적으로 유럽에서 탑 1,2위를 다투고 있으며 현재 독일과 함께 E.U를 이끄는 리더이다. 중세에서 근대(봉건제도에서 왕정으로 넘어가는 과도기) 프랑스는 군,경제에서 유럽 최강국이라 할 수 있었다. 이를 보여주는 가장 정확하고 쉬운 자료는 인구수이다. 예나 지금이나 인구는 경제력에서 아주 중요한 지표라 할 수 있다. 그러나 과거에는 "<strong>절대적</strong>"이라 할 수 있다.
    그럼 17세기~18세기 중반까지 당시 유럽인구 최강은 어느 국가였을까? 바로 프랑스이다.
    대부분 사람들이 러시아가 당시 유럽에서 가장 인구가 많았을 거라 추측한다. 뭐, 괜찮은(나름 근거있는) 추측이고 실제로 그럴 수도 있다. 일단 당시 나라별 인구수를 비교하자 <br><strong>프랑스: 약 2500(17세기 초반)~2800만(18세기 후반), 러시아 약 2000~2500만(???), 오스트리아: 약250만(이 수치는 오스트리아 지방의 인구만 포함시킨 것으로 당시 신성로마제국의 주인이라 할 수 있는 합스부르크 가문세력권 안의 인구는 더 많았다), 영국: 약 850만(식민지 제외), 네덜란드: 190만, 스페인(에스파냐): 870만, 독일어권 인구: 1500만, 프로이센 (브란덴부르크): 약 80만 <br>출처:<a href="https://ko.wikipedia.org/wiki/%EC%9C%A0%EB%9F%BD%EC%9D%98_%EC%9D%B8%EA%B5%AC" target="_blank" title="population">유럽인구</a></strong><br>
    <table border="1">
    <thead>
        <tr>
          <td>국가/지역</td> <td>시대</td> <td>인구(식민지 제외)</td>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td>프랑스</td> <td>17세기 중~18세기 중</td> <td>약 2500~2800만</td>
        </tr>
        <tr>
          <td>러시아</td> <td>17세기 중~18세기 중</td> <td>약 2000~2500만(통계 불확실)</td>
        </tr>
        <tr>
          <td>오스트리아</td> <td>17세기 중~18세기 중</td> <td>약 250만~</td>
        </tr>
        <tr>
          <td>스페인 (에스파냐)</td> <td>17세기 중~18세기 중</td> <td>약 870만</td>
        </tr>
        <tr>
          <td>영국</td> <td>17세기 중~18세기 중</td> <td>약 850만</td>
        </tr>
        <tr>
          <td>네덜란드</td> <td>17세기 중~18세기 중</td> <td>약 190만~</td>
        </tr>
        <tr>
          <td>프로이센</td> <td>17세기(브란덴부르크)->18세기(프로이센 왕국)</td> <td>약 80만(브란덴부르크)->약 300만(7년 전쟁 당시)</td>
        </tr>
        <tr>
          <td>독일어권(독일지방)</td> <td>30년 전쟁 이후 17세기 중~18세기 중</td> <td>약 1500만~(통계 불확실)</td>
        </tr>
    </tbody>
    </table>
    <br>이를 보고 알 수 있듯 당시 프랑스의 인구는 러시아 보다 많았다.
    물론 통계자료일 뿐이고 당시 러시아는 호구조사가 제재로 이루어지지 않아 프랑스가 러시아 보다 인구가 많았다는 것이 절대적이지는 않다.(나중에 7년 전쟁 당시 러시아가 군대를 33만명 동원하는걸 보면 아무리봐도 러시아 인구가 2500만이 안 된다는 게 의문이다)어쨌든 중요한 것은 당시는 국력이 곧 인구수와 직결되었고 프랑스가 사실상 유럽 최강의 인구 가지고 있었다는 것은 프랑스의 국력이 정말 강했음을 보여준다. 국력이 최강이니 절대왕정도 가장 앞서 있는 나라였다. 사실 프로이센식 절대왕정도 사실 프랑스식을 자기네 입맛에 맞게 벤치마킹 한 것이라 할 수 있다.<p style="margin-top:45px;"><strong>프랑스</strong>는 앞서 설명한 것처럼 프랑스는 절대왕정을 주도했던 나라이기 때문에 상당히 자세히 살펴보아야 한다. 절대왕정이란 간단히 말해서 국가의 권력이 중앙집권화 되는 과정이라 볼 수 있다. 여기서 중요 포인트는 이 권력이 <strong>국가</strong>에 집중되었는지 또는 왕, 즉 개인에게 집중되었는지이다. 본래 현대국가는 권력이 국가에 집중되는 구조이다. 그러나 프랑스는 국가의 공적 권한을 확대하는 것을 왕의 사적 권한을 확대하는 것으로 착각한 것이다. 이를 대표적으로 나타내는 말이 "짐이 곧 국가다"라는 루이 14세의 말로 이는 국가의 공적권한 확대가 아닌 왕의 권력과 국가의 권력을 혼돈하는 표현인 것이다. 이런 프랑스의 상황을 단편적으로 보여주는 싱횡이 바로 군대이다. 중세시대에 봉건영주들이 자신의 군대를 만들어 전쟁에 참가하는 구조였다면 이즈음 프랑스는 국가가 장교들을 선발한다. 이때 귀족들이나 <a href="https://ko.wikipedia.org/wiki/%EB%B6%80%EB%A5%B4%EC%A3%BC%EC%95%84%EC%A7%80" target="_blank" title="부르주아">부르주아</a>들에게 왕이 돈을 받고 장교직을 주면 이들이 증명서를 들고 군대를 모집하는 구조였던 것이다. 이러니 이것이 국가의 공적 관리인지 왕의 사적 관리인 혼란이 오게 된다. 물론 중세와는 다르게 국가의 장교들이 전국적으로 국가의 군대를 모집하는 구조로 귀족들이 자신들의 군대를 가지며 지휘하는 구조와는 차이가 있지만 그 장교들을 왕이 돈을 받고 선출하기에 우리가 현대에 생각하는 관점의 상비군과는 큰 차이가 이었던 것이다. 더욱 자세히 보여주는 상황은 프랑스의 관료와 징세 시스템이다. 본래 국가(당시의 국가)는 왕에게 소속되어 있는 왕실관리와 국가관리들로 나뉜다. 예를 들자면 조선은 영의정, 좌의정, 병조판서, 이조판서등의 일반관리와 내시, 궁녀등의 왕실관리로 나뉜다. 모두 알듯 궁녀는 모두 왕의 여자이다. 그외 내시와 다른 왕실관리들도 왕의 재산이다. 그러나 조선이란 국가와 국가관리들은 왕의 것이 아니다. 조선의 세금은 국가관리들이 징세하고 이 세금들은 왕의 사적 재산이 아니다. 그러나 프랑스는 왕이 국가관리까지 자신의 사적 권리로 임명하는 것이다. 조선은 왕이 직접 관리를 선출하지 않고 과거제 같은 국가 시스템으로 선출했지만 국가는 장교나 세금 징수원같은 국가관리까지 왕이 직접 선출한 것이다. 게다가 그냥 주는 것이 아니라 돈을 받고 주는 매관매직을 했다. 궁전에서 일하는 관리부터 세금 징수원까지 매관매직을 하다보니 매관매직으로 벌어들이는 돈이 왕실 수입의 38%에 달했다. 징세 시스템은 더욱더 이런 혼란이 심했다. 왕이 돈을 받고 세금을 걷을 권리를 주면 관리들이 왕에게 줄 원래 거두어야 할 세금과 자신들이 챙길 세금까지 징세하고 거기다 이들의 월급은 왕실, 국가관리 모두 세금으로 주 국가의 권한과 왕의 권한이 마구 뒤서뀌 여러 혼란이 야기된다. 앞에서 말했듯 징세되는 세금은 항상 원래 세금보다 2~3배가 더 많았고 또 왕 즉, 국가에 돌아가는 세금은 전체 거두어 들이는 세금에 반도 안 되는 상황이였다. 게다가 이 세금이 왕의 소유인지 국가의 소유인지가 구분이 안 되니 더욱더 혼란이 가중되고 비효율적이였던 것이다. 게다가 영국의 의회같이 왕을 견제하는 세력이 실질적으로 없었기에 이 구조는 한동안 계속해서 유지된다.(교회가 왕을 견제하는 역할을 수행했지만 결국 그들은 이해관계에 따라 서로 협력하는 존재였기에 실질적으로 견제역할을 수행할 집단이 없었다.)<br>그럼에도 인구 2500만에게서 걷는 수입은 모든 유럽의 왕들이 부러워하도록 하기 충분했다. 간단히 말해 프랑스는 이런 구조를 유지해도 큰 무리가 없을 정도로 잘 나가는 대기업이였던 것이다.
    </p>
   </div>
   <div id="box5">
    <p style="margin-top:65px;">그렇다면 프로이센의 상황은 어떡했을까? 프로이센식 절대왕정을 이해하려면 프로이센에 대한 이해가 필요하다. 자세한 이야기는 나중에 하고 지금은 간단한 설명만 하도록 하겠다. 프로이센 이야기를 하기 전에 먼저 브란덴부르크 이야기를 안할 수가 없다. 때문에 먼저 브란덴부르크에 관한 설명을 하도록 하겠다. 게르만족의 영역이었던 브란덴부르크 지역에 7세기 무렵 슬라브족들이 비스툴라 강 동쪽에서 건너와 이 곳에 거주하기 시작했다. 독일 왕 하인리히 1세가 슬라브족들에 대한 통치권을 행사하였지만 이후 다시 슬라브족들에게 통치권이 넘어갔다가 12세기 무렵 신성 로마 제국의 강력한 제후였던 하인리히 사자공의 노력에 힘입어 다시 게르만족이 주도권을 잡았다. 이렇게 결국 신성 로마 제국으로 흡수되어 신성로마제국의 변경백이 된다. 변경백이란</P>
   </div>
   </p>
    <p>
      <div id="disqus_thread"></div>
      <script>
          /**
          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = 'https://7-years-war-1.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
          })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </p>
 </div>
</div>
<input id="night_day" type="button" value="night" onclick="
nightdayhandler(this);
">
<div class="area-zoom-btn">
<div class="zoom-btn">
<button class="zoom" onclick="javascript:zoomIn('body');">확대</button>
<i>글자크기</i>
<button class="zoom zoomout" onclick="javascript:zoomOut('body');">축소</button>
</div>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61a199149099530957f6dbe9/1flfjru4m';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
