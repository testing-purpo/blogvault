<?php include("header.php"); ?>
<section class="hero text-center">
  <div class="container py-5">
    <h1 class="display-4">BlogVault</h1>
    <p class="lead">Secure and simple blog platform built for HTB-style challenges</p>
  </div>
</section>
<section class="container py-4">
  <div class="row">
    <?php
      $files = glob("./blogs/*.txt");
      foreach (array_slice($files, 0, 4) as $file):
        $content = file_get_contents($file);
        $lines = explode("\n", $content);
        $title = $lines[0];
        $preview = implode(" ", array_slice($lines, 1, 2));
    ?>
    <div class="col-md-6 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($title) ?></h5>
          <p class="card-text"><?= htmlspecialchars($preview) ?>...</p>
          <a href="view.php?file=<?= urlencode(basename($file)) ?>" class="btn btn-outline-primary">Read More</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php include("footer.php"); ?>