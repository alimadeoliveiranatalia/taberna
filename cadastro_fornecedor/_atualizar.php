<style>
    body{
        background: green;
        font-size: 35px;
        color:black;
        text-align: center;
        font-style:unset;
    }
    a{
        font-size: 35px;
        color: black;
        background: goldenrod;
        text-decoration:none;
        border: solid 5px white;
    }
</style>

<?php
include("conexao.php");
$element = new Conexao;

$cod = $_POST['cod'];
$nome = $_POST['nome'];
$compra=$_POST['compra'];
$data=$_POST['data'];
$element->consulta("update tb_fornecedor set nome_for ='$nome', 
preco_compra='$compra', data_compra='$data' where tb_fornecedor.cod_for='$cod' ");
echo "Alterações salvas";


?>
<a href="consultar.php">Voltar</a>