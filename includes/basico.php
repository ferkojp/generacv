<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>GeneraCV - Crea tu CV en linea</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/basico.css"/>
    </head>
    <body> 
        <div class="container">
            <!--datos personales-->
            <div class="col-md-12" style="padding-top: 20px;">
                <div class="col-md-2">
                    <img src="<?php echo $img; ?>" >
                </div>
                <div class="col-md-10">
                    <div class="seccion-puesto">
                        <?php echo $puesto_propuesto; ?>
                    </div>
                    <div class="seccion-personales">
                        <span class="col-md-4">
                            <label>Nombre: </label> <?php echo $nombre; ?>
                        </span>
                        <span class="col-md-4">
                            <label>Apellido Paterno: </label> <?php echo $apellido_paterno; ?>
                        </span>
                        <span class="col-md-4">
                            <label>Apellido Materno: </label> <?php echo $apellido_materno; ?>
                        </span>
                        <span class="col-md-4">
                            <label>Fecha de nac.: </label> <?php echo $fecha_nacimiento; ?>
                        </span>
                        <span class="col-md-2">
                            <label>Edad: </label> <?php echo $edad; ?>
                        </span>    
                        <span class="col-md-3">
                            <label>Tel. fijo: </label> <?php echo $telefono_fijo; ?>
                        </span>  
                        <span class="col-md-3">
                            <label>Tel. movíl: </label> <?php echo $telefono_movil; ?>
                        </span>  
                        <span class="col-md-6">
                            <label>Correo: </label> <?php echo $correo; ?>
                        </span>  
                        <span class="col-md-6">
                            <label>Linkedin: </label><a href=""><?php echo $linkedin; ?></a>
                        </span>  
                        <span class="col-md-6">
                            <label>Facebook: </label> <a href=""><?php echo $facebook; ?></a>
                        </span>  
                        <span class="col-md-6">
                            <label>Twitter: </label> <a href=""><?php echo $twitter; ?></a>
                        </span> 
                        <span class="col-md-12">
                            <label>Otros enlaces: </label><a href=""><?php echo $otra_pagina; ?></a>
                        </span>
                    </div>
                </div>
            </div>
            <!--formacion-->
            <div class="col-md-12">
                <div class="nombre-seccion">Formación</div>
                <div class="seccion-formacion">
                    <?php
                    //for fomracion
                    for ($i = 0; $i < count($titulo_obtenido); $i++) {
                        ?>
                        <div class="col-md-12" id="nueva-formacion">
                            <span class="col-md-3">
                                <label>Titulo Obtenido:</label> <?php echo $titulo_obtenido[$i]; ?> 
                            </span>
                            <span class="col-md-3">
                                <label>Centro formación:</label> <?php echo $centro_formacion[$i]; ?> 
                            </span>
                            <span class="col-md-3">
                                <label>Fecha Inicio:</label> <?php echo $periodo_inicio_formacion [$i]; ?> 
                            </span>
                            <span class="col-md-3">
                                <label>Fecha Fin:</label> <?php echo $periodo_fin_formacion[$i]; ?> 
                            </span>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!--experiencia-->
            <div class="col-md-12">
                <div class="nombre-seccion">Experiencia</div>
                <div class="seccion-experiencia">
                    <?php
                    //for experience
                    for ($i = 0; $i < count($puesto_ocupado); $i++) {
                        ?>
                        <div class="col-md-12" id="nueva-experiencia">
                            <span class="col-md-3">
                                <label>Cargo: </label><?php echo $puesto_ocupado[$i]; ?>
                            </span>
                            <span class="col-md-3">
                                <label>Empresa: </label><?php echo $nombre_empresa[$i]; ?>
                            </span>
                            <span class="col-md-3">
                                <label>Fecha Inicio: </label><?php echo $periodo_inicio_trabajo[$i]; ?>
                            </span>
                            <span class="col-md-3">
                                <label>Fecha Fin: </label><?php echo $periodo_fin_trabajo[$i]; ?>
                            </span>
                            <span class="col-md-12">
                                <label>Acrividades realizadas: </label>
                                <?php echo $actividades_realizadas[$i]; ?>
                            </span>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!--informatica-->
            <div class="col-md-12">
                <div class="nombre-seccion">Informatica</div>
                <div class="seccion-informatica">
                    <span class="col-md-4">
                        <label>Aplicación/Herramienta:</label>
                    </span>
                    <span class="col-md-4">
                        <label>Nivel:</label>
                    </span>
                    <span class="col-md-4">
                        <label>Comentarios:</label> 
                    </span>
                    <?php
                    //for informatica
                    for ($i = 0; $i < count($nombre_app); $i++) {
                        ?>
                        <div class="col-md-12" id="nueva-informatica">
                            <span class="col-md-4">
                                <?php echo $nombre_app[$i]; ?> 
                            </span>
                            <span class="col-md-4">
                                <?php echo $nivel_conocimiento[$i]; ?> 
                            </span>
                            <span class="col-md-4">
                                <?php echo $comentarios_app[$i]; ?> 
                            </span>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!--lenguajes-->
            <div class="col-md-12">
                <div class="nombre-seccion">Idiomas</div>
                <div class="col-md-12" id="idiomas">
                    <span class="col-md-4">
                        <label>Idioma natal:</label>
                        <?php echo $idioma_natal; ?>
                    </span>
                    <span class="col-md-4">
                        <?php if (isset($extranjero1)) { ?>
                            <label>Idioma extrangero 1:</label>
                            <?php echo $extranjero1; ?>
                            <br>
                            <label>Nivel:</label>
                            <?php
                            echo $select_extranjero1;
                        }
                        ?>
                    </span>
                    <span class="col-md-4">
                        <?php if (isset($extranjero2)) { ?>
                            <label>Idioma extrangero 2:</label>
    <?php echo $extranjero2; ?>
                            <br>
                            <label>Nivel:</label>
                            <?php
                            echo $select_extranjero2;
                        }
                        ?>
                    </span>
                </div>
            </div>
            <!--objetivo personal-->
            <div class="col-md-12">
                <div class="nombre-seccion">
                    Objetivo Personal
                </div>
                <div class="col-md-12" id="objetivo-personal">
                    <?php echo $objetivo_personal; ?>
                </div>
            </div>
        </div>

        <script src="../js/jquery.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
