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
						messages.style.display = 'none';
						search.style.display = 'none';
					}
					else if(text.id=="messages"){
						var gossbag = document.getElementById('pop-up-gossbag');
						var search = document.getElementById('pop-up-search');
						gossbag.style.display = 'none';
						search.style.display = 'none';
					}
					else if(text.id=="search"){
						var gossbag = document.getElementById('pop-up-gossbag');
						var messages = document.getElementById('pop-up-message');
						gossbag.style.display = 'none';
						messages.style.display = 'none';
					}
				}
			} 