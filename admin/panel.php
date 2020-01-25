<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Learnest</title>

        <?php include('includes/links-head.php');?>
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">


        <style>

        </style>
    </head>

    <?php include('includes/validacion.php')?>

    <body>
        <?php include('includes/navbar.php');?>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="owl-carousel margin-tp">
                        <!-- PRIMERO -->
                        <div class="item" id="elearning-ac">
                            <div class="container-fluid">
                                <a class="nav-link active " id="v-pills-home-tab" data-toggle="pill" href="#elearning"
                                    role="tab" aria-controls="elearning" aria-selected="true" onclick="verifica(1)">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <img src="img/servicios/elearning.png" alt="" style="width:100%">
                                        </div>
                                        <div class="col-md-9 col-xs-9" style="padding:0">
                                            <h5 class="light">E-learning </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item" id="reforzamiento-ac">
                            <div class="container-fluid">
                                <a class="nav-link  " id="v-pills-home-tab" data-toggle="pill" href="#reforzamiento"
                                    role="tab" aria-controls="reforzamiento" aria-selected="true" onclick="verifica(2)">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <img src="img/servicios/reforzamiento.png" alt="" style="width:100%">
                                        </div>
                                        <div class="col-md-9 col-xs-9" style="padding:0">
                                            <h5 class="light">Reforzamiento </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item" id="aumentada-ac">
                            <div class="container-fluid">
                                <a class="nav-link  " id="v-pills-home-tab" data-toggle="pill" href="#aumentada"
                                    role="tab" aria-controls="aumentada" aria-selected="true" onclick="verifica(3)">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <img src="img/servicios/realidad-aumentada.png" alt="" style="width:100%">
                                        </div>
                                        <div class="col-md-9 col-xs-9" style="padding:0">
                                            <h5 class="light">Realidad Aumentada </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item" id="virtual-ac">
                            <div class="container-fluid">
                                <a class="nav-link  " id="v-pills-home-tab" data-toggle="pill" href="#virtual"
                                    role="tab" aria-controls="virtual" aria-selected="true" onclick="verifica(4)">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <img src="img/servicios/realidad-virtual.png" alt="" style="width:100%">
                                        </div>
                                        <div class="col-md-9 col-xs-9" style="padding:0">
                                            <h5 class="light">Realidad Virtual</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item" id="chatbot-ac">
                            <div class="container-fluid">
                                <a class="nav-link  " id="v-pills-home-tab" data-toggle="pill" href="#chatbot"
                                    role="tab" aria-controls="chatbot" aria-selected="true" onclick="verifica(5)">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <img src="img/servicios/chatbot.png" alt="" style="width:100%">
                                        </div>
                                        <div class="col-md-9 col-xs-9" style="padding:0">
                                            <h5 class="light">Chatbot </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="container">
            <div class="row">
                <!-- Serivicios -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane active " id="elearning" role="tabpanel" aria-labelledby=elearning">
                        <div class="col-12 servicio " style=" ">
                            <div class="container-fluid">
                                <div class="row equal">
                                    <div class="col-md-3 height-mob"
                                        style=" background: url(img/servicios/servicio.png)">
                                    </div>
                                    <div class="col-md-5" style="padding:0 3%">
                                        <h4 class="Gilroy-Bold">E-learning programa</h4>
                                        <p class="light mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed
                                            diam
                                            nonummy nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci </p>

                                        <div class="container-fluid " style="padding: 0">
                                            <div class="">
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        15 clases divertidas
                                                    </p>
                                                </div>
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        Duración: 10hs
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <?php 
                if($servicio_1 != 0){
                ?>
                                        <h4 class="Gilroy-Bold right">$4,654.50</h4>
                                        <?php 
                }else{
?>
                                        <h4 class="Gilroy-Bold right">Consulte</h4>

                                        <?php
                }
?>

                                        <p class="descr light celeste right mt-5" style="margin-left:50%">
                                            Si eres asociado comercial accede a la plataforma de pago haciendo click en
                                            comprar
                                        </p>

                                        <div class="caja-btn">
                                            <button class="btn-1 Gilroy-Bold gris">
                                                Ver Detalles
                                            </button>
                                            <?php 
                
                /* E- learning*/

                if($servicio_1 != 0){
                ?>
                                            <form action="https://secure.nmi.com/cart/cart.php" method="POST">
                                                <input type="hidden" name="key_id" value="13791238" />
                                                <input type="hidden" name="action" value="process_fixed" />
                                                <input type="hidden" name="amount" value="4654.50" />
                                                <input type="hidden" name="order_description"
                                                    value="E-learning 30% del Programa de Liderazgo Disagro" />
                                                <input type="hidden" name="language" value="en" />
                                                <input type="hidden" name="customer_receipt" value="true" />
                                                <input type="hidden" name="hash"
                                                    value="action|amount|order_description|e552e2b956de946cdcd80e63805c6000" />
                                                <input class="btn-2 Gilroy-Bold blanco" type="submit" name="submit"
                                                    value="Pagar" />
                                            </form>
                                            <?php 
                    }/*else{?>
                                            <button class="btn-2 Gilroy-Bold blanco">
                                                Comprar
                                            </button>
                                            <?php
                     }*/
                    
                    ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--2-->
                    <div class="tab-pane  " id="reforzamiento" role="tabpanel" aria-labelledby=reforzamiento">
                        <div class="col-12 servicio " style=" ">
                            <div class="container-fluid">
                                <div class="row equal">
                                    <div class="col-md-3 height-mob"
                                        style=" background: url(img/servicios/servicio.png)">
                                    </div>
                                    <div class="col-md-5" style="padding:0 3%">
                                        <h4 class="Gilroy-Bold">Reforzamiento</h4>
                                        <p class="light mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed
                                            diam
                                            nonummy nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci </p>

                                        <div class="container-fluid " style="padding: 0">
                                            <div class="">
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        15 clases divertidas
                                                    </p>
                                                </div>
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        Duración: 10hs
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <?php

                                      if($servicio_2 != 0){
                                            ?>
                                        <h4 class="Gilroy-Bold right">$12,840.00</h4>
                                        <?php
                                         }else if($servicio_2_b != 0){?>
                                        <h4 class="Gilroy-Bold right">$1,900.00</h4>
                                        <?php
                                         }else{
                                            ?>
                                        <h4 class="Gilroy-Bold right">Consulte</h4>
                                        <?php
                                         }
                                            ?>

                                        <p class="descr light celeste right mt-5" style="margin-left:50%">
                                            Si eres asociado comercial accede a la plataforma de pago haciendo click en
                                            comprar
                                        </p>


                                        <div class="caja-btn">
                                            <button class="btn-1 Gilroy-Bold gris">
                                                Ver Detalles
                                            </button>
                                            <?php
                                            if($servicio_2 != 0){
                                            ?>
                                            <form action="https://secure.nmi.com/cart/cart.php" method="POST">
                                                <input type="hidden" name="key_id" value="13791238" />
                                                <input type="hidden" name="action" value="process_fixed" />
                                                <input type="hidden" name="amount" value="12840.00" />
                                                <input type="hidden" name="order_description"
                                                    value="Reforzamiento Hematolog&iacute;a Janssen &ndash; m&oacute;dulo en Espa&ntilde;ol" />
                                                <input type="hidden" name="language" value="en" />
                                                <input type="hidden" name="customer_receipt" value="true" />
                                                <input type="hidden" name="hash"
                                                    value="action|amount|order_description|77d425e1c7a7f698f23542b73346b1b2" />
                                                <input class="btn-2 Gilroy-Bold blanco" type="submit" name="submit"
                                                    value="Pagar" />
                                            </form>

                                            <?php 
                    }else if($servicio_2_b != 0){?>
                                            <form action="https://secure.nmi.com/cart/cart.php" method="POST">
                                                <input type="hidden" name="key_id" value="13791238" />
                                                <input type="hidden" name="action" value="process_fixed" />
                                                <input type="hidden" name="amount" value="1900.00" />
                                                <input type="hidden" name="order_description"
                                                    value="Reforzamiento Grupo 1 Canales de Atenci&oacute;n ACAP" />
                                                <input type="hidden" name="language" value="en" />
                                                <input type="hidden" name="customer_receipt" value="true" />
                                                <input type="hidden" name="hash"
                                                    value="action|amount|order_description|aed906a8af31bc7d7c9a2d83ef6502e5" />
                                                <input class="btn-2 Gilroy-Bold blanco" type="submit" name="submit"
                                                    value="Pagar" />
                                            </form>

                                            <?php
                     }else /*{?>
                                            <button class="btn-2 Gilroy-Bold blanco">
                                                Comprar
                                            </button>
                                            <?php
                     }
                    */
                    ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--3-->
                    <div class="tab-pane  " id="aumentada" role="tabpanel" aria-labelledby=aumentada">
                        <div class="col-12 servicio " style=" ">
                            <div class="container-fluid">
                                <div class="row equal">
                                    <div class="col-md-3 height-mob"
                                        style=" background: url(img/servicios/servicio.png)">
                                    </div>
                                    <div class="col-md-5" style="padding:0 3%">
                                        <h4 class="Gilroy-Bold">Realidad Aumentada</h4>
                                        <p class="light mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed
                                            diam
                                            nonummy nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci </p>

                                        <div class="container-fluid " style="padding: 0">
                                            <div class="">
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        15 clases divertidas
                                                    </p>
                                                </div>
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        Duración: 10hs
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <?php 
                if($servicio_3 != 0){
                ?>
                                        <h4 class="Gilroy-Bold right">$4,654.50</h4>
                                        <?php 
                }else{
?>
                                        <h4 class="Gilroy-Bold right">Consulte</h4>

                                        <?php
                }
?>
                                        <p class="descr light celeste right mt-5" style="margin-left:50%">
                                            Si eres asociado comercial accede a la plataforma de pago haciendo click en
                                            comprar
                                        </p>

                                        <div class="caja-btn">
                                            <button class="btn-1 Gilroy-Bold gris">
                                                Ver Detalles
                                            </button>
                                            <?php
                                            if($servicio_3 != 0){
                                            ?>

                                            <form action="https://secure.nmi.com/cart/cart.php" method="POST">
                                                <input type="hidden" name="key_id" value="13785859" />
                                                <input type="hidden" name="action" value="process_fixed" />
                                                <input type="hidden" name="amount" value="1.00" />
                                                <input type="hidden" name="order_description" value="Elearning" />
                                                <input type="hidden" name="language" value="en" />
                                                <input type="hidden" name="url_finish"
                                                    value="http://learnest-cp514.wordpresstemporal.com/sitio/index.html" />
                                                <input type="hidden" name="customer_receipt" value="true" />
                                                <input type="hidden" name="hash"
                                                    value="action|amount|order_description|7916c31d767e51f9a913b9906435a02e" />
                                                <input class="btn-2 Gilroy-Bold blanco" type="submit" name="submit"
                                                    value="Pagar" />
                                            </form>
                                            <?php 
                    }/*else{?>
                                            <button class="btn-2 Gilroy-Bold blanco">
                                                Comprar
                                            </button>
                                            <?php
                     }*/
                    
                    ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--4-->
                    <div class="tab-pane  " id="virtual" role="tabpanel" aria-labelledby=virtual">
                        <div class="col-12 servicio " style=" ">
                            <div class="container-fluid">
                                <div class="row equal">
                                    <div class="col-md-3 height-mob"
                                        style=" background: url(img/servicios/servicio.png)">
                                    </div>
                                    <div class="col-md-5" style="padding:0 3%">
                                        <h4 class="Gilroy-Bold">Realidad Virtual</h4>
                                        <p class="light mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed
                                            diam
                                            nonummy nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci </p>

                                        <div class="container-fluid " style="padding: 0">
                                            <div class="">
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        15 clases divertidas
                                                    </p>
                                                </div>
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        Duración: 10hs
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <?php 
                if($servicio_4 != 0){
                ?>
                                        <h4 class="Gilroy-Bold right">$4,654.50</h4>
                                        <?php 
                }else{
?>
                                        <h4 class="Gilroy-Bold right">Consulte</h4>

                                        <?php
                }
?>
                                        <p class="descr light celeste right mt-5" style="margin-left:50%">
                                            Si eres asociado comercial accede a la plataforma de pago haciendo click en
                                            comprar
                                        </p>

                                        <div class="caja-btn">
                                            <button class="btn-1 Gilroy-Bold gris">
                                                Ver Detalles
                                            </button>
                                            <?php
                                            if($servicio_4 != 0){
                                            ?>

                                            <form action="https://secure.nmi.com/cart/cart.php" method="POST">
                                                <input type="hidden" name="key_id" value="13785859" />
                                                <input type="hidden" name="action" value="process_fixed" />
                                                <input type="hidden" name="amount" value="1.00" />
                                                <input type="hidden" name="order_description" value="Elearning" />
                                                <input type="hidden" name="language" value="en" />
                                                <input type="hidden" name="url_finish"
                                                    value="http://learnest-cp514.wordpresstemporal.com/sitio/index.html" />
                                                <input type="hidden" name="customer_receipt" value="true" />
                                                <input type="hidden" name="hash"
                                                    value="action|amount|order_description|7916c31d767e51f9a913b9906435a02e" />
                                                <input class="btn-2 Gilroy-Bold blanco" type="submit" name="submit"
                                                    value="Pagar" />
                                            </form>
                                            <?php 
                    }/*else{?>
                                            <button class="btn-2 Gilroy-Bold blanco">
                                                Comprar
                                            </button>
                                            <?php
                     }*/
                    
                    ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--5-->
                    <div class="tab-pane  " id="chatbot" role="tabpanel" aria-labelledby=chatbot">
                        <div class="col-12 servicio " style=" ">
                            <div class="container-fluid">
                                <div class="row equal">
                                    <div class="col-md-3 height-mob"
                                        style=" background: url(img/servicios/servicio.png)">
                                    </div>
                                    <div class="col-md-5" style="padding:0 3%">
                                        <h4 class="Gilroy-Bold">Chatbot</h4>
                                        <p class="light mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                            sed
                                            diam
                                            nonummy nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci </p>

                                        <div class="container-fluid " style="padding: 0">
                                            <div class="">
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        15 clases divertidas
                                                    </p>
                                                </div>
                                                <div class="col-md-6" style="padding:0">
                                                    <p class="light left celeste">
                                                        Duración: 10hs
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <?php 
                if($servicio_1 != 0){
                ?>
                                        <h4 class="Gilroy-Bold right">$4,654.50</h4>
                                        <?php 
                }else{
?>
                                        <h4 class="Gilroy-Bold right">Consulte</h4>

                                        <?php
                }
?>
                                        <p class="descr light celeste right mt-5" style="margin-left:50%">
                                            Si eres asociado comercial accede a la plataforma de pago haciendo click en
                                            comprar
                                        </p>

                                        <div class="caja-btn">
                                            <button class="btn-1 Gilroy-Bold gris">
                                                Ver Detalles
                                            </button>
                                            <?php
                                            if($servicio_5 != 0){
                                            ?>
                                            <?php 
                    }/*else{?>
                                            <button class="btn-2 Gilroy-Bold blanco">
                                                Comprar
                                            </button>
                                            <?php
                     }
                    */
                    ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----->


            </div>
        </div>

        <?php include('includes/links-footer.php');?>
        <!--OWL-->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
        <script type="text/javascript">
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            nav: true,
            items: 2,
            navText: [
                "<img src='img/formas/felcha-hor.png' style='filter: invert(1); transform: rotate(180deg)'>",
                "<img src='img/formas/felcha-hor.png' style='filter: invert(1);'>"
            ],
            responsive: {
                0: {
                    items: 1.4,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        });

        /*ITEM ACTIVO NAV*/

        function verifica(ident) {

            switch (ident) {
                case 1: {
                    $("#elearning-ac").css({
                        background: "#EDF0F9"
                    });
                    $("#reforzamiento-ac").css({
                        background: "#fff"
                    });
                    $("#aumentada-ac").css({
                        background: "#fff"
                    });
                    $("#virtual-ac").css({
                        background: "#fff"
                    });
                    $("#chatbot-ac").css({
                        background: "#fff"
                    });
                    break;
                }
                case 2: {
                    $("#elearning-ac").css({
                        background: "#fff"
                    });
                    $("#reforzamiento-ac").css({
                        background: "#EDF0F9"
                    });
                    $("#aumentada-ac").css({
                        background: "#fff"
                    });
                    $("#virtual-ac").css({
                        background: "#fff"
                    });
                    $("#chatbot-ac").css({
                        background: "#fff"
                    });
                    break;
                }
                case 3: {
                    $("#elearning-ac").css({
                        background: "#fff"
                    });
                    $("#reforzamiento-ac").css({
                        background: "#fff"
                    });
                    $("#aumentada-ac").css({
                        background: "#EDF0F9"
                    });
                    $("#virtual-ac").css({
                        background: "#fff"
                    });
                    $("#chatbot-ac").css({
                        background: "#fff"
                    });
                    break;
                }
                case 4: {
                    $("#elearning-ac").css({
                        background: "#fff"
                    });
                    $("#reforzamiento-ac").css({
                        background: "#fff"
                    });
                    $("#aumentada-ac").css({
                        background: "#fff"
                    });
                    $("#virtual-ac").css({
                        background: "#EDF0F9"
                    });
                    $("#chatbot-ac").css({
                        background: "#fff"
                    });
                    break;
                }
                case 5: {
                    $("#elearning-ac").css({
                        background: "#fff"
                    });
                    $("#reforzamiento-ac").css({
                        background: "#fff"
                    });
                    $("#aumentada-ac").css({
                        background: "#fff"
                    });
                    $("#virtual-ac").css({
                        background: "#fff"
                    });
                    $("#chatbot-ac").css({
                        background: "#EDF0F9"
                    });
                    break;
                }
            }

        }
        </script>
    </body>

</html>