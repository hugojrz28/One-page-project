<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=base_url('css/leStyle.css')?>">
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="<?=base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>

</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <header id="header-wrapper">
        <nav id="menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#nosotros">nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header><!-- End #header -->
    <div id="content-wrapper">

        <section id="home">
            <div id="slider">
                <div id="logo"><img src="<?=base_url('img/logo.png')?>" alt="Saind"/></div>
                <div id="container-slider">
                    <img src="<?=base_url('img/01.jpg')?>" alt="">
                    <img src="<?=base_url('img/02.jpg')?>" alt="">
                    <img src="<?=base_url('img/03.jpg')?>" alt="">
                </div>
            </div>
        </section>

        <section id="nosotros">
            <h2>Nosotros</h2>
            <article class="container">
                <div id="span2">
                    <h3>acerca de nosotros</h3>
                    <img src="<?=base_url('img/img1.jpg')?>" alt="">
                    <img src="<?=base_url('img/img2.jpg')?>" alt="">
                    <p>Una empresa que busca la excelencia en el diseño e implementación de sistemas de automatización industrial buscando siempre aplicar la tecnología de punta y experiencia de nuestros ingenieros para satisfacer las necesidades de nuestros clientes para mejorar la capacidad de sus procesos de producción. </p>
                    <p>Desarrollar, diseñar e implementar sistemas automatizados para la industria electrónica, automotriz, textil así como la micro industria y pequeños negocios, contribuyendo con nuestros clientes a la fabricación de sus productos haciéndolos más competitivos y sus negocios más rentables. </p>
                    <p>Ser una de las mejores empresas en soluciones de automatización industrial, basado en nuestro prestigio y la constante innovación orientados en la excelencia y confiabilidad de nuestros servicios hacia nuestros clientes.</p>
                </div>
                <div id="span1">
                    <h3>proyectos</h3>
                    <ul>
                        <li>
                            <img src="<?=base_url('img/mini1.jpg')?>" alt="">
                            <span>12/03/2012</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </li>
                        <li>
                            <img src="<?=base_url('img/mini1.jpg')?>" alt="">
                            <span>12/03/2012</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </li>
                        <li>
                            <img src="<?=base_url('img/mini1.jpg')?>" alt="">
                            <span>12/03/2012</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </li>
                        <li>
                            <img src="<?=base_url('img/mini1.jpg')?>" alt="">
                            <span>12/03/2012</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </li>
                    </ul>
                </div>
            </article>
        </section>
        <div style=" clear: both;" ></div>
        <section id="servicios">

            <h2>Servicios</h2>
            <article class="container" style="overflow:hidden;">
                <h3>Agenda</h3>
                <div  style="overflow:hidden; width:60%; height:700px; float:left;">

                    <form id="Agenda" onsubmit="return false">

                    <label><?=date("F j, Y")?></label>
                    <table class="table table-bordered" >
                        <thead>
                            <tr>
                                <th width="30%" >Hora</th>
                                <th><?=date("j l")?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($query as $rows) :
                                    echo "<tr>";
                                    echo "<td>".$rows->horario."</td>";
                                    $this->db->where('cita_fecha', date("Y-m-d"));
                                    $query = $this->db->get('citas');

                                    if ($query->num_rows() > 0) :
                                        $row = $query->row();
                                        if ($rows->horario == $row->cita_hora) :
                                            echo "<td>Ocupado</td>";
                                        else:
                                            echo "<td>Libre</td>";
                                        endif;
                                    else:
                                        echo "<td>Libre</td>";
                                    endif;
                                    echo"</tr>";
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                    <button id="btnCita">Agendar cita</button>

                    </form>

                </div>

                <div style="width:30%; float:left;">

                    <input type="hidden" id="datepicker_value" />
                    <label>Seleccione una fecha:</label>
                    <br />
                    <br />
                    <div id="datepicker"></div>
                </div>


            </article>
            <article class="container">
                <h3>que ofrecemos</h3>
                <p>Desarrollar, diseñar e implementar sistemas automatizados para la industria electrónica, automotriz, textil así como la micro industria y pequeños negocios, contibuyendo con nuestros clientes a la fabricación de sus productos haciéndolos mas competitivos y sus negocios mas rentables. </p>
                <div id="tabs">
                    <a href="#">Servicios</a>
                    <a href="#">Videos</a>
                    <a href="#">Otros</a>
                </div>
                <div class="content-tabs">
                    <ul>
                        <li>
                            <div class="thumbnail">
                                <img src="<?=base_url('img/tab1.png')?>" alt="" height="200px" width="300px">
                                <div class="caption">
                                    <h3>Diseños</h3>
                                    <p>Diseño, rediseño y fabricacion de maquinas</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="thumbnail">
                                <img src="<?=base_url('img/tab2.png')?>" alt="" height="200px" width="300px">
                                <div class="caption">
                                    <h3>Maquinados</h3>
                                    <p>Maquinados, desarrollo de fixtures y gages</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="thumbnail">
                                <img src="<?=base_url('img/tab3.png')?>" alt="" height="200px" width="300px">
                                <div class="caption">
                                    <h3>Sistemas</h3>
                                    <p>Sistemas de adquisicion de datos (DAQ, GPIB, RS232)</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="content-tabs">
                    <ul>
                        <li>
                            <div class="thumbnail">
                                <iframe width="278" height="240" src="http://www.youtube.com/embed/7qet4Bc1Zrc" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="thumbnail">
                                <iframe width="278" height="240" src="http://www.youtube.com/embed/A6F4Gq8W5gc" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="thumbnail">
                                <iframe width="278" height="240" src="http://www.youtube.com/embed/IaABlcdElkI" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="thumbnail">
                                <iframe width="278" height="240" src="http://www.youtube.com/embed/4rZduAKouMM" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="thumbnail">
                                <iframe width="278" height="240" src="http://www.youtube.com/embed/c-wo3C9bKNI" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </li>
                        <li>
                            <div class="thumbnail">
                                <iframe width="278" height="240" src="http://www.youtube.com/embed/PGTzrP4Shi0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="content-tabs">
                    <h2>otros</h2>
                </div>
            </article>
        </section>
        <section id="proyectos">
            <h2>Proyectos</h2>
            <article class="container">
                <h3>Nuestros proyectos</h3>
                <div class="span4">
                    <img src="<?=base_url('img/pic1.jpg')?>" alt="">
                    <h3>proyecto uno</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, veniam expedita vitae in asperiores maxime consectetur repellat quas perspiciatis nihil ex harum ratione consequuntur libero corrupti similique tenetur error velit!</p>
                </div>
                <div class="span4">
                    <img src="<?=base_url('img/pic2.jpg')?>" alt="">
                    <h3>proyecto dos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, veniam expedita vitae in asperiores maxime consectetur repellat quas perspiciatis nihil ex harum ratione consequuntur libero corrupti similique tenetur error velit!</p>
                </div>
            </article>
        </section>
        <section id="contacto">
            <h2>Contacto</h2>
            <article class="container">
                <h3>Comunicate con nosotros</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, veniam expedita vitae in asperiores maxime consectetur repellat quas perspiciatis nihil ex harum ratione consequuntur libero corrupti similique tenetur error velit!</p>
                <div class="span4">
                     <h3>Escr&iacute;benos</h3>
                    <form id="frmContacto" action="" >
                        <label for="nombre" >Nombre:</label>
                        <input type="text" name="nombre" placeholder="tu nombre"/>
                        <label for="email">Email:</label>
                        <input type="text" name="email" placeholder="gabriel.huerta@live.com"/>
                        <label for="titulo">Titulo:</label>
                        <input type="text" name="titulo" placeholder="tema de importancia" />
                        <label for="comentarios">Comentarios:</label>
                        <textarea name="comentarios" cols="48" rows="10" placeholder="tus comentarios aqui.."></textarea>
                        <button id="btn-submit">Enviar mensaje</button>
                    </form>
                </div>
                <div class="span4">
                    <h3 style="padding-left:0;">Ub&iacute;canos</h3>
                    <div id="content-map">
                        <div id="map">
                        </div>
                        <div class="content-address">
                            <address>
                                <strong>Oficinas.</strong><br>
                                Miguel Trillo 920, Francisco Villa C.P. 88240<br>
                                Nuevo Laredo, Tamaulipas<br>
                                <abbr title="Phone">Tel:</abbr> (867) 726-2162
                            </address>
                            <address>
                                <strong>Adriana Valdez</strong><br>
                                <a href="mailto:#">adrana.valsez@live.com</a>
                            </address>
                        </div>
                        <div class="content-address">
                            <address>
                                <strong>Ingeniería y Soluciones.</strong><br>
                                Miguel Trillo 920, Francisco Villa<br>
                                Nuevo Laredo, Tamaulipas<br>
                                <abbr title="Phone">Tel:</abbr> (867) 148-8740 <br>
                                <abrr titel="Phone">Nextel Id:</abrr> 92*660061*1
                            </address>
                            <address>
                                <strong>Ing. Gabriel Huerta</strong><br>
                                <a href="mailto:#">gabriel.huerta@live.com</a>
                            </address>
                            <address>
                                <strong>Servicios.</strong><br>
                                Miguel Trillo 920, Francisco Villa<br>
                                Nuevo Laredo, Tamaulipas<br>
                                <abbr title="Phone">Tel:</abbr> (867) 745-3121 <br>
                                <abrr titel="Phone">Nextel Id:</abrr> 92*660061*2
                            </address>
                            <address>
                                <strong>Ing. Rafael Huerta</strong><br>
                                <a href="mailto:#">rafael.huerta@live.com</a>
                            </address>
                        </div>
                    </div>
                </div>
            </article>
        </section>

    </div> <!-- End #Wrapper -->
    <div class="clear"></div>
    <footer>
        <div id="footer-container">
            <div class="span4">
            <p>
                SAIND &copy; 2013 | Soluciones en Automatización Industrial
            </p>
            </div>
            <div class="span4 right">
                <a href="#"><img src="<?=base_url('img/twitter.png')?>" alt=""/></a>
                <a href="#"><img src="<?=base_url('img/facebook.png')?>" alt=""/></a>
            </div>
        </div>
    </footer><!-- End footer -->
    <link rel="stylesheet" href="<?=base_url('css/humanity/jquery.ui.all.css')?>">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?=base_url('js/vendor/jquery-1.9.1.min.js')?>"><\/script>')</script>
    <script src="<?=base_url('js/vendor/jquery-validate.js')?>"></script>
    <script src="<?=base_url('js/gmap3.js')?>"></script>

    <script src="<?=base_url('js/main.js')?>"></script>
    <script src="<?=base_url('js/ui/jquery.ui.core.js')?>"></script>
    <script src="<?=base_url('js/ui/jquery.ui.widget.js')?>"></script>
    <script src="<?=base_url('js/ui/jquery.ui.datepicker.js')?>"></script>
    <script>
    $(document).on("ready", main);
    function main(){
        $("#Agenda").on("click", "button#btnCita", showAgendar);

        $("#datepicker").datepicker({
            dateFormat: 'yy-mm-dd',
            onSelect: function(dateText, inst) {
                //$("#datepicker_value").val(dateText);

                $.ajax({
                        url: "<?=site_url('inicio/loadAgenda')?>",
                        type: 'post',
                        data: {fecha : dateText},
                        beforeSend: function (){
                            $("#Agenda").hide().empty();
                        },
                        success: function (data) {
                            $("#Agenda").fadeIn(1000).append(data);
                        }
                    });
            }
        });
    }

    function showAgendar(){
        var cont = $("#Agenda");
        $.ajax({
                url: "<?=site_url('inicio/loadFrm')?>",
                type: 'post',
                data: { fecha : $("#fecha").val()},
                beforeSend: function(){
                    cont.animate({marginLeft: "-100%"}, 400);
                },
                success: function (data) {

                    cont.animate({marginLeft: "0"}, 400);
                    cont.delay(800).empty().append(data);

                }
            });

    }
    </script>
</body>
</html>