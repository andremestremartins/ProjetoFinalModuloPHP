<?php
/**
 * Cabeçalho HTML comum (Head tag, meta tags, fonts e stylesheets)
 */
require_once __DIR__ . "/session.php";

$title = isset($pageTitle) ? htmlspecialchars($pageTitle) . " - Zoo de Picoas" : "Zoo de Picoas - Parque & Aventura Animal";
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Estilos CSS do Projeto -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
