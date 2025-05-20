<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>BlogVault</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    body {
      background-image: url('https://cdn.worktechacademy.com/uploads/2020/04/Home-Landing-scaled.jpeg'); 
      background-attachment: fixed; 
      background-size: cover;
      height: 500px;
      font-family: 'Segoe UI', sans-serif;
    }
    .hero {
      background: url('https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?fit=crop&w=1920&q=80') no-repeat center center;
      background-size: cover;
      color: white;
    }
    .card {
      background-color: #ffffffcc;
    }
    .navbar {
      background-color: #fff;
    }
  </style>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
  <a class="navbar-brand" href="index.php">BlogVault</a>
  <div class="ml-auto">
    <a class="nav-link d-inline" href="about.php">About</a>
    <a class="nav-link d-inline" href="contact.php">Contact</a>
    <a class="nav-link d-inline" href="login.php">Login</a>
  </div>
</nav>