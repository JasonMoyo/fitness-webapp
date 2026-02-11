<?php
session_start();

// Ensure user is logged in
if (!isset($_SESSION["email"])) {
    header("Location: index.html");
    exit();
}

$email = $_SESSION["email"];
$goal = $_SESSION["goal"] ?? "Not specified";
$experience = $_SESSION["experience"] ?? "Not specified";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome | Jason Fitness</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      text-align: center;
      padding: 100px;
      font-family: Arial, sans-serif;
      background-color: #111;
      color: #fff;
    }
    .btn {
      display: inline-block;
      padding: 12px 25px;
      margin: 10px;
      background-color: #45ffca;
      color: #000;
      text-decoration: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
    }
    .btn:hover {
      background-color: #33e0b0;
    }
  </style>
</head>
<body>

  <h1>Welcome, <?php echo htmlspecialchars($email); ?>!</h1>

  <p><strong>Your Fitness Goal:</strong> <?php echo htmlspecialchars($goal); ?></p>
  <p><strong>Your Experience Level:</strong> <?php echo htmlspecialchars($experience); ?></p>

  <hr style="margin: 2rem 0;">

  <h3>🎯 Personalized Suggestion:</h3>
  <p>
    <?php
    switch ($goal) {
        case "Muscle Gain":
            echo "<a href='weight-gain.html' class='btn'>Weight Gain Program</a>";
            break;
        case "Strength Training":
            echo "<a href='strength-training.html' class='btn'>Strength Training</a>";
            break;
        case "Weight Loss":
            echo "<a href='fat-loss.html' class='btn'>Fat Loss Plan</a>";
            break;
        case "Endurance":
            echo "<a href='running.html' class='btn'>Running & Endurance</a>";
            break;
        default:
            echo "Stay consistent and track your progress regularly!";
    }
    ?>
  </p>

  <br>
  <a href="index.html" class="btn">🏠 Go to Home</a>
  <a href="logout.php" class="btn">🚪 Logout</a>
</body>
</html>
