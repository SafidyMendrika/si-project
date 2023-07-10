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
    <link rel="stylesheet" href="<?= base_url("assets/css/pack.css") ?>" />
</head>
<body style="padding-top: 60px">
<?php $this->load->view("partials/header") ?>
<?php $this->load->view("partials/loader") ?>

<main>
    <div class="card w-40" >
        <h5 class="card-header">Pack kely</h5>
        <div class="card-body">
            <!-- Pills content -->
            <div class="tab-content" id="ex1-content">
                <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                    <ul>
                        <li>Akoho (300 KCal)</li>
                        <li>Vary (200 KCal)</li>
                        <li>Loka (400 KCal) </li>
                        <li>Henakisoa (500 KCal) </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">

                    <li>Pompes (300 KCal / scéance)</li>
                    <li>Abdos (200 KCal / scéances)</li>
                    <li>Traction (400 KCal / scéance) </li>
                    <li>Zumba (500 KCal / scéance) </li>
                </div>
            </div>
            <!-- Pills content -->
            <!-- Pills navs -->
            <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">
                        Menu
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a
                            class="nav-link"
                            id="ex1-tab-2"
                            data-mdb-toggle="pill"
                            href="#ex1-pills-2"
                            role="tab"
                            aria-controls="ex1-pills-2"
                            aria-selected="false"
                    >Activités sportives</a
                    >
                </li>
                <li class="nav-" role="presentation">
                    <a href="" class="nav-link" style="padding: 0;display: flex;align-items: center;justify-content: space-around"><button class="btn btn-success"><i class="fas fa-money"></i> 30 000Ar</button></a
                    >
                </li>
            </ul>
            <!-- Pills navs -->
        </div>
    </div>


    <div class="card w-40" >
        <h5 class="card-header">Pack kely</h5>
        <div class="card-body">
            <!-- Pills content -->
            <div class="tab-content" id="ex1-content">
                <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                    <ul>
                        <li>Akoho (300 KCal)</li>
                        <li>Vary (200 KCal)</li>
                        <li>Loka (400 KCal) </li>
                        <li>Henakisoa (500 KCal) </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">

                    <li>Pompes (300 KCal / scéance)</li>
                    <li>Abdos (200 KCal / scéances)</li>
                    <li>Traction (400 KCal / scéance) </li>
                    <li>Zumba (500 KCal / scéance) </li>
                </div>
            </div>
            <!-- Pills content -->
            <!-- Pills navs -->
            <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">
                        Menu
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a
                            class="nav-link"
                            id="ex1-tab-2"
                            data-mdb-toggle="pill"
                            href="#ex1-pills-2"
                            role="tab"
                            aria-controls="ex1-pills-2"
                            aria-selected="false"
                    >Activités sportives</a
                    >
                </li>
                <li class="nav-" role="presentation">
                    <a href="" class="nav-link" style="padding: 0;display: flex;align-items: center;justify-content: space-around"><button class="btn btn-success"><i class="fas fa-money"></i> 30 000Ar</button></a
                    >
                </li>
            </ul>
            <!-- Pills navs -->
        </div>
    </div>



</main>
<!-- MDB -->
<script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
