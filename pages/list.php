<?php
session_start();
?>

<!DOCTYPE html>

<?php
if(@!$_SESSION['login']){ ?>
	<script language="javascript">alert('請先登入會員!');</script>
	<script language="javascript">location.href="../final_login.php"</script>
<?php
}
/*if(@count($row['pName'])<=1){ ?>
	<script language="javascript">alert('購物車內無商品!');</script>
	<script language="javascript">location.href="products.php"</script>*/
?>
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
        
              <li ><a href="full-width.php">Products</a></li>
            
          </li>
         <li class="active"><a href="#">List</a></li>
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
      <li><a href="#">List</a></li>

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

      
	  <h1><b>List</b></h1>

<div style="text-align:center;width:700px;margin:0px auto; top:150px; margin-bottom:200px; overflow:auto; font-family:Microsoft JhengHei; ">
   			<?php
				$con = new mysqli("localhost", "root", "s1071736yzu", "project2");

					if ($con->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

				$cID = $_SESSION['cID'];
				
				if (@$_POST['action'] == 'Delete') {
					$delete_array = @$_POST["delete"];
					for($i = 0; $i < count($delete_array) ; $i++){
						$sql = "DELETE FROM list WHERE pName = '$delete_array[$i]' and cID = '$cID'";
						$con->query($sql);
					}
				}
			?>
   <form action="list.php" method="post">
	<?php
		$con=new mysqli("localhost","root","s1071736yzu","project2");
		if($con->connect_error){
			die("Connection failed: ".$conn->connect_error);
		}
		 
		$result = $con->query("SELECT pName, pPrice, pNum FROM list WHERE cID=$cID");
		echo "<table class='table' style='color:#444444' border='1'> 
		<tr>
		<th>商品名稱</th>
		<th>商品價格</th>
		<th>數量</th>
		<th>整筆刪除</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
		{
		?>
		<?php
		echo"<tr>";
		echo "<td width='200'>" . $row[0] . "</td>";
		echo "<td width='200'>" . $row[1]* $row['pNum']. "</td>";
		echo "<td>" . $row['pNum'] . "</td>";
		
		  ?>
			<td><input type="checkbox" name="delete[]" value="<?=$row['pName']?>"></td>
				  
		<?php
		echo "</tr>";
		}
		?>
				<td></td><td></td><td></td>
				<td><button class="btn "  type="submit" name ="action" formmethod="post" value="Delete" >Delete</td>
				<?php
		echo "</table>";
			 
		$con->close();
	?>
	   
	   </form> 
	</div>
	   
	<!-- comments -->
      <div id="comments">
        

		
        <!-- Get in touch -->
		<h2><b>Write A Comment</b></h2>
				
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
		method = "post" id="contact_form" class="contact_form">
          <div class="one_third first">
            <label for="contact_name">Name*</label>
			<input type="text" id="contact_name"  class="contact_input" required="required" value=<?=@$_SESSION['name'];?> name = "name"> 
          </div>

          <div class="one_third">
            <label for="contact_company">Subject</label>
			<input type="text" id="contact_company" class="contact_input" name = "subject">
          </div>
          <div class="block clear">
            <label for="contact_textarea">Message*</label>
			<textarea id="contact_textarea" class="contact_input contact_textarea" required="required" name="message"cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="send" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
        </div>
		</form>
      </div>
    </div>

	    <?php
				$con = new mysqli("localhost", "root", "s1071736yzu", "project2");
				if ($con->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
				if (isset($_POST['send']) && !empty($_POST['name']) 
		         && !empty($_POST['message']))
				{
					$name = $_POST['name'];
					$subect = $_POST['subject'];
					$message = $_POST['message'];	
					$sql = "INSERT INTO message (cName, subject, message)
						VALUES ('$name','$subect','$message')";
					if($con->query($sql) === true)
					{
						?>
						<script language="javascript">
						alert('我們已收到您的留言，謝謝！');
						</script>
						<?php 
					}
				}
			    $con->close();
		?>
		 
</main>

    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  
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