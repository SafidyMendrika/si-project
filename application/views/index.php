<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>DIET-TRACKER</title>
    <!-- MDB icon -->
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="<?= base_url("assets/css/mdb.min.css") ?>" />
  </head>
  <body>
  <?php $this->load->view("partials/header") ?>


  <div id="carouselMaterialStyle" class="carousel slide carousel-fade left" data-mdb-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-indicators">
          <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
                  aria-label="Slide 1"></button>
          <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Inner -->
      <div class="carousel-inner rounded-5 shadow-4-strong">
          <!-- Single item -->
          <div class="carousel-item active">
              <img src="<?= base_url("assets/img/banane.png") ?>" class="d-block w-100"
                   alt="Sunset Over the City" />
              <div class="carousel-caption d-none d-md-block">
                  <h5>Mangez Sainement</h5>
                  <p>On vous accompagne pour cela</p>
              </div>
          </div>
          <!-- Single item -->
          <div class="carousel-item active">
              <img src="<?= base_url("assets/img/fruit.jpg") ?>" class="d-block w-100"
                   alt="Sunset Over the City" />
              <div class="carousel-caption d-none d-md-block">
                  <h5>100% Bio</h5>
                  <p>Avec nos propres fruits et legumes</p>
              </div>
          </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>


    <!-- MDB -->
    <script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
