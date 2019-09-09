<?php 
  include "anterior.php";
?>
<h1 class="text-center mt-3">Veja alguns dos nossos serviços</h1>
<div class="row">
  <?php
    include "banco.php";
    $query = "select * from produto order by rand() limit 12";
    $exec = mysqli_query($con, $query);
    while($p = mysqli_fetch_array($exec)){
      $titulo = $p['titulo'];
      $iproduto = $p['idproduto'];
      $preco = $p['preco'];
      $preco = number_format($preco, 2,',','.');
      $imagem = $p['imagem'];
      $descricao = $p['descricao'];
      $descricao = substr($descricao,0,50);
      echo "
       <div class='col-xs-12 col-md-6 col-lg-4 mt-3'>
           <div class='card'>
               <div class='card-header bg-primary text-white'>
               <h4>$titulo</h4>
           </div>
           <div class='card-body'>
               <img src='produtos/$imagem' style='width:100%' />
               <p>R$ $preco </p>
               <p>$descricao...</p>
           </div>
           <div class='card-footer'>
               <a href='produto.php?id=$iproduto' class='btn btn-outline-primary'>
               Ver mais
               </a>
               <a href='carrinho.php?id=$iproduto' class='btn btn-outline-danger'>
               Adicionar ao carrinho
               </a>
            </div> 
          </div>
       </div>
      ";
    }
  ?>

</php>
<?php 
  include "posterior.php";
?>