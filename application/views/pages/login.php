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
    <div class="container" style="border-radius: 5px" >
        <div class="left d-flex justify-content-around align-items-center" >
            <img src="<?= base_url("assets/img/diet-tracker.png") ?>" class="w-75 " style="border-radius: 50%"></img>
        </div>
        <div class="right" >
            <div class="head" ><h2>Connectez vous </h2></div>
            <section class="form">
                <form class="row g-3 needs-validation" id="form" novalidate>
                    <div class="col-md-5 input">
                        <div class="form-outline">
                            <input type="text" class="form-control" name="mail" id="validationCustom01" value="" required />
                            <label for="validationCustom01" class="form-label">Mail</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-outline">
                            <input type="password" class="form-control" name="mdp" id="validationCustom02" value="" required />
                            <label for="validationCustom02" class="form-label">Mot De Passe</label>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-5">
                        <button class="btn btn-primary" type="submit">Se Connecter</button>
                    </div>
                </form>
                <h4 class="head"></h4>
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
