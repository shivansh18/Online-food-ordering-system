<!DOCTYPE html>
<html lang="en">
<title>Domino's</title>
<head>
    
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/c.css">
	<link rel="stylesheet" href="js/jquery-ui.theme.css" type="text/css">
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
					<a href = "cart.php"><img class="cart2" src = "images/cart1.png" >		</a>
					
                </div>
               </div>
			   </div>
			
       <div class="bg2">
			<div class="logo" align = "center">
			<img src = "images/Dominos.png">			
			</div>
			<div class = "name1" align = "center">
			<font color="white">
			DOMINO'S
			</div>
		<div >
		<table class="menu2">
	
<?php

$sql1="SELECT * FROM `dominos-mansarovar` WHERE 1";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  $counter=0;
 $result1=mysql_query($sql1,$con);
 if($result1 === FALSE) { 
    echo mysql_error();
}
while($row1 = mysql_fetch_array($result1))
  {
	$i_id=$row1['i_id'];
	$i_name = $row1['item_name'];
	$price_r=$row1['price_r'];
	$price_m=$row1['price_m'];
	$price_l=$row1['price_l'];
	$counter ++
?>		<form  method = "post">
		<tr>
		<td rowspan = 3 class="c1"><?php echo("$counter") ?></td>
		<td rowspan = 3 class = "img1"><img src = "images/dominos/<?php echo("$i_name")?>.png" width="120" height = "120"></td>
		<td rowspan = 3 class="f1"><?php echo("$i_name")?></td>
		<input type="hidden" name="in" value="<?PHP echo("$i_name") ?>">
		<td class="price1">Regular<span class="price1text">Base:10"<br>serves 1</span></td>
		
		<td class="price2"><p><?php echo "$price_r"?></p></td>
		<input type="hidden" name="ip" value="<?PHP echo("$price_r") ?>">
		
		<td align="center" class="atc1"><input type="image" formaction="process.php?dd=1&id=<?PHP echo "$id" ?>" class="atc" src = "images/atc.png"></td>
		</tr`>
		<tr>
		
		
		<td class="price1">Medium<span class="price1text">Base:15"<br>serves 2</span></td>
		<td class="price2"><?php echo "$price_m"?></td>
		<td align="center" class="atc1"><input type="image" formaction="process.php?dd=2&id=<?PHP echo "$id" ?>" class="atc" src = "images/atc.png"</td>
		</tr>
		<tr>
		
		<td class="price1">Large<span class="price1text">Base:18"<br>serves 3</span></td>
		<td class="price2"><?php echo "$price_l"?></td>
		<td align="center" class="atc1"><input type="image" formaction="process.php?dd=3&id=<?PHP echo "$id" ?>" class="atc" src = "images/atc.png"</td>
		</tr>
		</form>
  <?php } ?>
		</table>
		
		
		</div>
			

	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	
            </div>
        </div>
    </footer>
	
    <script type="text/javascript"> Cufon.now(); </script>
	

</body><?php }?>
</html>
