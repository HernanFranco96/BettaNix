<?php 
    require 'Class/Conexion.php';
    require 'Class/Betta.php';
    include 'includes/header.php';
?>

    <h5 class="w-50 mx-auto text-danger">Formulario de Registro</h5>
        <form action="ingresoBetta.php" method="post">
            <div class="container w-50">
                <div class="row">
                    <div class="col form-group">
                        <label for="Clase">Clase</label>
                        <input type="text" name="betClase" id="betClase" class="form-control" required>
                    </div>
                    <div class="w-100"></div>
                    <div class="col form-group">
                        <label for="Color">Color</label>
                        <input type="text" name="betColor" id="betColor" class="form-control" required>
                    </div>
                    <div class="w-100"></div>
                    <div class="col form-group">
                        <label for="Sexo">Sexo</label>
                        <input type="text" name="betSexo" id="betSexo" class="form-control" required>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <button class="btn btn-outline-dark">Agregar</button>
                        <a href="plantilla.php" class="btn btn-outline-dark">
                            Volver al menu inicial
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php
    include 'includes/footer.php';
?>