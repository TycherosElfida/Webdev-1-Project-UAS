<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/Home/EZVIZ.png" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/Home/bardi.jpg" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/Home/alhua.jpg" class="d-block w-100 img-fluid" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section class="mt-5 mb-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="d-flex flex-row align-items-center justify-content-center gap-3 mb-4">
          <button class="category-btn active" data-category="includes/sections/wire-free-cameras.php">Wire-free Cameras</button>
          <button class="category-btn" data-category="includes/sections/indoor-cameras.php">Indoor Cameras</button>
          <button class="category-btn" data-category="includes/sections/outdoor-cameras.php">Outdoor Cameras</button>
          <button class="category-btn" data-category="includes/sections/dvr.php">DVR</button>
          <button class="category-btn" data-category="includes/sections/accessories.php">Accessories</button>
        </div>
        <div id="category-content">
          <!-- saya tahu bisa pakai ajax disini untuk diatur-atur setiap part dari banner dan cards, 
           cuma lebih mudah dan cepat untuk buat setiap categori files dan ubah ubah filenya saja -->
        </div>
        <br>
        <div class="row text-center">
          <div class="col">
            <a href="index.php?page=products" class="btn btn-primary btn-lg">Load More!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/sections/why-choose-us.php'; ?>

<?php include 'includes/sections/installationpackages.php'; ?>