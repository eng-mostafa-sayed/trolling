<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
<center>    
<h1>good morning how are you today? </h1>   
</center>
<button type="click" formaction="logout.php" class="button button1">logout</button>
<a href="logout.php">Logout</a>
</body>
</html>
