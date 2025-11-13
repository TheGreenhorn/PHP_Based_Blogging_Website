<?php
require '../db.php';
require '../auth.php';

if(isset($_POST['submit'])){
  $title = $_POST['title'];
  $content = $_POST['content'];

  $image = $_FILES['image']['name'];
  $tmp = $_FILES['image']['tmp_name'];
  move_uploaded_file($tmp, "../uploads/".$image);

  $stmt = $conn->prepare("INSERT INTO blogs (title, content, image) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $title, $content, $image);
  $stmt->execute();

  header("Location: ../index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../style.css"></head>
<body>
<h2>Add New Post</h2>
<form method="post" enctype="multipart/form-data">
  <input type="text" name="title" placeholder="Title" required><br>
  <textarea name="content" placeholder="Content" rows="8" required></textarea><br>
  <input type="file" name="image" required><br>
  <button type="submit" name="submit" class="btn">Add Post</button>
</form>
</body>
</html>
