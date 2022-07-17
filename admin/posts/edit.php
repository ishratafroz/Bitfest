<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly(); ?>

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
     <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

	<!-- Custom Styling-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    
	<!-- admin Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    

    <title>Admin Section- Edit Post</title>
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
<h2 class="page-title">Edit Post</h2>
<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
<form action="edit.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id ?>" />

<div>
    <label>Title</label>
    <input type="text" name="title" value="<?php echo $title ?>" class="text-input"/>
</div>
<div>
    <label>Body</label>
    <textarea name="body" value="<?php echo $body ?>" id="body"><?php echo $body ?></textarea>
</div>
<div>
    <label>Image</label>
    <input type="file" name="image" class="text-input"/>
</div>
<div>
    <label>Topic</label>
    <select name="topic_id" class="text-input">
<option value=""></option>

<?php foreach ($topics as $key => $topic):?>
  <?php if (!empty($topic_id) && $topic_id === $topic['id']):?>
 <option selected value="<?php echo $topic['id']?>"><?php echo $topic['name'];?></option>
   <?php else: ?>
                                   
<option value="<?php echo $topic['id']?>"><?php echo $topic['name'];?></option>
<?php endif; ?> 
<?php endforeach;?>
    </select>
</div>
<div>
         <?php if (empty($published) && $published==0):?>
       <label>
        <input type="checkbox" name="published"> Publish
       </label>
         <?php else: ?>
   <label>
  <input type="checkbox" name="published" checked> Publish
      </label>
        <?php endif; ?> 
     </div>

<div>
    <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
</div>
</form>
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