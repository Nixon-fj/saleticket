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
    <div class="conteiner-reserv">
        <div class="row">
            <div class="col"><img class="img-reserv" src="img/00.jpg" alt="img"></div>
                <div class="col">
                    <h1>Nombre del evento</h1>
                    <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim venie dolor in
                    hendrerit in
                    </p>
                    <div class="col-sm-4">
                        <form action="#">
                            <div class="col"><label id="name" for="name">Nombre</label></div>
                            <div class="col"><input class="input-text" type="text"></div>
                            <div class="col"><label for="mail">Correo</label></div>
                            <div class="col"><input class="input-text" type="text"></div>
                            <div class="col"><label for="padult">Adultos</label></div>
                            <div class="col">
                                <select class="select-number" id="adult" name="adutl">
                                    <option value="00" selected>0</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                </select>
                        </div>
                        <div class="col"><label for="pminor">Menores</label></div>
                        <div class="col">
                            <select class="select-number" id="minor" name="minor">
                                <option value="00" selected>0</option>
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                            </select>
                        </div>
                        <div class="col"><label for="total">Total</label></div>
                        <div class="col"><p id="total">$0.0</p></div>
                        <div class="col"><button class="btn-reservar" onclick="registrar()">Registrarse</button></div>
                        
                        </form>
                </div>
            </div>
        </div>
        
    </div>
        <!-- ventana emergente -->
        <div class="container-confirm">
                <button class="close-icon fas fa-times" onclick="closeConfirm()"></button>
                <p class="text-confirm">¡Registrado con exito!</p>
            </div>

    <footer>
        <p class="footer-text">2021 &copy;</p>
    </footer>
    <!-- fin-footer -->
    <script src="js/main.js"></script>
</body>

</html>