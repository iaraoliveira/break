/* feed.js */
function loading() {
	var x = document.getElementsByTagName("body")[0];
	x.style.filter = "blur(3px)";

	var asd = setInterval(blur_out, 500);
/*MathJax.Hub.Queue(["Typeset",MathJax.Hub]);*/
	function blur_out() {
		x.style.transition = "all 1s";
		x.style.filter = "blur(0px)";
		clearTimeout(asd);
	}

}

function barraBusca() {
	if (document.getElementById("tabs").style.top = "58px") {
		document.getElementById("tabs").style.transition ="top 0.8s";
		document.getElementById("tabs").style.top = "0px";
	}else{
		document.getElementById("tabs").style.top = "58px";
	}

}

function ajustarTamanho(elemento) {
	elemento.style.height = "1px";
	elemento.style.height = (25+elemento.scrollHeight)+"px";
}

function math_func(){ HUB.outputJax["jax/mml"][0].id;
	MathJax.Ajax.loadComplete("http://myserver.com/MathJax/config/local/local.js");
}
