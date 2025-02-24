<footer class="footer">
  <div class="container text-center">
    <div class="social-icons mb-3">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
    <p>&copy; 2025 Mozzy Properties. All rights reserved.</p>
    <p>
      <a href="#">Privacy Policy</a> | 
      <a href="#">Terms of Service</a> | 
      <a href="#">Contact Us</a>
    </p>
    <form class="newsletter-form mt-4">
      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Subscribe to our newsletter" aria-label="Subscribe">
        <button class="btn btn-danger" type="button">Subscribe</button>
      </div>
    </form>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  let mybutton = document.getElementById("backToTop");

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<button onclick="topFunction()" id="backToTop" class="btn btn-danger back-to-top" title="Go to top">
  <i class="fas fa-arrow-up"></i>
</button>
</body>
</html>
