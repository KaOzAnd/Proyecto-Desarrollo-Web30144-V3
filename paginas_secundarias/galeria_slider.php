<?php
require '../header.php'
?>
<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/zkreations/SheetSlider@2.2.0/dist/sheetslider.min.css" />
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
        <!-- Galeria slider-->

        <body>
            <section>
                <!--Sheet Slider-->
                <div class="sheetSlider sh-fade sh-auto">
                    <input id="s1" type="radio" name="slide1" checked/>
                    <input id="s2" type="radio" name="slide1" />
                    <input id="s3" type="radio" name="slide1" />
                    <input id="s4" type="radio" name="slide1" />
                    <input id="s5" type="radio" name="slide1" />
                    <input id="s6" type="radio" name="slide1" />
                    <input id="s7" type="radio" name="slide1" />
                    <input id="s8" type="radio" name="slide1" />
                    <div class="sh__content">

                        <!-- Slider Item -->
                        <div class="sh__item">
                            <img src="../imagenes/MBK5.jpg" alt="imgText" />
                            <!-- Item Info -->
                            <div class="sh__meta">
                                <h4>2 Weeks</h4>
                                <span>Secondary text</span>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="sh__item">
                            <img src="../imagenes/MBK6.jpg" alt="imgText" />
                            <!-- Item Info -->
                            <div class="sh__meta">
                                <h4>Artwork surreal</h4>
                                <span>Secondary text without link</span>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="sh__item">
                            <img src="../imagenes/MBK3.jpg" alt="imgText" />
                            <!-- Item Info -->
                            <div class="sh__meta">
                                <h4>Cat under a carpet</h4>
                                <span>Secondary text without link</span>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="sh__item">
                            <img src="../imagenes/MBK7.jpg" alt="imgText" />
                            <!-- Item Info -->
                            <div class="sh__meta">
                                <h4>Cat under a carpet</h4>
                                <span>Secondary text without link</span>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="sh__item">
                            <img src="../imagenes/MBK8.jpg" alt="imgText" />
                            <!-- Item Info -->
                            <div class="sh__meta">
                                <h4>Cat under a carpet</h4>
                                <span>Secondary text without link</span>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="sh__item">
                            <img src="../imagenes/MBK9.jpg" alt="imgText" />
                            <!-- Item Info -->
                            <div class="sh__meta">
                                <h4>Cat under a carpet</h4>
                                <span>Secondary text without link</span>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="sh__item">
                            <img src="../imagenes/MBK10.jpg" alt="imgText" />
                            <!-- Item Info -->
                            <div class="sh__meta">
                                <h4>Cat under a carpet</h4>
                                <span>Secondary text without link</span>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="sh__item">
                            <img src="../imagenes/MBK11.jpg" alt="imgText" />
                            <!-- Item Info -->
                            <div class="sh__meta">
                                <h4>Cat under a carpet</h4>
                                <span>Secondary text without link</span>
                            </div>
                        </div>

                    </div>
                    <!-- .sh__content -->

                    <!--botones-->
                    <div class="sh__btns">
                        <label for="s1"></label>
                        <label for="s2"></label>
                        <label for="s3"></label>
                        <label for="s4"></label>
                        <label for="s5"></label>
                        <label for="s6"></label>
                        <label for="s7"></label>
                        <label for="s8"></label>
                    </div>
                    <!-- .sh__btns -->
                    <button class="sh-control"></button>
                    <!--flechas-->
                    <div class="sh__arrows">
                        <label for="s1"></label>
                        <label for="s2"></label>
                        <label for="s3"></label>
                        <label for="s4"></label>
                        <label for="s5"></label>
                        <label for="s6"></label>
                        <label for="s7"></label>
                        <label for="s8"></label>
                    </div>
                    <!-- .sh__arrows -->

                </div>
                <!-- .sheetSlider -->
                <script src="//cdn.jsdelivr.net/gh/zkreations/SheetSlider@2.2.0/dist/sheetslider.min.js"></script>
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