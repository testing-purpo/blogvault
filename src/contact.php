<?php include("header.php"); ?>
<div class="container py-5">
  <h3>Contact Us</h3>
  <form>
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" placeholder="Your name">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" placeholder="you@example.com">
    </div>
    <div class="form-group">
      <label>Message</label>
      <textarea class="form-control" rows="5" placeholder="Your message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Send</button>
  </form>
</div>
<?php include("footer.php"); ?>