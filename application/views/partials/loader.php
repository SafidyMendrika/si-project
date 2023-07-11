
<style>
    @font-face {
        font-family: "batangas";
        src: url("<?= base_url("assets/font/Batangas.otf") ?>")
    }
</style>
<div class="loader" >
    <h2 style="font-family: 'batangas'">DIET-TRACKER</h2>
</div>
<style>
    .loader{
        color: #01602a;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999999;
        display: flex;
        align-items: center;
        justify-content: space-around;
        background-color: #1ede69;
        filter: blendTrans(20px);
        width: 100%;
        height: 100vh;
        transition: 500ms;
        animation: 5s infinite loading;
    }
    @keyframes loading {
        10%{
            color: #0c7e51;
        }20%{
                     color: #3a9f13;
        }
        30%{
            color: #109849;
        }40%{
             color: #359614;
         }
        50%{
            color: #0e8c5a;
        }
        60%{
             color: #0b914e;
         }
        70%{
            color: #128c40;
        }
        80%{
             color: #2c860e;
         }
        90%{
            color: #0e803c;
        }
        100%{
            color: #319610;
        }

    }
    .loader.hide{
        animation: 600ms out ease;
    }
    @keyframes out {
        from{
            top: 0%;
        }to{
        top: -100%;
                 }
       /* 50%{
            top: -30%;
        }
        100%{
            top: -100%;
        }*/
    }

</style>
<script>
    window.addEventListener("load",()=>{
        document.querySelector(".loader").classList.add("hide");
        window.setTimeout(()=>{
            document.querySelector(".loader.hide").style.display = "none";
        },550)
    });
</script>

<link ref="stylesheet" type="text/css" href="<?= base_url("assets/js/snackbar") ?>/snackbar.min.css" />
<script src="<?= base_url("assets/js/snackbar") ?>/snackbar.min.js"></script>