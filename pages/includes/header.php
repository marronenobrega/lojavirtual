
<!DOCTYPE html>
<html>
<head>
	<title>Loja Virtual</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,400;0,500;1,400&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400&family=Signika+Negative:wght@300;400;500;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo/fontawesome/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/style.css">
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
<div class="banner-principal">
    <header>
        <div class="container">
            <div class="logo"><a href="">Store</a></div>

                <nav class="desktop">
                    <ul>
                        <li><p style="background: #292929;"><a href="javascript:void(0);"><i class="fa-solid fa-cart-shopping"></i> Carrinho (<?php echo \models\homeModel::getTotalItemsCarrinho(); ?>)</p></a></li>
                        <li><p><a href="<?php echo INCLUDE_PATH ?>finalizar"><i class="fa-regular fa-circle-check"></i> Finalizar Pedido</p></a></li>
                    </ul>
                </nav>
            <div class="clear"></div>
            </div><!--container-->
    </header>
    