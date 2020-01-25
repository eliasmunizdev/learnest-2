<!DOCTYPE html>
<html lang="en">

    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Learnest</title>

        <?php include('includes/links-head.php');?>
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">


        <style>

        </style>
    </head>

    <body>
        <?php include('includes/navbar.php');?>

        <div class="container-fluid">
            <div class="row  margin-tp">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <h3 class="Gilroy-Bold center">
                        Asociados Comerciales
                    </h3>
                    <form action="panel.php" method="POST">
                        <div class="container-fluid">
                            <div class="row center caja-box">
                                <input name="user" class="campo-l light" type="text" placeholder="Usuario">
                                <input name="pass" class="campo-l light" type="password" placeholder="Contraseña">
                                <button class="btn-2 Gilroy-Bold blanco">
                                    Entrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">

                </div>
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
        </script>
    </body>

</html>