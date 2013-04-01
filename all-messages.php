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
			<div class="all-messages-list">
				<h1>Messages</h1>
				<input type="submit" class="button submit float-right" value="New Message">
				<div class="individual-message-box">
                        <p> 
                            <span class="all-messages-time"> 17 hrs </span>
                        </p>
                        <img class= "all-messages-image" src="images/1.jpg">
                        <div class="all-messages-text"> 
                           <h3> <a href="">Chiroma Chukwuma Adekunle</a> </h3>
                            <div class="all-messages-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor.....</div>
                        </div> 
                        <hr>
                        <p>
	                        <a class="all-messages-actions"><span class="icon-16-trash"></span>Delete</a>
	                        <a href="message-conversation.php" class="all-messages-actions"><span class="icon-16-reply"></span>Reply</a>
                        </p>   
                 </div>
                 <div class="individual-message-box">
                        <p>
                            <span class="all-messages-time"> 17 hrs </span>
                        </p>
                        <img class= "all-messages-image" src="images/1.jpg">
                        <div class="all-messages-text"> 
                            <h3><a href="">Chiroma Chukwuma Adekunle </a></h3>
                            <div class="all-messages-message">
                            	<span class="icon-16-reply"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor.....</div>
                        </div> 
                        <hr>
                        <p>
	                        <a class="all-messages-actions"><span class="icon-16-trash"></span>Delete</a>
	                        <a href="message-conversation.php" class="all-messages-actions"><span class="icon-16-dot"></span>View</a>
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