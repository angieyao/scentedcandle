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
<!--<div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');"> 
-->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Scented Candle</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="pages/list.php">LIST</a></li>
		  <li>
			<?php 
				if(@!$_SESSION['login']){ ?>
				<li class="active" ><a href="final_login.php">&nbsp;Login</a></li>
				<?php 
				}
				else{ ?>
					<li class="hassubs" style="color:#444444;">
						<a><i class="fa fa-user-circle-o" style="font-size:24px;"></i>&nbsp;
							Hi, <?php echo $_SESSION['name']; ?></a>
						<ul>
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
 
<?php
  $con = new mysqli("localhost", "root", "s1071736yzu", "project2");
  $sql = "SELECT * FROM account";
  if ($con->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
  $result = $con->query($sql);
  $msg = '';
  if (isset($_POST['login']) && !empty($_POST['account']) && !empty($_POST['password'])) {

    $account = $_POST['account'];
    $password = $_POST['password'];
    
    while($row = $result->fetch_assoc()){ // 一直撈
      if($account == $row["account"] && $password == $row["password"]){
        $_SESSION['cID'] = $row['cID'];
        $_SESSION['login'] = true;
        $_SESSION['name'] = $row['cName'];
        $_SESSION['account'] = $row['account'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['phone'] = $row['cPhone'];
        $_SESSION['address'] = $row['cAddress'];
      }
    }
    if(@$_SESSION['login'])
				header("Location: pages/list.php");
			$msg = "Wrong account or password";
  }
  $con->close();
?>

  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
        <div class = "wrapper row2">
            <div align="center"><h1><b>LOG IN</b></h1></div>
            <form class = "form-signin" role = "form" 
               action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
               ?>" method = "post">
              
               <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
               <div align="center"><input type = "text" class = "form-control" 
                  name = "account" style="width:30%;height:40px;" placeholder="Account"></div></br>
               <div align="center"><input type = "password" class = "form-control"
                  name = "password" style="width:30%;height:40px;" placeholder="Password"></div>
                  <!-- btn btn-lg btn-primary btn-block -->
               <br>
   
               <div align="center"><button class = "btn btn-primary" type = "submit" 
                  name = "login"  style="width:30%;height:40px;">Login</button></div><br>
               <div align="center"><input type ="button" class = "btn btn-lg btn-info btn-block" 
                onclick="javascript:location.href='register.php'" value="Register" style="width:30%;height:40px;"></input></div>
               </form>
         </div>
  </div>
  <!-- ################################################################################################ -->

<div class="wrapper row3">
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