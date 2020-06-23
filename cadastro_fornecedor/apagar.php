<?php
    include("conexao.php");
    $element = new Conexao;
    $id=$_GET['cod'];
    $dados = $element->consulta("Delete from tb_fornecedor where cod_for=".$id);
?>
    <h1>PRODUTO EXCLUÍDO COM SUCESSO</h1><br>
    <a href="consultar.php"> VOLTAR</a>
    <style>
    body{
        background: green;
    }
    table{
        font-size: 25px;
        padding: 25px;
        margin-left: 22%;
        border: solid 5px white;
        text-align: center;
        background: goldenrod;
    }
    h1{
        text-align: center;
    }
    a{
        font-size: 35px;
        color: black;
        background: goldenrod;
        text-decoration:none;
        border: solid 5px white;
    }
</style> 


