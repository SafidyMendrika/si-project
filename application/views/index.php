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
  <?php $this->load->view("partials/loader") ?>

  <section class="hero" style="width: 100%;height: 100vh">

      <!-- Background image -->
      <div
              id="intro-example"
              class="p-5 text-center bg-image"
              style="background-image: url('<?= base_url("assets/img/banane.png") ?>');width: 100%;height: 100%"
      >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
              <div class="d-flex justify-content-center align-items-center h-100">
                  <div class="text-white">
                      <h1 class="mb-3">Faites nous confiance</h1>
                      <h5 class="mb-4">Donnez nous votre volonté et on vous donne le résultat</h5>
                      <a
                              class="btn btn-outline-light btn-lg m-2"
                              href="<?= base_url("") ?>"
                              role="button"
                              rel="nofollow"
                              target="_blank"
                      >S'inscrire</a
                      >
                      <a
                              class="btn btn-outline-light btn-lg m-2"
                              href="<?= base_url("LoginController") ?>"
                              target="_blank"
                              role="button"
                      >Se Connecter</a
                      >
                  </div>
              </div>
          </div>
      </div>
      <!-- Background image -->
  </section>

    <!-- MDB -->
    <script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
