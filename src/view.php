<?php include("header.php"); ?>
<div class="container py-5">
  <?php
    $file = $_GET['file'] ?? '';
    $path = "blogs/" . basename($file);
    if (file_exists($path)):
      $content = file_get_contents($path);
  ?>
  <div class="card">
    <div class="card-body">
      <pre><?= htmlspecialchars($content) ?></pre>
    </div>
  </div>
  <?php else: ?>
  <div class="alert alert-danger">File not found.</div>
  <?php endif; ?>
</div>
<?php include("footer.php"); ?>