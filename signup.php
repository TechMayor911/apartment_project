<?php include 'partials/header.php'; ?>
<div class="signup-section">
      <div class="container">
        <div class="signup-card">
          <h2>Sign Up</h2>
          <form method="post" action="process/signup.php">
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email Address" name="email" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Password"name="password" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <button type="submit" name="btn" class="btn btn-danger w-100">Sign Up</button>
          </form>
          <div class="login-link">
            Already have an account? <a href="#">Log In</a>
          </div>
        </div>
      </div>
    </div>
    <?php include 'partials/footer.php'; ?>
</html>