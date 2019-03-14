<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<link rel="stylesheet" href="animate.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</head>
  <style>
	  .abc{
		  font-style:italic;
	  }
  .bg-1 { 
      background-color: #1abc9c;
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d;
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff;
      color: #555555;
  }
	  .bg-4{
		  color: #ffffff;
      background-color:#ae82cc;
	  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
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
	.nv{
		opacity: 0.9;
	}
	  
	    .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 80%;
			height: 80%;
  }
  </style>
<body>



<div class="animated rubberBand">
<?php
	
	if(!empty($_POST['s1']))
	{
		$title=$_POST['title'];
		$desc=$_POST['description'];
		$c_price=$_POST['cp'];
		$s_price=$_POST['sp'];
		$img=$_FILES['pic']['name'];
		$img2=$_FILES['pic2']['name'];
		$img3=$_FILES['pic3']['name'];
		$linking=$_POST['link'];
		
		$i="insert into menu(title,description,cost_price,sell_price,image,image2,image3,link)values('$title','$desc','$c_price','$s_price','$img','$img2','$img3','$linking')";
		$con=mysqli_connect("localhost","id8971728_root","Shishir@2308","id8971728_mounty"); 
		if($con)
		{
			mysqli_query($con,$i);
			move_uploaded_file($_FILES['pic']['tmp_name'],"images/data/".$img);
			move_uploaded_file($_FILES['pic2']['tmp_name'],"images/data/".$img2);
			move_uploaded_file($_FILES['pic3']['tmp_name'],"images/data/".$img3);

		}
		}
		
		
				
				
?>
		<div class="container-fluid bg-1 text-center">
		<h1 class="abc">Product Inventory</h1>
  <img src="adm.jpg" class="img-circle" alt="Bird" width="250" height="250">
  
</div>
		<div class="container-fluid bg-2 text-center" id="menu">
		<h2>Add items to menu page.</h2>
<form action="admin.php" method="post" enctype="multipart/form-data">
	Product Title<input type="text" class="text-danger text-center bg-success" placeholder="Product name" name="title" required><br><br>
Product Description	<textarea name="description" class="bg-primary" cols="30" rows="5" required></textarea><br><br>
	Product Cost Price<input type="text" class="text-danger text-center bg-success" placeholder="Cost Price" name="cp"><br><br>
	Selling Price <input type="text" placeholder="enter rate" class="text-danger text-center bg-success" name="sp"><br><br>

	<center>Image location<input type="file" name="pic" class="btn alert-info" required></center><br><br>
	<center>Image location<input type="file" name="pic2" class="btn alert-info"></center><br><br>
	<center>Image location<input type="file" name="pic3" class="btn alert-info"></center><br><br>
	Enter Link <input type="text" placeholder="item.php"  class="text-danger text-center bg-success" name="link"><br><br>

	<input type="submit" name="s1" class="btn btn-danger">
</form>
</div>
<hr>



</div>
	</div>
</body>
</html>


