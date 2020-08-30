<?php
    require 'Class/Conexion.php';
    require 'Class/Betta.php';
    $Betta = new Betta;

    $index = 0;
    $css = 'danger';
    $mensaje = 'No se ha podido agregar al Betta.';

    if($Betta->ingresarBetta())
    {
        $index = 1;
        $css = 'success';
        $mensaje = 'Betta: '.$Betta->getBetClase().' agregado correctamente';
    }

    include 'includes/header.php';
?>

    <main class="container w-50">
        <h1>Ingreso de un Betta</h1>

        <div class="alert alert-<?= $css ?> p-4">
            <?= $mensaje ?>
            <br>
            <a href="plantilla.php" class="btn-btn-outline-secondary">
                Volver a panel regiones
            </a>
        </div>
    </main>

<?php
    include 'includes/footer.php';
?>