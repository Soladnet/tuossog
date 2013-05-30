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
					else if(text.id=="gossbag"){
						var messages = document.getElementById('pop-up-message');
						var search = document.getElementById('pop-up-search');
						var more = document.getElementById('pop-up-more');
						var useractions = document.getElementById('pop-up-user-actions');
						messages.style.display = 'none';
						search.style.display = 'none';
						more.style.display = 'none';
						useractions.style.display = 'none';
					}
					else if(text.id=="messages"){
						var gossbag = document.getElementById('pop-up-gossbag');
						var search = document.getElementById('pop-up-search');
						var more = document.getElementById('pop-up-more');
						var useractions = document.getElementById('pop-up-user-actions');
						gossbag.style.display = 'none';
						search.style.display = 'none';
						more.style.display = 'none';
						useractions.style.display = 'none';
					}
					else if(text.id=="search"){
						var gossbag = document.getElementById('pop-up-gossbag');
						var messages = document.getElementById('pop-up-message');
						var more = document.getElementById('pop-up-more');
						var useractions = document.getElementById('pop-up-user-actions');
						gossbag.style.display = 'none';
						messages.style.display = 'none';
						more.style.display = 'none';
						useractions.style.display = 'none';
					}
					else if(text.id=="more"){
						var gossbag = document.getElementById('pop-up-gossbag');
						var messages = document.getElementById('pop-up-message');
						var search = document.getElementById('pop-up-search');
						var useractions = document.getElementById('pop-up-user-actions');
						gossbag.style.display = 'none';
						messages.style.display = 'none';
						search.style.display = 'none';
						useractions.style.display = 'none';
					}
					else if(text.id=="user-actions"){
						var gossbag = document.getElementById('pop-up-gossbag');
						var messages = document.getElementById('pop-up-message');
						var search = document.getElementById('pop-up-search');
						var more = document.getElementById('pop-up-more');
						gossbag.style.display = 'none';
						messages.style.display = 'none';
						search.style.display = 'none';
						more.style.display = 'none';
					}
				}
			} 

			function ScaleImage(srcwidth, srcheight, targetwidth, targetheight, fLetterBox) {

			    var result = { width: 0, height: 0, fScaleToTargetWidth: true };

			    if ((srcwidth <= 0) || (srcheight <= 0) || (targetwidth <= 0) || (targetheight <= 0)) {
			        return result;
			    }

			    // scale to the target width
			    var scaleX1 = targetwidth;
			    var scaleY1 = (srcheight * targetwidth) / srcwidth;

			    // scale to the target height
			    var scaleX2 = (srcwidth * targetheight) / srcheight;
			    var scaleY2 = targetheight;

			    // now figure out which one we should use
			    var fScaleOnWidth = (scaleX2 > targetwidth);
			    if (fScaleOnWidth) {
			        fScaleOnWidth = fLetterBox;
			    }
			    else {
			       fScaleOnWidth = !fLetterBox;
			    }

			    if (fScaleOnWidth) {
			        result.width = Math.floor(scaleX1);
			        result.height = Math.floor(scaleY1);
			        result.fScaleToTargetWidth = true;
			    }
			    else {
			        result.width = Math.floor(scaleX2);
			        result.height = Math.floor(scaleY2);
			        result.fScaleToTargetWidth = false;
			    }
			    result.targetleft = Math.floor((targetwidth - result.width) / 2);
			    result.targettop = Math.floor((targetheight - result.height) / 2);

			    return result;
			}