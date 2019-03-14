<?php

					
	if(!empty($_POST['s2']))
			{
				$user="Guest";
				$rate=$_GET['rate'];
				$ite=$_GET['it'];
            $qua=$_POST['qt'];
				$image=$_GET['img'];
				
				$total=$rate*$qua;
				
				$i="insert into menu_new(id,username,item,quantity,rate,total,image)values('','$user','$ite','$qua','$rate','$total','$image')" ;
				$con=mysqli_connect("localhost","id8971728_root","Shishir@2308","id8971728_mounty"); 
		if($con)
		{
			mysqli_query($con,$i);
						

		}
	
			}
?>
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
      <a class="nav-item nav-link active btn btn-block btn-danger hey2" href="logout.php">Logout</a>
       <a class="fa fa-cart-arrow-down fa-2x btn-success" style="margin-left:1000px;" id="crt" href="cart.php"> Cart</a>
       	  </div>
  </div>
</nav>

	

	
   
    <br>
		<br>
		<div class="row" style="margin-top:50px; margin-left:250px;">
<div class="col-lg-8">
  
<center>
<section class="caro animated rubberBand">
  <img class="mySlides" src="img1.jpg" style="height:400px; width:1000px;">
  <img class="mySlides" src="img2.jpg" style="height:400px; width:1000px;">
  <img class="mySlides" src="img3.jpg" style="height:400px; width:1000px;">
  <img class="mySlides" src="img4.jpg" style="height:400px; width:1000px;">
    <img class="mySlides" src="img5.jpg" style="height:400px; width:1000px;">
  <img class="mySlides" src="img6.jpg" style="height:400px; width:1000px;">
</section>
	</center>
	</div>
	</div>
	<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}

</script>
		<br>
		<center>
		<div class="container">
		    <div class="col-lg-4">
		        <h1>Inventory Management</h1>
		    </div>
		    <div class="col-sm-10">
		        Inventory management is the management of inventory and stock. As an element of supply chain management, inventory management includes aspects such as controlling and overseeing ordering inventory, storage of inventory, and controlling the amount of product for sale.The definition of Inventory Management is easy to understand. Simply put, inventory management is all about having the right inventory at the right quantity, in the right place, at the right time, and at the right cost. But how do you implement the best inventory management techniques to ensure the best results? Read on to find out our insights for inventory management best practices.
		    </div>
		</div>
		</center>
			<div class="container-fluid">
				<div class="row animated rubberBand" style="margin-top: 60px;">
<?php

	$s="select * from menu";
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
				$link=$fr[7];

      			
			
				
				?>
			
				<div class="col-sm-4" style="margin-top: 40px; margin-left: 100px;">
				<div class="row">
				
				<div class="col-sm-12">
				<a href="<?php echo $link; ?>"><img src="images/data/<?php echo $image ; ?>" style="height: 150px" name="img" /></a>
				</div>	
				</div>
				<div class="row">	
				<div class="col-sm-12">
				<h4 class="abc"><?php echo $title; ?></h4></a>
				</div>	
				</div>
				<div class="row">
				<div class="col-sm-12">
					<h6 class="abc"><?php echo $description; ?></h6>
				</div>	
				</div>
				<div class="row">
				<div class="col-sm-3">
					<h4 class="abc"><?php echo $sell_price; ?></h4>
				</div>	
				<div class="col-sm-3">
						<form action="<?php echo "https://mounty-backend-test.000webhostapp.com/index.php?it=$title&rate=$sell_price&img=$image";  ?>" method="post">
				<select class="form-control fadeInUp" id="quant" name="qt">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
							</select>
				</div>
				</div>
				<div class="row" style="margin-top: 15px;">
				<div class="col-sm-1"></div>
				<div class="col-sm-4">
					<input class="btn btn-success btn-block fadeInUp"  type="submit" name="s2"  value="QUICK ADD">
				</form>
				</div>
				</div>
				</div>
				
				
	
			
				
				<?php
			}	
			
		}
	
	?>	
	  </div>
	</div>
	<br>
	<br>
	<br>
	<center>
	    <div class="container">
	<div class="col-lg-12">
	    <nav aria-label="Page navigation example" style="margin-left:500px;">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
	</div>
	</center>
</body>
</html>