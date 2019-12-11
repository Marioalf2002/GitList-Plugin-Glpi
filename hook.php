<?php
// plugin_"nombredelpluginenminúscula"_install() Nombre de la carpeta del plugin en el directorio plugins
function plugin_gitlist_install() {
  global $DB;

//PluginGitlistProfile el Plugin"Nombredelpluginprimeraletramayúscula"Profile 
//donde Profile es un archivo ubicado en plugins/gitlist/inc/profile.class.php 
 PluginGitlistProfile::createFirstAccess($_SESSION['glpiactiveprofile']['id']);

// aquí podrías crear tablas en la base de datos que luego tu aplicación necesite
    return true;
}

function plugin_gitlist_uninstall() {
 global $DB;

PluginGitlistProfile::uninstallProfile();

// aquí podrás eliminar las tablas que creaste en la base de datos
     
      return true;
}

?>