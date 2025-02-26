<?php include 'partials/header.php';?>
    <div class="dashboard-container">
        <!-- Sidebar -->
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

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h2>Property Management</h2>
            </div>

            <!-- Success/Error Messages -->
            <?php if (isset($success)): ?>
                <div class="alert success"><?php echo $success; ?></div>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <div class="alert error"><?php echo $error; ?></div>
            <?php endif; ?>

            <!-- Form to Add New Property -->
            <div class="form-section">
                <h3>Add New Property</h3>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter property title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" placeholder="Enter property description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" id="price" name="price" placeholder="Enter property price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" id="location" name="location" placeholder="Enter property location" required>
                    </div>
                    <div class="form-group">
                        <label for="bedrooms">Bedrooms</label>
                        <input type="number" id="bedrooms" name="bedrooms" placeholder="Enter number of bedrooms" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image URL</label>
                        <input type="text" id="image" name="image" placeholder="Enter image URL" required>
                    </div>
                    <button type="submit" name="create_property" class="btn">Add Property</button>
                </form>
            </div>

            <!-- Table to View All Properties -->
            <div class="table-section">
                <h3>All Properties</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Location</th>
                            <th>Bedrooms</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Row -->
                        <tr>
                            <td>1</td>
                            <td>Beautiful Apartment</td>
                            <td>A spacious 3-bedroom apartment in the city center.</td>
                            <td>$1500</td>
                            <td>New York</td>
                            <td>3</td>
                            <td><img src="https://via.placeholder.com/100" alt="Property Image"></td>
                            <td>
                                <button class="btn edit-btn">Edit</button>
                                <button class="btn delete-btn">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows dynamically using PHP -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>