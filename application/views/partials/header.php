
<link rel="icon" href="<?= base_url("assets/img/diet-tracker-pin.png") ?>" type="image/x-icon" />
<title>
    DIET-TRACKER
</title>
<style>
    @font-face {
        font-family: "batangas";
        src: url("<?= base_url("assets/font/Batangas.otf") ?>")
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" >
    <!-- Container wrapper -->
    <div class="container-fluid">


        <!-- Collapsible wrapper -->
        <div class="d-flex align-items-center" id="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="font-family: 'batangas';color: #008037" href="<?= base_url() ?>"><img
                                src="<?= base_url("assets/img/diet-tracker-pin.png") ?>"
                                height="30"
                                alt="MDB Logo"
                                loading="lazy"
                                style="border-radius: 50%"
                        /> DIET-TRACKER</a>
                </li>
            </ul>
        </div>

        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-5 mb-lg-0 w-25">
                <?php if ($this->session->has_userdata("data") && $this->session->userdata("data")["type"] == "u"){ ?>
                   <li class="nav-item" style="margin-left: 5%;padding: 3%">
                        <a href="<?= base_url("PackController/pack") ?>" > Pour Vous </a>
                    </li>
                    <li class="nav-item" style="margin-left: 5%;padding: 3%">
                        <a href="<?= base_url("PackController/myPack") ?>" >Vos Packs </a>
                    </li>
                    <li class="nav-item" style="margin-left: 5%;padding: 3%">
                        <a href="<?= base_url("UserController/code") ?>" > Code </a>
                    </li>
                <?php }else if ($this->session->has_userdata("data") && $this->session->userdata("data")["type"] == "a"){ ?>
                    <li class="nav-item" style="margin-left: 7%;padding: 3%">
                        <a href="<?= base_url("AdminController/Home") ?>" > Dashboard </a>
                    </li>
                    <li class="nav-item" style="margin-left: 7%;padding: 3%">
                        <a href="<?= base_url("AdminController/numbers") ?>"  >Chiffres </a>
                    </li>
                    <li class="nav-item" style="margin-left: 7%;padding: 3%">
                        <a href="<?= base_url("AdminController/packs") ?>" > Packs </a>
                    </li>

                    <li class="nav-item" style="margin-left: 7%;padding: 3%">
                        <a href="<?= base_url("AdminController/regimes") ?>" > Régimes </a>
                    </li>
                    <li class="nav-item" style="margin-left: 7%;padding: 3%">
                        <a href="<?= base_url("AdminController/activites") ?>" > Sports </a>
                    </li>
                    <li class="nav-item" style="margin-left: 7%;padding: 3%">
                        <a href="<?= base_url("AdminController/code") ?>" > Code </a>
                    </li>


                <?php } ?>

            </ul>
            <?php if($this->session->has_userdata("data")){ ?>
                <div class="btn-group shadow-0" role="group">
                    <a href="<?= base_url("UserController/profil") ?>" ><button type="button" class="btn btn-ligth" ><span class="badge bg-warning " style="margin-right: 5px"><?= $this->session->userdata("amount"); ?> Ar</span><?= $this->session->userdata("data")["name"] ?></button></a>
                    <a href="<?= base_url("LoginController/logout") ?>" ><button type="button" class="btn btn-danger" >Se Deconnecter</button></a>
                </div>
            <?php }else{ ?>
                <div class="btn-group shadow-0" role="group">
                    <a href="<?= base_url("LoginController") ?>" ><button type="button" class="btn btn-ligth" >Se Connecter</button></a>
                    <a href="<?= base_url("UserController/createAccount") ?>" ><button type="button" class="btn btn-success" >S'inscrire</button></a>
                </div>
            <?php } ?>
        </div>
        </div>

    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
