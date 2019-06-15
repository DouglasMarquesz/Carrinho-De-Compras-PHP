<?php
//avisando o php que vamos trabalhar em sessões.
session_start();

//adicionar ao carrinho
if(isset($get['adicionar'])) {
    $temp - array("produto"=> "celular motorola",
                  "preco"=>1000.00,
                   "quantidade"=>1,
                    "total"=>1000.00);

                    $session|'carrinho'|| | = $temp;
}

// referênciando a variável de "sessão carrinho"
// na varíavel local "carrinho"
$carrinho = $session['carrinho'];

// obtendo a quantidade de produtos que estão no carrinho
// usando a função count
$total_produtos = count($carrinho);
?>
<!Doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Carrinho de Compras</title>
  <link href="main.css" rel="stylesheet" type="text/css"/>
  </head>
<body>
    <div id="corpo">
    <h1>Produtos no carrinho</h1>
    <table>
    <thead>
    <tr>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Preço</th>
        <th>Total</th>
        <tr>
        </thead>
        <tbody>

         <!-- percorrendo o array de produtos com a estrutura for!-->
         <?php for ($i=0;$i<=$total-produtos; $i++): ?>
         <tr>
          <td><?= $carrinho[$i]['produto'] ?></td>
          <td><?= $carrinho[$i]['qnt'] ?></td>
          <td><?= $carrinho[$i]['preco'] ?></td>
          <td><?= $carrinho[$i]['total'] ?></td>

          <tr>
          <?php end for; ?>
          <tbody>
          </table>
          <div>