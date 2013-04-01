<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
</head>
<body>
	<div class="page-wrapper">
		<?php
		include ("nav.php");
		include ("nav-user.php");
		?>
		<div class="logo"><img src="images/gossout-logo-text-svg.svg" alt=""></div>

		<div class="content">
			<script type="text/javascript">
			function showHide(shID) {
				if (document.getElementById(shID)) {
					if (document.getElementById(shID+'-show').style.display != 'none') {
						document.getElementById(shID+'-show').style.display = 'none';
						document.getElementById(shID).style.display = 'block';
					}
					else {
						document.getElementById(shID+'-show').style.display = 'inline';
						document.getElementById(shID).style.display = 'none';
					}
				}
			}

			</script>
			<div class="communities-list">
				<h1>Communities</h1>

				<div class="community-search-box">
					<input name="" class="community-search-field " placeholder="Search Communities" type="text" value="" required="">
					<input type="submit" class="button" value="Search">
				</div>
				<div class="clear"></div>
				

				<div class="community-box">
					<div class="notice">
						You do not currently belong to any Community.
						Here are some suggestions we think you might like!

					</div>
					<div class="timeline-filter">
					<ul>
						<li><span class="icon-16-earth"></span></li>
						<li class="active"><a href=""><p>Suggestions</p> </a></li>
						<li><a href=""><p>My Communities</p></a></li>
					</ul>
				</div>
				<div class="clear"></div>
					
					<div class="community-box-wrapper">
						<div class="community-image">
							<img src="images/1.jpg">
						</div>
						<div class="community-text">
							<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
							<hr>
							<p class="community-privacy"> 
								<div class="details">ERP, a radio programme like no other... 
									with sole objective of making serious issues light. We educate and entertain.

								</div>
								<div class="members">Private</div>
								<div class="members">200 Members</div>
								<div class="members">200 Posts</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="community-box-wrapper">
							<div class="community-image">
								<img src="images/1.jpg">
							</div>
							<div class="community-text">
								<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
								<hr>
								<p class="community-privacy"> 
									<div class="details">ERP, a radio programme like no other... 
										with sole objective of making serious issues light. We educate and entertain.

									</div>
									<div class="members">Private</div>
									<div class="members">200 Members</div>
									<div class="members">200 Posts</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="community-box-wrapper">
								<div class="community-image">
									<img src="images/1.jpg">
								</div>
								<div class="community-text">
									<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
									<hr>
									<p class="community-privacy"> 
										<div class="details">ERP, a radio programme like no other... 
											with sole objective of making serious issues light. We educate and entertain.

										</div>
										<div class="members">Private</div>
										<div class="members">200 Members</div>
										<div class="members">200 Posts</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="community-box-wrapper">
									<div class="community-image">
										<img src="images/1.jpg">
									</div>
									<div class="community-text">
										<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
										<hr>
										<p class="community-privacy"> 
											<div class="details">ERP, a radio programme like no other... 
												with sole objective of making serious issues light. We educate and entertain.

											</div>
											<div class="members">Private</div>
											<div class="members">200 Members</div>
											<div class="members">200 Posts</div>
										</div>
										<div class="clear"></div>
									</div>
									<div class="community-box-wrapper">
										<div class="community-image">
											<img src="images/1.jpg">
										</div>
										<div class="community-text">
											<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
											<hr>
											<p class="community-privacy"> 
												<div class="details">ERP, a radio programme like no other... 
													with sole objective of making serious issues light. We educate and entertain.

												</div>
												<div class="members">Private</div>
												<div class="members">200 Members</div>
												<div class="members">200 Posts</div>
											</div>
											<div class="clear"></div>
										</div>
										<div class="community-box-wrapper">
											<div class="community-image">
												<img src="images/1.jpg">
											</div>
											<div class="community-text">
												<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
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
													<img src="images/1.jpg">
												</div>
												<div class="community-text">
													<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
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
														<img src="images/1.jpg">
													</div>
													<div class="community-text">
														<div class="community-name"><a href="sample-community.php">Eko Radio Party</a> </div>
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