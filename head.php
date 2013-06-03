<link rel="shortcut icon" href="favicon.ico">

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
<script type="text/javascript" src="scripts/jquery.fancybox.pack.js?v=2.1.4"></script>
<script type="text/javascript" src="scripts/humane.min.js"></script>
<script src="scripts/jquery.sticky.js"></script>
<link rel="stylesheet" media="screen" href="css/style.css">
<link rel="stylesheet" href="css/hint.min.css">
<link rel="stylesheet" href="css/libnotify.css">
<script type="text/javascript" src="scripts/modernizr.custom.77319.js"></script>
<title>Gossout - </title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" > 
<!--<script>
humane.log("Hello", {timeout: 10000, clickToClose:'true'});
</script>-->
<script type="text/javascript">
$(document).ready(function() {
	if (Modernizr.inlinesvg) {
		//SVG.
		$('#logo').html('<img src="images/gossout-logo-text-svg.svg" alt="Your Company" />');

	} else {
		//No SVG.
		$('#logo').html('<img src="images/gossout-logo-text-svg.png" alt="Your Company" />');
	}
	//$(".nav").sticky({topSpacing:0});
	//$(".nav-user").sticky({topSpacing:32});
	 $("#nav-user").sticky({topSpacing:-4});
});
</script>
<script>
	function OnImageLoad(evt) {
	    var img = evt.currentTarget;
	    // what's the size of this image and it's parent
	    var w = $(img).width();
	    var h = $(img).height();
	    var tw = $(img).parent().width();
	    var th = $(img).parent().height();

	    // compute the new size and offsets
	    var result = ScaleImage(w, h, tw, th, false);

	    // adjust the image coordinates and size
	    img.width = result.width;
	    img.height = result.height;
	    $(img).css("left", result.targetleft);
	    $(img).css("top", result.targettop);
	}
</script>

