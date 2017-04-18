window.addEventListener('load',foto); //inicia la funcio foto cuando inicia el programa

function foto(){

	var video= document.querySelector('#video'),
	canvas = document.querySelector('#canvas'),
	btn= document.querySelector('#camara'),
	img= document.querySelector('#imagen');


	navigator.getUserMedia=(
		navigator.getUserMedia ||   //standar
		navigator.webkitGetUserMedia ||//chrome
		navigator.mozGetUserMedia ||///mozilla
		navigator.msGetUserMedia //explorer


		);


	//validando que encontro  el user media
	if(navigator.getUserMedia){

		navigator.getUserMedia({video:true},function(stream){
			video.src= window.URL.createObjectURL(stream); //lee la camara
			video.height=240;
			video.width=320;
			video.play(); //reproduce el video



		},function(e){console.log(e);}) //imprimer algun tipo de error



	}else {
		alert('Tu navegador no soporte esta funcion');
	}

	video.addEventListener('loadedmetadata',function(){ canvas.width=video.videoWidth; canvas.height=video.videoHeight;},false);
	btn.addEventListener('click',function(){
		canvas.getContext('2d').drawImage(video,0,0);
		var imgData= canvas.toDataURL('image/png');
		img.setAttribute('src',imgData);




	});






}