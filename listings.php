<?php
session_start();
  include "header.php";

if (!isset($_SESSION['user'])) {
    $_SESSION['error'] = 'You must be logged in to see listings';
    header("Location: login.php");
    exit(); // Ensure no further code is executed after the redirect
}





?>
<div class="listings-section">
      <div class="container">
        <h2>Our Apartments Listings</h2>

       
        <div class="filter-bar">
          <form class="row g-3">
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="Location">
            </div>
            <div class="col-md-4">
              <select class="form-select">
                <option selected>Apartment Type</option>
                <option value="1">1 bedroom Apartment</option>
                <option value="2">2 bedroom Apartment</option>
                <option value="3">3 bedroom Apartment</option>
              </select>
            </div>
           
           
            <div class="col-md-3">
              <button type="submit" class="btn btn-danger w-100">Search</button>
            </div>
          </form>
        </div>

       
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="" class="card-img-top" alt="Property 1">
              <div class="card-body">
                <h5 class="card-title">Luxury Apartment in Ikoyi</h5>
                <p class="card-text">1 Bedrooms | 1 Bathroom | $250/night</p>
                <p class="card-text">Located in the heart of Ikoyi, this apartment offers modern amenities and stunning views.</p>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#propertyModal">
                  View Details
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="" class="card-img-top" alt="Property 2">
              <div class="card-body">
                <h5 class="card-title">Cozy House in Lekki</h5>
                <p class="card-text">2 Bedrooms | 1 Bathroom | $3000000000/night</p>
                <p class="card-text">A cozy house perfect for small families, located in a Lekki.</p>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#propertyModal">
                  View Details
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="" class="card-img-top" alt="Property 3">
              <div class="card-body">
                <h5 class="card-title">Modern Villa in Sangotedo</h5>
                <p class="card-text">4 Bedrooms |4 Bathrooms | $3,00000000000/night</p>
                <p class="card-text">A spacious villa with a pool, located in Sangotedo.</p>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#propertyModal">
                  View Details
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="modal fade" id="propertyModal" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="propertyModalLabel">Property Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="" class="img-fluid mb-3" alt="Property Image">
            <h5>Luxury Apartment in Ikoyi</h5>
            <p>This is a detailed description of the property located in Ikoyi, Lagos. It features modern amenities, a spacious living area, and a beautiful view of the city.</p>
            <ul>
              <li>3 Bedrooms</li>
              <li>2 Bathrooms</li>
              <li>1 Living Room</li>
              <li>1 Kitchen</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Book Now</button>
          </div>
        </div>
      </div>
    </div>

    <?php include 'partials/footer.php'; ?>
</html>