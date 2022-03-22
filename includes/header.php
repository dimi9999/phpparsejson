<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Powered by Dimitris A.Papakonstantinou
    </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&family=Varela+Round&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
 
	<!-- HEADER -->
	<header id="header">
		<div class="container">
			<a class="logo" href="/"><img src="images/logo.jpg" alt=""></a>
			
			<?php
				$user_data = file_get_contents("data/user.json");
				$users = json_decode($user_data, true);
				if(count($users) != 0) {
				foreach($users as $user){
				?>
					<div class="User">Welcome <?php echo $user['name'] ?></div>
				
				<?php
		 
				}
				}
			?>
			
			
		</div>
	</header>