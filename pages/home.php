<div class="frase-loja">
    <div class="container">
        <h2>O Traje do Jogador Caro </h2>
    </div>
    </div>

	<div class="box-categoria">
   
	<?php
			$items = \models\homeModel::getLojaItems();
			foreach ($items as $key => $value) {
			$imagem = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque_imagens` WHERE produto_id = $value[id]");
			$imagem->execute();
			$imagem = $imagem->fetch()['imagem'];
		?>
		 <div class="cards">
        <div class="card-categoria">
            <div class="card-categorias-wraper">   
			
        
      
			<a href=""><img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $imagem; ?>"></a>
			
			
			
            
			
			<h2><?php echo $value['nome']; ?></h2>  
            <p>R$<?php echo \Painel::convertMoney($value['preco']); ?></p>
            <h3 class="carrinho"><a href="<?php echo INCLUDE_PATH ?>?addCart=<?php echo $value['id']; ?>"><i class="fa fa-cart-shopping"></i> Adicionar no Carrinho</a></h3>
            </div><!--card-categorias-wraper-->
            </div><!--card-categoria-->
        </div><!--cards-->

		<?php } ?>

	
	<div class="clear"></div>

	</div><!--box-categorias-->
