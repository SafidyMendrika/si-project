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

<body >
<?php $this->load->view("partials/header") ?>
<?php $this->load->view("partials/loader") ?>



<main style="margin-top: 4%">
    <div class="container" >
        <section class="form">
            <?php if ($page == 1){ ?>
            <form action="<?= base_url("UserController/singIn") ?>" method="post" class="row g-3 needs-validation" id="form" novalidate>
                <div class="col-md-5 ">
                    <h2>Creer Un Compte</h2>
                </div>

                <div class="col-md-5 m-3">
                    <div class="form-outline">
                        <input type="text" class="form-control" name="name" id="validationCustom01" value="" required />
                        <label for="validationCustom03" class="form-label">Nom</label>
                    </div>
                </div>

                <div class="col-md-5 m-3">
                    <div class="form-outline">
                        <input type="mail" class="form-control" name="mail" id="validationCustom02" value="" required />
                        <label for="validationCustom03" class="form-label">Mail</label>
                    </div>
                </div>
                <div class="col-md-5 m-3">
                    <div class="form-outline">
                        <input type="password" class="form-control" name="mdp" id="validationCustom03" value="" required />
                        <label for="validationCustom03" class="form-label">Mot De Passe</label>
                    </div>
                </div>

                <div class="col-md-5 col-xs-5">
                    <button class="btn btn-primary" type="submit">Creer</button>
                </div>
            </form>
            <?php }else{ ?>
                    <form action="<?= base_url("UserController/insertDetals") ?>" method="post" class="row g-3 needs-validation" id="form" novalidate>
                    <div class="col-md-5 ">
                        <h2>Remplissez les details</h2>
                    </div>

                    <div class="col-md-5 m-3">
                        <div class="form-outline">
                            <input type="number" class="form-control" name="age" id="validationCustom01" value="" required />
                            <label for="validationCustom03" class="form-label">Age</label>
                        </div>
                    </div>

                    <div class="col-md-5 m-3">
                        <div class="form-outline">
                            <input type="number" class="form-control" name="poids" id="validationCustom02" value="" required />
                            <label for="validationCustom03" class="form-label">Poids</label>
                        </div>
                    </div>
                    <div class="col-md-5 m-3">
                        <div class="form-outline">
                            <input type="number" class="form-control" name="taille" id="validationCustom03" value="" placeholder="ex: 180"  required />
                            <label for="validationCustom03" class="form-label">Taille</label>
                        </div>
                    </div>

                    <div class="col-md-5 col-xs-5">
                        <a href="<?=  base_url("LoginController")?>" ><button class="btn btn-danger" >Passer</button></a>
                        <button class="btn btn-primary" type="submit">Creer</button>
                    </div>
                </form>
            <?php } ?>
            <h4 class="head"></h4>
        </section>
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

</script>

</body>
</html>
