<?php
session_start();
include 'config.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ❌ Vulnerable query (SQLi)
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<?php include 'header.php'; ?>
<div class="container mt-4" style="max-width: 400px;">
    <h2>Login</h2>
    <?php if ($error) echo "<p class='text-danger'>$error</p>"; ?>
    <form method="post">
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password" required>
        </div>
        <button class="btn btn-primary mt-2" type="submit">Login</button>
    </form>
</div>
<?php include 'footer.php'; ?>
