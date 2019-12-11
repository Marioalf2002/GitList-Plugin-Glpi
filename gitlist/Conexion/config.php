<?php
    //Conexion a base de datos
    define("SERVIDOR","localhost");
    define("USUARIO","root");
    define("PASSWORD","");
    define("BD","glpixampp");

    //Campo de la tabla que se desea modificar para guardar el enlace del repositorio con el ticket
    define("REPOSITORY","project");

    //Url para saber lugar donde de aloja el repositorio enlazado al ticket
    define("PROJECT","http://localhost/glpi94/plugins/gitlist/gitlist/");

    //URL Glpi Ticket
    define("GLPI","http://localhost/glpi94/front/ticket.form.php?id=");
?>