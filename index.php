<?php include ('includes/header.php')?>

	<!-- MAIN -->
	<main>
		<div class="container">
	
			<!-- LEFT COLUMN -->
			<section class="leftCol">
				<h1 class="articlesTitle">Articles</h1>
					<!-- ARTICLE -->
					<?php
						$articlesdata = file_get_contents("data/articles.json");
						$articlesjson = json_decode($articlesdata, true);
						$output1 = "<div class='articlesInner'>";
						
						foreach($articlesjson['articles'] as $article){
							$output1 .= "<div class='article'>";
							$output1 .= "<div class='title'><h3>".$article['title']."</h3></div>";
							$output1 .= "<div class='image'><img src=".$article['image']." alt='image'></div>";
							$output1 .= "<div class='content'>";
							$output1 .= "<p><a href=".$article['url'].">".$article['url']."</a></p><br>";
							$output1 .= "<p>".$article['date']."</p><br>";
							$output1 .= "<p>".$article['author']."</p><br>";
							$output1 .= "<p>".$article['category']."</p><br>";
							$output1 .= "<div>".$article['content']."</div>";
							$output1 .= "</div>";
							$output1 .= "</div>";
					
						}
						$output1 .= "</div>";
						echo $output1;
					?>
					<!-- ARTICLE -->
			</section>
			<!-- RIGHT COLUMN -->
			<section class="rightCol">
				<h2>Events</h2>
				<!-- LIST -->
					<?php
						$eventsdata = file_get_contents("data/events.json");
						$eventsjson = json_decode($eventsdata, true);
						$output2 = "";
						
						foreach($eventsjson['events'] as $event){
							$output2 .= "<div class='eventListContainer'>";
							$output2 .= "<div class='list'>";
							$output2 .= "<div class='title'>".$event['title']."</div>";
							$output2 .= "<div class='url'><strong>Url: </strong><a href=".$event['url'].">".$event['url']."</a></div>";
							$output2 .= "<div class='location'><strong>Location:</strong>".$event['location']."</div>";
							$output2 .= "<div class='date'><strong>Date:</strong>".$event['date']."</div>";
							$output2 .= "</div>";
							$output2 .= "</div>";
							
						}
						
						echo $output2;
					?>

				 
				<!-- LIST -->
			 
			</section>
		</div>
	</main>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
     
    <!-- footer and functions -->
    <?php include ('includes/footer.php')?>
  </body>
</html>
