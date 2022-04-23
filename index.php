<?php
session_start();
?>
<!DOCTYPE html>
<!--
Template Name: Skaxis
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>ScentedCandle</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/1.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Scented Candle</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="pages/full-width.php">Products</a></li>
          <li><a href="pages/list.php">LISt</a></li>
		  <li>
			<?php 
				if(@!$_SESSION['login']){ ?>
				<li ><a href="final_login.php">&nbsp;Login</a></li>
				<?php 
				}
				else{ ?>
					<li class="hassubs" style="color:#444444;">
						<a><i class="fa fa-user-circle-o" style="font-size:24px;"></i>&nbsp;
							Hi, <?php echo $_SESSION['name']; ?></a>
						<ul>
							<li><a href="member.php">會員管理</a></li> 
							<li><a href="logout.php">登出</a></li>
						</ul>
					</li>
				<?php 
				} ?>
		</li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p>品味旅程</p>
            <h3 class="heading">voyage roaming</h3>
            <p>實現對生活品質的要求與期待</p>
            <!--<footer><a class="btn" href="#">Luctus suscipit in</a></footer>-->
          </article>
        </li>
        <li>
          <article>
            <p>城市旅人</p>
            <h3 class="heading">urban voyager</h3>
            <p>從摩登都市走到大自然，翻轉熟悉日常之旅</p>
          </article>
        </li>
        <li>
          <article>
            <p>嶄新旅伴</p>
            <h3 class="heading">voyage on</h3>
            <p>讓無法親自遠行的你，帶來了來自各地的嶄新質感首選</p>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <div class="hoc clear"> 
    <!-- ################################################################################################ -->
    <figure id="introblocks">
      <ul class="nospace group">
        <li class="one_third first"><img src="images/demo/h1.jpg" alt=""></li>
        <li class="one_third"><img src="images/demo/h2.jpg" alt=""></li>
        <li class="one_third"><img src="images/demo/h3.jpg" alt=""></li>
      </ul>
    </figure>
    <p class="center"><a class="btn" href="pages/full-width.php">products</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <article class="group btmspace-80">
      <div class="two_third first"><img class="borderedbox inspace-10" src="images/demo/a.jpg" alt=""></div>
      <div class="one_third">
        <h6 class="heading">10/10 年末贈禮指南：從同事、朋友到家人的精選禮物清單，展現你的個人好品味！</h6>
        <ul class="nospace meta">
          <li><i class="fa fa-user"></i> 10/10 APOTHECARY</li>
          <li><i class="fa fa-tag"></i> lifestyle</li>
        </ul>
        <p>跟著10/10 APOTHECARY編輯整理的禮物指南，按照你的對象挑選出外型和實用度兼具的時髦禮物吧！</p>
        <p class="btmspace-30">關於送禮，不僅關乎個人品味，更可以透過一個體貼入微的禮物傳遞自己的感謝或祝福，進而點綴回憶，讓美好加乘。
          質感包裝＋實用物&hellip;</p>
        <footer class="nospace"><a class="btn" href="https://www.1010apothecary.com.tw/blog/posts/%E3%80%90%E7%B7%A8%E8%BC%AF%E7%B2%BE%E9%81%B8%E3%80%911010-%E5%B9%B4%E6%9C%AB%E8%B4%88%E7%A6%AE%E6%8C%87%E5%8D%97%EF%BC%9A%E5%BE%9E%E5%90%8C%E4%BA%8B%E3%80%81%E6%9C%8B%E5%8F%8B%E5%88%B0%E5%AE%B6%E4%BA%BA%E7%9A%84%E7%B2%BE%E9%81%B8%E7%A6%AE%E7%89%A9%E6%B8%85%E5%96%AE%EF%BC%8C%E5%B1%95%E7%8F%BE%E4%BD%A0%E7%9A%84%E5%80%8B%E4%BA%BA%E5%A5%BD%E5%93%81%E5%91%B3%EF%BC%81">Full Story &raquo;</a></footer>
      </div>
    </article>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <ul class="nospace group overview">
      <li class="one_third">
        <article><img src="images/demo/a1.jpg" alt="">
          <h6 class="heading">7個行家精選香氛蠟燭：秋冬一同燃起微光，打造專屬溫潤暖意空間！</h6>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> Winnie Tseng</li>
            <li><i class="fa fa-tag"></i> lifestyle</li>
          </ul>
          <p>秋冬中，濕濕冷冷的天氣裡，最療癒人心的莫過於回到家中之後，點燃一顆香氛蠟燭，隨著燭&hellip;</p>
          <footer class="nospace"><a class="btn" href="https://www.1010apothecary.com.tw/blog/posts/7%E5%80%8B%E8%A1%8C%E5%AE%B6%E7%B2%BE%E9%81%B8%E9%A6%99%E6%B0%9B%E8%A0%9F%E7%87%AD%EF%BC%9A%E7%A7%8B%E5%86%AC%E4%B8%80%E5%90%8C%E7%87%83%E8%B5%B7%E5%BE%AE%E5%85%89%EF%BC%8C%E6%89%93%E9%80%A0%E5%B0%88%E5%B1%AC%E6%BA%AB%E6%BD%A4%E6%9A%96%E6%84%8F%E7%A9%BA%E9%96%93%EF%BC%81">Full Story &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><img src="images/demo/a2.jpg" alt="">
          <h6 class="heading">打造質感辦公空間：5個品味佈置秘訣，藏⾝於忙碌間的世外桃源</h6>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> Jin Huang</li>
            <li><i class="fa fa-tag"></i> lifestyle</li>
          </ul>
          <p>新生活秩序誕生的後疫情時代，工作和生活的界線愈趨模糊。辦公空間的型態也不再被侷限於傳&hellip;</p>
          <footer class="nospace"><a class="btn" href="https://www.1010apothecary.com.tw/blog/posts/diptyque-x-the-one-%E8%81%AF%E6%89%8B%E6%89%93%E9%80%A0%E5%B1%B1%E6%9E%97%E8%88%87%E9%A6%99%E6%B0%9B%E7%A7%98%E5%A2%83%EF%BC%8C%E4%BA%AB%E5%8F%97%E9%81%A0%E9%9B%A2%E5%A1%B5%E5%9B%82%E7%9A%84%E5%B9%B3%E9%9D%9C">Full Story &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><img src="images/demo/a3.jpg" alt="">
          <h6 class="heading">居家儀式感指南：4種營造時髦生活Tips</h6>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> Pan</li>
            <li><i class="fa fa-tag"></i> lifestyle</li>
          </ul>
          <p>花森安治：「認真考慮怎麼樣的事情，能讓我們每天的生活過的開心一些、愉快一點，才是真正的『時髦』。」「生活」，大概是數一數二浪漫&hellip;</p>
          <footer class="nospace"><a class="btn" href="https://www.1010apothecary.com.tw/blog/posts/%E5%B1%85%E5%AE%B6%E5%84%80%E5%BC%8F%E6%84%9F%E6%8C%87%E5%8D%97%EF%BC%9A4%E7%A8%AE%E7%87%9F%E9%80%A0%E6%99%82%E9%AB%A6%E7%94%9F%E6%B4%BBtips">Full Story &raquo;</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>