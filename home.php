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
					text.innerHTML = "Suggested Friends";
				}
				else {
					element.style.display = "block";
					text.innerHTML = "Hide Suggested Friends";
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
					<img class="profile-pic" src="images/1.jpg">
					<table>
						<tr><td></td><td><h3>Ciroma Chukwuma Adekunle</h3></td></tr>
						<tr><td><span class="icon-16-map"></span></td><td class="profile-meta"> Abuja, Federal Capital Territory, Nigeria</td></tr>
						<tr><td><span class="icon-16-calendar"></span></td><td class="profile-meta"> 31st January, 1960</td></tr>
						<tr><td><span class="icon-16-user"></span></td><td class="profile-meta"> Male</td></tr>
						<tr><td><span>...</span></td><td class="profile-meta"><span> View/Edit Full Profile</span></td></tr>
					</table>					
					<div class="clear"></div>

					<p class="profile-meta-functions"><span class="icon-16-eye"></span> Wink</p>
					<p class="profile-meta-functions"><span class="icon-16-mail"></span> Send Message</p><!-- 
					<p class="profile-meta-functions"><span class="icon-16-add-to-list"></span> Request Friendship</p>
					<p class="profile-meta-functions"><span class="icon-16-cross"></span> De-Friend</p> -->
					<p class="profile-meta-functions"><span class="icon-16-checkmark"></span> Accept Friendship</p>

					<div class="clear"></div>
				</div>
				<hr>
				<div class="aside-wrapper">
					<h4>Communities</h4>
					<p>You're a member of <a href=""><span class="icon-16-location"></span>&nbsp;5 Communities</a></p>
					<br>
					<hr>
					<script type="text/javascript">
					function openChat() {
						window.open("http://tlk.io/Gossout-30",null,"toolbar=no,menubar=no,resizable =yes,copyhistory=no,location=no,directories=no,height=500,width=300");
					};
					
					</script>
					<div class="community-listing"><span><a href="">Ahmadu Bello University, Zaria, Nigeria&nbsp;</a></span>
						<div class="community-functions-wrapper">
							<span class="community-functions"><span class="icon-16-cross"></span> Leave</span>
							<span class="community-functions" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div>
					</div>
					<hr>
					<div class="community-listing"><span><a href="">Eko Radio Party&nbsp;</a></span>
						<div class="community-functions-wrapper">
							<span class="community-functions"><span class="icon-16-cross"></span> Leave</span>
							<span class="community-functions" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div>
					</div>
					<hr>
					<div class="community-listing"><span><a href="">Abuja, Federal Capital Territory, Nigeria&nbsp;</a></span>
						<div class="community-functions-wrapper">
							<span class="community-functions"><span class="icon-16-cross"></span> Leave</span>
							<span class="community-functions" onclick="openChat();"><span class="icon-16-chat"></span> Chat</span>
						</div>
						<div class="clear"></div>
					</div>
					<hr>
					<p class="community-listing"><span><a href="">Show all&nbsp;</a> <a href="">Suggested Communities</a></span>
					</p>
				</div>
				<hr>
				<div class="aside-wrapper">
					<h4>Friends</h4>
					<p>You have <a href=""><span class="icon-16-user"></span>&nbsp;205 Friends</a></p>
					<hr>
					<img class= "friends-thumbnails" src="images/1.jpg">
					<img class= "friends-thumbnails" src="images/2.jpg">
					<img class= "friends-thumbnails" src="images/3.jpg">
					<img class= "friends-thumbnails" src="images/snip.jpg">
					<p class="community-listing">
						<span>
							<a href="">Show all&nbsp;</a> 
							<a id="show-suggested-friends" href="javascript:toggle('suggested-friends', 'show-suggested-friends');" > Suggested Friends</a>
						</span>
					</p>
				</div>
				<hr>
				<div id= "suggested-friends" class="aside-wrapper no-display" > 
					<h4>Suggested Friends </h4>
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