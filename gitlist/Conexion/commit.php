<?php
/**
 * Commit.php este archivo ejecuta el enlazamiento entre el commit con el ticket.
 */
        require('conexion.php');

        $codigo = $_POST['idticket'];
        $commit = $_POST['commit'];
        $repo = $_POST['repo'];
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap  CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <!-- Favicon -->
    <link rel="icon" href="css/Git.png" type="image/png">

    <title>Gitlist | Enviar</title>

</head>
<body>
    <div class="main">
        <?php
            if(is_numeric($codigo)){
                $update = "UPDATE `glpi_tickets` SET commit='http://localhost/glpi94/plugins/gitlist/gitlist/$repo/commit/$commit' WHERE id='$codigo'";
                $insert = $sql->query($update);
                echo "<br><h2>Ticket ($codigo) Enlazado con el Commit.</h2>";
            } else {
                echo "
                    <div class='envio'>
                        <br><h2>!El Campo Se Envio Vacio o No Es Numerico!</h2>
                        <br><h3>Porfavor revisar he intentar nuevamente su envio.</h3>
                    </div>
                ";
            }
        ?>
        <hr/>
        <table class="table table-dark" border="1">
                <thead></thead>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>COMMIT</th>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM `glpi_tickets` WHERE id='$codigo'";
                        $resultado = $sql->query($query);
                        foreach($resultado as $row){ 
                    ?>
                    <tr> 
                        <td><a href="<?php echo GLPI.$row['id']; ?>"><?php echo $row['id']; ?></a></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><a href="<?php echo $row['commit']; ?>"><?php echo $commit; ?></a></td>
                    </tr>
                </tbody>
                <?php } ?>
        </table>
        <a href="<?php echo "http://localhost/glpi94/plugins/gitlist/gitlist/$repo/commit/$commit"; ?>">
            <button type="button" class="btn btn-success">Volver</button>
        </a>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php 
    include ('cerrar.php');
?>