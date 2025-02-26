<?php 
session_start();
include 'partials/header.php';
?>

<div class="top-section">
      <div class="container">
      <?php
             if (isset($_SESSION['login_success'])) {
             echo "<div class='alert alert-success text-center'>" . $_SESSION['login_success'] . "</div>";
             unset($_SESSION['login_success']); 
            }


            // if (isset($_SESSION["user"])) {
            // echo "<p>Welcome, " . $_SESSION["user"]["name"] . "!</p>";
            //  }
             ?>

        <h1>Find your next Temporary home</h1>
        <p>Discover unique housing experiences around Lagos.</p>
        <div class="search-bar">
          <form class="row g-3">
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="Where to?">
            </div>
            <div class="col-md-3">
              <input type="date" class="form-control">
            </div>
            <div class="col-md-3">
              <select class="form-select">
                <option selected>Apartment Type</option>
                <option value="1">1 Bedroom</option>
                <option value="2">2 Bedrooms</option>
                <option value="3">3 Bedrooms</option>
                <option value="4">4 Bedrooms</option>
              </select>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-danger">Search</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="listings-section">
      <div class="container">
        <h2 class="text-center mb-5">Explore popular destinations</h2>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="" class="d-block w-100" alt="Lekki">
              <div class="carousel-caption d-none d-md-block">
                <h5>Ikate Lekki, Lagos</h5>
                <p>This is Lekki, the heart of Lagos.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="" class="d-block w-100" alt="Sangotedo">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sangotedo, Lagos</h5>
                <p>Experience modern and luxurious houses.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="" class="d-block w-100" alt="Ikoyi">
              <div class="carousel-caption d-none d-md-block">
                <h5>Ikoyi, Lagos</h5>
                <p>The exotic city of Ikoyi, home to Nigeria's most elite.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
          <div class="col">
            <div class="card">
              <img src="" class="card-img-top" alt="Lekki_apartment">
              <div class="card-body">
                <h5 class="card-title mt-2">Ikate Lekki, Lagos</h5>
                <p class="card-text">This is Lekki, the heart of Lagos.</p>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#propertyModal">
                  View Details
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="" class="card-img-top" alt="Sangotedo_house">
              <div class="card-body">
                <h5 class="card-title">Sangotedo, Lagos</h5>
                <p class="card-text">Experience modern and luxurious houses.</p>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#propertyModal">
                  View Details
                </button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="" class="card-img-top" alt="Ikoyi_house">
              <div class="card-body">
                <h5 class="card-title">Ikoyi, Lagos</h5>
                <p class="card-text">The exotic city of Ikoyi, home to Nigeria's most elite.</p>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#propertyModal">
                  View Details
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Modal part -->
    <div class="modal fade" id="propertyModal" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="propertyModalLabel">Property Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="" class="img-fluid mb-3" alt="Property Image">
            <h5>Ikate Lekki, Lagos</h5>
            <p>This is a detailed description of the property located in Ikate Lekki, Lagos. It features modern amenities, a spacious living area, and a beautiful view of the city.</p>
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

    <?php include 'partials/footer.php';?>

</html>