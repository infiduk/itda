<html>
<head>
<title>잇(it)다!</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link href="include/font.css" rel="stylesheet" type="text/css">
<script language="Javascript" src="include/common.js"></script>
<style>

</style>
</head>

<body style="margin:0">
<center>



<html>
<head>
<title>잇(it)다!</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<link href="include/font.css" rel="stylesheet" type="text/css">
<link href="custom.css" rel="stylesheet" type="text/css">
        <script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <link rel="imageCaption" type="text/css" href="imageCaption.css" />

        <style>

@keyframes zoomOut{from{opacity:1;}50%{opacity:0;transform:scale3d(.3, .3, .3);}to{opacity:0;}}
        @-webkit-keyframes bounceInDown {
       from, 60%, 75%, 90%, to {
         -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
         animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
       }

       0% {
         opacity: 0;
         -webkit-transform: translate3d(0, -3000px, 0);
         transform: translate3d(0, -3000px, 0);
       }

       60% {
         opacity: 1;
         -webkit-transform: translate3d(0, 25px, 0);
         transform: translate3d(0, 25px, 0);
       }

       75% {
         -webkit-transform: translate3d(0, -10px, 0);
         transform: translate3d(0, -10px, 0);
       }

       90% {
         -webkit-transform: translate3d(0, 5px, 0);
         transform: translate3d(0, 5px, 0);
       }

       to {
         -webkit-transform: none;
         transform: none;
       }
     }

     @keyframes bounceInDown {
       from, 60%, 75%, 90%, to {
         -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
         animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
       }

       0% {
         opacity: 0;
         -webkit-transform: translate3d(0, -3000px, 0);
         transform: translate3d(0, -3000px, 0);
       }

       60% {
         opacity: 1;
         -webkit-transform: translate3d(0, 25px, 0);
         transform: translate3d(0, 25px, 0);
       }

       75% {
         -webkit-transform: translate3d(0, -10px, 0);
         transform: translate3d(0, -10px, 0);
       }

       90% {
         -webkit-transform: translate3d(0, 5px, 0);
         transform: translate3d(0, 5px, 0);
       }

       to {
         -webkit-transform: none;
         transform: none;
       }
     }

     .bounceInDown {
       -webkit-animation-name: bounceInDown;
       animation-name: bounceInDown;
     }



             @keyframes bounce {
       from, 20%, 53%, 80%, to {
         -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
         animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
         -webkit-transform: translate3d(0,0,0);
         transform: translate3d(0,0,0);
       }

       40%, 43% {
         -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
         animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
         -webkit-transform: translate3d(0, -30px, 0);
         transform: translate3d(0, -30px, 0);
       }

       70% {
         -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
         animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
         -webkit-transform: translate3d(0, -15px, 0);
         transform: translate3d(0, -15px, 0);
       }

       90% {
         -webkit-transform: translate3d(0,-4px,0);
         transform: translate3d(0,-4px,0);
       }
     }

     .bounce {
       -webkit-animation-name: bounce;
       animation-name: bounce;
       -webkit-transform-origin: center bottom;
       transform-origin: center bottom;
     }



#panel, #flip {
    width: 500px;
    padding: 5px;
    text-align: center;
    background-color: white;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
}

  body { padding-bottom: 70px; }


                  .cycle-slideshow {
          z-index : -1;
          animation-duration : 2s;
          animation-name : bounce;
      }
       .cycle-slideshow img {
          display : block;
          width : 100%;
      }


</style>
<script language="Javascript" src="include/common.js"></script>
<!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


<script>

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>



</head>





<body style="margin:0">
<center>




    <!-- Fixed navbar -->
<!--
    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
<li><a href='member_login.php'>로그인</a></li>
							<li><a href='member_agree.php'>회원가입</a></li>


                     <li>

                <form class="navbar-form navbar-left" role="search" name="form1" method="post" action="product_search.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="상품검색"  name="findtext" maxlength="40" size="17" >
        </div>

        <button type="submit" class="btn btn-default">검색하기</button>
      </form>
              </li>
          </ul>
		  -->
<!--
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>

<!--
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	-->


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <ul class="nav navbar-nav">
          <a class="navbar-brand" href="main.php">잇(it)다!</a>
        <li><a href="product.php?menu=1">메뉴1</a></li>
        <li><a href="product.php?menu=2">메뉴2</a></li>
        <li><a href="product.php?menu=3">메뉴3</a></li>
        <li><a href="product.php?menu=4">메뉴4</a></li>
        <li><a href="product.php?menu=5">메뉴5</a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
<li><a href=''></a></li>
		<li><a href='member_login.php'>로그인</a></li>
		<li><a href='member_agree.php'>회원가입</a></li>

    </ul>
  </div>
</nav>



    <div id="space" style="margin-bottom: 100px;"> </div>

<!-- 메인이미지 -->

<div id="mainImage">

     <div class="cycle-slideshow">
            <img src="/images/main_ad1.jpg"  height="800px"/>
            <img src="/images/main_ad2.jpg" height="800px"/>
        </div>


</div>



    <div id="flip">공지사항 클릭</div>
<div id="panel">8/1일은 회의날입니다</div>





</center>

</body>
</html>
