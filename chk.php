<!DOCTYPE html>
<html lang="en">
<title>Thank You!</title>
<head>
    
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/c.css">
	<link rel="stylesheet" href="js/jquery-ui.structure.css" type="text/css">
	<link rel="stylesheet" href="js/jquery-ui.css" type="text/css">
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
	
	
    <?php 
session_start();
if(empty($_SESSION['name']))
{
header("Location:login.html");
}
else
{
?>
</head>
<body id="page6">
    <?php
					
$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("restraunt", $con);

$nm=$_SESSION['name'];

$sql="select *from restraunt.customer where uname='".$nm."'";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
 $result=mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
  {
$cname=explode(" ", $row['cname']);
  
$fname = $cname[0];

  }
$del =   $_GET['del'];
mysql_query("update restraunt.order set status=1 where uname='". $nm . "'",$con);
mysql_query("update restraunt.order set address='$del' where uname='". $nm . "'",$con);

?>

	

	 <header>
    	<div id="top" class="row-top">
			<div class="margin1">
            	<div class="wrapper">
                	<h1><a href="user.php">FoodOnDemand</a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href = "ss.php"><strong>Hello! <?php echo "$fname";?>  &nbsp| &nbsp </strong></a>
						<a href="logout.php"><strong>Logout</strong></a></li>
						<li></li>
                        </ul>
					
                    </nav>
					<a href = "cart.php"><img class="cart2" src = "images/cart1.png" ></a>
					
                </div>
               </div>
			   </div>

		</header>
				
	<div class="sss1">
		<img class="ord1" src = "images/ord1.png">
   </div>

	</script>
</body><?php }?>
</html>
