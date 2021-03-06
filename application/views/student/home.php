<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('front/custom.css') ?>">		
	
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet"> 
	<link rel="icon" type="image/ico" href="http://i63.tinypic.com/21lo7qe.png"/>

	<!-- Navbar -->	
	<nav class="navbar navbar-light navbar-expand-md fixed-top bg-white">
		<div class="container">
			<a class="navbar-brand" href="<?php echo (base_url('index.php/home/')) ?>"><img src="http://i66.tinypic.com/33dz3tk.png" style="width:120px"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo (base_url('index.php/home/')) ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo (base_url('index.php/schedule/')) ?>">Schedule</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo (base_url('index.php/score/')) ?>">Score</a>
				</li>
					<div class="dropdown">
						<a class="btn btn-outline-danger" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px">
							Profile
						</a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="<?php echo (base_url('index.php/profile/')) ?>">Edit Profile</a>
							<a class="dropdown-item" href="<?php echo (base_url('index.php/login/logout/')) ?>">Logout</a>
						</div>
					</div>
				</ul>
			</div>
		</div>
	</nav>

	<title>SekolahQu | Home</title>
</head>
<body>
	<div class="container mt-5 pt-5">
	  	<center>
			<div class="row">
			<div class="col"></div>
			<div class="col-6">
				<center>
					<img src="<?php echo (base_url($user_account['ProfilePicture'])) ?>" class="rounded-circle img-fluid" style="width:180px">
					<br><br>
					<h3>
						Hello! 
						<b><?php echo $user_account['Name'] ?></b> 
						<br>
						<?php echo $class[0]['ClassName'] ?>
					</h3>
				</center>
			</div>
			<div class="col"></div>
				
			</div>
			<div class="row mt-5 ml-0 pl-0"></div>
				<div class="col-6">		
					<h3>Tomorrow's Schedule</h3>
					<table class="table table-hover table-light">
						<thead class="thead-light">
							<tr>
							<th scope="col">Day</th>
							<th scope="col">Subject</th>
							<th scope="col">Time</th>
							<th scope="col">Duration</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($schedule as $data): ?>
								<tr>
								<th scope="row"><?php echo $data['Day']; ?></th>
								<td><?php echo $data['SubjectName'] ;?></td>
								<td><?php echo $data['Start'] ;?></td>
								<td><?php echo $data['Duration'] ;?> hour(s)</td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</center>
	</div>
</body>
</html>