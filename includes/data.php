<?php

require_once("../lib/pdf/mpdf.php");

//check if exists image selected
if ($_FILES["foto_perfil"]["error"] > 0) {
    echo "no selected image";
} else {
    $imagename = $_FILES['foto_perfil']['name'];
    $imagePath = "img_perfil/";
    $imagetemp = $_FILES['foto_perfil']['tmp_name'];

    //check if the image tmp is uploaded
    if (is_uploaded_file($imagetemp)) {
        //check than image can move in new path in server
        if (move_uploaded_file($imagetemp, $imagePath . $imagename)) {
            $img = $imagePath . $imagename;
        } else {
            echo "Failed to move your image.";
        }
    } else {
        echo "Failed to upload your image.";
    }
}
//DATOS PERSONALES

$puesto_propuesto = $_POST["puesto_propuesto"] ? $_POST["puesto_propuesto"] : null;
$nombre = $_POST["nombre"] ? $_POST["nombre"] : null;
$apellido_paterno = $_POST["apellido_paterno"] ? $_POST["apellido_paterno"] : null;
$apellido_materno = $_POST["apellido_materno"] ? $_POST["apellido_materno"] : null;
$telefono_fijo = $_POST["telefono_fijo"] ? $_POST["telefono_fijo"] : null;
$telefono_movil = $_POST["telefono_movil"] ? $_POST["telefono_movil"] : null;
$correo = $_POST["correo"] ? $_POST["correo"] : null;
$fecha_nacimiento = $_POST["fecha_nacimiento"] ? $_POST["fecha_nacimiento"] : null;
$edad = $_POST["edad"] ? $_POST["edad"] : null;
$facebook = $_POST["facebook"] ? $_POST["facebook"] : "No disponible";
$twitter = $_POST["twitter"] ? $_POST["twitter"] : "No disponible";
$linkedin = $_POST["linkedin"] ? $_POST["linkedin"] : "No disponible";
$otra_pagina = $_POST["otra_pagina"] ? $_POST["otra_pagina"] : "No disponible";




//ESPERIENCIA
$puesto_ocupado = $_POST["puesto_ocupado"] ? $_POST["puesto_ocupado"] : null;
$nombre_empresa = $_POST["nombre_empresa"] ? $_POST["nombre_empresa"] : null;
$periodo_inicio_trabajo = $_POST["periodo_inicio_trabajo"] ? $_POST["periodo_inicio_trabajo"] : null;
$periodo_fin_trabajo = $_POST["periodo_fin_trabajo"] ? $_POST["periodo_fin_trabajo"] : null;
$actividades_realizadas = $_POST["actividades_realizadas"] ? $_POST["actividades_realizadas"] : null;


//FORMACION
$titulo_obtenido = $_POST["titulo_obtenido"] ? $_POST["titulo_obtenido"] : null;
$centro_formacion = $_POST["centro_formacion"] ? $_POST["centro_formacion"] : null;
$periodo_inicio_formacion = $_POST["periodo_inicio_formacion"] ? $_POST["periodo_inicio_formacion"] : null;
$periodo_fin_formacion = $_POST["periodo_fin_formacion"] ? $_POST["periodo_fin_formacion"] : null;


//IDIOMAS
$idioma_natal = $_POST["idioma_natal"] ? $_POST["idioma_natal"] : null;
$extranjero1 = $_POST["extranjero1"] ? $_POST["extranjero1"] : "No disponible";
$select_extranjero1 = $_POST["select_extranjero1"] ? $_POST["select_extranjero1"] : "No disponible";
$extranjero2 = $_POST["extranjero2"] ? $_POST["extranjero2"] : "No disponible";
$select_extranjero2 = $_POST["select_extranjero2"] ? $_POST["select_extranjero2"] : "No disponible";

//INFORMATICA
$nombre_app = $_POST["nombre_app"] ? $_POST["nombre_app"] : null;
$nivel_conocimiento = $_POST["nivel_conocimiento"] ? $_POST["nivel_conocimiento"] : null;
$comentarios_app = isset($_POST["comentarios_app"]) ? $_POST["comentarios_app"] : "Sin comentarios";

//OBJETIVO PERSONAL
$objetivo_personal = $_POST["objetivo_personal"] ? $_POST["objetivo_personal"] : null;

//MODELO
$modelo_seleccionado=$_POST["modelo"] ? $_POST["modelo"] : null;


//MODELO BASICO
// retorna el contenido html con los datos obtenidos del post para el apartado formacion
function formacion_basico($titulo_obtenido, $centro_formacion, $periodo_inicio_formacion, $periodo_fin_formacion) {
    $contentido_formacion = "";
    //for fomracion
    for ($i = 0; $i < count($titulo_obtenido); $i++) :

        $contentido_formacion = $contentido_formacion . 
        '<div  id = "nueva-formacion">
            <table>
                <tr>
                    <td><b>Titulo Obtenido:</b> <br>' . $titulo_obtenido[$i] . '</td>
                    <td><b>Centro formación:</b> <br>' . $centro_formacion[$i] . '</td>
                </tr>   
                <tr>
                    <td><b>Fecha Inicio:</b> <br>' . $periodo_inicio_formacion[$i] . '</td>
                    <td><b>Fecha Fin:</b><br> ' . $periodo_fin_formacion[$i] . '</td>
                </tr>
            </table>
        </div>';
    endfor;

    return $contentido_formacion;
}

function experiencia_basico($puesto_ocupado, $nombre_empresa, $periodo_inicio_trabajo, $periodo_fin_trabajo, $actividades_realizadas) {
    $contenido_experiencia = "";

    for ($i = 0; $i < count($puesto_ocupado); $i++) :
        $contenido_experiencia = $contenido_experiencia . 
        ' <div id="nueva-experiencia">
                <table>
                    <tr>
                        <td><b>Cargo: </b><br>' . $puesto_ocupado[$i] . '</td>
                        <td><b>Empresa: </b><br>' . $nombre_empresa[$i] . '</td>
                        <td><b>Fecha Inicio: </b>' . $periodo_inicio_trabajo[$i] . '</td>
                        <td><b>Fecha Fin: </b>' . $periodo_fin_trabajo[$i] . '</td>
                    </tr>
                </table>
                <p><b>Acrividades realizadas: </b>' . $actividades_realizadas[$i] . '</p>
           </div>';
    endfor;

    return $contenido_experiencia;
}

function informatica_basico($nombre_app, $nivel_conocimiento, $comentarios_app) {
    $contenido_informatica = "";

    for ($i = 0; $i < count($nombre_app); $i++) :

        $contenido_informatica = $contenido_informatica . 
        '   <tr>
                <td>' . $nombre_app[$i] . '</td>
                <td>' . $nivel_conocimiento[$i] . '</td>
                <td>' . $comentarios_app[$i] . ' </td>
            </tr>';
    endfor;

    return $contenido_informatica;
}

//MODELO AZUL

function formacion_azul($titulo_obtenido, $centro_formacion, $periodo_inicio_formacion, $periodo_fin_formacion) {
    $contentido_formacion="";

    for ($i = 0; $i < count($titulo_obtenido); $i++) :

        $contentido_formacion = $contentido_formacion .
        '<div id="nueva">
            <table id="table_s">
                <tr>
                    <td><b>Titulo o Grado maximo:</b><br>'.$titulo_obtenido[$i].'</td>
                    <td><b>Centro de formacion:</b><br>'.$centro_formacion[$i].'</td>
                    <td><b>Fecha inicio:</b><br>'.$periodo_inicio_formacion[$i].'</td>
                    <td><b>Fecha fin:</b><br>'.$periodo_fin_formacion[$i].'</td>
                </tr>
            </table>
        </div>';
    endfor;

    return $contentido_formacion;
}

function experiencia_azul($puesto_ocupado, $nombre_empresa, $periodo_inicio_trabajo, $periodo_fin_trabajo, $actividades_realizadas){
    $contentido_experiencia="";

    for ($i = 0; $i < count($puesto_ocupado); $i++) :

        $contentido_experiencia = $contentido_experiencia .
        '<div id="nueva">
            <table id="table_s">
                <tr>
                    <td><b>Cargo:</b><br>'.$puesto_ocupado[$i].'</td>
                    <td><b>Empresa:</b><br>'.$nombre_empresa[$i].'</td>
                    <td><b>Fecha inicio:</b><br>'.$periodo_inicio_trabajo[$i].'</td>
                    <td><b>Fecha fin:</b><br>'.$periodo_fin_trabajo[$i].'</td>
                </tr>
            </table>
            <p><b>Actividades realizadas:</b><br>'.$actividades_realizadas[$i].'</p>
        </div>';
    endfor;

    return $contentido_experiencia;
}

function informatica_azul($nombre_app, $nivel_conocimiento, $comentarios_app){
    $contenido_informatica = "";

    for ($i = 0; $i < count($nombre_app); $i++) :

        $contenido_informatica = $contenido_informatica . 
        '   <tr>
                <td>' . $nombre_app[$i] . '</td>
                <td>' . $nivel_conocimiento[$i] . '</td>
                <td>' . $comentarios_app[$i] . ' </td>
            </tr>';
    endfor;

    return $contenido_informatica;
}

if($modelo_seleccionado=="modelo1"){
$html = '<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>GeneraCV - Crea tu CV en linea</title>
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <link rel="stylesheet" href="../css/basico.css"/>
        </head>
        <body> 
            <!--datos personales-->
                    <div id="encabezado">
                        <div id="seccion-puesto">
                           <b> ' . $puesto_propuesto . '</b>
                        </div>
                        <div id="imagen_perfil_div" align="center">
                        <img src="' . $img . '" id="imagen_perfil">
                        </div>
                    </div>
                    <div id="seccion-personales">
                    <table> 
                            <tr>
                                <td><b>Nombre: </b> ' . $nombre .'</td>
                                <td>'. $apellido_paterno .'</td>
                                <td>'. $apellido_materno .'</td>
                            </tr>
                            <tr>
                                <td><b>Fecha de nac.: </b> ' . $fecha_nacimiento . '</td>
                                <td><b>Edad: </b> ' . $edad . '</td>
                                <td><b>Tel. fijo: </b> ' . $telefono_fijo . '</td>
                            </tr>
                            <tr>
                                <td><b>Tel. movíl: </b> ' . $telefono_movil . '</td>
                                <td><b>Correo: </b> ' . $correo . '</td>
                            </tr>
                            <tr>
                                <td><b>Facebook: </b> <a href="">' . $facebook . '</a></td>
                                <td><b>Twitter: </b> <a href="">' . $twitter . '</a></td>
                                <td><b>Otros enlaces: </b><a href="">' . $otra_pagina . '</a></td>
                            </tr>
                    </table>
                    <b>Linkedin: </b><a href="">' . $linkedin . '</a>
                    </div>
                <!--formacion-->
                <div>
                    <div class="nombre-seccion">Formación</div>
                    <div class="seccion-formacion">' .
        formacion_basico($titulo_obtenido, $centro_formacion, $periodo_inicio_formacion, $periodo_fin_formacion)
        . '</div>
                </div>
                <!--experiencia-->
                <div>
                    <div class="nombre-seccion">Experiencia</div>
                    <div class="seccion-experiencia">
                        ' . experiencia_basico($puesto_ocupado, $nombre_empresa, $periodo_inicio_trabajo, $periodo_fin_trabajo, $actividades_realizadas) . '
                    </div>
                </div>
                <!--informatica-->
                <div class="col-md-12">
                    <div class="nombre-seccion">Informatica</div>
                    <div class="seccion-informatica">
                        <table>
                            <tr>
                                <td><b>Aplicación/Herramienta:</b></td>
                                <td><b>Nivel:</b></td>
                                <td><b>Comentarios:</b></td>
                            </tr>
                        ' . informatica_basico($nombre_app, $nivel_conocimiento, $comentarios_app) . '
                        </table>
                    </div>
                </div>
                <!--lenguajes-->
                <div class="col-md-12">
                    <div class="nombre-seccion">Idiomas</div>
                    <div id="idiomas">
                        <table>
                            <tr>
                                <td><b>Idioma natal:</b></td>
                                <td><b>Idioma extranjero 1:</b></td>
                                <td><b>Idioma extranjero 2:</b></td>
                            </tr>
                            <tr>
                                <td>' . $idioma_natal . '</td>
                                <td>' . $extranjero1 . '</td>
                                <td>' . $extranjero2 . '</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>Nivel:</b></td>
                                <td><b>Nivel:</b></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>' . $select_extranjero1 . '</td>
                                <td>' . $select_extranjero2 . '</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--objetivo personal-->
                <div class="col-md-12">
                    <div class="nombre-seccion">
                        Objetivo Personal
                    </div>
                    <div class="col-md-12" id="objetivo-personal">
                        ' . $objetivo_personal . '
                </div>
            </div>

        <script src="../js/jquery.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>';
}else{
    $html='<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>GeneraCV - Crea tu CV en linea</title>
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <link rel="stylesheet" href="../css/azul.css"/>
        </head>
        <body> 
            <div id="modelo_azul">
                <div id="datos-personales">
                    <div id="puesto-propuesto">
                        '.$puesto_propuesto.'
                    </div>
                    <table>
                        <tr>
                            <td rowspan="4">
                                <span id="img-content">
                                    <img src="'.$img.'" id="img-azul">
                                </span>
                            </td>
                            <td><b>Nombre:</b><br>'.$nombre.'</td>
                            <td><b>Apellido paterno:</b><br>'.$apellido_paterno. '</td>
                            <td><b>Apellido materno:</b><br>'.$apellido_materno.'</td>
                        </tr>
                        <tr>
                            <td><b>Teléfono publico:</b><br>'.$telefono_fijo.'</td>
                            <td><b>Télefono movil:</b><br>'.$telefono_movil.'</td>
                            <td><b>Correo:</b><br>'.$correo.'</td>
                        </tr>
                        <tr>
                            <td><b>Fecha de nacimiento:</b><br>'.$fecha_nacimiento.'</td>
                            <td><b>Edad:</b><br>'.$edad.'</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Twitter:</b><br>'.$twitter.'</td>
                            <td><b>Facebook:</b><br>'.$facebook.'</td>
                            <td><b>Otro:</b><br>'.$otra_pagina.'</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">
                                <b>Linkedin:</b><br>'.$linkedin.'
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="nombre-seccion">
                     Formación
                </div>
            '.formacion_azul($titulo_obtenido, $centro_formacion, $periodo_inicio_formacion, $periodo_fin_formacion).'
                <div id="nombre-seccion">
                     Experiencia
                </div>
                '.experiencia_azul($puesto_ocupado, $nombre_empresa, $periodo_inicio_trabajo, $periodo_fin_trabajo, $actividades_realizadas).'
                <div id="nombre-seccion">
                     Informatica
                </div>
                <div id="nueva">
                    <table id="table_s">
                    <tr>
                       <td><b>Aplicación/Herramienta:</b></td>
                       <td><b>Nivel:</b></td>
                       <td><b>Comentarios:</b></td>
                   </tr>
                    '.informatica_azul($nombre_app, $nivel_conocimiento, $comentarios_app).'
                    </table>
                <div id="nombre-seccion">
                     Idiomas
                </div>
                    <table style="color:black;">
                        <tr>
                            <td><b>Idioma natal:</b><br>'.$idioma_natal.'</td>
                            <td><b>Idioma extranjero 1:</b><br>
                            '.$extranjero1.'<br>
                            <b>Nivel</b><br>
                            '.$select_extranjero1.'
                            </td>
                            <td><b>Idioma extranjero 2:</b><br>
                            '.$extranjero2.'<br>
                            <b>Nivel</b><br>
                            '.$select_extranjero2.'
                            </td>
                        </tr>
                    </table>
                    <div id="nombre-seccion">
                        Objetivo profesional
                    </div>
                    <p>'.$objetivo_personal.'</p>
                </div>  
            </div>
        </body>
    </html>';
}

$mpdf = new mPDF('', 'A4');
$mpdf->SetFooter("GeneraCV");
$mpdf->WriteHTML($html);
$mpdf->Output("cv_".$nombre.".pdf", "I");
?>
