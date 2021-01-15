<?php

    require_once './src/PilihanRaya.php';

    $object = new \PilihanRaya\PilihanRaya();

    echo "<pre>";
    print_r($object->constituencies()['constituencies']['Malaysia']['Perlis']);
    echo "</pre>";