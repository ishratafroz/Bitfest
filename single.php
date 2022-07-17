<?php include("path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
if(isset($_GET['id'])){
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
else{
    $post = selectOne('posts', ['id' => 32]);
}

$posts = getPublishedPosts();
$topics = selectAll('topics');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
     crossorigin="anonymous" />
	<!-- Custom Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    
    <title><?php echo $post['title'];?> | Bitfest</title>
</head> 
<body>
<!--Facebook Page plugin SDK-->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0" nonce="ztfpFycm">

</script>


<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!--Page wrapper -->
    <div class="page-wrapper">
   <!--Post slider-->

        <!--//Post slider-->

        <!--Content -->
<div class="content clearfix">
    <!--Main Content wrapper -->
    <div class="main-content-wrapper">
    <div class="main-content single">
 <h1 class="post-title"><?php echo $post['title'];?></h1>

 <div class="post-content">

 <?php echo html_entity_decode($post['body']);?>
    </div>
    </div>
    <!--//Main Content-->
    <!--Sidebar-->
    <div class="sidebar single">
        <div class="fb-page" data-href="https://www.facebook.com/BitFestCSE/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/BitFestCSE/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/BitFestCSE/">BitFest</a></blockquote></div>


        <div class="section popular ">
            <h2 class="section-title">All Activites</h2>
            <?php foreach ($posts as $p):?>
            <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image'];?>" alt="event 2022" />
            <a href="single.php?id=<?php echo $p['id'];?>" 
            class="title"><h4><?php echo $p['title'];?></h4></a>
          </div>
          <?php endforeach;?>
        </div>
        
<div class="section topics">
    <h2 class="section-title">Topics</h2>
    <ul>
    <?php foreach ($topics as $topic):?>
        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name'];?></a></li>
          <?php endforeach;?>
    </ul>
</div>

        
    </div>
    <!-- // Sidebar -->
</div>
        <!--//Content-->
     
    </div>
    <!--//Page wrapper-->
    
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    <!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- Custom Script -->
<script src="assets/js/scripts.js"></script>

</body>
</html>