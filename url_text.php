<form>

  <textarea name="text" oninput="updateUrl()" style="width: 800px; height: 400px;"></textarea>
  
  <script>
    function updateUrl(){
      var text = document.querySelector("textarea").value; //prende il valore del textarea
      var encoded = btoa(text); //codifica in base64
      history.pushState({}, "", "#" + encoded); // aggiorna l'hash dell'url senza ricaricare la pagina
    }
    // lettura dell'hash all'avvio della pagina
    var hash = window.location.hash.substring(1);
    if(hash){
      var text = atob(hash); //decodifica il testo
      document.querySelector("textarea").value = text; //aggiorna la textarea
    }

	//In questo modo, quando l'utente utilizza i pulsanti "Annulla" e "Ripristina" del browser per navigare nella cronologia, verrà generato un evento 'popstate', e il codice all'interno del listener verrà eseguito, aggiornando la textarea con il testo corretto. In questo modo l'undo e redo funzioneranno come previsto e la url del browser verrà aggiornata in modo sincrono.
	window.addEventListener("popstate", function(){
      var hash = window.location.hash.substring(1);
		if(hash){
			var text = atob(hash); //decodifica il testo
			document.querySelector("textarea").value = text; //aggiorna la textarea
		}
	})
  </script>
</form>


<a id="undo-link" href="javascript:history.back()">Annulla</a>
<a id="redo-link" href="javascript:history.forward()">Ripristina</a>

<a id="share-link" href="#" onclick="copyUrl(event)">Condividi</a>
<script>
function copyUrl(event) {
  event.preventDefault();
  var url = window.location.href;
  // Crea un input di tipo nascosto
  var input = document.createElement("input");
  input.setAttribute("value", url);
  document.body.appendChild(input);
  // Seleziona il contenuto dell'input
  input.select();
  // Copia il contenuto selezionato
  document.execCommand("copy");
  // Rimuovi l'input
  document.body.removeChild(input);
  // Mostra un messaggio di avviso
  alert("Link copiato: " + url);
}
</script>

