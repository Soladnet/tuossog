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
		<div class="logo"><img src="images/gossout-logo-text-and-image.png" alt=""></div>

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

			function toggle(ele, txt) {
				var element = document.getElementById(ele);
				var text = document.getElementById(txt);

				if(element.style.display == 'block') {
					element.style.display = 'none';

					if(text.id=="show-suggested-friends"){
						text.innerHTML = "Suggested Friends";
					}
					else if (text.id=="show-full-profile"){
						text.innerHTML = "View Full Profile";
					}
					
				}
				else {
					element.style.display = "block";

					if(text.id=="show-suggested-friends"){
						text.innerHTML = "Hide Suggested Friends";
					}
					
					else if(text.id=="show-full-profile"){
						text.innerHTML = "Hide Full Profile";
					}
				}
			} 
			</script>
			<div class="posts">
				<?php 
				include("post-box.php");
				include("new-post.php");
				include("new-post.php");
				?>
			</div>
			
			<div class="aside">
				<div class="aside-wrapper">
					<table>
						<tr><td></td><td><h3>Eko Radio Party</h3></td></tr>
						<tr><td><!-- <span class="icon-16-map"></span> --></td><td > ERP, a radio programme like no other...
							with sole objective of making serious issues light. We educate and entertain</td></tr>
						</table>					
						<div class="clear"></div>
						<br>
						<p class=" button"><span ></span>More</p>
						<p class=" button"><span class="icon-16-eye"></span> Invite Members</p>
						<p class=" button"><span class="icon-16-chat"></span> Chat</p>
						<div class="clear"></div>
						
					</div>
					<div class="aside-wrapper">
						<h3>Members</h3>
						<p>This Community has <a href=""><span class="icon-16-user"></span>205 members</a></p>
						<hr>
						<img class= "friends-thumbnails" src="images/1.jpg">
						<img class= "friends-thumbnails" src="images/2.jpg">
						<img class= "friends-thumbnails" src="images/3.jpg">
						<img class= "friends-thumbnails" src="images/snip.jpg">
						<p class="community-listing">
							<span>
								<span><span class="icon-16-dot"></span><a href="">Show all</a></span>
							</span>
						</p>
					</div>
					<div class="aside-wrapper">
						<h3>Communities</h3>
						<p>You're a member of <a href=""><span class="icon-16-contract"></span>5 Communities</a></p>
						<br>
						<hr>
						<script type="text/javascript">
						function openChat() {
							window.open("http://tlk.io/Gossout-30",null,"toolbar=no,menubar=no,resizable =yes,copyhistory=no,location=no,directories=no,height=500,width=300");
						};
						
						</script>
						<div class="community-listing"><span><a href="">Ahmadu Bello University, Zaria, Nigeria.</a></span>
						<!-- <div class="community-functions-wrapper">
							<span class="community-functions button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div> -->
					</div>
					<hr>
					<div class="community-listing"><span><a href="">Eko Radio Party</a></span>
						<!-- <div class="community-functions-wrapper">
							<span class="community-functions button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div> -->
					</div>
					<hr>
					<div class="community-listing"><span><a href="">Abuja, Federal Capital Territory, Nigeria</a></span>
						<!-- <div class="community-functions-wrapper">
							<span class="community-functions button" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div> -->
					</div>
					<hr>
					<p class="community-listing">
						<span>
							<span><span class="icon-16-dot"></span><a href="">Show all</a></span>
							<span><span class="icon-16-dot"></span><a href="">Suggested Communities</a></span>
						</span>
					</p>
				</div>
				
				
				
			</div>	
			<div class="clear"></div>		
		</div>
		<?php
		include("footer.php");
		?>
	</div>

</body>
</html>