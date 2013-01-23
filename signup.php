<!doctype html>
<html>
<head>
	<?php
	include ("head.php");
	?>
</head>
<body>
	<div class="index-page-wrapper">	
		<div class="index-nav">
			<span class="index-login">Already have an account? <a href="home.php">Login Here!</a></span>
			<div class="clear"></div>
		</div>
		<div class="index-banner">
			<div class="index-logo">
				<img src="images/gossout-logo-text-and-image-svg.svg" alt="logo" >
			</div>
		</div>
		<div class="index-intro">
			<div class="index-intro-1">
				<h1>
					What if we had a headline so punchy that 
					no one could refuse to sign-up? 
				</h1>
				<hr>
			</div>
		</div>
		<div class="index-intro-2">
			<div class="registration">
				<form>
					<ul>
						<li>
							<label for="first_name">First Name</label>
							<input class="input-fields" name="first_name" placeholder="" type="text" value="" spellcheck="false" required/>
						</li>
						<li>
							<label for="last_name">Last Name</label>
							<input class="input-fields" name="last_name" placeholder="" type="text" value="" spellcheck="false" required/>
						</li>
						<li>
							<label for="gender">Gender</label>							

							<input name="gender" type="radio" class="radio" value="M" required />
							<label class="desc" for="" >
								Male
							</label>

							<input name="gender" type="radio" class="radio" value="F" required />
							<label class="desc" for="" >
								Female
							</label>
						</li>
						<li>
							<label for="dob">Date of Birth (mm-dd-yyyy)</label>
							<select name="dob_month" required>
                                <option value="0"></option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <input type="number" min="1" max="31" name="dob_day" size="2" required placeholder="DD" />
							<input type="number" max="<?php echo date("Y") - 13 ?>" min="1960" size="4" name="dob_yr" required placeholder="YYYY" />
						</li>
						</ul>
						<br>
						<a href="signup2.php" class="button-big">Next!</a>
					</form>
					<div class="clear"></div>
				</div>
			</div>
			<div class="index-shadow-bottom"></div>
			<div class="index-content-wrapper">
				<?php
				include("footer.php");
				?>
			</div>

		</div>
	</body>
	</html>