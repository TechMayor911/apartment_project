<?php include 'partials/header.php'; ?>
<div class="signin-section">
      <div class="container">
        <div class="signin-card">
          <h2>Login</h2>
          <form method="post" action="process/login.php">
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email Address" name="email" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <button type="submit" name="btn" class="btn btn-danger w-100">Login</button>
          </form>
          <div class="forgot-password">
            <a href="#">Forgot Password?</a>
          </div>
          <div class="signup-link">
            Don't have an account? <a href="#">Sign Up</a>
          </div>
        </div>
      </div>
    </div>

    <?php include 'partials/footer.php'; ?>
  
</html>