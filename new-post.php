<div class="post ">
	<div class="post-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. <a href="#">http://www.gossout.com</a> Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<a  class="fancybox" rel="gallery1"  href="images/pic-1.jpg" rel="group"><img src="images/pic-1.jpg"></a>					
		<a  class="fancybox" rel="gallery1"  href="images/eset.jpg" rel="group"><img src="images/eset.jpg"></a>	
		<hr>						
		<h3 class="name"><img class="post-profile-pic" src="images/2.jpg">Ciroma Chukwuma Adekunle
			<div class="float-right">
				<span class="post-time"><span class="icon-16-comment"></span>50</span>
				<span class="post-time"><span class="icon-16-share"></span>24</span>
				<span class="post-time"><span class="icon-16-clock"></span>5 mins</span>
			</div>
			<div class="clear"></div>
		</h3>
	</div>
	<!-- ******** 	To be hidden/visualised using js onclick when "Show all" button is clicked 	***** -->
	<!-- *************************************************************************************** -->
	<hr>
	<div class="post-meta">
		
		<span id="post-new-comment-show" class="" onclick="javascript:toggle('post-comments', 'post-new-comment-show');"><span class="icon-16-comment"></span>Comment</span>
		<span class="post-meta-gossout"><span class="icon-16-share"></span><a class="fancybox " id="inline" href="#share-123456">Share</a></span>
		<span class="post-meta-delete"><span class="icon-16-trash"></span>Delete </span>
		

	</div>
	<?php
	include ("share.php");
	?>
	<!-- ************************************************************************************** -->
	<div class="post-comments" id="post-comments">
		<div class="post-comment">
			<img class="post-thumb" src="images/1.jpg">
			<h4 class="name">Sample Name</h4>
			<span class="post-time">2 minutes ago.</span>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
			</p>
			
			<div class="clear"></div>
		</div>
		<div class="post-comment">
			<img class="post-thumb" src="images/2.jpg">
			<h4 class="name">Sample Name</h4>
			<span class="post-time">2 minutes ago.</span>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				<br><span class="post-meta-delete"><span class="icon-16-trash"></span><span>Delete</span> </span>
			</p>
			<div class="clear"></div>
		</div>
		<div class="post-comment">
			<img class="post-thumb" src="images/3.jpg">
			<h4 class="name">Sample Name</h4>
			<span class="post-time">2 minutes ago.</span>
			<p>loremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
			</p>
			<div class="clear"></div>				
		</div>
	</div>
	<!-- ***************************************************************************************** -->
	<!-- *************************	comment box *********************************************** -->
	<div class="post-new-comment" id="post-new-comment">
		<form>
			<img class="post-thumb" src="images/snip.jpg">
			<span><input type="text" class="comment-field" required placeholder="Add comment..."></input></span>
			<input type="submit" class="submit">
			<div class="clear"></div>
		</form>
	</div>

</div>
