<?php
session_start();

// Reset game if requested
if (isset($_GET['reset'])) {
    session_unset();
    session_destroy();
    session_start();
}

// Default starting state
if (!isset($_SESSION['currentScene'])) {
    $_SESSION['currentScene'] = 'start';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Minecraft Admin Powers Adventure</title>
    <link rel="stylesheet" href="minecraft-style.css">
</head>
<body>
    <div class="minecraft-container">
        <?php
        include 'story.php';
        ?>
    </div>
</body>
</html>