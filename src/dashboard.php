<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'header.php';
echo'<link rel="stylesheet" href="style.css">';
$blogDir = 'blogs/';
$blogFile = isset($_GET['blog']) ? $_GET['blog'] : 'welcome.txt'; // Default

echo '<div class="container mt-4">';
echo "<h2>Welcome, {$_SESSION['username']}</h2>";

echo "<div class='container1'>";
// List all blog files for easy switching
echo "<div class='mb-1'><h5>Available Blogs:</h5><ul>";
foreach (glob("blogs/*.txt") as $file) {
    $name = basename($file);
    echo "<li><a href='dashboard.php?blog=$name'>$name</a></li>";
}echo"</ul></div>";

// LFI: no sanitization
$path = $blogDir . $blogFile;

if (file_exists($path)) {
    echo "<div class='mb-2'>";
    echo "<div class='mb-3 p-3 bg-light rounded'><h4>Viewing: $blogFile</h4>";
    echo "<pre>" . htmlspecialchars(file_get_contents($path)) . "</pre></div>";
} else {
    echo "<p class='text-danger'>Blog file not found.</p>";
}
echo "</div></div></div>";

include 'footer.php';
?>
