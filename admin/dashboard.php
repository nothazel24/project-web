<?php require("../attr/header.php"); ?>

<div class="d-flex flex-row ">

    <?php require("../attr/sidebar.php"); ?>

    <div class="container-fluid d-flex flex-column mt-5" style="margin-left: 26%; flex-grow: 1;">
        <h1 class="mt-4 mb-4 ml-2 font-weight-bold">Dashboard</h1>

        <div class="dashboardUnit container-fluid d-flex flex-row justify-content-center align-items-center">

            <div class="border border-black rounded m-3 text-center font-weight-bold" style="width: 12rem; height: fit-content;">
                  <p>Petugas</p>
                  <hr class="dbLine">
                  <p>0</p>
            </div>

            <div class="border border-black rounded m-3 text-center font-weight-bold" style="width: 12rem; height: fit-content;">
                  <p>Laporan Terverifikasi</p>
                  <hr class="dbLine">
                  <p>0</p>
            </div>

            <div class="border border-black rounded m-3 text-center font-weight-bold" style="width: 12rem; height: fit-content;">
                  <p>Laporan Diproses</p>
                  <hr class="dbLine">
                  <p>0</p>
            </div>

            <div class="border border-black rounded m-3 text-center font-weight-bold" style="width: 12rem; height: fit-content;">
                  <p>Laporan Selesai</p>
                  <hr class="dbLine">
                  <p>0</p>
            </div>
        </div> <!-- dashboardUnit closing tag-->

    </div>

</div>

<?php require("../attr/footer.php"); ?>
