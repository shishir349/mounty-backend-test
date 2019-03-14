<!doctype html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
<link rel="stylesheet" href="animate.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<title>Your Cart</title>
</head>
<style>
	.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
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
<body>
<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top justify-content-center " id="nv">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <a class="navbar-brand" href="https://www.instagram.com/">

    <a class="nav-item nav-link active btn btn-block btn-info hey3" href="index.php">Home</a>

       	  </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<?php


	$s="select * from menu_new";	
		$con=mysqli_connect("localhost","id8971728_root","Shishir@2308","id8971728_mounty"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
		while($fr=mysqli_fetch_array($rs))
		{
			$id=$fr[0];
			$username=$fr[1];
			$item=$fr[2];
			$quant=$fr[3];
			$rate=$fr[4];
			$image=$fr[6];
	
	
	?>
	<div class="animated jackInTheBox">
<div class="container">
<div class="col-lg-8">
									<h4 class="nomargin"><?php echo $id ?></h4>
</div>
<div class="col-lg-8">
									<h4 class="nomargin"><?php echo $username ?></h4>
</div>
	<table id="cart" class="table  table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2"><img src="images/data/<?php echo $image ; ?>" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $item ?></h4>
									
									</div>
									
								</div>
							</td>
							<td data-th="Price"><?php echo $rate ?></td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="<?php echo $quant ?>">
							</td>
							<td data-th="Subtotal" class="text-center"><?php echo $quant*$rate ?></td>
							
							    <a href="seatconfirm.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a>

							</td>
					
						
						</tr>
					</tbody>
								<?php 
	}
	}
	
	
	?>
</div>
</div>

</body>
</html>