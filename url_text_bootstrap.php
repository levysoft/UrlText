<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 class="text-center">Editor Save URL State</h1>
  <form>
    <div class="form-group">
      <textarea class="form-control" name="text" oninput="updateUrl()" rows="20" cols="100"></textarea>
    </div>
    <div class="text-center">
      <button class="btn btn-secondary" id="undo-link" onclick="history.back()">Annulla</button>
      <button class="btn btn-secondary" id="redo-link" onclick="history.forward()">Ripristina</button>
      <button class="btn btn-secondary" id="share-link" onclick="copyUrl(event)">Condividi</button>
    </div>
  </form>
  
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

</div>

</body>
</html>