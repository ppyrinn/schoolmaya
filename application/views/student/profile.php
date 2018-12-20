<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/schoolmaya/front/custom.css">	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet"> 

 	<!-- Navbar -->	
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?php echo (base_url('index.php/home/')) ?>">Schoolmaya</a>
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
						<a class="btn btn-outline-danger" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    
    <title>Schoolmaya | Profile</title>
</head>
<body>
    <h1>Your Profile</h1>
    <br>
    <form>
        <div class="form-group">
            <label>New Password</label>
            <input type="password" name="NPassword" placeholder="New Password" id="txtNewPassword" class="form-control">
        </div>
        <div id="divCheckPassword" role="alert"></div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="RNPassword" placeholder="Retype New Password" id="txtConfirmPassword" onChange="isPasswordMatch();" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
<script>

function isPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword) {
        $("#divCheckPassword").removeClass("alert-success alert-warning");
        $("#divCheckPassword").addClass("alert alert-warning");
        $("#divCheckPassword").html("Passwords do not match!");

    }
    else {
        $("#divCheckPassword").removeClass("alert-success alert-warning");
        $("#divCheckPassword").addClass("alert alert-success");
        $("#divCheckPassword").html("Passwords match.");
    }
}

$(document).ready(function () {
    $("#txtConfirmPassword, #txtNewPassword").keyup(isPasswordMatch);
});



</script>
</body>
</html>