<?php
/**
 * Este archivo sustituye a la pagina principal por defecto de WordPress
 * para demostrar el funcionamiento del despliegue automatizado
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebFusion Digital</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .caja {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
        }
        h1 { color: #0073aa; }
        .estado {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: bold;
        }
        .info {
            font-size: 0.9rem;
            color: #666;
        }
        .pie {
            margin-top: 20px;
            font-size: 0.8rem;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>
</head>
<body>

<div class="caja">
    <h1>WebFusion Digital S.L.</h1>
    
    <div class="estado">
        Despliegue Automatizado con exito
    </div>

    <p class="info">
        Esta página está siendo servida desde un contenedor <strong>Docker</strong> 
        dentro de una máquina virtual <strong>Ubuntu (Vagrant)</strong>.
    </p>

    <div class="pie">
         <p><strong>Roberto Cristian Bogatu</strong></p>
    </div>
</div>

</body>
</html>
