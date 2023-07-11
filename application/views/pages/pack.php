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

function getRemise($prix,$pourc)
{
    $val = ($pourc * $prix ) / 100;

    return $prix - $val;
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

    <script type="text/javascript"  src="<?= base_url("assets/js/xhr.js"); ?>"></script>
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="<?= base_url("assets/css/mdb.min.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/pack.css") ?>" />

    <link ref="stylesheet" type="text/css" href="<?= base_url("assets/js/snackbar") ?>/dist/snackbar.min.css" />
    <script src="<?= base_url("assets/js/snackbar") ?>/dist/snackbar.min.js"></script>
</head>
<body style="padding-top: 60px">
<?php $this->load->view("partials/header") ?>
<?php $this->load->view("partials/loader") ?>

<main>
    <?php foreach($packs as $pack){ ?>
        <div class="card" style="width: 550px">
            <h5 class="card-header"><?= $pack["label"] ?> <span class="badge bg-danger" ><?= $pack["nb_day"] ?> Jour(s)</span></h5>
            <div class="card-body">
                <!-- Pills content -->
                <div class="tab-content" id="ex1-content">
                    <div class="tab-pane fade show active" id="ex<?= $pack["id_pack"] ?>-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <ul>
                            <?php $menus = $this->Menu->getByPack($pack["id_pack"]);  ?>
                            <li><?= count($menus) ?> Plat(s)</li>
                            <li><?= countKcal($menus,"menukcal") ?> Kcal</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="ex<?= $pack["id_pack"] ?>-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                        <?php $acts = $this->Activity->getByPack($pack["id_pack"]); ?>

                        <li> <?= count($acts) ?> type(s) de sports</li>
                        <li> <?= countKcal($acts,"activitykcal") ?> Kcal    à dépenser pour chaque séance</li>

                    </div>
                </div>
                <!-- Pills content -->
                <!-- Pills navs -->
                <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="ex<?= $pack["id_pack"] ?>-tab-1" data-mdb-toggle="pill" href="#ex<?= $pack["id_pack"] ?>-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">
                            Menu
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                                class="nav-link"
                                id="ex<?= $pack["id_pack"] ?>-tab-2"
                                data-mdb-toggle="pill"
                                href="#ex<?= $pack["id_pack"] ?>-pills-2"
                                role="tab"
                                aria-controls="ex1-pills-2"
                                aria-selected="false"
                        >Activités sportives</a
                        >
                    </li>
                    <li class="nav-" role="presentation">
                        <a href="#" class="nav-link" style="padding: 0;display: flex;align-items: center;justify-content: space-around" id="buy" data-id-pack ="<?= $pack["id_pack"] ?>" data-nb-day ="<?= $pack["nb_day"] ?>" data-total-price ="<?= getRemise($pack["total_price"],15) ?>">
                            <button class="btn btn-black disabled" style="color: #000"><i class="fas fa-money"></i> <?= number_format($pack["total_price"]) ?> Ar </button>
                        </a >


                    </li>
                    <li class="nav-" role="presentation">
                        <a href="" class="nav-link" style="padding: 0;display: flex;align-items: center;justify-content: space-around" id="buy" data-id-pack ="<?= $pack["id_pack"] ?>" data-nb-day ="<?= $pack["nb_day"] ?>" data-total-price ="<?= getRemise($pack["total_price"],15) ?>">
                            <button class="btn btn-success"><i class="fas fa-money"></i> <?= number_format(getRemise($pack["total_price"],15)) ?> Ar (-15%)</button>
                        </a
                        >
                    </li>



                </ul>
                <!-- Pills navs -->
            </div>
        </div>
    <?php } ?>



</main>
<?php $this->load->view("partials/footer") ?>

<!-- MDB -->
<script type="text/javascript" src="<?= base_url("assets/js/mdb.min.js") ?>"></script>
<!-- Custom scripts -->
<script type="text/javascript">
    var buyBtns = document.querySelectorAll("#buy");

    buyBtns.forEach((btn)=>{
        btn.addEventListener("click",(e)=>{
            e.preventDefault();

            buy(btn);
        })
    })

    function buy(buyBtn){
        const xhr = createXHR();

        const form = new FormData();

        xhr.addEventListener("load",(e)=>{
            console.log(e.target.responseText);
            alert("acheté avec succès");
        })

        form.set("id_pack",buyBtn.dataset.idPack);
        form.set("nb_day",buyBtn.dataset.nbDay);
        form.set("total_price",buyBtn.dataset.totalPrice);

        xhr.open("POST",host+"PackController/buyPack");

        xhr.send(form);
    }

</script>
</body>
</html>
