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

	<nav class="navbar navbar-light navbar-expand-md fixed-top bg-white">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="font-size:25px;">Schoolmaya</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="font-size:20px;">about us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="font-size:20px;">contact us</a></li>
                </ul>
        	</div>
        </div>
	</nav>
	
<title>SekolahQu | Login</title>
</head>
<body>
<div class="container">
	<div class="row" id="login-row">
		<div class="col-xl-4 bg-white" style="padding:5%;">
			<h1>Login</h1>			
			<div class="form-group" style="padding-top:20px;">
				<?php if ($this->session->flashdata('Failed')): ?>
					<p class='flash_msg flash_fail'>  </p>
					<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:100%;font-size:11px">
						<strong>Login Failed!</strong> <?php echo $this->session->flashdata('Failed') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif?>

				<form action = "index.php/login/process/" method = "POST" >
					<div class="form-group">
						<label for="username">Email</label>
						<input type="text" class="form-control login-form" placeholder="Enter username" name = "username">
					</div>
					<div class="form-group">
						<label for="username">Password</label>
						<input type="password" class="form-control login-form" placeholder="Password" name = "password">
					</div>
					<button type="submit" class="btn btn-outline-secondary float-right" style="margin-top:5%;font-size:14px">login</button>
				</form>
			</div>
		</div>
        <div class="col" style="padding-left:0px;">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="w-100 d-block" src="https://image.freepik.com/free-photo/smiling-students-with-backpacks_1098-1220.jpg" alt="Slide Image" style="object-fit: cover;"></div>
                            <div class="carousel-item"><img class="w-100 d-block" src="http://www.npcc.us/wp-content/uploads/2013/02/1030-School-Image-of-smart-schoolboy-looking-at-camera-with-smile-on-background-of-classmates.jpg" alt="Slide Image" style="object-fit: cover;"></div>
                        </div>
                        <div>
							<a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-1" role="button"
								data-slide="next">
								<span class="carousel-control-next-icon"></span>
								<span class="sr-only">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                        </ol>
                    </div>
                </div>
            </div>
		</div>
	</div>
	</div>
</body>
</html>

