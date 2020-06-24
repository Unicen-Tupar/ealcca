<?php
function extensiones(){
    return '<!DOCTYPE html>
    <html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CUTE</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:300i|Poiret+One|Raleway|Source+Sans+Pro:200&display=swap" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo">
                            <h1 id="name"><a href="home">Cute</a></h1>
                            <p id="name2">24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top pt-0 pb-0" id="nav">
            <div class="container">
                <!-- <a class="navbar-brand" href="#">CUTE 24/7</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="staff">STAFF</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="extensiones">EXTENSIONES DE PESTA&NtildeAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="makeup">MAKE UP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cursos">CURSOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <article>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="container-image">
                                <img src="image/extension1.jpg" alt="extensiones">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="container-data">
                                <p>
                                    En esta presentaci&oacuten te encontrar&aacutes con todos los detalles relacionados al tratamiento de extensiones para que puedas conocer todos los detalles que est&aacutes buscando y quitarte todas las dudas incluyendo los diferentes tipos, los precios
                                    de las extensiones de pesta&ntildeas, los pros y contras, recomendaciones, etc. Y en el &uacuteltimo apartado te mostraremos algunas de las opiniones de las extensiones de pesta&ntildeas que nos han dejado nuestras clientas
                                    y veas sus experiencias con nosotras.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="divisor">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="jobs">
                                <h2>Trabajos realizados</h2>
                                <ul class="gallery">
                                    <li>
                                        <a href="#img1"><img src="image/trabajo1.jpg" alt="trabajos"></a>
                                    </li>
                                    <li>
                                        <a href="#img2"><img src="image/trabajo2.jpg" alt="trabajos"></a>
                                    </li>
                                    <li>
                                        <a href="#img3"><img src="image/trabajo3.jpg" alt="trabajos"></a>
                                    </li>
                                    <li>
                                        <a href="#img4"><img src="image/trabajo4.jpg" alt="trabajos"></a>
                                    </li>
                                    <li>
                                        <a href="#img5"><img src="image/trabajo5.jpg" alt="trabajos"></a>
                                    </li>
                                    <li>
                                        <a href="#img6"><img src="image/trabajo6.jpg" alt="trabajos"></a>
                                    </li>
                                </ul>
    
                                <div class="modal" id="img1">
                                    <h2>Cute 24/7</h2>
                                    <div class="box-image">
                                        <a href="#img6">&#60</a>
                                        <a href="#img2"><img class="img-extensiones" src="image/trabajo1.jpg" alt="trabajos"></img>
                                        </a>
                                        <a href="#img2">></a>
                                    </div>
                                    <a class="close" href="">X</a>
                                </div>
                                <div class="modal" id="img2">
                                    <h2>Cute 24/7</h2>
                                    <div class="box-image">
                                        <a href="#img1">&#60</a>
                                        <a href="#img3"><img class="img-extensiones" src="image/trabajo2.jpg" alt="trabajos"></img>
                                        </a>
                                        <a href="#img3">></a>
                                    </div>
                                    <a class="close" href="">X</a>
                                </div>
                                <div class="modal" id="img3">
                                    <h2>Cute 24/7</h2>
                                    <div class="box-image">
                                        <a href="#img2">&#60</a>
                                        <a href="#img4"><img class="img-extensiones" src="image/trabajo3.jpg" alt="trabajos"></img>
                                        </a>
                                        <a href="#img4">></a>
                                    </div>
                                    <a class="close" href="">X</a>
                                </div>
                                <div class="modal" id="img4">
                                    <h2>Cute 24/7</h2>
                                    <div class="box-image">
                                        <a href="#img3">&#60</a>
                                        <a href="#img5"><img class="img-extensiones" src="image/trabajo4.jpg" alt="trabajos"></img>
                                        </a>
                                        <a href="#img5">></a>
                                    </div>
                                    <a class="close" href="">X</a>
                                </div>
                                <div class="modal" id="img5">
                                    <h2>Cute 24/7</h2>
                                    <div class="box-image">
                                        <a href="#img4">&#60</a>
                                        <a href="#img6"><img class="img-extensiones" src="image/trabajo5.jpg" alt="trabajos"></img>
                                        </a>
                                        <a href="#img6">></a>
                                    </div>
                                    <a class="close" href="">X</a>
                                </div>
                                <div class="modal" id="img6">
                                    <h2>Cute 24/7</h2>
                                    <div class="box-image">
                                        <a href="#img5">&#60</a>
                                        <a href="#img1"><img class="img-extensiones" src="image/trabajo6.jpg" alt="trabajos"></img>
                                        </a>
                                        <a href="#img1">></a>
                                    </div>
                                    <a class="close" href="">X</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="container-data">
                                <h2>Tipos</h2>
                                <p>
                                    En Cute 24/7 realizamos trabajamos con los siguientes tipos:
                                </p>
                                <ul>
                                    <li>
                                        <strong>Pesta&ntildeas de seda:</strong> Material que tiene flexibilidad y delicadeza. Por lo que las extensiones hechas con fibra de seda son finas y suaves y se pueden adherir f&aacutecilmente a las pesta&ntildeas
                                        naturales.
                                    </li>
                                    <li>
                                        <strong> Pesta&ntildeas de pelo natural:</strong> El material con el que se hace esta extensi&oacuten es sint&eacutetico pero de un material extremadamente natural, la curvatura y el volumen es tal cual deber&iacutea
                                        ser una pesta&ntildea natural.
                                    </li>
                                    <li>
                                        <strong> Pesta&ntildeas sint&eacuteticas:</strong> Est&aacuten hechas en base a un acr&iacutelico pulido que es r&iacutegido y robusto pero a su vez lleva un gran brillo. Al ser un material sint&eacutetico pueden colocarse
                                        de diferentes grosores y diferentes curvaturas.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="container-image">
                                <img src="image/extension2.jpg" alt="extensiones">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="divisor">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="table-extensiones">
                                <h2>Algunos de nuestros dise&ntildeos</h2>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Dise&ntildeo</th>
                                            <th>Curvatura</th>
                                            <th>Diametro</th>
                                            <th>Longitud</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Natural eye</td>
                                            <td>C</td>
                                            <td>0.15mm</td>
                                            <td>12mm</td>
                                        </tr>
                                        <tr>
                                            <td>Open eye</td>
                                            <td>D</td>
                                            <td>0.15mm</td>
                                            <td>8,10,11,12mm</td>
                                        </tr>
                                        <tr>
                                            <td>Cat eye</td>
                                            <td>C</td>
                                            <td>0.20mm</td>
                                            <td>10,12,14,15mm</td>
                                        </tr>
                                        <tr>
                                            <td>Doll eye</td>
                                            <td>D</td>
                                            <td>0.14mm</td>
                                            <td>7,8,9mm</td>
                                        </tr>
                                        <tr>
                                            <td>Foxy lashes</td>
                                            <td>L</td>
                                            <td>0.15mm</td>
                                            <td>10,12,14,15mm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="container-image">
                                <img src="image/extension3.jpg" alt="extensiones">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="container-data">
                                <h2>T&eacutecnicas</h2>
                                <p>
                                    Realizamos las t&eacutecnicas en tendencia y estas son:.
                                </p>
                                <ul>
                                    <li><strong>Express clasicas:</strong> Se colocan todas las extensiones del mismo numero, con esta t&eacutecnica se busca dar volumen.
                                    </li>
                                    <li><strong>Mixta:</strong> Se colocan 2 n&uacutemeros diferentes n&uacutemeros de extensiones. Ejm, 9 y 10, 10 y 12, 12 y 14. Dependiendo del gusto del cliente.
                                    </li>
                                    <li><strong>2D-3D-4D:</strong> Se usan "n" n&uacutemeros diferentes de extensiones con el mismo mapa de colocaci&oacuten. Con esta t&eacutecnica se ve el ojo mas abierto.
                                    </li>
                                    <li><strong>Volumen ruso:</strong> Se colocan extensiones en abanico. Pueden ser todos iguales o usar 2 n&uacutemeros. Se usa el mismo mapa de colocaci&oacuten, pero no se pone en todos los pelos
                                    </li>
                                </ul>
                            </div>
    
                        </div>
                    </div>
                </div>
            </section>
    
    
        </article>
    
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-end">
                            <ion-icon name="logo-facebook"></ion-icon>
                            <ion-icon name="logo-instagram"></ion-icon>
                            <ion-icon name="logo-twitter"></ion-icon>
                            <hr class="line">
                            <p>cute247@gmail.com</p>
                            <p>15-257412 / 15-258523</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
    
    
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    
    </body>
    
    </html>';
}

?>