<div class="nav" id="nav">
    <ul>
            <!-- <img src="images/gossout-logo-image-svg.svg" alt="gossout-logo"> -->
        <li><a href="home.php"><span class="icon-house"></span><span>Home</span></a></li>
        <li class="last"><a href="communities.php"><span class="icon-globe"></span><span>Communities</span></a></li>		
        <li class="nav-login mobile-search last"><a href="all-search.php"><span>Search</span><span class="icon-search"></span></a></li>
        <li class="nav-search-container float-right">
            <div class="search-container">
                <label for="nav-search"></label>
                <input class="search-field" name="nav-search " placeholder="" type="text" value=""  required onfocus="javascript:toggle('pop-up-search','search');"/>
                <button class="search-button"><span class="icon-16-search"></span></button>
                <div class="clear"></div>
             </div>
            <?php
                include("search-pop-out.php");
            ?>
        </li>
        <div class="clear"></div>
    </ul>
    <div class="clear"></div>
</div>				