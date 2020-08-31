<?php
    require 'Class/Conexion.php';
    require 'Class/Betta.php';

    $Betta = new Betta;
    $Bettas = $Betta->listarBettas();

    include 'includes/header.php';
?>

    <table class="table table-border table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Clase</th>
                <th>Color</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
<?php
        foreach($Bettas as $betta){
?>
            <tr>
                <td><?php echo $betta['Clase']; ?></td>
                <td><?php echo $betta['Color']; ?></td>
                <td><?php echo $betta['Sexo']; ?></td>
            </tr>
<?php
        }
?>
        </tbody>
    </table>

<?php
    include 'includes/footer.php';
?>