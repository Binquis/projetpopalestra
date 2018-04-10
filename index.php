<?php

    require_once('config.php');
    
    include('vendor/Renderizar.php');

    $raw = new Renderizar();

    $raw->run_header();

    $raw->run_main();

    $raw->run_footer();

    



