<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="animate.css">

<style>
	body {
  font-family: Arial, Helvetica, sans-serif;
}
	.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px 0 30px 0;
} 
	#img{
		margin-left: 100px;
	padding: inherit;
		
	}
	.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
	.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
	width: 10%;
	margin-left: 140px;
}
	.h{
		background-color: aqua;
	}
	
	#drop{
		align-content: center;
		
}
	.h3{
		margin-left: 130px;
	}
	

	.im{
		margin-left: 170px;
		padding: 10px;
}
	#buton{
		margin-right: 50px;
	}
	
	#crt{
		margin-left: 700px;
	}
	
	#nv{
		opacity: 0.8;
	}
	
	.abc{
      font-family: 'Bad Script';
}
	
	.hey2{
		padding: 2px;
		margin-left: 10px;
		height: 50px;
		width: 100px;
	}
	.hey3{
		padding: 2px;
		margin-left: 10px;
		height: 50px;
		width: 100px;
		margin-top: 7px;
	}
	</style>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top justify-content-center " id="nv">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <a class="navbar-brand" href="index.php">
   
    <a class="nav-item nav-link active btn btn-block btn-success hey3" href="index.php">Home</a>
       <a class="fa fa-cart-arrow-down fa-2x btn-success" style="margin-left:1000px;" id="crt" href="cart.php"> Cart</a>
       	  </div>
  </div>
</nav>

		<br>
		<center>
			<div class="container-fluid">
				<div class="" style="margin-top: 60px;">
<?php
$tit="Water Bottle";
	$s="select * from menu where title='$tit'";
		$con=mysqli_connect("localhost","id8971728_root","Shishir@2308","id8971728_mounty"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			while($fr=mysqli_fetch_array($rs))
			{
				$title=$fr[0];
				$description=$fr[1];
				$sell_price=$fr[3];
				$image=$fr[4];
				$image2=$fr[5];
				$image3=$fr[6];
			

      			
			
				
				?>
			
				<div class="col-lg-10" style="margin-top: 40px; margin-left: 100px;">
				<div class="row">
				
				<div class="col-md-12">
				    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/data/<?php echo $image ; ?>" style="height:400px; width:300px;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/data/<?php echo $image2 ; ?>" style="height:400px; width:300px;" alt="Second slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>				</div>	
				</div>
				<br>
				<br>
				<div class="row">	
				<div class="col-md-12">
				<h2 class="abc" ><?php echo $title; ?></h2></a>
				</div>	
				</div>
				<div class="row">
				<div class="col-md-12">
					<h4 class="abc"><b><span>Description: </span></b> <?php echo $description; ?></h4>
				</div>	
				</div>
				<div class="row">
				<div class="col-md-12">
				<b>	<h4 class="abc"><b><span>Price: </span></b><?php echo $sell_price; ?></h4></b>
				</div>	
			
				</div>
				</div>
				
				
	
			
				
				<?php
			}	
			
		}
	
	?>	
	  </div>
	</div>
	</center>
</body>
</html>