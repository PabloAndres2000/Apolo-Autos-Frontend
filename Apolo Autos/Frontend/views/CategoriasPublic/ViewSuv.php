<?php
require_once("./model/Config.php");
$db = new Config;
require_once("./model/MarcasModel.php");
require_once("./model/CategoriasModel.php");
require_once("./model/TransmisionModel.php");
require_once("./model/RegionModel.php");
require_once("./model/TipoVentaModel.php");
require_once("./model/EstadoAutoModel.php");
require_once("./model/CombustibleModel.php");
require_once("./model/CombustibleModel.php");
require_once("./model/ModeloModel.php");
require_once("./model/UsuariosModel.php");
$dataMarcas = Marcas::listar();
$dataCategorias = Categorias::listar();
$dataTransmision = Transmision::listar();
$dataRegion = Region::listar();
$dataTipoVenta = TipoVenta::listar();
$dataEstadoAuto = EstadoAuto::listar();
$dataCombustible = Combustible::listar();
$dataModelo = Modelo::listar();
$usuarios = $db->Con->query("SELECT * FROM usuarios WHERE idusuario =$_SESSION[IDUSUARIO]");
$dataUsuario = $usuarios->fetch_assoc();
?>
<style>
    body {
        background: url(./assets/image/peugeotCard.jpg);
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;

    }


    .fileinput-remove,
    .fileinput-upload {
        display: none;
    }
</style>


<div class="container-fluid">
    <form enctype="multipart/form-data" action="../controllers/AnuncioController.php" method="POST">
        <div class="row ">

            <div class="col col-12 col-md-8 ">




                <div style="background:rgba(0,0,0,0.6); color:#fff; margin-top:500px" class="card">
                    <div class="card-body main-section">
                        <h1 class="text-center ">Sube Las Imagenes De Tu Vehiculo</h1><br>

                        <div class="form-group">
                            <div class="file-loading">
                                <input id="file-1" type="file" multiple class="file" name="imagenes[]">
                            </div>
                        </div>


                    </div>
                </div>




                <script src="./assets/js/dropzoneImage.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
                <script>
                    $("#file-1").fileinput({
                        theme: 'fa',
                        uploadUrl: '#',
                        allowedFileExtensions: ['jpg', 'png', 'gif'],
                        overwriteInitial: false,
                        maxFileSize: 10000,
                        maxFilesNum: 10,
                        slugCallback: function(filename) {
                            return filename.replace('(', '_').replace(']', '_');
                        }
                    });
                </script>

            </div>

            <div class="col col-12 col-md-4 ">


                <div style="background:rgba(0,0,0,0.6); color:#fff; margin-top:500px" class="card">
                    <div class="card-body">
                        <h2 style="text-align: center;">Tu Informacion</h2>
                        <div class="col col-12 col-md-12">
                            <input style="margin-bottom:2px;" class="form-control" type="text" id="nombre" name="nombre" readonly value="<?php echo $dataUsuario["nombre"];  ?>">
                        </div>
                        <div class="col col-12 col-md-12">

                            <input style="margin-bottom:2px;" class="form-control" type="Email" id="correo" name="correo" readonly value="<?php echo $dataUsuario["correo"];  ?>">
                        </div>
                        <div class="col col-12 col-md-12">
                            <input style="margin-bottom:2px;" class="form-control" type="number" id="telefono" name="telefono" placeholder="Telefono">
                        </div>

                        <h2 style="text-align: center;">!Selecciona Tu Vehiculo!</h2>
                        <div class="row">

                            <div class="col col-12 col-md-12">
                                <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Titulo">
                            </div>
                            <div class="col col-12 col-md-12">

                                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion De Tu Vehiculo"></textarea>
                            </div>
                            <div class="col col-12 col-md-12">
                                <input class="form-control" type="number" id="año" name="año" placeholder="Año">
                            </div>
                            <div class="col col-12 col-md-12">
                                <input class="form-control" type="number" id="precio" name="precio" placeholder="Precio">
                            </div>
                            <div class="col col-12 col-md-12">
                                <input class="form-control" type="number" id="cilindro" name="cilindro" placeholder="Cilindrada">
                            </div>
                            <div class="col col-12 col-md-12">
                                <input class="form-control" type="number" id="kilometraje" name="kilometraje" placeholder="Kilometraje">
                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="marca">

                                    <option value="" disabled selected>Marca</option>
                                    <?php foreach ($dataMarcas as $m) { ?>
                                        <option value="<?php echo $m['idmarca']; ?>"><?php echo $m['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="categoria">

                                    <option value="" disabled selected>Categoria</option>
                                    <?php foreach ($dataCategorias as $c) { ?>
                                        <option value="<?php echo $c['idcategoria']; ?>"><?php echo $c['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="modelo">

                                    <option value="" disabled selected>Modelo</option>
                                    <?php foreach ($dataModelo as $x) { ?>
                                        <option value="<?php echo $x['idmodelo']; ?>"><?php echo $x['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6">

                                <select class="form-control" id="country" name="tipoventa">

                                    <option value="" disabled selected>TipoVenta</option>
                                    <?php foreach ($dataTipoVenta as $v) { ?>
                                        <option value="<?php echo $v['idtipo_vendedor']; ?>"><?php echo $v['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="combustible">

                                    <option value="" disabled selected>Combustible</option>
                                    <?php foreach ($dataCombustible as $e) { ?>
                                        <option value="<?php echo $e['idcombustible']; ?>"><?php echo $e['nombre']; ?></option>


                                    <?php } ?>

                                </select>

                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="estadodelauto">

                                    <option value="" disabled selected>Estado Del Auto</option>
                                    <?php foreach ($dataEstadoAuto as $a) { ?>
                                        <option value="<?php echo $a['idestado_auto']; ?>"><?php echo $a['nombre']; ?></option>


                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col col-12 col-md-6">

                                <select class="form-control" id="country" name="transmision">

                                    <option value="" disabled selected>Transmision</option>
                                    <?php foreach ($dataTransmision as $t) { ?>
                                        <option value="<?php echo $t['idtransmision']; ?>"><?php echo $t['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col col-12 col-md-6">
                                <select class="form-control" id="country" name="region">

                                    <option value="" disabled selected>Region</option>
                                    <?php foreach ($dataRegion as $r) { ?>
                                        <option value="<?php echo $r['idregion']; ?>"><?php echo $r['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col col-12 col-md-12">
                                <button class="btn btn-danger" type="submit" value="publicar" name="opcion">Publicar Mi Vehiculo</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </form>
</div>