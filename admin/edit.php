<?php
require '../db.php';
require '../auth.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM blogs WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$blog = $stmt->get_result()->fetch_assoc();

if(isset($_POST['update'])){
  $title = $_POST['title'];
  $content = $_POST['content'];

  if($_FILES['image']['name']){
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$image);
  } else {
    $image = $blog['image'];
  }

  $stmt = $conn->prepare("UPDATE blogs SET title=?, content=?, image=? WHERE id=?");
  $stmt->bind_param("sssi", $title, $content, $image, $id);
  $stmt->execute();

  header("Location: ../index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../style.css"></head>
<body>
<h2>Edit Post</h2>
<form method="post" enctype="multipart/form-data">
  <input type="text" name="title" value="<?php echo $blog['title']; ?>" required><br>
  <textarea name="content" rows="8" required><?php echo $blog['content']; ?></textarea><br>
  <img src="../uploads/<?php echo $blog['image']; ?>" width="150"><br>
  <input type="file" name="image"><br>
  <button type="submit" name="update" class="btn">Update</button>
</form>
</body>
</html>
