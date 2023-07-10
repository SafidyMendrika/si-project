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
<nav class="navbar navbar-expand-lg navbar-light bg-white">
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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <div class="btn-group shadow-0" role="group">
                <a href="<?= base_url("LoginController") ?>" ><button type="button" class="btn btn-ligth" >Se Connecter</button></a>
                <button type="button" class="btn btn-success" >S'inscrire</button>
            </div>
        </div>
        </div>

    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
