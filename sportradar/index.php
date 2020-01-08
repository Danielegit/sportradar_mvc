<!DOCTYPE html>
 <html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript"><?php include 'script/script.js'; ?></script>
	</head>
	<body>
		<!-- header -->
		<div class="bg-primary text-white p-1">
		    <h1 class="m-2">SportRadar</h1>
		</div>
		<!-- navbar -->
		<div class="container-fluid">
		    <div class="row d-flex justify-content-around p-1">
		         <div class="col-2">
		            <a href="/sportradar/" class="">
		                <h4>Home</h4>
		            </a> 
		         </div>
		         <div class="col-2">
		            <a href="/sportradar/events" class="">
		                <h4>Events</h4>
		            </a> 
		         </div>
		         <div class="col-2">
		            <a href="/sportradar/select " class="">
		                <h4>Create</h4>
		            </a> 
		         </div>
		    </div>
		</div>   
		<div class="container shadow py-4 mt-5" id="main">

		    <?php include 'routes/routes.php';?>        <!------- Router ------->
		   

	</body>
</html>







 	

