<style>
body {
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
    }

    .navbar {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-weight: 700;
      color: #ff385c !important;
      font-size: 1.5rem;
    }

    .nav-link {
      font-weight: 540;
      color: #333 !important;
      font-size: large;
    }

    .nav-link:hover {
      color: #ff385c !important;
    }

    .top-section {
      background: linear-gradient(rgba(0, 0, 0, 0.5), url('') no-repeat center center/cover);
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .top-section h1 {
      font-size: 3.5rem;
      font-weight: 700;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    }

    .top-section p {
      font-size: 1.2rem;
      margin-top: 1rem;
      color: gainsboro;
    }

    .search-bar {
      background: rgba(255, 255, 255, 0.9);
      padding: 20px;
      border-radius: 15px;
      max-width: 800px;
      margin: 0 auto;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .search-bar input,
    .search-bar select,
    .search-bar button {
      border-radius: 10px;
    }

    .listings-section {
      padding: 4rem 0;
    }

    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .card-title {
      font-weight: 600;
      font-size: 1.2rem;
    }

    .card-text {
      color: #666;
    }

    .badge {
      background: #ff385c;
      color: white;
    }

    .footer {
      background: #333;
      color: white;
      padding: 3rem 0;
    }

    .footer a {
      color: #ff385c;
      text-decoration: none;
    }

    .footer a:hover {
      color: #ff6b81;
    }

    .social-icons a {
      color: white;
      font-size: 1.5rem;
      margin: 0 10px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #ff385c;
    }

    .back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      z-index: 1000;
    }

    /* listing */
    .listings-section {
      padding: 6rem 0;
    }

    .listings-section h2 {
      font-weight: 700;
      color: #333;
      margin-bottom: 2rem;
      text-align: center;
    }

    .filter-bar {
      background: rgba(255, 255, 255, 0.9);
      padding: 1.5rem;
      border-radius: 15px;
      margin-bottom: 2rem;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .filter-bar .form-control,
    .filter-bar .form-select {
      border-radius: 10px;
      padding: 0.75rem 1rem;
    }

    .filter-bar .btn {
      border-radius: 10px;
      padding: 0.75rem;
      font-weight: 600;
    }

    .filter-bar .btn-danger {
      background: #ff385c;
      border: none;
    }

    .filter-bar .btn-danger:hover {
      background: #ff6b81;
    }

    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .card-title {
      font-weight: 600;
      font-size: 1.2rem;
    }

    .card-text {
      color: #666;
    }

    .badge {
      background: #ff385c;
      color: white;
    }


    /* login */
    .signin-section {
      padding: 6rem 0;
    }

    .signin-card {
      background: rgba(255, 255, 255, 0.9);
      padding: 2rem;
      border-radius: 15px;
      max-width: 500px;
      margin: 0 auto;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .signin-card h2 {
      font-weight: 700;
      color: #333;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .signin-card .form-control {
      border-radius: 10px;
      padding: 0.75rem 1rem;
      margin-bottom: 1rem;
    }

    .signin-card .btn {
      border-radius: 10px;
      padding: 0.75rem;
      font-weight: 600;
    }

    .signin-card .btn-danger {
      background: #ff385c;
      border: none;
    }

    .signin-card .btn-danger:hover {
      background: #ff6b81;
    }

    .signin-card .forgot-password {
      text-align: center;
      margin-top: 1rem;
    }

    .signin-card .forgot-password a {
      color: #ff385c;
      text-decoration: none;
    }

    .signin-card .forgot-password a:hover {
      color: #ff6b81;
    }

    .signin-card .signup-link {
      text-align: center;
      margin-top: 1.5rem;
    }

    .signin-card .signup-link a {
      color: #ff385c;
      text-decoration: none;
      font-weight: 600;
    }

    .signin-card .signup-link a:hover {
      color: #ff6b81;
    }



    /* signup */
    .signup-section {
      padding: 6rem 0;
    }

    .signup-card {
      background: rgba(255, 255, 255, 0.9);
      padding: 2rem;
      border-radius: 15px;
      max-width: 500px;
      margin: 0 auto;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .signup-card h2 {
      font-weight: 700;
      color: #333;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .signup-card .form-control {
      border-radius: 10px;
      padding: 0.75rem 1rem;
      margin-bottom: 1rem;
    }

    .signup-card .btn {
      border-radius: 10px;
      padding: 0.75rem;
      font-weight: 600;
    }

    .signup-card .btn-danger {
      background: #ff385c;
      border: none;
    }

    .signup-card .btn-danger:hover {
      background: #ff6b81;
    }

    .signup-card .login-link {
      text-align: center;
      margin-top: 1.5rem;
    }

    .signup-card .login-link a {
      color: #ff385c;
      text-decoration: none;
      font-weight: 600;
    }

    .signup-card .login-link a:hover {
      color: #ff6b81;
    }


    /* dashboard */
    .dashboard-container {
      display: flex;
      margin-top: 80px; /* Adjust for fixed navbar */
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      background: #2c3e50; /* Dark blue color */
      color: white;
      padding: 20px;
    }

    .sidebar h3 {
      margin-bottom: 30px; /* Increased margin for spacing */
      color: #fff; /* White text for the heading */
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
    }

    .sidebar ul li {
      margin-bottom: 15px; /* Increased margin for spacing */
    }

    .sidebar ul li a {
      color: #bdc3c7; /* Light gray text for links */
      text-decoration: none;
      display: flex;
      align-items: center;
      transition: color 0.3s ease;
    }

    .sidebar ul li a i {
      margin-right: 10px;
    }

    .sidebar ul li a:hover {
      color: #ff385c; /* Red color on hover */
    }

    /* Main Content */
    .main-content {
      flex: 1;
      padding: 30px; /* Increased padding for spacing */
      background: #ecf0f1; /* Light gray background */
    }

    .main-content .header {
      margin-bottom: 30px; /* Increased margin for spacing */
    }

    .main-content .header h2 {
      margin-bottom: 20px; /* Increased margin for spacing */
      color: #333; /* Dark text for readability */
    }

    .dashboard-section {
      margin-bottom: 40px; /* Increased margin for spacing */
      background: #fff; /* White background for sections */
      padding: 25px; /* Increased padding for spacing */
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .profile-info p {
      font-size: 1.1rem;
      color: #333; /* Dark text for readability */
      margin-bottom: 15px; /* Added margin for spacing */
    }

    .bookings-list .booking-item {
      background: #f8f9fa;
      padding: 20px; /* Increased padding for spacing */
      border-radius: 10px;
      margin-bottom: 20px; /* Increased margin for spacing */
    }

    .bookings-list .booking-item p {
      margin: 0 0 10px 0; /* Added margin for spacing */
      color: #333; /* Dark text for readability */
    }

    .form-group {
      margin-bottom: 20px; /* Increased margin for spacing */
    }

    .form-group label {
      font-weight: 600;
      color: #333; /* Dark text for readability */
      margin-bottom: 10px; /* Added margin for spacing */
      display: block; /* Ensure labels are on their own line */
    }
  </style>
