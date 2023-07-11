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

<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-money-bill fa-fw me-3"></i><span>Chiffres d'affaire</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-money-bill fa-fw me-3"></i><span>Chiffres d'affaire</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-money-bill fa-fw me-3"></i><span>Chiffres d'affaire</span></a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-money-bill fa-fw me-3"></i><span>Chiffres d'affaire</span></a>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <?php $this->load->view("partials/header") ?>
    <!-- Navbar -->
</header>

<main style="margin-top: 58px">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-4">
                <h4>Nombre d'utilisateur</h4>
                    <p>22 personnes</p>
            </div>
            <div class="col-md-4">
                <h4>Programme de perte de poids</h4>
                    <p>10 personnes</p>
            </div>
            <div class="col-md-4">
                <h4>Programme de prise de poids</h4>
                    <p>10 personnes</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="chart" style="width: 500px;">
                <h4>Nombre de transactions par mois</h4>
                    <canvas id="myChart1"></canvas>
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


<style>
    body {
        background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }

    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }

    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }
</style>
</body>
</html>
