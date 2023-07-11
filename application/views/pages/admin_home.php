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
    <script type="text/javascript"  src="<?= base_url("assets/js/xhr.js"); ?>"></script>

</head>

<body style="padding: 5%">
<?php $this->load->view("partials/loader") ?>

    <?php $this->load->view("partials/header") ?>


<main style="margin-top: 58px">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-4 card p-2 m-1" >
                <h4>Nombre d'utilisateur</h4>
                    <p><?= $alluser; ?> personnes</p>
            </div>
            <div class="col-md-4 card p-2 m-1">
                <h4>Programme de perte de poids</h4>
                    <p><?= $perte; ?> personnes</p>
            </div>
            <div class="col-md-4 card p-2 m-1" >
                <h4>Programme de prise de poids</h4>
                    <p><?= $prise; ?> personnes</p>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <div class="chart" style="width: 500px;">
                <h4>Chiffre d'affaire par mois</h4>
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>

</main>

<script src="<?= base_url("assets/js/chart-js/node_modules/chart.js/dist/chart.umd.js") ?>"></script>
<script>
    const ctx1 = document.getElementById('myChart1');
    const ctx2 = document.getElementById('myChart2');

    new Chart(ctx1, {
        type: 'line',                //bar, line, pie, radar, doughnut, bubble
        data: {
            labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin'],
            datasets: [{
                label: '1 Euro en ariary',
                data: [4325, 4350, 4700, 4575, 4450, 4600],
                borderWidth: 1
            },{
                label: '1 dollar en ariary',
                data: [3500, 3675, 4000, 3900, 4100, 4125],
                borderWidth: 1
            },{
                label: '1 Yen en ariary',
                data: [28, 34, 37, 34, 28, 30],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false
                }
            }
        }
    });

    new Chart(ctx2, {
        type: 'bar',                //bar, line, pie, radar, doughnut, bubble
        data: {
            labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin'],
            datasets: [{
                label: '1 Euro en ariary',
                data: [4325, 4350, 4700, 4575, 4450, 4600],
                borderWidth: 1
            },{
                label: '1 dollar en ariary',
                data: [3500, 3675, 4000, 3900, 4100, 4125],
                borderWidth: 1
            },{
                label: '1 Yen en ariary',
                data: [28, 34, 37, 34, 28, 30],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false
                }
            }
        }
    });
    
</script>

<!-- MDB -->
<script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>

<script type="text/javascript"  src="<?= base_url("assets/js/login.js"); ?>" defer>

</script>
<!-- Custom scripts -->
<script type="text/javascript" defer>

</script>

</body>
</html>
