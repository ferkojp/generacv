<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>GeneraCV - Crea tu CV en linea</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--Window type modal backroun black with opacity-->
        <div class="modal" hidden>
            <span class="close-modal">
                &times
            </span>
        </div>
        <!--Header-->
        <header class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/logo.png" alt="logo_generaCV" class="img-responsive" width="200px">
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <ul class="menu-1">
                        <li class="item-active">Nuevo</li>
                        <li class="item">Diseños</li>
                        <li class="item">Ayuda</li>
                        <li class="item">Contacto</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="icon-user">
                        <span class="glyphicon glyphicon-user"></span>
                        Iniciar sesión 
                    </div>
                </div>
            </div>
        </header>
        <!--Div with sesion form-->
        <div class="container" id="sesion-form" hidden>
            <form action="#" class="form-inline">
                <div class="form-group">
                    <span class="input-group">
                        <span class="input-group-addon">Usuario</span>
                        <input type="text" class="form-control" required>
                    </span>
                </div>
                <div class="form-group">
                    <span class="input-group">
                        <span class="input-group-addon">Password</span>
                        <input type="text" class="form-control" required>
                    </span>
                </div>
                <button type="submit" class="btn btn-success">Ingresar</button>
                <span class="hide-sesion">
                    <img src="img/icons/up-hidden.png" alt="">
                </span>
            </form>
        </div>
        <!--Section of main content-->
        <div class="container">
            <div class="row"> 
                <section class="col-md-12 section-1" align="center">

                    <h2>Crea tu CV con ayuda de generaCV</h2>

                    <p>* Sugerencias para un CV completo</p>
                    <p>* Diseños Profesionales</p>
                    <p>* Facilidad de redacción</p>
                    <button type="button" class="button-start">Comenzar</button>
                </section>
            </div>
        </div>

        <!--CV form-->
        <div class="container cv-form" hidden>
            <div class="row">
                <div class="col-md-3">
                    <div class="ayuda">
                        <span class="contenido_ayuda_datos">
                            <h4 align="center"><b>Datos Personales</b></h4>
                            <hr>
                            En este apartado del CV se deben incluir los siguientes datos:
                            <ul>
                                <li><b>Nombre y Apellidos</b></li>
                                <li><b>E-mail</b></li>
                                <li><b>Teléfonos de contacto (fijos y móviles)</b></li>
                                <li><b>Foto</b></li>
                                <li><b>Profesión / puesto de trabajo que te define profesionalmente></b></li>
                                <li><b>Fecha de nacimiento / Edad</b></li>
                                <li><b>Enlaces directos :</b> Página personal, blog, portfolio, redes sociales (LinkedIn, Twitter, Facebook, etc.).</li>
                            </ul>
                            <hr>
                        </span>
                        <span class="contenido_ayuda_experiencia">
                            <h4 align="center"><b>Experiencia</b></h4>
                            <hr>
                            <p>Contar con experiencia profesional es fundamental a la hora de encontrar empleo. La elaboración de este apartado y el modelo a elegir varían según la trayectoria de cada candidato, pero sea cual sea el modelo elegido, es indispensable incluir la siguiente información:</p>
                            <ul>
                                <li><b>Nombre del puesto</b></li>
                                <li><b>Nombre de la empresa</b></li>
                                <li><b>Breve descripción de las funciones más relevantes.</b></li>
                                <li><b>Duración en el puesto</b>(fechas de inicio y fin)</li>

                            </ul>
                            <hr>
                        </span>
                        <span class="contenido_ayuda_formacion">
                            <h4 align="center"><b>Formación</b></h4>
                            <hr>
                            <p>
                                Es recomendable comenzar por el nivel máximo de formación alcanzado, tales como carrera universitaria, máster, postgrado o similares, que son los estudios que normalmente dan acceso al objetivo profesional. Tambien debemos incluir solo aquellos cursos que se adecuen al puesto ofertado o que sean de interés para la empresa, llenando la siguiente información:
                            </p>
                            <ul>
                                <li><b>Grado o titulo obtenido</b></li>
                                <li><b>Centro académico o institución</b></li>
                                <li><b>Periodo</b> (inicio y fin)</li>
                            </ul>
                            <hr>
                        </span>
                        <span class="contenido_ayuda_idiomas">
                            <h4 align="center"><b>Idiomas</b></h4>
                            <p>En el apartado de idiomas deben incluirse los siguientes datos:</p>
                            <ul>
                                <li><b>Idioma natal</b></li>
                                <li><b>Idioma extrangero</b></li>
                                <li><b>Nivel de conocimiento del lenguaje</b></li>
                            </ul>
                            <hr>
                        </span>
                        <span class="contenido_ayuda_informatica">
                            <h4 align="center"><b>Computación/Informatica</b></h4>
                            <p>En el apartado correspondiente a las habilidades y aptitudes informáticas y/o tecnológicas es conveniente especificar:
                            </p>
                            <ul>
                                <li><b>Aplicación</b></li>
                                <li><b>Nivel de conocimiento</b></li>
                                <li><b>Comentario sobre la aplicación</b></li>
                            </ul>
                            <hr>
                        </span>
                        <span class="contenido_ayuda_objetivo">
                            <h4 align="center"><b>Objetivo Profesional</b></h4>
                            <hr>
                            <p>El objetivo profesional solo es aconsejable en el caso de que se tenga muy claro y se pueda avalar con la formación aca
                                démica o la experiencia profesional que se posea hasta la fecha. Hay que tener en cuenta que el objetivo profesional tiene que estar en consonancia con la empresa a la que nos dirigimos y con las funciones propias del puesto ofertado.</p>
                        </span>
                        <hr>
                    </div>
                </div>
                <div class="col-md-8 cv-content-form">
                    <div class="col-md-12">
                        <!--Datos personales-->
                        <h1 id="datos_personales">Datos Personales</h1>
                    </div>
                    <form action="includes/data.php" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12" align="center">
                            <label for="file-input">
                                <img src="img/icons/agregar_foto.png" alt="agregar" class="thumbnail add-photo" width="100" height="130"> 
                            </label>
                            <input type="file" id="file-input" style="display: none;" name="foto_perfil" required>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" id="puesto" class="form-control" placeholder="Puesto/Ocupación" name="puesto_propuesto" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text"  id="nombre" class="form-control" placeholder="Nombre" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" id="apellido_p" class="form-control" placeholder="Apellido Paterno" name="apellido_paterno" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" id="apellido_m" class="form-control" placeholder="Apellido Materno" name="apellido_materno" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Tel. Fijo" id="tel_fijo" name="telefono_fijo">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Tel. Movil" id="tel_movil" name="telefono_movil">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="mail" class="form-control" placeholder="Correo electrónico" id="mail" name="correo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Fecha de nacimiento" id="fecha" name="fecha_nacimiento" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Edad" id="edad" name="edad"required>
                            </div>
                        </div>
                        <h4>Enlaces directos</h4>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Facebook" id="facebook" name="facebook">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Twitter" id="twitter" name="twitter">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="LinkedIn" id="linkedin" name="linkedin">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Otros" id="otros" name="otra_pagina">
                            </div>
                        </div>
                        <div class="col-md-12" align="right">
                            <a href="#experiencia" class="btn btn-primary">Siguiente</a>
                        </div>
                        <!--Experience-->
                        <div class="col-md-12">
                            <h1 id="experiencia">Experiencia</h1>
                            <div class="acordeon-items">
                                <div class="sub-acordeon-1">
                                    <div class="col-md-12 acordeon-1" align="left" id="tab_acordeon">
                                        <span class="col-md-3"><label ># 1</label></span>
                                        <span class="col-md-9" align="right">
                                            <span class="minimize-item-1">
                                                <a href="#experiencia"><img src="img/icons/minimize_experience.png" alt="minimiza"></a>
                                            </span>
                                            <span class="close-item-1">
                                                <a href="#experiencia"><img src="img/icons/close_experience.png" alt="cerrar"></a>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="acordeon-item-1">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nombre del puesto" id="puesto_ocupado" name="puesto_ocupado[]">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nombre de la empresa" id="empresa_antigua" name="nombre_empresa[]">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <b>Periodo</b>
                                                <input type="date" class="form-control" id="fecha" name="periodo_inicio_trabajo[]"> <b>al</b> 
                                                <input type="date" class="form-control" id="fecha" name="periodo_fin_trabajo[]">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <textarea name="actividades_realizadas[]" id="" cols="30" rows="10" placeholder="Describe las actividades realizadas..." class="form-control" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 add-new-content" align="right">
                                <span class="add-new"><img src="img/icons/add_experience.png" alt="nueva experiencia"> 
                                    Agregar nuevo
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12" align="right">
                            <a href="#datos_personales" class="btn btn-default">Anterior</a>
                            <a href="#formacion" class="btn btn-primary">Siguiente</a>
                        </div>
                        <!--Formación -->
                        <div class="col-md-12">
                            <h1 id="formacion">Formación</h1>
                            <div class="formacion">
                                <div class="formacion-subtitle">Formación academica / cursos o certificaciones</div>
                                <b># 1</b>
                                <div class="formacion-1" align="left" id="formacion-general">
                                    <span class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Grado/Título obtenido" id="titulo_obtenido" name="titulo_obtenido[]">
                                    </span>
                                    <span class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Centro académico o institución" id="centro_formacion" name="centro_formacion[]">
                                    </span>
                                    Periodo (inicio - fin)
                                    <span class="col-md-12 form-group">	
                                        <span class="col-md-6">
                                            <input type="date" class="form-control" id="fecha" name="periodo_inicio_formacion[]">
                                        </span>
                                        <span class="col-md-6">
                                            <input type="date" class="form-control" id="fecha" name="periodo_fin_formacion[]">
                                        </span>
                                    </span>
                                </div>	
                                <hr>
                            </div>
                            <div class="col-md-12 add-new-content" align="right">
                                <span class="add-new-form"><img src="img/icons/add_experience.png" alt="nueva experiencia"> 
                                    Agregar nuevo
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12" align="right">
                            <a href="#experiencia" class="btn btn-default">Anterior</a>
                            <a href="#idiomas" class="btn btn-primary">Siguiente</a>
                        </div>
                        <!--Idiomas-->
                        <div class="col-md-12">
                            <div class="idiomas">
                                <h1 id="idiomas">Idiomas</h1>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Idioma natal" id="natal" name="idioma_natal" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Idioma extrangero 1" id="extranjero" name="extranjero1">
                                    <br>
                                    <label for="">Nivel</label>
                                    <select class="form-control" name="select_extranjero1">
                                        <option value="">Selecciona</option>
                                        <option value="Básico">Básico</option>
                                        <option value="Intermedio">Intermedio</option>|
                                        <option value="Avanzado">Avanzado</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Idioma extrangero 2" id="extranjero" name="extranjero2">
                                    <br>
                                    <label for="">Nivel</label>
                                    <select class="form-control" name="select_extranjero2">
                                        <option value="">Selecciona</option>
                                        <option value="Básico">Básico</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Avanzado">Avanzado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" align="right" style="margin: 20px 0px;">
                            <a href="#formacion" class="btn btn-default">Anterior</a>
                            <a href="#informatica" class="btn btn-primary">Siguiente</a>
                        </div>
                        <!--Informatica-->
                        <div class="col-md-12 aplicaciones">
                            <h1 id="informatica">Informatica</h1>
                            <div class="new_row">
                                <div class="col-md-4 aplicacion">
                                    <div class="form-group">
                                        <input type="text" placeholder="Aplicación" class="form-control" id="in_aplicacion" name="nombre_app[]">
                                    </div>
                                </div>
                                <div class="col-md-4 nivel_con">
                                    <div class="form-group">
                                        <select name="nivel_conocimiento[]" id="" class="form-control">
                                            <option value="">Elige nivel</option>
                                            <option value="Usuario">Usuario</option>
                                            <option value="Profesional">Profesional</option>
                                            <option value="Experto">Experto</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 comentarios">
                                    <div class="form-group">
                                        <input type="text" placeholder="Comentario" class="form-control" id="in_comentarios" name="comentarios_app[]">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 add-new-content" align="right">
                                <span class="add-new-app"><img src="img/icons/add_experience.png" alt="nueva experiencia"> 
                                    Agregar nuevo
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12" align="right" style="margin: 20px 0px;">
                            <a href="#idiomas" class="btn btn-default">Anterior</a>
                            <a href="#objetivo" class="btn btn-primary">Siguiente</a>
                        </div>
                        <!--Objetivo personal-->
                        <div class="col-md-12">
                            <h1 id="objetivo">Objetivo Personal</h1>
                            <textarea name="objetivo_personal" id="" cols="30" rows="10" class="form-control" placeholder="Escribe tu objetivo Profesional"></textarea>
                            <div class="col-md-12" align="right" style="margin: 20px 0px;">
                                <a href="#informatica" class="btn btn-default">Anterior</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3>Selecciona un modelo</h3>
                            <div class="form-group">
                                <label for="modelo1">Modelo 1</label>
                                <input type="radio" name="modelo" value="modelo1" id="modelo1" checked>
                                <label for="modelo2">Modelo 2</label>
                                <input type="radio" name="modelo" value="modelo2" id="modelo2">
                            </div>
                        </div>
                        <div class="col-md-12" style="margin: 20px 0px;">
                            <input type="submit" class="btn btn-primary" value="Guardar">
                            <input type="reset" class="btn btn-default" value="borrar todo">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Footer-->
        <footer class="container">
            <div class="row footer" align="center">
                <span>
                    <img src="img/icons/creation.png" alt="" style="padding: 15px 10px;">
                </span>
                <p style="color: white; font-size: 10px; margin-top: -8px;">
                    GeneraCV es un producto desarrollado y en <br>
                    constante mantenimiento por sus creadores. <br>
                    Todos los derechos reservados, <br>
                    Zacatecas 2016, FkoSystems.
                </p>
            </div>
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>