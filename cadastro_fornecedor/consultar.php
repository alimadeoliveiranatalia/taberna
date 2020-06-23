<?php
// Selecionar fornecedor;

include("conexao.php");
$conn= new Conexao();
//$dados = $conn->consulta("Select * from tb_produto");
//$cod = $conn->consulta("select cod_prod from tb_produto");
//echo"<table border=2>";
//echo"---------------PRODUTOS-------------------<br>";
//echo"<tr>";
//echo"<td>PRODUTO</td>
//    <td>QUANTIDADE</td>
//    <td>VENCIMENTO</td>
//    <td>PREÇO</td>";
//echo"</tr>";
//foreach ($dados as $value) {
//    echo"<tr>";
//    echo "<td>".$value['nome']."</td>
//    <td> ".$value['quantidade']."</td>
//    <td>".$value['vencimento']."</td>
//    <td>".$value['preco_venda']."</td>
//    <td><a href=atualiza.php?cod=".$value['cod_prod'].">EDITAR</a></td>";   
//    echo"</tr>";
//}
//echo"</table>";
echo"<br>";
echo"<table border=2>";
echo "<h1>--------------FORNECEDORES------------------</h1><br>";
$fornecedor = $conn->consulta("Select * from tb_fornecedor");
echo"<tr>";
echo"<td>NOME</td>
    <td>QUANTIDADE</td>
    <td>DATA DA COMPRA</td>";
echo"</tr>";
foreach ($fornecedor as $value) {
    echo"<tr>";
    echo "<td>".$value['nome_for']."</td>
    <td> ".$value['quant_compra']."</td>
    <td>".$value['data_compra']."</td>
    <td><a href=atualiza.php?cod=".$value['cod_for'].">Editar</a></td>
    <td><a href=apagar.php?cod=".$value['cod_for'].">Apagar</a></td>";
    echo"</tr>";
}
echo"</table>";

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