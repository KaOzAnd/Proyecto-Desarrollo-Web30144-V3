<?php
require '../header.php'
?>
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
        <!-- Galeria overlay-->
        <section class="galeria">
            <div class="galeria"></div><br>
            <h1>Galeria Efecto Overlay</h1>
            <div class="contenedor-imagenes">
                <div class="imagen">
                    <img src="../imagenes/MBK1.jpg" alt="">
                    <div class="overlay">
                        <h2>Suscribete</h2>
                    </div>
                </div>
                <div class="imagen">
                    <img src="../imagenes/MBK2.jpg" alt="">
                    <div class="overlay">
                        <h2>Suscribete</h2>
                    </div>
                </div>
                <div class="imagen">
                    <img src="../imagenes/MBK3.jpg" alt="">
                    <div class="overlay">
                        <h2>Suscribete</h2>
                    </div>
                </div>
                <div class="imagen">
                    <img src="../imagenes/MBK4v2.jpg" alt="">
                    <div class="overlay">
                        <h2>Suscribete</h2>
                    </div>
                </div>
                <div class="imagen">
                    <img src="../imagenes/MBK5.jpg" alt="">
                    <div class="overlay">
                        <h2>Suscribete</h2>
                    </div>
                </div>
                <div class="imagen">
                    <img src="../imagenes/MBK6.jpg" alt="">
                    <div class="overlay">
                        <h2>Suscribete</h2>
                    </div>
                </div>
                <div class="imagen">
                    <img src="../imagenes/MBK7.jpg" alt="">
                    <div class="overlay">
                        <h2>Suscribete</h2>
                    </div>
                </div>
                <div class="imagen">
                    <img src="../imagenes/MBK8.jpg" alt="">
                    <div class="overlay">
                        <h2>Suscribete</h2>
                    </div>
                </div>
                <div class="imagen">
                    <img src="../imagenes/MBK9.jpg" alt="">
                    <div class="overlay">
                        <h2>Suscribete</h2>
                    </div>
                </div>
            </div>
            </div>
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