<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.fancybox.pack.js?v=2.1.4"></script>
</head>
<body>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
			openEffect	: 'none',
			closeEffect	: 'none'

		});
	});
	</script>
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
			<div class="all-friends-list">

				<div class="friends-box">
					<div class="friend-search-box">
						<input name="" class="friend-search-field float-left" placeholder="Search Friends" type="text" value="" required="">
						<div class="float-left">
							<input type="submit" class="button" value="Search">
						</div>
						<div class="float-right">
							<input type="submit" class="button submit" value="Invite Friends">
						</div>
						<div class="clear"></div>
					</div>	
				</div>

				<div class="individual-friend-box">
					<a class= "fancybox " id="inline" href="#data1">
						<div class="friend-image">
							<img src="images/1.jpg">
						</div>
						<div class="friend-text">
						 	<div class="friend-name">Chiroma Chukwuma Adekunle</div>
							<div class="friend-location">Abuja, Federal Capital Territory, Nigeria</div>
						</div>
						<div style="display:none">
							<div id="data1">
								<div class="aside-wrapper">
									<img class="profile-pic margin" src="images/1.jpg">
									<table>
										<tr><td></td><td><h3>Ciroma Chukwuma Adekunle</h3></td></tr>
										<tr><td><span class="icon-16-map"></span></td><td class="profile-meta"> Abuja, Federal Capital Territory, Nigeria</td></tr>
										<tr><td><span class="icon-16-female"></span></td><td class="profile-meta"> Female</td></tr>
										<tr><td><span class="icon-16-male"></span></td><td class="profile-meta"> Male</td></tr>
										<tr><td><span class="icon-16-dot"></span></td><td class="profile-meta"><a href="">See Profile</a> </td></tr>
									</table>					
									<div class="clear"></div>
									<button class="profile-meta-functions button"><span class="icon-16-eye"></span> Wink</button>
												<button class="profile-meta-functions button"><span class="icon-16-mail"></span> Send Message</button><!-- 
												<button class="profile-meta-functions"><span class="icon-16-add-to-list"></span> Request Friendship</button>
												<button class="profile-meta-functions"><span class="icon-16-cross"></span> De-Friend</button> -->
												<button class="profile-meta-functions button"><span class="icon-16-checkmark"></span> Accept Friendship</button>

												<div class="clear"></div>
											</div>
										</div>
									</div>
								</a>
							</div>

							<div class="individual-friend-box">
								<a class= "fancybox" id="inline" href="#data1">
									<div class="friend-image">
										<img src="images/1.jpg">
									</div>
									<div class="friend-text">
										<div class="friend-name">Al-Asaad Bin Muhammad Al-Menk Daud Suleiman</div>
										<div class="friend-location">Abuja, Federal Capital Territory, Nigeria</div>
									</div>
									<div style="display:none">
										<div id="data1">
											<div class="aside-wrapper">
												<img class="profile-pic" src="images/1.jpg">
												<table>
													<tr><td></td><td><h3>Ciroma Chukwuma Adekunle</h3></td></tr>
													<tr><td><span class="icon-16-map"></span></td><td class="profile-meta"> Abuja, Federal Capital Territory, Nigeria</td></tr>
													<tr><td><span class="icon-16-female"></span></td><td class="profile-meta"> Female</td></tr>
													<tr><td><span class="icon-16-male"></span></td><td class="profile-meta"> Male</td></tr>
													<tr><td><span class="icon-16-dot"></span></td><td class="profile-meta"><a href="">See Profile</a> </td></tr>
												</table>					
												<div class="clear"></div>

												<button class="profile-meta-functions button"><span class="icon-16-eye"></span> Wink</button>
												<button class="profile-meta-functions button"><span class="icon-16-mail"></span> Send Message</button><!-- 
												<button class="profile-meta-functions"><span class="icon-16-add-to-list"></span> Request Friendship</button>
												<button class="profile-meta-functions"><span class="icon-16-cross"></span> De-Friend</button> -->
												<button class="profile-meta-functions button"><span class="icon-16-checkmark"></span> Accept Friendship</button>

												<div class="clear"></div>
											</div>
										</div>
									</div>
								</a>
							</div>

							<div class="clear"></div>
						</div>

					<?php
					include("aside.php");
					?>
						<div class="clear"></div>		
					</div>
					<?php
					include("footer.php");
					?>
				</div>

			</body>
			</html>