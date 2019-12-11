<?php

/*
 *
  -------------------------------------------------------------------------
  Plugin GLPI Example
  Copyright (C) 2017 by Walid H.
 */

if (!defined('GLPI_ROOT')) {
    die("Sorry. You can't access directly to this file");
}

class PluginGitlistIndex extends CommonDBTM {

    static $rightname = 'plugin_gitlist';

    /**
     * 
     * @return type
     */
    public static function getTypeName() {
        return $GLOBALS['LANG']['plugin_gitlist']['title'];
    }

    /** 
     * Show the form (menu->plugin->gitlist)
    */
    public function formIndex() {
        echo '<div class="tab_cadre_fixe" style="box-shadow: 0 1px 20px #aaa;text-align:center;padding:3em;">';

        echo "<p align='center'><a href='../gitlist/'><img src='../gitlist/logo/horizontal.png' alt='gitlist' height='100px'></a></p><br>";

        ?>
            <html>
                <style>
                    .table{
                        border: solid 2px;
                        height: 270px;
                        overflow-y: auto;
                        width: 100%;
                        display: block;
                    }
                    .table thead th{
                        color: #fff;
                        background: #3a5693;
                    }
                    .table tfoot th{
                        color: #fff;
                        background: #3a5693;
                    }

                    .table::-webkit-scrollbar {
                        width: 7px;
                    }
                    .table::-webkit-scrollbar-thumb{
                        background: #3a5693;
                        border-radius: 5px;
                    }
                </style>
                <body>

                    <section>
                        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar..." pattern="[0-9]{1,15}" autocomplete="off">
                    </section>

                    <hr/>

                    <section id="tabla_resultado">
                    <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
                    </section>

                    <!-- SCRIPTS JS -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                    <script src="peticion.js"></script>
                </body>
            </html>
        <?php
    }
}
?>