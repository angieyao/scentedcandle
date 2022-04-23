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
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style="background-image:url('../images/demo/backgrounds/1.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../index.html">Scented Candle</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.php">Home</a></li>
        
              <li class="active"><a href="full-width.html">Products</a></li>
            
          </li>
          <li><a href="list.php">List</a></li>
		  <li>
			<?php 
				if(@!$_SESSION['login']){ ?>
				<li class="hassubs" ><a href="../final_login.php">&nbsp;Login</a></li>
				<?php 
				}
				else{ ?>
					<li class="hassubs" style="color:#444444;">
						<a><i class="fa fa-user-circle-o" style="font-size:24px;"></i>&nbsp;
							Hi, <?php echo $_SESSION['name']; ?></a>
						<ul>
							<li><a href="../member.php">會員管理</a></li> 
							<li><a href="../logout.php">登出</a></li>
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
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="#">Products</a></li>

    </ul>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1><b>什麼是香氛蠟燭</b></h1>
      
      <p>香氛蠟燭能讓滿室芬芳，香味宜人，更是營造氣氛和幫助放鬆心情的療癒小物。</p>
	  <p>忙碌奔波了一整天，能讓喜愛的香味洗去疲憊，是有益身心靈的放鬆活動。</p>
	  <p>在家中或是工作場所擺放香氛蠟燭，藉由淡雅的香味提升空間質感之外，也是很不錯的一種居家擺飾。</p>
      
	  <h1><b>Our Products</b></h1>

    
<?php
		$con=new mysqli("localhost","root","s1071736yzu","project2");
		if($con->connect_error){
			die("Connection failed: ".$conn->connect_error);
		}
		 
		$result = $con->query("SELECT pName,pPrice,pImage FROM product");
		echo "<table class='table table table-hover' border='1'  > 
		<tr>
		<th>商品名稱</th>
		<th>商品價格</th>
		<th>圖片</th>";
		if (@$_SESSION['login'] === true)
		{
			echo "<th width='30' bgcolor='#FFDAB9'>新增至list</th> </tr>";
		}
		else
			echo "</tr>";
				

		while($row = mysqli_fetch_array($result))
		{
		?>
		<?php
		echo"<tr>";
		echo "<td width='200'>" . $row[0] . "</td>";
		echo "<td width='200'>" . $row[1] . "</td>";
		echo "<td width='150'> <img src=\"" . $row[2] . "\"width=\"200\"></td>";
		if (@$_SESSION['login'] === true)
		{
			?>
			<td style="vertical-align:middle;" ><button class="btn" type="submit" formmethod="get" onclick="location.href='get.php?pName=<?=$row['pName']?>&pPrice=<?=$row['pPrice']?>&pNum=1'" >+</button></td></tr>
		<?php
		}
		else
			echo "</tr>";
		}
		echo "</table>";
			 
		$con->close();
	?>
	   
      <div id="comments">
        <h2><b>Comments</b></h2>
        <ul>
          
      <li> 
		<article>
		 <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
	<?php
		$con=new mysqli("localhost","root","s1071736yzu","project2");
		if($con->connect_error){
			die("Connection failed: ".$conn->connect_error);
		}
		 
		$result = $con->query("SELECT * FROM message");
		
		while($row = mysqli_fetch_array($result))
		{
		 echo "<tr>";
		 echo "<header>" ."By"." ".$row[1]. "</header>";
		 echo "<td>" .$row[4] . "</td>";
		 echo "<header>" . $row[3] . "</header>";
		 echo "</tr>";
		}
	
			 
		$con->close();
	?>
	  </article>
        </ul>
      </div>
    </div>


    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>