<?php
function displayScene($scene) {
    switch($scene) {
        case 'start':
            echo "<div class='minecraft-scene'>";
            echo "<h1 class='minecraft-title'>Minecraft Admin Adventure</h1>";
            echo "<div class='story-text'>";
            echo "<p>You find yourself in a mysterious Minecraft server. A glowing portal shimmers before you, offering ultimate admin powers. Two mystical doors stand before you...</p>";
            echo "</div>";
            echo "<div class='door-container'>";
            echo "<div class='minecraft-door'><a href='index.php?choice=accept'>Accept Admin Powers</a></div>";
            echo "<div class='minecraft-door'><a href='index.php?choice=decline'>Decline the Offer</a></div>";
            echo "</div>";
            echo "</div>";
            break;

        case 'accept_good':
            echo "<div class='minecraft-scene'>";
            echo "<h1 class='minecraft-title'>Benevolent Admin Path</h1>";
            echo "<div class='story-text'>";
            echo "<p>You choose to use your admin powers wisely. You restore beautiful player builds, stop griefers, and create epic community events. The server becomes a legendary sanctuary of creativity and friendship!</p>";
            echo "</div>";
            echo "<div class='door-container'>";
            echo "<div class='minecraft-door'><a href='index.php?reset=true'>Restart Adventure</a></div>";
            echo "</div>";
            echo "</div>";
            break;

        case 'accept_chaos':
            echo "<div class='minecraft-scene'>";
            echo "<h1 class='minecraft-title'>Chaotic Admin Realm</h1>";
            echo "<div class='story-text'>";
            echo "<p>With unlimited power, you transform the server into a wild playground of chaos! Massive floating islands, random monster spawns, and unpredictable world events keep everyone on their toes!</p>";
            echo "</div>";
            echo "<div class='door-container'>";
            echo "<div class='minecraft-door'><a href='index.php?reset=true'>Restart Adventure</a></div>";
            echo "</div>";
            echo "</div>";
            break;

        case 'decline':
            echo "<div class='minecraft-scene'>";
            echo "<h1 class='minecraft-title'>The Honest Path</h1>";
            echo "<div class='story-text'>";
            echo "<p>You reject the admin powers, choosing to play Minecraft as a true adventurer. Your skills and integrity earn you respect from every player on the server.</p>";
            echo "</div>";
            echo "<div class='door-container'>";
            echo "<div class='minecraft-door'><a href='index.php?reset=true'>Restart Adventure</a></div>";
            echo "</div>";
            echo "</div>";
            break;
    }
}

// Process user choice
if (isset($_GET['choice'])) {
    switch($_GET['choice']) {
        case 'accept':
            $_SESSION['currentScene'] = (rand(0, 1) == 0) ? 'accept_good' : 'accept_chaos';
            break;
        case 'decline':
            $_SESSION['currentScene'] = 'decline';
            break;
    }
}

// Display current scene
displayScene($_SESSION['currentScene']);
?>