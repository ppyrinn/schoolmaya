<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet"> 
	<link rel="icon" type="image/ico" href="http://i63.tinypic.com/21lo7qe.png"/>


	<style>

		body{
			font-family: 'Open Sans';
			font-size:14px;
			background-image:url("https://c1.staticflickr.com/9/8711/17095171331_4ec22e0407_b.jpg");
			background-repeat: no-repeat;
			background-size:cover;
			background-position:fixed;
		}

		.img-16rem{
			height: 200px;
			object-fit:cover;
			object-position:center;
		}

	</style>

	<!-- Navbar -->	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
					<a class="nav-link" href="<?php echo (base_url('index.php/classes/')) ?>">Class</a>
				</li>
				<li class="nav-item">
					<a class="btn btn-outline-danger" href="<?php echo (base_url('index.php/login/logout/')) ?>" style="font-size:14px">Logout</a>
				</li>
				</ul>
			</div>
		</div>
	</nav>

    <title>SekolahQu | Your Class</title>
</head>
<body>
	<div class="container mt-5">
		<select class="form-control col-11 w-100" id="sel1" name="select_class">
			<option id="class" value="" disabled selected hidden>--Select Class--</option>
			<?php foreach ($class_list as $data): ?>
				<option value="<?php echo $data['ClassID'] ?>"><?php echo $data['ClassID'] ?></option>
			<?php endforeach;?>
		</select>

		<br>
		<div id="chapter-container"> 
			<select class="form-control col-11 w-100" id="sel2" name="select_chapter">
				<option id="chapter" value="" disabled selected hidden>--Select Chapter--</option>
			</select>
		</div>

		<br>
		<div id="detail"> </div>

		<div class="container-fluid mt-4">
			<div id="student_container" class="row justify-content-center">
			</div>
		</div>
	</div>

<script type='text/javascript'>
	$(document).ready(function(){
		$('#sel2').hide();
		var classid;
		var chapter;

		$('#sel1').change(function(){
			//reset selection box 2
			$('#sel2').html('');
			classid = $(this).val();

			$.ajax({
				url: '<?php echo base_url('index.php/classes/show_class'); ?>',
				method: 'post',
				dataType: 'json',
				
				success: function(response){
					//show selection 2
					$('#sel2').show();
					$('#sel2').append( "<option id='class' value='' disabled selected hidden>--Select Class--</option>" );
					for(var i = 0 ; i < response.length ; i++){
						$('#sel2').append(
							"<option value=" + response[i]["ChapterID"] + ">" +
							response[i]["ChapterID"] +
							"</option>"
						);
					}
				}
			});
		});

		$('#sel2').change(function(){
			//reset yang perlu direset
			$('#student_container').html('');
			$('#detail').html('');

			var chapterid = $(this).val();
			$.ajax({
				url: '<?php echo base_url('index.php/classes/show_student'); ?>',
				method: 'post',
				data: {select_class: classid, select_chapter: chapterid},
				dataType: 'json',
				
				success: function(response){
					$('#detail').append(
						"<h1>" + classid + "</h1>" +
						"<h3>" + chapterid + "</h3>"
					)

					for(var i = 0 ; i < response.length ; i++){
						$('#student_container').append(
							"<div class='col-auto mb-3'>" +
						 		"<div class='card' style='width: 18rem;'>" +
								 	"<div class='card-body'>" +
									 	"<img class='card-img-top img-16rem mb-4' src='http://localhost/schoolmaya/"
										+ response[i]['ProfilePicture'] + "' alt='Card image cap'>" +
										"<h5 class='card-title'>" + response[i]['Name'] + "</h5>" +
										"<h4 class='card-title mb-2'>Score</h6>" +
									"</div>" +
								"</div>" +
							"</div>"
						);	
					}
				}
			});
		});
	});
 </script>
    
</body>
</html>