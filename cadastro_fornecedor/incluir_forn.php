<?php
    include('conexao.php');
    $primeiro= new Conexao(); // conecta com o banco de dados

 // valores do formulário que serão recebidos via POST
    $nome_forn=$_POST['nome']; // $variável=$_POST['coluna']
    $quant_compra=$_POST['quant_compra'];
    $preco=$_POST['p_compra'];
    $preco_unid=$_POST['preco_unid'];
    $data_compra=$_POST['data_compra'];

 //inserindo os valores via SQL

    $primeiro->consulta("insert into tb_fornecedor(nome_for,quant_compra,preco_compra,preco_unid,data_compra)
    values('$nome_forn','$quant_compra','$preco','$preco_unid','$data_compra')");
    echo"<h1>Fornecedor cadastrado com sucesso!</h1>"

?>
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
<br>
<center><a href="menu.html">Voltar</a></center>