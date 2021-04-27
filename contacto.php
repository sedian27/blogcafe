<?php include_once 'includes/header.html' ?>

    <main class="contenedor">
        <h2 class="centrar-texto">Contacto</h2>

        <div class="grid centrar-columnas">
            <div class="columnas-12">
                <img src="img/contacto.jpg" alt="Imagen Contacto">
            </div>

            <div class="columnas-10 formulario-contacto">
                <form action="#">
                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" placeholder="Tu Nombre">
                    </div>
                    <div class="campo">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" placeholder="Tu Email">
                    </div>
                    <div class="campo mensaje">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje"></textarea>
                    </div>
                    <div class="campo enviar">
                        <input type="submit" value="Enviar" class="btn btn-primario">
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php include_once 'includes/footer.html' ?>