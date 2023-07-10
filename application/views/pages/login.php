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
    <link rel="stylesheet" href="<?= base_url("assets/css/login.css") ?>">
    <!-- Google Fonts Roboto -->
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="<?= base_url("assets/css/mdb.min.css") ?>" />
    <script type="text/javascript"  src="<?= base_url("assets/js/xhr.js"); ?>"></script>

</head>
<body>
<?php $this->load->view("partials/header") ?>


<main>
    <div class="container" >
        <!-- Carousel wrapper -->
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
                        <img src="<?= base_url("assets/img/fruit.jpg") ?>" class="d-block w-100 h-100"
                             alt="Sunset Over the City" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mangez Sainement</h5>
                            <p>On vous accompagne pour cela</p>
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

        <!-- Carousel wrapper -->
        <div class="right" >
            <div class="head" ><h2>Connectez vous </h2></div>
            <section class="form">
                <form class="row g-3 needs-validation" id="form" novalidate>
                    <div class="col-md-5 input">
                        <div class="form-outline">
                            <input type="text" class="form-control" name="mail" id="validationCustom01" value="" required />
                            <label for="validationCustom01" class="form-label">Mail</label>
                            <div class="valid-feedback">ok !</div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-outline">
                            <input type="text" class="form-control" name="mdp" id="validationCustom02" value="" required />
                            <label for="validationCustom02" class="form-label">Mot De Passe</label>
                            <div class="valid-feedback">ok ! </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-5">
                        <button class="btn btn-primary" type="submit">Se Connecter</button>
                    </div>
                </form>
                <h4 class="head">Ou connectez vous avec Google</h4>
            </section>
        </div>
    </div>
</main>
<!-- MDB -->
<script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>

<script type="text/javascript"  src="<?= base_url("assets/js/login.js"); ?>" defer>

</script>
<!-- Custom scripts -->
<script type="text/javascript" defer>
    (() => {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();

    const form = document.getElementById("form");

    form.addEventListener("submit",(e)=>{
        e.preventDefault();

        if (form.checkValidity()){
            login(form);
        }
    })
</script>

</body>
</html>
