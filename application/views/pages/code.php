<?php
function getStatusLabel($status)
{
    if ($status == "0"){
        return '<span class="badge bg-success">disponible</span>';
    }else if($status == "10"){
        return '<span class="badge bg-warning">en attente</span>';
    }else if($status == "20"){
        return '<span class="badge bg-danger">indisponible</span>';
    }

}
?>
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



<main style="margin-top: 100px">
    <div class="container" style="display:flex;flex-wrap: wrap;justify-content: space-around;align-items: center" >
        <!-- Carousel wrapper -->

        <!-- Carousel wrapper -->
        <div class="right" style="border: none;width: 650px">
            <div class="head" ><h2>Entrez votre code à 9 chiffres </h2></div>
            <section class="form">
                <form action="<?= base_url() ?>" method="post" class="row g-3 needs-validation w-100 p-3" id="form" novalidate>
                    <div class="col-md-5 input" >
                        <div class="form-outline">
                            <input type="text" class="form-control" name="mail" id="validationCustom01" value="" required />
                            <label for="validationCustom01" class="form-label">XXXXXXXXX</label>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-5">
                        <button class="btn btn-primary" type="submit">Entrer</button>
                    </div>
                </form>
                <h4 class="head"></h4>
            </section>
        </div>

        <div id="carouselMaterialStyle" class="carousel slide carousel-fade left" data-mdb-ride="carousel" style="background-color:transparent;width: 600px">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Code</th>
                    <th scope="col">valeur</th>
                    <th scope="col">status</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($codes as $c){ ?>
                <tr>
                    <th scope="row"><?= $c["id_code"] ?></th>
                    <td><?= $c["code"] ?></td>
                    <td><?= $c["value"] ?> Ar</td>
                    <td>
                        <?= getStatusLabel($c["status"]) ?>
                    </td>
                </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>


    </div>
</main>
<!-- MDB -->
<script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>

<script type="text/javascript"  src="<?= base_url("assets/js/login.js"); ?>" defer>

</script>
<!-- Custom scripts -->
<script type="text/javascript" defer>
</script>

</body>
</html>
