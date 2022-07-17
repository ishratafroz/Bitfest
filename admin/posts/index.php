<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
     crossorigin="anonymous" />
     <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

	<!-- Custom Styling-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    
	<!-- admin Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    

    <title>Admin Section- Manage Posts</title>
</head>
<body>
  <?php include(ROOT_PATH . "/app/includes/adminHeader.php")?>
    <!-- Admin Page wrapper -->
    <div class="admin-wrapper">
        
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php")?>
     <!--Admin Content-->

     <div class="admin-content">
    <div class="button-group">
        <a href="create.php" class="btn big-btn">Add Post</a>
        <a href="index.php" class="btn big-btn">Manage Posts</a>
    </div>
<div class="content">
<h2 class="page-title">Manage Posts</h2>
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
<table>
    <thead>
        <th>SN</th>
        <th>Title</th>
        <th>Author</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach ($posts as $key => $post):?>
        <tr>
        <td><?php echo $key+1; ?></td>
        <td><?php echo $post['title']; ?></td>
            <td>Awa</td>
<td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
<td><a href="index.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>
<?php if($post['published']):?>
<td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">Unpublish</a></td>
<?php else:?>
<td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="Publish">Publish</a></td>
<?php endif;?>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>



</div>


     <!-- // Admin Content-->
    </div>
    <!--//Page wrapper-->
    
    <!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Ckeditor-->

<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<!-- Custom Script -->
<script src="../../assets/js/scripts.js"></script>


</body>
</html>