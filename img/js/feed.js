/* feed.js */
function loading() {
	var x = document.getElementsByTagName("body")[0];
	x.style.filter = "blur(3px)";
	
	var asd = setInterval(blur_out, 500);
	
	function blur_out() {
		
		x.style.transition = "all 1s";
		
		
		x.style.filter = "blur(0px)";
		clearTimeout(asd);	
	}
	
}
