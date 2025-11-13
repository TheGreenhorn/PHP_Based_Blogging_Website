<?php
session_start();
require 'db.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM blogs WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$blog = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $blog['title']; ?></title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Container */
    .single-container {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-start;
      gap: 30px;
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
      background: #fff0f5;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(255, 182, 193, 0.3);
    }

    /* Image Side */
    .single-image {
      flex: 1 1 400px;
      border-radius: 20px;
      overflow: hidden;
    }

    .single-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 20px;
    }

    /* Content Side */
    .single-content {
      flex: 1 1 400px;
    }

    .single-content h1 {
      color: #ff4f81;
      margin-bottom: 20px;
      font-size: 2rem;
    }

    .single-content p {
      font-size: 1rem;
      line-height: 1.7;
      color: #5b4b47;
    }

    /* Back Button */
    .btn {
      display: inline-block;
      margin: 20px;
      background-color: #ff9ebb;
      color: white;
      padding: 10px 18px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: #ff7fa0;
    }

    /* Responsive */
    @media(max-width: 768px) {
      .single-container {
        flex-direction: column;
      }

      .single-image, .single-content {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>
<a href="index.php" class="btn">⬅ Back</a>

<div class="single-container">
  <div class="single-image">
    <img src="uploads/<?php echo $blog['image']; ?>" alt="<?php echo $blog['title']; ?>">
  </div>
  <div class="single-content">
    <h1><?php echo $blog['title']; ?></h1>
    <p><?php echo nl2br($blog['content']); ?></p>
  </div>
</div>
</body>
</html>
