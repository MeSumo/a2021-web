<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>CVMAQUA</title>
        <link href="css/global.css" rel="stylesheet" media="screen" />
        <link href="css/jquery.lightbox-0.5.css" rel="stylesheet" media="screen" />
        <script src="js/jquery-1.4.2.min.js"></script>
        <script src="js/jquery.lightbox-0.5.min.js"></script>
		<script src="https://notes-de-cours.com/dev/toggle-lab-info.js"></script>
    </head>
    <body>
		<div class="site-container">
		    <div class="page-container">
		    	<div class="site-header">
		    		<div class="page-title-section">
			    		<h1>CVMAQUA - Groupe de protection de l'eau</h1>
			    		<h2><?= $data["pageName"] ?></h2>
		    		</div>
		    		<div class="menu-section">
		    			<ul>
		    				<li><a href="index.php">Accueil</a></li>
							<li><a href="images.php">Galerie photos</a></li>
		    				<li><a href="contact.php">Contactez-nous</a></li>
							<li><a href="login.php">Log in</a></li>
							<?php
								if($action->isLoggedIn()){
									?>
										<li><a href="admin-index.php">Accueil-Admin</a></li>
										<li><a href="?logout=true">Déconnexion</a></li>
									<?php
								}
							?>

		    			</ul>
		    		</div>
		    		<div class="clear"></div>
		    	</div>
		    	<div class="page-content">