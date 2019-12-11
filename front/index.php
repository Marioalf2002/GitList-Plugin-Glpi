<?php
/*
 *
 -------------------------------------------------------------------------
 Plugin GLPI Example
 */

include ("../../../inc/includes.php");

Session::checkLoginUser();
session_start();

$plugin = new Plugin();
if (!$plugin->isInstalled("gitlist") || !$plugin->isActivated("gitlist")) {
   Html::displayNotFoundError();
}

Session::checkRight('plugin_gitlist', READ);

$app = new PluginGitlistIndex();

Html::header(
   $LANG['plugin_gitlist']['title'],
   $_SERVER["PHP_SELF"],
   'plugins',
   "PluginGitlistIndex"
);

$app->formIndex();

if (Session::getCurrentInterface() == "helpdesk") {
   Html::helpFooter();
} else {
   Html::footer();
}

?>