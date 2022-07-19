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
						<h4>Gaming Contest(FIFA)</h4>
	 <button class="btn big-btn" onclick="location.href='assets/images/folder/FIFA.pdf';">Participants List</button> 
	 <button class="btn big-btn" onclick="location.href='assets/images/folder/fifa1.pdf';">rules</button>
               
	</div>
               </div>

                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/hkt.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>Hackathon</h4>
						<button class="btn big-btn" onclick="location.href='assets/images/folder/Hackathon.pdf';">Teams List</button>
					<button class="btn big-btn" onclick="location.href='assets/images/folder/hkt1.pdf';">rules</button>
						
						
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/icpc.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>Porgramming Contest</h4>
						<button class="btn big-btn" onclick="location.href='assets/images/folder/IUPC.pdf';">Teams List</button>
						
						<button class="btn big-btn" onclick="location.href='assets/images/folder/cp1.pdf';">rules</button>
						
							
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/idea.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>IT Business Case Study</h4>
						<button class="btn big-btn" onclick="location.href='assets/images/folder/case.pdf';">Teams List</button>
						<button class="btn big-btn" onclick="location.href='assets/images/folder/case1.pdf';">Problem Description</button>
								
						
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/lfRobot.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>Line Follower Robot</h4>
						<button class="btn big-btn" onclick="location.href='assets/images/folder/LFR.pdf';">Teams List</button>
						<button class="btn big-btn" onclick="location.href='assets/images/folder/lfr1.pdf';">rules</button>
						
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/quiz.png' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>IT QUIZ</h4>
						<button class="btn big-btn" onclick="location.href='assets/images/folder/it.pdf';">Participants List</button>
						<button class="btn big-btn" onclick="location.href='assets/images/folder/it1.pdf';">rules</button>
						
					
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/nfs.jpg' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>Gaming Contest(NFS)</h4>
		<button class="btn big-btn" onclick="location.href='assets/images/folder/NFS.pdf';">Participants List</button>
		<button class="btn big-btn" onclick="location.href='assets/images/folder/nfs1.pdf';">rules</button>
			
					</div>
				</div>
                <div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/psc.png' ?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4>Project Showcase</h4>
						
		<button  class="btn big-btn" onclick="location.href='assets/images/folder/PROJECT.pdf';">Teams List</button>
		<button class="btn big-btn" onclick="location.href='assets/images/folder/project1.pdf';">rules</button>
	
						
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