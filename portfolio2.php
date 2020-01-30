<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="portfolio2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio2</title>
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet"> 
</head>
<body>
	<navbar id="navbar"> <!--debut nav -->
		<ul class="nav-list">
		    <li>
		      <a href="#welcome-section" id="about" >About</a>
		    </li>
		    <li>
		      <a href="#projects" id="work" >Work</a>
		    </li>
		    <li>
		      <a href="#profile-link" id="contact">Contact</a>
		    </li>
		    <li>
		      <a href="./Benjamin.pdf" download="./Benjamin.pdf">CV</a>
		    </li>
 		</ul>
    </navbar>  <!-- fin nav -->

	<div class="box1" id="welcome-section">
		<div class="ptext">
            <span class="border">
				 Hey! I am Ben <br><br> junior web developper	
				 <img src="avataaars.png" alt="photo avatar">
			</span>
		</div>
	</div>

	<section class="section section-light">
       <p>These are some of my projects:</p>
    </section>

	<div class="box2" id="projects">
		<div class="projects1">
	    	<a href="https://salashmogwey.alwaysdata.net/projet_perso/menu.php?fbclid=IwAR1kZBrUOl0wTQy1E0L51PzFstKgY_evvnRvRkxXb0DKrq87wUPJ8KuaP74"
	      	target="_blank" class="project project-tile">
	        <h1>Parallax effect</h1></a>
        </div>

        <div class="projects2">
			<a href="https://codepen.io/salash/pen/rNNRKbP" target="_blank" class="project project-tile">
			<h2>Tribute page</h2></a>	
	    </div>
	</div>

	<section class="section section-light">
		<p>
	        You can also find me on:
	    </p>
	</section>

    <div class="box3" id="profile-link">
		<div class="ptext">
		    <div class="text-center contact-social-icons">       
		        <ul class="centered">
		        	<a href="https://codepen.io/salash" target="_blank"><li><i class="fa fa-codepen"></i> CodePen</li></a>
		            <a href="https://www.linkedin.com/in/benjamin-gouget-b43244167/" target="_blank"><li><i class="fa fa-linkedin-square"></i> LinkedIn</li></a>
		            <a href="https://github.com/salash13" target="_blank"><li><i class="fa fa-github"></i> Github</li></a>
		            <a href="https://www.freecodecamp.org/salash" target="_blank"><li>(<i class="fa fa-fire"></i>) FreeCodeCamp</li></a>
		        </ul>
		    </div>
			

		</div>
	</div>

	<section class="section section-dark">
	<p>
         To contact me please use the form below.
    </p>
    </section>

	<div class="box4" >
		<div class="avis">   
		    <form method="post" action="portfolio2.php" >
			    <div class="box5" >
			    	<div class="email">
			        <label for="email" >your email:</label>
			        <input type="email" name="email" id="email" required>
			   	    </div>
			   	    <div class="objet">
				        <label for="suggestion" >Objet:</label>
						    <!--     <input type="textarea" name="suggestion" id="suggestion" maxlength="500" size="100"></br> -->
						    <textarea class="zoneTexte" name="suggestion" id="suggestion" cols="31" rows="5" maxlength="500" ></textarea>
						    <br>
						     <div class="envoi">
						        <input type="Submit" name="submit" value="Send" >
						     </div>
						    </div>
					</div>
			</form>

	<?php
	$error_msg = '';
	$destinataire = 'salash@hotmail.fr';
	$objet = 'Suggestion';

	if(strlen($message) <=500&& isset($_POST['submit'])) {
		$expediteur = filter_var(htmlspecialchars(trim($_POST['email'])), FILTER_VALIDATE_EMAIL);
		$message = $_POST['suggestion'];
		 mail($destinataire, $objet, $message,$expediteur);
		$error_msg = '<p>Votre message à bien été envoyé</p>';
	}
	?>

		<div><?php echo $error_msg ?></div>
		<p>©️ Copyright 2019-2020 <br> Gouget Benjamin </p>
		<div class="top"><a href="#navbar"><p>Back to <br>top</p></a></div>
	</div>
	</div>
	<footer></footer>
   <!--  <script src="https://kit.fontawesome.com/db362d2acc.js" crossorigin="anonymous"></script> -->
	</body>
	</html>