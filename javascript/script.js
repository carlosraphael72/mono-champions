document.getElementById('corpo').addEventListener('DOMSubtreeModified', function () {
  window.scrollTo(0, document.body.scrollHeight);
}, false);

function filtrar(){
	var comboChampions = document.getElementById("cboChampions");
   /* console.log("O indice é: " + comboChampions.selectedIndex);
    console.log("O texto é: " + comboChampions.options[comboChampions.selectedIndex].text);
    console.log("A chave é: " + comboChampions.options[comboChampions.selectedIndex].value);*/
    var selecao = comboChampions.options[comboChampions.selectedIndex].value;
    var containers = document.getElementsByClassName('container');

    for (var i = 0; i < containers.length; i++) {
    	containers[i].style.display = 'none';
    	
    }
    document.getElementById(selecao).style.display = 'block';
   
};