<?php
session_start();
require 'db.php';
$blogs = $conn->query("SELECT * FROM blogs ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Blog</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Welcome to Our Shop</h1>

<?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
  <a href="admin/add.php" class="btn">Add New Post</a>
  <a href="admin/logout.php" class="btn logout">Logout</a>
<?php else: ?>
  <a href="admin/login.php" class="btn">Admin Login</a>
<?php endif; ?>

<div class="container">
<?php while($row = $blogs->fetch_assoc()): ?>
  <div class="card">
    <img src="uploads/<?php echo $row['image']; ?>" alt="Blog Image">
    <h2><?php echo $row['title']; ?></h2>
    <p><?php echo substr($row['content'], 0, 150); ?>...</p>
    <a href="view.php?id=<?php echo $row['id']; ?>" class="btn">Read More</a>
    <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
      <a href="admin/edit.php?id=<?php echo $row['id']; ?>" class="btn edit">Edit</a>
      <a href="admin/delete.php?id=<?php echo $row['id']; ?>" class="btn delete" onclick="return confirm('Delete this post?');">Delete</a>
    <?php endif; ?>
  </div>
<?php endwhile; ?>
</div>

</body>
</html>
