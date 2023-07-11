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
            <div class="col-md-6">
            <?php foreach($code as $element){?>
                <div style="box-shadow: 2px 2px 2px solid black;">
                    <h3><?= $element['code']; ?></h3>
                    <p>Valeur: <?= $element['value']; ?>Ar</p>
                    <p>Statut: <?= $element['status']; ?></p>
                    <?php if($element['id_user'] != null){ ?>
                        <button><a href="<?= base_url("AdminController/demandValidation"); ?>?action=1&id_code=<?= $element['id_code']; ?>">Accepter</a></button>
                        <button type="button" class="btn btn-danger"><a href="<?= base_url("AdminController/demandValidation"); ?>?action=0&id_code=<?= $element['id_code']; ?>">Refuser</a></button>
                    <?php } ?>
                </div>
                <br><br>
            <?php } ?>
            </div>
            <div class="col-md-6">
                <h1>Générer un code</h1>
                <form action="<?= base_url("AdminController/codeInsertion"); ?>" method="post">
                    <label for="value">Valeur:</label> <input type="number" name="value" id="" min="1">
                    <br><br>
                    <button type="submit">Generate</button>
                </form>
            </div>
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