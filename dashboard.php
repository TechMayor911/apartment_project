<?php  session_start();
include 'partials/header.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
  <div class="dashboard-container">
    <div class="sidebar">
      <h3>Dashboard</h3>
      <ul>
        <li><a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a></li>
        <li><a href="profile.php"><i class="fas fa-user"></i> Profile</a></li>
        <li><a href="bookings.php"><i class="fas fa-calendar-alt"></i> Bookings</a></li>
        <li><a href="settings.php"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </div>

    <div class="main-content">
      <div class="header">
        <h4>  <?php
             if (isset($_SESSION['login_success'])) {
             echo "<div class='alert alert-success text-center'>" . $_SESSION['login_success'] . "</div>";
             unset($_SESSION['login_success']); 
            }
            ?></h4>
      </div>

      <div class="dashboard-section">
        <h3>Quick Stats</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Bookings</h5>
                <p class="card-text">5</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pending Requests</h5>
                <p class="card-text">2</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Favorites</h5>
                <p class="card-text">3</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="dashboard-section">
        <h3>Profile</h3>
        <div class="profile-info">
          <p><strong>Name:</strong> Wariola Mayorr</p>
          <p><strong>Email:</strong> wariolamayowa@gmail.com</p>
          <p><strong>Phone:</strong> +234 90 1481 7216</p>
        </div>
      </div>

      <div class="dashboard-section">
        <h3>Bookings</h3>
        <div class="bookings-list">
          <div class="booking-item">
            <p><strong>Property:</strong> Ikate Lekki, Lagos</p>
            <p><strong>Check-in:</strong> 2023-10-15</p>
            <p><strong>Check-out:</strong> 2023-10-20</p>
          </div>
          <div class="booking-item">
            <p><strong>Property:</strong> Sangotedo, Lagos</p>
            <p><strong>Check-in:</strong> 2025-11-01</p>
            <p><strong>Check-out:</strong> 2025-11-05</p>
          </div>
        </div>
      </div>

    
      <div class="dashboard-section">
        <h3>Settings</h3>
        <form>
          <div class="form-group">
            <label for="current-password">Current Password</label>
            <input type="password" class="form-control col-md-4" id="current-password" placeholder="Enter current password" >
          </div>
          <div class="form-group">
            <label for="new-password">New Password</label>
            <input type="password" class="form-control" id="new-password" placeholder="Enter new password">
          </div>
          <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="Confirm new password">
          </div>
          <button type="submit" class="btn btn-danger">Update Password</button>
        </form>
      </div>
    </div>
  </div>

 <?php include 'partials/footer.php'; ?>

   
 
</html>