<?php
/**
 * Created by PhpStorm.
 * User: salvadorlopez
 * Date: 12/02/20
 * Time: 20:13
 */
$hook_array['before_save'][] = Array(
    1,
    'Guarda información proveniente de mobile',//Just a quick comment about the logic of it
    'custom/modules/ProductBundles/GetFromMobile.php', //path to the logic hook
    'GetFromMobile', // name of the class
    'settingDataFromMobile' // name of the function.
);