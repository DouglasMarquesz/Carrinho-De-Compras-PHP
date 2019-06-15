<?php
session_start(); //avisando o php que essa pagina trabalha com sessões.

/**
* Verifico se a variavel de ações existe,para então verificarqual ação o usuário ordenou.
 */
if (isset($_GET['acao_carrinho'])) {

switch($_GET['acao_carrinho']) {

  case'limpar': // na url do navegador: carrinho_acoes.php?acao_carrinho=limpar
     $session['carrinho'] =  array();// ao definir o carrinho como array novamente,limpamos ele.
 break  ;

 case 'add' ://adiciona um produto ao carrinho.
 //  pegando as variaveis da url com os dados do produto (isso não é o ideal, apenas didático)
 $produto = $_GET['carr_produto'];
 $preco = $_GET['carr_preco'];
 $qnt = $_GET['carr-qnt'];
 $total = $preco * $qnt;

 $dados_produtos_a_ser_add = array("produto"=>$produto,"preco" => $preco, "quantidade" => $qnt,"total"=>$total);
 $session['carrinho'][] = $dados_produtos_a_ser_add; //adicionando os dados estruturados do produto
 break;
 case 'remover';
  $item_carrinho = $_GET['item'];
  if (isset($_SESSION['carrinho'][$item_carrinho])){ //verificando se o item realmente existe.
    unset($_SESSION['carrinho'][$item_carrinho]); //se existe,destrói o item.
   }
  break;
 case ' atualiza-qnt':
 $item_carrinho = $_GET['item'];
 if(isset($_SESSION['carrinho'][$item_carrinho])){ //verificando se o item existe...
    $qnt = (int)$_GET['carr_qnt']; //pegando a quantidade que ele deseja.
     $total = $_SESSION['carrinho'][$item_carrinho]{'preco'} * $qnt; //atualizando o total...
   
     $_SESSION['carrinho'][$item_carrinho]['quantidade']= $qnt; // definido novamente aa quantidade.
     $_SESSION['carrinho'][$item_carrinho]['total']= $total;
}
break ;
 }// fim do switch
}// fim do if do isset
?>