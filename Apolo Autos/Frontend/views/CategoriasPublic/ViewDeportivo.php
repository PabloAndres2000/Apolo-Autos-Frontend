<?php
require_once("./model/MarcasModel.php");
require_once("./model/CategoriasModel.php");
require_once("./model/TransmisionModel.php");
require_once("./model/RegionModel.php");
require_once("./model/TipoVentaModel.php");
require_once("./model/EstadoAutoModel.php");
require_once("./model/CombustibleModel.php");
$dataMarcas = Marcas::listar();
$dataCategorias = Categorias::listar();
$dataTransmision = Transmision::listar();
$dataRegion = Region::listar();
$dataTipoVenta = TipoVenta::listar();
$dataEstadoAuto = EstadoAuto::listar();
$dataCombustible = Combustible::listar();
?>
<style>
    body {
        background: url(./assets/image/Deportivocard2.jpg);

        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;

    }
</style>
<div class="container-fluid">
    <div class="row ">

        <div class="col col-12 col-md-4 offset-md-8">
            <div style="background:rgba(0,0,0,0.5); color:#fff; margin-top:500px" class="card">
                <div class="card-body">
                    <form action="/action_page.php">
                        <h2 style="text-align: center;">!Selecciona Tu Vehiculo!</h2>
                        <div class="row">
                            <div class="col col-12 col-md-12">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre Completo">

                            </div>
                            <div class="col col-12 col-md-12">
                                <input class="form-control" type="text" id="correo" name="correo" placeholder="Correo">
                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="country">

                                    <option value="" disabled selected>Marca</option>
                                    <?php foreach ($dataMarcas as $m) { ?>
                                        <option value="<?php echo $m['idmarca']; ?>"><?php echo $m['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="country">

                                    <option value="" disabled selected>Categoria</option>
                                    <?php foreach ($dataCategorias as $c) { ?>
                                        <option value="<?php echo $c['idcategoria']; ?>"><?php echo $c['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6">

                                <select class="form-control" id="country" name="country">

                                    <option value="" disabled selected>TipoVenta</option>
                                    <?php foreach ($dataTipoVenta as $v) { ?>
                                        <option value="<?php echo $v['idtipo_vendedor']; ?>"><?php echo $v['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="country">

                                    <option value="" disabled selected>Combustible</option>
                                    <?php foreach ($dataCombustible as $e) { ?>
                                        <option value="<?php echo $e['idcombustible']; ?>"><?php echo $e['nombre']; ?></option>


                                    <?php } ?>

                                </select>

                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="country">

                                    <option value="" disabled selected>Estado Del Auto</option>
                                    <?php foreach ($dataEstadoAuto as $a) { ?>
                                        <option value="<?php echo $a['idestado_auto']; ?>"><?php echo $a['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6">

                                <select class="form-control" id="country" name="country">

                                    <option value="" disabled selected>Transmision</option>
                                    <?php foreach ($dataTransmision as $t) { ?>
                                        <option value="<?php echo $t['idtransmision']; ?>"><?php echo $t['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="country">

                                    <option value="" disabled selected>Region</option>
                                    <?php foreach ($dataRegion as $r) { ?>
                                        <option value="<?php echo $r['idregion']; ?>"><?php echo $r['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col col-12 col-md-12">
                                <input class="btn btn-danger" type="submit" value="Publicar">
                            </div>
                        </div>


                    </form>

                </div>

            </div>


        </div>

    </div>
</div>