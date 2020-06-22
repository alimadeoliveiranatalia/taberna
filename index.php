<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: gold;
        }
        table{
            background-color: white;
            font-size: 25px;
            border: 3px;
        }
    </style>
    <title>MVC</title>
</head>
<body>
    <pre>
        <?php
            require_once 'conecxao.php';
            require_once 'produto.php';
            $chamada = new Produto();
            $chamada->listar();
            
        
        ?>
    
    
    </pre>
</body>
</html>