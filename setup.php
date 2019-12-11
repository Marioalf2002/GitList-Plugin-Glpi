<?php

/*
 *
  -------------------------------------------------------------------------
  Plugin GLPI hola mundo
 */

 function plugin_init_gitlist()
{
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['gitlist'] = true;
    $PLUGIN_HOOKS['change_profile']['gitlist'] = array('PluginGitlistProfile', 'changeProfile');

    //aquí esta registrando la clase profile que es la que desencadena todo en este ejemplo
    Plugin::registerClass('PluginGitlistProfile', array('addtabon' => 'Profile'));

    $plugin = new Plugin();

    if (isset($_SESSION['glpiID']) && $plugin->isInstalled('gitlist') && $plugin->isActivated('gitlist')) {
        if (Session::haveRight('plugin_gitlist', READ)) {

            //aquí se agrega al menú complementos    
            $PLUGIN_HOOKS['menu_toadd']['gitlist'] = array(
                'plugins' => 'PluginGitlistIndex'
            ); //en la clase form.class.php hace referencia esto

        }
    }
}

 function plugin_version_gitlist()
{
    return array(
        'name' => 'GitList',
        'version' => '1.1.0',
        'author' => "Alexander Chale",
        'license' => "GPLv2+",
        'homepage' => '',
        'requirements'   => [
            'glpi'   => [
               'min' => '9.4'
            ]
         ]
    );
}

function plugin_gitlist_check_config($verbose = false) {
    if (true) { // Your configuration check
       return true;
    }
 
    if ($verbose) {
       echo "Installed, but not configured";
    }
    return false;
 }

function plugin_gitlist_check_prerequisites()
{
    return true;
}
?>