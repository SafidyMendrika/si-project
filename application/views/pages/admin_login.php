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
<?php $this->load->view("partials/loader") ?>



<main style="margin-top: 4%">
    <div class="container" >
        <!-- Carousel wrapper -->
        <div class="right" style="border:2px solid #28436e;border-right: none;" >
            <div class="head" style="color: #28436e" ><h2>Admin </h2></div>
            <section class="form">
                <form class="row g-3 needs-validation" action="<?= base_url("LoginController/loginAdmin") ?>" id="form" method="post" >
                    <div class="col-md-5 input">
                        <div class="form-outline">
                            <input type="text" class="form-control" name="mail" id="validationCustom01" value="Mendrika@gmail.com" required />
                            <label for="validationCustom01" class="form-label">Mail</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-outline">
                            <input type="password" class="form-control" name="mdp" id="validationCustom02" value="azerty" required />
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
        <!-- Carousel wrapper -->
        <div class="left d-flex justify-content-around align-items-center" >
            <img src="<?= base_url("assets/img/diet-tracker.png") ?>" class="w-75 " style="border-radius: 50%"></img>
        </div>
    </div>
</main>
<!-- MDB -->
<script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>

<script type="text/javascript"  src="<?= base_url("assets/js/login.js"); ?>" defer>

</script>

</body>
</html>
