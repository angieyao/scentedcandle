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
<style type="text/css"></style>
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
          <li><a href="pages/full-width.php">Products</a></li>
		  <li><a href="pages/list.php">List</a></li>
          <?php 
							if(@!$_SESSION['login']){ ?>
							<li class="hassubs" ><a href="final_login.php"><i class="fa fa-user-circle-o" style="font-size:24px"></i>&nbsp;Login</a></li>
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
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
 </style>
 
 <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
        <div class = "wrapper row2">
            <div align="center"><h1><b>** Modify member information **&nbsp;</b></h1></div>
            <form class = "form-signin" role = "form" 
               action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
               ?>" method = "post">
              
             
			<div align="center">
			<label for="account"><b>Account&nbsp;</label>
            <input type = "text" class = "form-control" id="account"  required="required" 
			value="<?=@$_SESSION['account'];?>" name="account" disabled></input><br>
			
			<label for="password">Password&nbsp;</label>
            <input type = "text" class = "form-control" id="password"  required="required" 
			value="<?=@$_SESSION['password'];?>" name="password"></input><br>

            <label for="name">Name&nbsp;</label>
            <input type = "text" class = "form-control" id="name"  required="required" 
			value="<?=@$_SESSION['name'];?>" name="name"></input><br>

            <label for="phone">Phone&nbsp;</label>
            <input type = "text" class = "form-control" id="phone"  required="required" 
			value="<?=@$_SESSION['phone'];?>" name="phone"></input><br>

			<label for="address">Address&nbsp;</label>
            <input type = "text" class = "form-control" id="address"  required="required" 
			value="<?=@$_SESSION['address'];?>" name="address"></input><br>
			
			<label for="email">email&nbsp;</label>
            <input type = "text" class = "form-control" id="email"  required="required" 
			value="<?=@$_SESSION['email'];?>" name="email"></input><br>
			
			<label for="sex">sex&nbsp;</label>
            <input type = "text" class = "form-control" id="sex"  required="required" 
			value="<?=@$_SESSION['sex'];?>" name="sex"></input><br>
			
            <label for="birthday">birthday&nbsp;</b></label>
            <input type = "text" class = "form-control" id="birthday"  required="required" 
			value="<?=@$_SESSION['birthday'];?>" name="birthday"></input><br>   
                  <!-- btn btn-lg btn-primary btn-block -->
               <br>
   
               <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "send"  style="width:30%;height:40px;">Modify</button></div>
                  
        </form>
    </div>
</div>
		
 <?php
		          $con = new mysqli("localhost", "root", "a29079643", "project2");
		          if ($con->connect_error) {
		                die("Connection failed: ". $conn->connect_error);
		          }

					
		            if (isset($_POST['send']) && !empty($_POST['password']) 
					&& !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['address']) 
					&& !empty($_POST['email'])&& !empty($_POST['sex'])&& !empty($_POST['birthday'])) {
						$cID = $_SESSION['cID'];
						$account = $_SESSION['account'];
						$password = $_POST['password'];
						$name = $_POST['name']; 
						$phone = $_POST['phone'];
		                $address = $_POST['address'];
						$email = $_POST['email'];
						$sex= $_POST['sex'];
						$birthday= $_POST['birthday'];
		                $sql = "UPDATE account SET password='$password', cName='$name',cPhone='$phone'
		                ,cAddress='$address', email='$email', sex='$sex', birthday='$birthday' WHERE cID='$cID'";
		                if($con->query($sql) === true) {?>
		            		<script language="javascript"> alert('會員資料修改完成! **請重新登入**');</script>
		            		<script language="javascript">location.href="logout.php";</script>
		          <?php 
		          		}
		          	}

		          $con->close();
		    ?>

  
		 

  
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