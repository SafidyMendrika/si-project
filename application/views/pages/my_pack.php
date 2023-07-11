
<?php
$this->load->model("Activity");
$this->load->model("Menu");

function countKcal($plats,$type)
{
    $result = 0;

    foreach ($plats as $plat){
        $result += $plat[$type];
    }

    return $result;
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

    <?php foreach($packs as $pack){ ?>
        <div class="card w-75">
            <h4 class="card-header"><?= $pack["label"] ?></h4>
            <h4 class="" style="float: right"><a href=""><button class="btn btn-primary" >Export pdf</button></a></h4>
            <div class="card-body">
                <!-- Pills content -->
                <div class="tab-content" id="ex1-content">
                    <h5>Menus</h5>
                    <div class="tab-pane fade show active" id="ex-1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <ul>
                            <?php foreach ($this->Menu->getByPack($pack["id_pack"]) as $menu){ ?>
                                <li><?=  $menu["menu"] ?> (<?=  $menu["menukcal"] ?> KCal)</li>
                            <?php } ?>
                        </ul>
                    </div>
                    <h5>Activités sportives</h5>
                    <div class="tab-pane fade show active" id="ex-1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <ul>
                            <?php foreach ($this->Activity->getByPack($pack["id_pack"]) as $act){ ?>
                                <li><?=  $act["activity"] ?> (<?=  $act["activitykcal"] ?> KCal)</li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="tab-pane fade show active d-flex align-items-center justify-content-around flex-wrap" id="ex-1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <div class="alert alert-danger d-flex align-items-center justify-content-around" style="width: 225px"><h5><?= $pack["nb_day"] ?> Jour(s)</h5></div>
                        <div class="alert alert-success d-flex align-items-center justify-content-around" style="width: 225px" ><h5><?= number_format($pack["total_price"]) ?> AR</h5></div>
                    </div>
                </div>
                <!-- Pills content -->

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
