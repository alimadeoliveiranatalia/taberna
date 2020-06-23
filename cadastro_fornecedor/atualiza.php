<?php
    include("conexao.php");
    $element = new Conexao;
    $id=$_GET['cod'];

    $consulta = $element->consulta('Select * from tb_fornecedor where cod_for ='.$id);

    $dados  = $consulta->fetch_assoc();
    

    ?>
    <style>
        body{
            background: green;
        }
        form{
            font-size: 35px;
            margin-left:32%; 
            margin-top:10%; 
        }
        input{
            height: 35px;
            border-radius: 15px;
            font-size: 25px;
            text-align: center;
        }
    </style>

    <form action="_atualizar.php" method="POST">
    <label for="">Código do Fornecedor:</label><br>
    <input hidden type="text" name="cod" value="<?=$dados['cod_for'] ?>">


    <input disabled type="text" name="" value="<?=$dados['cod_for'] ?>"><br>
    <label for="">Nome do Fornecedor:</label><br>
    <input type="text" name="nome" value="<?=$dados['nome_for'] ?>"><br>
    <label for="">Valor da Compra:</label><br>
    <input type="text" name="compra" value="<?=$dados['preco_compra'] ?>"><br>
    <label for="">Data da Compra:</label><br>
    <input type="date" name="data" value="<?=$dados['data_compra']?>"><br>
    <br><button type="submit"> Salvar   </button>
 
    
    </form>


<?php



?>
  