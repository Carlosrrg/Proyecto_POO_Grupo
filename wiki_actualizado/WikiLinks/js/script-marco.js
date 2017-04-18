function grand(h) { 
    iframe=document.getElementById("ifr");
    iframe.height=h;
    }

function loadPages(direccion, id, id2, id3, id4, id5){
    var dir = direccion;
    var Id = id;
    var Id2 = id2;
    var Id3 = id3;
    var Id4 = id4;
    var Id5 = id5;
    document.getElementById('ifr').setAttribute('src', dir);
    document.getElementById(Id2).setAttribute('class', '');
    document.getElementById(Id3).setAttribute('class', '');
    document.getElementById(Id4).setAttribute('class', '');
	document.getElementById(Id5).setAttribute('class', '');
	document.getElementById(Id).setAttribute('class', 'active');


}

