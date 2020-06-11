/*document.getElementById('corpo').addEventListener('DOMSubtreeModified', function () {
  window.scrollTo(0, document.body.scrollHeight);
}, false);*/

//document.getElementsByClassName('icone').style.display = 'block';


function filtrar(){
	var comboChampions = document.getElementById("cboChampions");
   /* console.log("O indice é: " + comboChampions.selectedIndex);
    console.log("O texto é: " + comboChampions.options[comboChampions.selectedIndex].text);
    console.log("A chave é: " + comboChampions.options[comboChampions.selectedIndex].value);*/
    var selecao = comboChampions.options[comboChampions.selectedIndex].value;
    var containers = document.getElementsByClassName('container');

    if (selecao == "todos") {
    	for (var i = 0; i < containers.length; i++) {
    		containers[i].style.display = 'block';
    	}
    	
    }else{

    for (var i = 0; i < containers.length; i++) {
    	containers[i].style.display = 'none';
    	
    }
    document.getElementById(selecao).style.display = 'block';
   }
}

function clickarIcone(champion) {
    var container = document.getElementById(champion);
    var streamers = document.querySelector("div#"+champion+" > div#streamers");
    var nome = document.querySelector("div#"+champion+" > h1#championName");
    if (streamers.style.display != 'block') {
        container.style.margin = "5px";
        container.style.width = "350px";
      //  container.style.display = "block";
      //  container.style.position = "relative";
        container.style.backgroundColor = "grey";
        streamers.style.display = 'block';
        streamers.style.marginTop = '10px';
        nome.style.display = 'inline';
        nome.style.left = '112px';
}else{
    streamers.style.display = 'none';

    container.style.margin = "0px";
    container.style.width = "0px";
    container.style.backgroundColor = "none";
}
}