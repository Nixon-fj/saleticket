<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <title>Saleticket</title>
    <meta name='viewport' content='width=device-width'>
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- google-fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div class="top-nav">
            <div class="row">
                <div class="col">
                    <a class="logo" href="index.php">SALETICKET</a>
                </div>
                <div class="col">
                    <span class="mob-menu fas fa-bars" onclick="openMenu()"></span>
                    <ul class="nav">
                        <li><span class="close-menu fas fa-times" onclick="closeMenu()"></span></li>
                        <li><a href="index.php" class="btn-top">INICIO</a></li>
                        <li>
                            <select class="select-category" id="category" name="category">
                                <option value="00" selected>CATEGORIAS</option>
                                <option value="01">Conciertos</option>
                                <option value="02">Convenciones</option>
                                <option value="03">Festivales</option>
                                <option value="04">Conferencias</option>
                                <option value="05">Otros</option>
                            </select>
                        </li>
                        <li><a href="event.php" class="btn-top">CALENDARIO</a></li>
                        <li><input class="input-search" type="text"><button class="btn-search fas fa-search" onclick="search()"></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- fin header -->
    <div class="container-event">

        <img class="img-event" src="./img/00.jpg" alt="picture">

        <h1>Nombre del evento</h1>

        <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            tincidunt ut laoreet dolore consectetuer adipiscing elit, sed diam nonummy nibh euismod
            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim venie dolor in hendrerit.</p>
        
        <H2>Destalles</H2>
        <div class="row">
            <div class="col">
                <p class="text">CATEGORIA: Sin definir</p>
                <p class="text">TIPO DE PUBLICO: Apto para todo publico</p>
                <p class="text">LUGAR: Sin definir</p>
            
            </div>
                <div class="col">
                <p class="text">FECHA: 00/00/00</p>
                <p class="text">HORA: 00:00</p>
                <p class="text">COSTO: Gratuito</p>
            </div>
        </div>

        <a href="event_reserv.php" class="btn-reservar">REGISTRARSE</a>

        <H2>Relacionado</H2>

        <div class="row">
            <div class="col-sm-3">
                <div class="galery">
                    <a href="event_info.php"><img class="img" src="./img/01.jpg" alt="img"></a>
                        <div class="row">
                        <div class="col-sm-12"><p class="text-gallerie">NOMBRE:   Nombre del evento</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">LUGAR:   Sin definir</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">FECHA:   00/00/00</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">CATEGORIA:   Sin definir</p></div>
                        </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="galery">
                    <a href="event_info.php"><img class="img" src="./img/00.jpg" alt="img"></a>
                        <div class="row">
                        <div class="col-sm-12"><p class="text-gallerie">NOMBRE:   Nombre del evento</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">LUGAR:   Sin definir</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">FECHA:   00/00/00</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">CATEGORIA:   Sin definir</p></div>
                        </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="galery">
                    <a href="event_info.php"><img class="img" src="./img/04.jpg" alt="img"></a>
                        <div class="row">
                        <div class="col-sm-12"><p class="text-gallerie">NOMBRE:   Nombre del evento</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">LUGAR:   Sin definir</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">FECHA:   00/00/00</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">CATEGORIA:   Sin definir</p></div>
                        </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="galery">
                    <a href="event_info.php"><img class="img" src="./img/03.jpg" alt="img"></a>
                        <div class="row">
                        <div class="col-sm-12"><p class="text-gallerie">NOMBRE:   Nombre del evento</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">LUGAR:   Sin definir</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">FECHA:   00/00/00</p></div>
                        <div class="col-sm-12"><p class="text-gallerie">CATEGORIA:   Sin definir</p></div>
                        </div>
                </div>
            </div>
        </div>

    </div>
    <!-- fin del container-->
    <footer>
        <p class="footer-text">2021 &copy;</p>
    </footer>
    <!-- fin-footer -->
    <script src="js/main.js"></script>
</body>

</html>