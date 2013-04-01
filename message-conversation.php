<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
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
				<h2> <a href="#">Ciroma Chukwuma Adekunle <span class="icon-16-chat"></span></a></h2>
				<hr>
				<div class="compose-box">
					<form>
						<textarea required placeholder="Compose a message"></textarea>
						    <input type="submit" class="submit button float-right" value="Send">
							<button class="button float-right hint hint--left" data-hint ="Upload Image"><span class="icon-16-camera"></span></button>
					</form>
					<div class="clear"></div>
				</div>

				<div class="float-right"><span class="icon-16-arrow-left"></span><a href="all-messages.php" class="back">Back to messages</a></div>
				<div class="individual-message-box">
                        <p>
                            <span class="all-messages-time"> 19 hrs </span>
                        </p>
                        <img class= "all-messages-image" src="images/1.jpg">
                        <div class="all-messages-text"> 
                            <a href=""><h3>Chiroma Chukwuma Adekunle </h3></a>
                            <div class="all-messages-message">Lorem</div>
                        </div>    
                 </div>
                 <div class="individual-message-box">
                        <p>
                            <span class="all-messages-time"> 17 hrs </span>
                        </p>
                        <img class= "all-messages-image" src="images/1.jpg">
                        <div class="all-messages-text"> 
                            <a href=""><h3>Chiroma Chukwuma Adekunle </h3></a>
                            <div class="all-messages-message">
                            	<span class="icon-16-reply"></span> 
                            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor.....</p>
                            <br><span class="post-meta-delete"><span class="icon-16-trash"></span><span>Delete</span> </span>
                        </div>
                        </div>   
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