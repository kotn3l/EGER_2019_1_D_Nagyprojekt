<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="shortcut icon" href=<?=site_url("assets/img/fav.png")?>>

		<meta name="author" content="codepixer">

		<meta name="description" content="">

		<meta name="keywords" content="">

		<meta charset="UTF-8">

		<title>Használt járművek vásárlása</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

			<link rel="stylesheet" href=<?=site_url("assets/css/linearicons.css")?>>
			<link rel="stylesheet" href=<?=site_url("assets/css/font-awesome.min.css")?>>
			<link rel="stylesheet" href=<?=site_url("assets/css/bootstrap.css")?>>
			<link rel="stylesheet" href=<?=site_url("assets/css/magnific-popup.css")?>>
			<link rel="stylesheet" href=<?=site_url("assets/css/nice-select.css")?>>					
			<link rel="stylesheet" href=<?=site_url("assets/css/animate.min.css")?>>
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">	
			<link rel="stylesheet" href=<?=site_url("assets/css/owl.carousel.css")?>>
			<link rel="stylesheet" href=<?=site_url("assets/css/main.css")?>>
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href=<?=site_url()?>><img src=<?=site_url("assets/img/logo.png")?> alt="Használ Járművek Olcsón" title="Használ Járművek Olcsón" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href=<?=site_url()?>>Kezdőlap</a></li>
				          <li><a href=<?=site_url("about")?>>Rólunk</a></li>
						  <li><a href=<?=site_url("bike")?>>Motorok</a></li>
				          <li><a href=<?=site_url("car")?>>Autóink</a></li>
						  <li><a href=<?=site_url("blog")?>>Blog</a></li>
						  <?php if ($this->ion_auth->logged_in()) {
								echo '<li><a href='.site_url('menu').'>Menü</a></li>';
								echo '<li><a href='.site_url('auth/logout').'>Kilépés</a></li>';
							} else
							echo '<li><a href='.site_url("login").'>Bejelentkezés</a></li>';
						  ?>
				        </ul>
				      </nav>		    		
			    	</div>
			    </div>
			  </header>