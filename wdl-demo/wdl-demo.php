<?php
/*
PLugin Name: WDL demo pets
Description: Wonderland demo plugin
*/

use WDLDemo\Plugin;

// IMPORTANT ne pas oublier de charger l'autoloader du "starter kit"
require __DIR__ . '/../wdl/vendor-wdl/autoload.php';
require __DIR__ . '/vendor-wdl/autoload.php';

$plugin = new Plugin();

register_activation_hook(
    __FILE__,
    [$plugin, 'activate']
 );


 register_deactivation_hook(
    __FILE__,
    [$plugin, 'deactivate']
 );

