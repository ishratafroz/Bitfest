<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>About Events</title>

	<link rel="icon" type="image/png" href="assets/images/bja_logo.png">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<!-- Text Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

	<!-- Custom Styling -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

<div class="page-wrapper">
		<!-- Activities -->
		<div class="post-slider">
			<h1 class=" post-slider slider-title">Events</h1>
			<i class="fas fa-chevron-left prev"></i>
			<i class="fas fa-chevron-right next"></i>
			<div class="post-wrapper">
				<div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/fifa.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>fifa</h4>
					</div>
				</div>

                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/hkt.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>hkt</h4>
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/icpc.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>icpc</h4>
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/idea.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>idea</h4>
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/lfRobot.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>lfRobot</h4>
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/quiz.png' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>quiz</h4>
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/nfs.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>nfs</h4>
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/psc.png' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>psc</h4>
					</div>

				</div>
			</div>
</div>

</div>



<!-- Footer -->

<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
<!-- //Footer -->
<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Carosel-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="assets/js/scripts.js"></script>

</body>
</html>