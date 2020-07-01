<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="../web/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="../web/css/owl.carousel.css">
	<link rel="stylesheet" href="../web/css/owl.theme.css">
	<link rel="stylesheet" href="../web/css/bootstrap.min.css">
	<link rel="stylesheet" href="../web/css/font-awesome.min.css">
	<link rel="stylesheet" href="../web/css/style.css">
	<link rel="stylesheet" href="../web/css/responsive.css">

	<!-- jS -->
	<script src="../web/js/jquery.min.js" type="text/javascript"></script>
	<script src="../web/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../web/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="../web/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="../web/js/jquery.nicescroll.js"></script>
	<script src="../web/js/jquery.scrollUp.min.js"></script>
	<script src="../web/js/main.js" type="text/javascript"></script>

    <title>Taberna do Seu Zé</title>
</head>
<body>
    <section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i>QUALQUER DÚVIDA, NOS CONTATE: <strong>+55 (92) 98431-5864</strong></p>
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<li>
							<a data-toggle="modal" data-target="#myModal" href="#">
							<i class="fa fa-user"></i>
								Cadastre-se
							</a>
						</li>
						
					</ul>
				</div>
				<div class="col-md-2">
					<div class="search-box">
						<div class="input-group">
					    	<input placeholder="Encontre seu produto" type="text" class="form-control">
					      	<span class="input-group-btn">
					        	<button class="btn btn-default" type="button"></button>
					      	</span>
					    </div><!-- /.input-group -->
					</div><!-- /.search-box -->
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->

	
	<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
		      		</div>
			      	<div class="modal-body clearfix">

						<form action="#" method="post" id="create-account_form" class="std">
							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									<h4>Enter your e-mail address to create an account.</h4>
									<p class="text">
										<label for="email_create">E-mail address</label>
										<span>
											<input placeholder="E-mail address"  type="text" id="email_create" name="email_create" value="" class="account_input">
					                    </span>
									</p>
									<p class="submit">
										<button class="btn btn-primary">Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
			      		<form action="" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="text" id="email" name="email" value="" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
									</p>
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Forgot your password?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>	
    </section>
    <!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<img src="../web/img/logo1.png" alt="logo">
						
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->

	
	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li class="active"><a href="index.html">PÁGINA INICIAL</a></li>
					<li><a href="prod.php">NOSSOS PRODUTOS</a></li>
					
					<li><a href="blog-single.html">NOSSA LOCALIZAÇÃO</a></li>
					<li class="dropdown">
						<a href="#">
							PAGES
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						   <li><a  href="#">Action</a></li>
						    <li><a  href="#">Another action</a></li>
						    <li><a  href="#">Something else here</a></li>
						    <li><a  href="#">Separated link</a></li>
						</ul>
					</li> <!-- End of /.dropdown -->

					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
    </nav>	<!-- End of /.nav -->
    
    <?php
// mostra produtos do DB
include("../controllers/db.php");
$conn='SELECT *FROM tb_produto';
$produto =$mysqli->query($conn);
/*while($mercadoria=$produto->fetch_assoc()){
    $nome=$mercadoria['nome'];
    $quantidade=$mercadoria['quantidade'];
    $vencimento=$mercadoria['vencimento'];
    $preco=$mercadoria['preco_venda'];
    echo$mercadoria["nome"]. " | " 
    .$mercadoria["quantidade"]. " | "
    .$mercadoria["vencimento"]. " | <br>";
    //.$mercadoria["preco"]."<br>";
}*/
?>
	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="products-heading">
						<h2>NOSSOS PRODUTOS</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
							<?php while($mercadoria=$produto->fetch_assoc()):?>
					        <li>
					            <div class="products">
									<a href="levar.php?cod_prod=<?=$mercadoria['cod_prod'];?>">
										<img src="../web/img/img_produtos/<?=$mercadoria['cod_prod']?>.png" alt="">
									</a>
									<a href="levar.php?cod_prod=<?=$mercadoria['cod_prod'];?>">
										<h4><?=$nome=$mercadoria['nome'];?></h4>
										<p class="price">Apenas: R$ <?=$preco=$mercadoria['preco_venda'];?></p>
										<div>
											<a class="view-link shutter" href="levar.php?cod_prod=<?=$mercadoria['cod_prod'];?>">
												<i class="fa fa-plus-circle"></i>Levar?
											</a>
										</div>
										<?php endwhile ?>
									</a>
									
								</div>	<!-- End of /.products -->
					        </li>			        
					        <!--  ... -->
					    </ul>
					</div>	<!-- End of /.products-grid -->

					<!-- Pagination -->

					<div class="pagination-bottom">
						<ul class="pagination">
						  	<li class="disabled"><a href="#">&laquo;</a></li>
						  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
						  	<li><a href="#">2</a></li>
						  	<li><a href="#">3</a></li>
						  	<li><a href="#">4</a></li>
						  	<li><a href="#">»</a></li>
						</ul>	<!-- End of /.pagination -->
					</div>
				</div>	<!-- End of /.col-md-9 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>Categorias</h4>
							<div class="list-group">
								<a href="prod_cat_alim.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Alimentos
								</a>
								<a href="prod_categoriaLimpeza.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Limpeza
								</a>
								<a href="prod_categoriaHP.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Higiênie Pessoal
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Papelaria
								</a>
								<a href="prod_categoriaBebidas.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Bebidas
								</a>
							</div>
						</div>
						<div class="block">
							<img src="../web/img/frutas_p.jpg" alt="">
						</div>
						<div class="block">
							
							<ul class="media-list">
							 	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="../web/img/frete.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">Entrega em até 25min após a compra.
							      		<p>Entenda o seu frete.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="../web/img/desconto.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">Desconto na primeira compra
							      		<p>Para quem mora no bairro da Compensa</p></a>
							    	</div>
							  	</li>
							  	
							  </ul>
						</div>

						
				</div>	<!-- End of /.col-md-3 -->
			
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
    </section>	<!-- End of Section -->

	
	<!-- FOOTER-BOTTOM Start
    ================================================== -->

	<footer>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="cash-out pull-left">
							<li>
								<a href="#">
									<img src="../web/images/American-Express.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../web/images/PayPal.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../web/images/Maestro.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../web/images/Visa.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../web/images/Visa-Electron.png" alt="">	
								</a>
							</li>
						</ul>
						<p class="copyright-text pull-right">Mão no código @2020 Desenvolvido por <a href="http://www.themexpert.com">N@t@li@</a> Todos os direitos Reservados</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>

</body>
</html>