<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!-- <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" /> -->
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
			<div class="all-notifications-list">
				<h1>Notifications</h1>
				<div class="timeline-filter">
					<ul>
						<li><span class="icon-16-list"></span></li>
						<li class="active"><a href="">All</a></li>
						<li><a href=""><p>Requests</p> </a></li>
						<li><a href=""><p>Interactions</p></a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<div class="individual-notification-box">
                        <p> 
                            <span class="icon-16-user-add"></span> 
                            <span class="all-notifications-time"> 17 hrs </span>
                        </p>
                        <img class= "all-notification-image" src="images/1.jpg">
                        <div class="all-notification-text"> 
                            <a href=""><h3>Chiroma Chukwuma Adekunle </h3></a>
                            <div class="all-notifications-message">Wants To Add You</div>
                        </div> 
                        <hr>
                        <p>
	                        <a class="all-notifications-actions"><span class="icon-16-cross"></span>Decline</a>
	                        <a class="all-notifications-actions"><span class="icon-16-checkmark"></span>Accept</a>
	                        <a class="all-notifications-actions"><span class="icon-16-dot"></span>View</a>
                        </p>
                        
                 </div>
                 <div class="individual-notification-box">
                        <p> 
                            <span class="icon-16-user-add"></span> 
                            <span class="all-notifications-time"> 17 hrs </span>
                        </p>
                        <img class= "all-notification-image" src="images/1.jpg">
                        <div class="all-notification-text"> 
                            <a href=""><h3>Chiroma Chukwuma Adekunle</h3></a>
                            <div class="all-notifications-message">Commented on Your Post</div>
                            <div class="all-notifications-comment"> "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ......."</div>
                        </div> 
                        <hr>
                        <p>
	                        <a class="all-notifications-actions"><span class="icon-16-dot"></span>View</a>
                        </p>
                        
                 </div>



          
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