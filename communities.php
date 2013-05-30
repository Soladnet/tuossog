<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
	<script>
		$(document).ready(function(){

		  $('#all').addClass('active');

		  $("#all").click(function(){
		  	$('#my-communities-list').show();
		    $('#suggestion-list').show();
		    $('#my-communities').removeClass('active');
		    $('#suggestions').removeClass('active');
		    $('#all').addClass('active');
		  });

		  $("#suggestions").click(function(){
		  	$('#my-communities-list').hide();
		    $('#suggestion-list').show();
		    $('#all').removeClass('active');
		    $('#my-communities').removeClass('active');
		    $('#suggestions').addClass('active');
		  });

		  $("#my-communities").click(function(){
		  	$('#suggestion-list').hide();
		    $('#my-communities-list').show();
		    $('#all').removeClass('active');
		    $('#suggestions').removeClass('active');
		    $('#my-communities').addClass('active');
		    
		  });
		});
</script>
</head>
<body>
	<div class="page-wrapper">
		<?php
		include ("nav.php");
		include ("nav-user.php");
		?>
		<div class="logo"><img src="images/gossout-logo-text-svg.svg" alt=""></div>

		<div class="content">
			<div class="communities-list">
				<h1>Communities</h1>

				<div class="community-search-box">
					<input name="" class="community-search-field " placeholder="Search Communities" type="text" value="" required="">
					<input type="submit" class="button" value="Search">
				</div>
				<div class="clear"></div>
				

				<div class="community-box">
					<div class="timeline-filter">
						<ul>
							<li><span class="icon-16-earth"></span></li>
							<li id="all"><div ><a>All</a></li>
							<li id="suggestions"><a>Suggested</a></li>
							<li id="my-communities"><a>My Communities</a></li>
						</ul>
					</div>
				<div class="clear"></div>
					
										
				<div id="suggestion-list">
					<div class="community-box-wrapper">
						<div class="community-image">
							<img src="images/1.jpg" onload="OnImageLoad(event);">
						</div>
						<div class="community-text">
							<div class="community-name"><a href="sample-community.php"><img src="images/gossout-verified.png" class="verified-community">Suggested Community 1</a> </div>
							<hr>
							<p class="community-privacy"> 
								<div class="details">ERP, a radio programme like no other... 
									with sole objective of making serious issues light. We educate and entertain.

								</div>
								<div class="members">Private</div>
								<div class="members">200 Members</div>
								<div class="members">200 Posts</div>
							</div>
							<a class="float-right">Join</a> <div class="clear"></div>

						</div>
						<div class="community-box-wrapper">
							<div class="community-image">
							<img src="images/1.jpg" onload="OnImageLoad(event);">
						</div>
							<div class="community-text">
								<div class="community-name"><a href="sample-community.php">Suggested Community 2</a> </div>
								<hr>
								<p class="community-privacy"> 
									<div class="details">ERP, a radio programme like no other... 
										with sole objective of making serious issues light. We educate and entertain.

									</div>
									<div class="members">Private</div>
									<div class="members">200 Members</div>
									<div class="members">200 Posts</div>
								</div>
								<a class="float-right">Join</a> <div class="clear"></div>

							</div>
						</div>

						<div id="my-communities-list">
							<div class="community-box-wrapper">
								<div class="community-image">
									<img src="images/1.jpg" onload="OnImageLoad(event);">
								</div>
								<div class="community-text">
									<div class="community-name"><a href="sample-community.php">My Personal Community</a> </div>
									<hr>
									<p class="community-privacy"> 
										<div class="details">ERP, a radio programme like no other... 
											with sole objective of making serious issues light. We educate and entertain.

										</div>
										<div class="members">Private</div>
										<div class="members">200 Members</div>
										<div class="members">200 Posts</div>
									</div>
								</div>
								<div class="community-box-wrapper">
									<div class="community-image">
										<img src="images/1.jpg" onload="OnImageLoad(event);">
									</div>
									<div class="community-text">
										<div class="community-name"><a href="sample-community.php">My Personal Community 2</a> </div>
										<hr>
										<p class="community-privacy"> 
											<div class="details">ERP, a radio programme like no other... 
												with sole objective of making serious issues light. We educate and entertain.

											</div>
											<div class="members">Private</div>
											<div class="members">200 Members</div>
											<div class="members">200 Posts</div>
										</div>
									</div>
									<div class="community-box-wrapper">
										<div class="community-image">
											<img src="images/1.jpg" onload="OnImageLoad(event);">
										</div>
										<div class="community-text">
											<div class="community-name"><a href="sample-community.php">My Personal Community 3</a> </div>
											<hr>
											<p class="community-privacy"> 
												<div class="details">ERP, a radio programme like no other... 
													with sole objective of making serious issues light. We educate and entertain.

												</div>
												<div class="members">Private</div>
												<div class="members">200 Members</div>
												<div class="members">200 Posts</div>
											</div>
										</div>
									</div>

								</div>
								<div><h3>Would you like to create one? It's very easy! 
									<br>
									<button class="button-big"><a href="create-community.php">New Community</a></button></h3></div>
								</div>

								<?php
								include("aside.php");
								?>	
							</div>
							<?php
							include("footer.php");
							?>
						</div>

	</body>
</html>