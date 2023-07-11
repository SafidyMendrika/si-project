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
    <link rel="stylesheet" href="<?= base_url("assets/css/mdb.min.css") ?>" />

</head>
<body style="padding-top: 50px">
<?php $this->load->view("partials/header") ?>
<?php $this->load->view("partials/loader") ?>


<main style="display: flex;flex-wrap: wrap">
    <div class="card" style="margin: 2%;width: 450px;height: 500px"  >
        <img src="<?= base_url("assets/img/muscle.jpg") ?>" style="height: 55%" class="card-img-top" alt="Fissure in Sandstone"/>
        <div class="card-body">
            <h5 class="card-title">Prise de Masse</h5>
            <p class="card-text">Vous vous sentez fin et veut prendre un peu de masse ? Ce programme et fait pour Vous , Découvrez notre formule spéciale prise de masse</p>
            <a href="<?= base_url("GoalController/insertGoal/2") ?>" class="btn btn-primary"  style="margin-top: 2%">Oui , c'est moi</a>
        </div>
    </div>
    <div class="card" style="margin: 2%;width: 450px;height: 500px">
        <img src="<?= base_url("assets/img/regime.jpg") ?>" style="height: 55%" class="card-img-top" alt="Fissure in Sandstone"/>
        <div class="card-body">
            <h5 class="card-title">Mincir</h5>
            <p class="card-text">Vous pouvez choisir la masse que vous voulez enlever tout en pratiquant notre programme sportif spécialement fait pour Vous</p>
            <a href="<?= base_url("GoalController/insertGoal/1") ?>" class="btn btn-primary" style="margin-top: 2%">Oui , c'est moi</a>
        </div>
    </div>

    <div class="card" style="margin: 2%;width: 450px;height: 500px">
        <img src="<?= base_url("assets/img/banane.png") ?>" style="height: 55%" class="card-img-top" alt="Fissure in Sandstone"/>
        <div class="card-body">
            <h5 class="card-title">IMC quester</h5>
            <p class="card-text">Vous cherchez le corps parfait par rapport à votre poids</p>
            <a href="#!" class="btn btn-primary"  style="margin-top: 2%">Oui , c'est moi</a>
        </div>
    </div>
</main>
<!-- MDB -->
<script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>
</body>
</html>
