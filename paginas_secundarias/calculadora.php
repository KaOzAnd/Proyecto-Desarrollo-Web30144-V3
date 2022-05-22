<?php
require '../header.php'
?>
<link rel="stylesheet" href="../css/calculadora.css">
        <!-- Calculadora -->
        <h1 class="titulo">CALCULADORA</h1>
        <section class="calculadora">
            <div class="calc">
                <form name="calc">
                    <div class="title">
                        <label>Ingrese numero 1: </label>
                        <input type="text" name="operando1" value="" size="12">
                        <br>
                        <label>Ingrese numero 2: </label>
                        <input type="text" name="operando2" value="" size="12">
                        <br>
                        <label> Elija una operación: </label>
                        <br>
                    </div>
                    <div class="btns">
                        <input type="button" name="" value=" + " onclick="calcular('+')">
                        <input type="button" name="" value=" - " onclick="calcular('-')">
                        <input type="button" name="" value=" x " onclick="calcular('*')">
                        <input type="button" name="" value=" / " onclick="calcular('/')">
                        <input type="button" name="" value=" EXPONENCIA " onclick="calcular('**')">
                        <input type="button" name="" value=" RESIDUO " onclick="calcular('%')">
                        <input type="button" name="p1" value=" PORCENTAJE " onclick="PORCENTAJE('*')">
                    </div>
                    <br>
                    <div class="title">
                        <label>Resultado: </label>
                        <input type="text" name="resultado" value="" size="12">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- Pie de Pagina-->
    <?php
require '../footer.php'
?>