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
    <!-- <link rel="stylesheet" href="<?= base_url("assets/css/pack.css") ?>" /> -->
</head>
<body style="padding-top: 60px">
<?php $this->load->view("partials/header") ?>
<?php $this->load->view("partials/loader") ?>

<main>
<?php foreach($result as $element){ ?>
    <div class="row" style="margin-top: 30vh;">
        <div class="col-md-4"></div>
        <div class="col-md-6">
        <div class="card mb-3" style="max-width: 640px;">
            <div class="row">
                <div class="col-md-4">
                    <img
                        src="<?= base_url("assets/img/athlete-svgrepo-com.svg") ?>"
                        alt="Trendy Pants and Shoes"
                        class="img-fluid rounded-start"
                    />
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $element["name"]; ?></h5>
                    <p class="card-text">
                    <small class="text-muted"><?= $element["mail"]; ?></small>
                    </p>
                    <p class="card-text">
                        age: <?= $element["age"]; ?> ans
                    </p>
                    <p class="card-text">
                        poids: <?= $element["weight"]; ?> kg
                    </p>
                    <p class="card-text">
                        objectif: <?= $element["title"]; ?> (<?= $element["weight_to_operate"]; ?>kg)
                    </p>
                    <p class="card-text">
                        porte-monnaie: <?= $element["wallet"]; ?> Ar
                    </p>
                </div>
                </div>
            </div>
        </div>
        </div>
        
    </div>
<?php } ?>
   
</main>
<!-- MDB -->
<script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
