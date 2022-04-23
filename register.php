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
          <li><a href="final_login.php">LOG IN</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>

  <?php
		$con = new mysqli("localhost", "root", "s1071736yzu", "project2");
		if ($con->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}

	$rsql = "SELECT * FROM account";
	$result = $con->query($rsql);
	$msg = '';
	if (isset($_POST['register']) && !empty($_POST['cID'])&& !empty($_POST['account']) && !empty($_POST['password']) 
        && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['address']) 
        && !empty($_POST['email'])&& !empty($_POST['sex'])&& !empty($_POST['birthday'])){
        
        $cID = $_POST['cID'];
        $account = $_POST['account'];
		    $password = $_POST['password'];
		    $name = $_POST['name'];
		    $phone = $_POST['phone'];
        $address= $_POST['address'];
        $email = $_POST['email'];
        $sex = $_POST['sex'];
        $birthday = $_POST['birthday'];

		    $duplicate = false; // 檢查帳號是否重複
		    while($row = $result->fetch_assoc()){ // 一直撈
			    if($account == $row["account"]){
				    $duplicate = true;
			    }
		    }
		    if(!$duplicate){
			    $wsql = "INSERT INTO account (cID, account, password, cName, cPhone, cAddress, email, sex, birthday) 
						    VALUES ('$cID','$account','$password','$name','$phone','$address','$email','$sex','$birthday')";

            if($con->query($wsql) === true){

					    $msg = "Hi $name, 您已成功加入會員, 請重新登入!";?>
	            	<script language="javascript"> alert('<?=$msg?>');</script>
	            	<script language="javascript">location.href="final_login.php";</script>
	              <?php 
	          }
	      }
		    else
			    $msg = "帳號已存在！";
	}
		$con->close();
	?>

  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
        <div class = "wrapper row2">
            <div align="center"><h1><b>Register</b></h1></div>
            <form class = "form-signin" role = "form" 
               action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
               ?>" method = "post">
              
               <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
               <div align="center"><input type = "text" class = "form-control" 
                  name = "cID" style="width:30%;height:40px;" placeholder="cID"></div></br>
               <div align="center"><input type = "text" class = "form-control" 
                  name = "account" style="width:30%;height:40px;" placeholder="Account"></div></br>
               <div align="center"><input type = "password" class = "form-control"
                  name = "password" style="width:30%;height:40px;" placeholder="Password"></div></br>
                <div align="center"><input type = "text" class = "form-control" 
                  name = "name" style="width:30%;height:40px;" placeholder="name"></div></br>  
                <div align="center"><input type = "text" class = "form-control" 
                  name = "phone" style="width:30%;height:40px;" placeholder="phone"></div></br>
                <div align="center"><input type = "text" class = "form-control" 
                  name = "address" style="width:30%;height:40px;" placeholder="address"></div></br>
                <div align="center"><input type = "text" class = "form-control" 
                  name = "email" style="width:30%;height:40px;" placeholder="email"></div></br>
               <div align="center"><input type = "text" class = "form-control" 
                  name = "sex" style="width:30%;height:40px;" placeholder="sex"></div></br>
                <div align="center"><input type = "text" class = "form-control" 
                  name = "birthday" style="width:30%;height:40px;" placeholder="birthday"></div>
                  <!-- btn btn-lg btn-primary btn-block -->
               <br>
   
               <div align="center"><button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                  name = "register"  style="width:30%;height:40px;">Register</button></div><br>
                  
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