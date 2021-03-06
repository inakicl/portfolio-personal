<div class="col-12 bg-especial" id="tab-1">
    <div class="row m-4 ">
        <div class="col-12 col-lg-4 ">
            <div class="row text-center">
                <div class="col-12">
                    <i class="fas fa-briefcase fa-2x text-success"></i>
                </div>
                <div class="col-12"><?= $working?></div>
                <div class="col-12">
                    <?= $working_place_titulo?>: <span> <?= $working_place?></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mt-3 mt-lg-0">
            <div class="row text-center">
                <div class="col-12">
                    <i class="fas fa-user fa-2x"></i>
                </div>
                <div class="col-12">
                    <?= $nombre_titulo?>: <?= $nombre_apellidos?>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mt-3 mt-lg-0">
            <div class="row text-center">
                <div class="col-12">
                    <i class="fas fa-city fa-2x text-secondary"></i>
                </div>
                <div class="col-12">
                    <?= $ciudad_titulo?>: <?= $ciudad_nombre?>
                </div>
            </div>
        </div>

        <div class="col-12 mt-5 d-flex">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mb-3">
                    <i class="fas fa-info fa-2x text-info "></i>
                </div>
                <div class="col-12 ml-lg-3">
                    <p id="info-parte-1"><?= $info_parte_1?></p>
                    <p id="info-parte-2"><?= $info_parte_2?></p>
                    <p id="info-parte-3"><?= $info_parte_3?></p>

                </div>
            </div>
        </div>

        <div class="col-12 mt-5 d-flex bg-rojo rounded pl-0">
            <div class="bg-azul-oscuro p-4 rounded-left d-flex align-items-center">
                <i class="fas fa-laptop-code fa-3x "></i>
            </div>
            <div class="p-4 d-flex justify-content-around flex-wrap ml-lg-3 w-100">
                <i class="fab fa-java fa-2x m-2"></i>
                <i class="fab fa-swift fa-2x m-2"></i>
                <i class="fab fa-js-square fa-2x m-2"></i>
                <i class="fab fa-php fa-2x m-2"></i>
                <i class="fab fa-laravel fa-2x m-2"></i>
                <img src="<?= $uda_imagen_link?>" class="imagen-uda ">
                <i class="fab fa-html5 fa-2x m-2"></i>
                <i class="fab fa-css3-alt fa-2x m-2"></i>
            </div>
        </div>
    </div>
</div>
