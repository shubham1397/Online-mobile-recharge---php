<?php session_start();
include_once("conne.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FreeCharge</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>Free</span>Charge</h1></a>
</div>						
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html" >Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>	
								<li role="presentation"><a href="alogout.php">Logout</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="uhome.php">Home</a></li>
				<li>View Plans</li>			
			</div>		
		</div>	
	</div>
	
	<section id="portfolio">	
        <div class="container">
            <div class="center">
                <p style="color:#FFFFFF">welcome</p>
            </div>

            <ul class="choice">
               <li ><a class="btn btn-default " href="uhome.php" >recharge now</a></li>
                <li ><a class="btn btn-default" href="u_offer.php" >view offers</a></li>
                <li><a class="btn btn-default" href="u_plan.php" style="background: #1BBD36;color:#FFFFFF" >view Plans</a></li>
                <li ><a class="btn btn-default" href="transaction.php">Transaction History</a></li>
              
            </ul><!--/#portfolio-filter-->
		</div>
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
               
            </div> 
         
                
                
  <div style="position:absolute;margin-top:60px;margin-right:50px;">              
  <table border="1" cellpadding="20px"  height="100px"; style="margin-top:20px;margin-bottom:50px;" >
                 
<tr bgcolor="#555555" ;  height="50px" style="color:#FFFFFF;text-align:center" align="center">

<td style="width:100px;"> Sr no </td>
<td style="width:100px;"> Operator</td>
<td style="width:100px;">Type</td>
<td style="width:100px;">Amount</td>
<td style="width:400px;">Description</td>
<td style="width:200px;">Plan</td>



<?php
$query="select * from aplan";
$stmt=$con->prepare($query);
$stmt->execute();
$i=1;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
	<tr style="background-color:#C2FEB4 ; text-align:center ;height:40px; color:#000000">
    <td><?php echo $i++; ?></td>
    <td><?php echo $row["operator"];?></td>	
    <td><?php echo $row["type"];?></td>
    <td><?php echo $row["amount"];?></td>
    <td><?php echo $row["description"];?></td>
    <td><?php echo $row["plan"];?></td></tr>
<?php
} 
?> 
</table>
</div>
                
                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
  </body>
</html>