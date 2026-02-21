<?php
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) 
    ? "https://" 
    : "http://";

    $host = $_SERVER['HTTP_HOST'];
    $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

    $root = $protocol . $host . $basePath . "/".basename(__DIR__);
    
    $data = array(
        "title" => "Asociación Granjas de Paz",
        "nit" => "",
        "metadescription" => "Somos la Asociación Granjas de Paz, una organización sin ánimo de lucro enfocada en el desarrollo rural, el fortalecimiento del sector agropecuario y la promoción de proyectos productivos para el bienestar de las comunidades del campo.",
        "root" => $root,
    );