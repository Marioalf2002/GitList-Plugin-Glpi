<?php
        require('conexion.php');

        $codigo = $_POST['idticket'];
        $project = PROJECT.$_POST['repo'];
        $repo = $_POST['repo'];

        echo $project;
        echo "<hr/>";
        echo $codigo;
        echo "<hr/>";
        echo $repo;
        echo "<hr/>";

?>

<?php
            if(is_numeric($codigo)){
                $insert = "INSERT INTO `glpi_repository` (`name`, ".REPOSITORY.") VALUES ('$repo', '$project')";
                $nvio = $sql->query($insert);
                echo "<br><h2>Ticket ($codigo) Enlazado con el Repositorio.</h2>";
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
                    <th>REPOSITORIO</th>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM `glpi_repository`";
                        $resultado = $sql->query($query);
                        foreach($resultado as $row){ 
                    ?>
                    <tr> 
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['repository']; ?></td>
                    </tr>
                </tbody>
                <?php } ?>
        </table>