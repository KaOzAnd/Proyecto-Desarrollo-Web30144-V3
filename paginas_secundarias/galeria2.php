<?php
require '../header.php'
?>
<link rel="stylesheet" href="../css/galeria2.css">
        <!--Ventana modal-->
        <section>
            <div class="container">
                <button class="btn" id="open_modal">Abrir Modal - Historia Mountain Bikes</button>
                <section class="Modal-position">
                    <div class="modal" id="modal">
                        <div class="fondoModal" id="fondoModal"></div>
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="title-modal">Ventana Modal</div>
                                <button class="btn-close-modal" id="close_modal"></button>
                            </div>
                            <div class="modal-body">
                                <h2>Esto es un modal</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem placeat molestiae tenetur molestias! Dicta nam distinctio sunt temporibus? Voluptatem commodi, eveniet ea placeat deserunt quod!</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <script src="../js/modal.js"></script>
        </section>
        <!-- Galeria Visualasizacion imagenes una * una-->
        <section class="galeria2">
            <h1 class="title-galeria">GALERIA DE IMAGES</h1>
            <span class="linea"></span>
            <section class="galeria">
                <a href="#image1"><img src="../imagenes/MBK10.jpg" alt=""></a>
                <a href="#image2"><img src="../imagenes/MBK11.jpg" alt=""></a>
                <a href="#image3"><img src="../imagenes/MBK3.jpg" alt=""></a>
                <a href="#image4"><img src="../imagenes/MBK4v2.jpg" alt=""></a>
                <a href="#image5"><img src="../imagenes/MBK5.jpg" alt=""></a>
                <a href="#image6"><img src="../imagenes/MBK6.jpg" alt=""></a>
                <a href="#image7"><img src="../imagenes/MBK7.jpg" alt=""></a>
                <a href="#image8"><img src="../imagenes/MBK8.jpg" alt=""></a>
                <a href="#image9"><img src="../imagenes/MBK9.jpg" alt=""></a>
            </section>
            <article class="light-box" id="image1">
                <a href="#image9" class="next"><i class="fa fa-arrow-left"></i></a>
                <img src="../imagenes/MBK10.jpg" alt="">
                <a href="#image2" class="next"><i class="fa fa-arrow-right"></i></a>
                <a href="" class="close"><i class="fa fa-close"></i></a>
            </article>
            <article class="light-box" id="image2">
                <a href="#image1" class="next"><i class="fa fa-arrow-left"></i></a>
                <img src="../imagenes/MBK11.jpg" alt="">
                <a href="#image3" class="next"><i class="fa fa-arrow-right"></i></a>
                <a href="" class="close"><i class="fa fa-close"></i></a>
            </article>
            <article class="light-box" id="image3">
                <a href="#image2" class="next"><i class="fa fa-arrow-left"></i></a>
                <img src="../imagenes/MBK3.jpg" alt="">
                <a href="#image4" class="next"><i class="fa fa-arrow-right"></i></a>
                <a href="" class="close"><i class="fa fa-close"></i></a>
            </article>
            <article class="light-box" id="image4">
                <a href="#image3" class="next"><i class="fa fa-arrow-left"></i></a>
                <img src="../imagenes/MBK4v2.jpg" alt="">
                <a href="#image5" class="next"><i class="fa fa-arrow-right"></i></a>
                <a href="" class="close"><i class="fa fa-close"></i></a>
            </article>
            <article class="light-box" id="image5">
                <a href="#image4" class="next"><i class="fa fa-arrow-left"></i></a>
                <img src="../imagenes/MBK5.jpg" alt="">
                <a href="#image6" class="next"><i class="fa fa-arrow-right"></i></a>
                <a href="" class="close"><i class="fa fa-close"></i></a>
            </article>
            <article class="light-box" id="image6">
                <a href="#image5" class="next"><i class="fa fa-arrow-left"></i></a>
                <img src="../imagenes/MBK6.jpg" alt="">
                <a href="#image7" class="next"><i class="fa fa-arrow-right"></i></a>
                <a href="" class="close"><i class="fa fa-close"></i></a>
            </article>
            <article class="light-box" id="image7">
                <a href="#image6" class="next"><i class="fa fa-arrow-left"></i></a>
                <img src="../imagenes/MBK7.jpg" alt="">
                <a href="#image8" class="next"><i class="fa fa-arrow-right"></i></a>
                <a href="" class="close"><i class="fa fa-close"></i></a>
            </article>
            <article class="light-box" id="image8">
                <a href="#image7" class="next"><i class="fa fa-arrow-left"></i></a>
                <img src="../imagenes/MBK8.jpg" alt="">
                <a href="#image9" class="next"><i class="fa fa-arrow-right"></i></a>
                <a href="" class="close"><i class="fa fa-close"></i></a>
            </article>
            <article class="light-box" id="image9">
                <a href="#image8" class="next"><i class="fa fa-arrow-left"></i></a>
                <img src="../imagenes/MBK9.jpg" alt="">
                <a href="#image1" class="next"><i class="fa fa-arrow-right"></i></a>
                <a href="" class="close"><i class="fa fa-close"></i></a>
            </article>
        </section>
        <!-- Audios y Videos -->
        <section class="audio">
            <div class="mp3">
                <h4>Canciones recomendas por nuestros clientes</h4><br>
                <h3>Jósean Log Chachachá</h3>
                <audio src="../audios/y2mate.com - Jósean Log  Chachachá Lyric Video.mp3" controls></audio></div>

        </section>
        <section class="audio">
            <div class="mp3">
                <h3>Macaco Coincidir</h3>
                <audio src="../audios/y2mate.com - Macaco  Coincidir Official Music Video.mp3" controls></audio></div>

        </section>
        <section class="video">
            <div class="mp4">
                <h4>Videos Grabados por Nuestros Clientes</h4>
                <video src="../videos/y2mate.com - Mountain Biking the lower Whistler Bike Park_480p.mp4" controls></video>
            </div>
        </section>
    </main>
    <!-- Pie de Pagina-->
    <?php
require '../footer.php'
?>