## README

### Descrizione
UrlText è un programma PHP consente di codificare il testo inserito all'interno di una textarea in Base64 e di aggiornare l'hash dell'URL in modo asincrono, senza dover ricaricare la pagina. Inoltre, il programma gestisce gli eventi 'popstate' generati dai pulsanti "Annulla" e "Ripristina" del browser, in modo da ripristinare il testo della textarea e l'hash dell'URL corretti. Infine, il programma fornisce un pulsante "Condividi" che consente all'utente di copiare il link dell'URL nella clipboard.

### Utilizzo
Per utilizzare il programma, basta inserire il testo desiderato all'interno della textarea e il testo verrà automaticamente codificato in Base64 e aggiornato nell'hash dell'URL. L'utente può utilizzare i pulsanti "Annulla" e "Ripristina" del browser per navigare nella cronologia e il testo della textarea verrà ripristinato correttamente grazie alla gestione degli eventi 'popstate'. Infine, l'utente può utilizzare il pulsante "Condividi" per copiare il link dell'URL nella clipboard.

### Possibili utilizzi
Questo programma potrebbe essere utile in diverse situazioni, ad esempio:
- In un'applicazione web che prevede la modifica di un testo lungo: l'utilizzo della codifica Base64 per l'aggiornamento dell'URL consente di mantenere lo stato dell'applicazione anche in caso di aggiornamento della pagina.
- In un'applicazione di editing collaborativo: la gestione degli eventi 'popstate' consente di mantenere sincronizzati i contenuti tra i vari utenti collaboratori, anche in caso di navigazione nella cronologia.
- In un'applicazione di condivisione di file: il pulsante "Condividi" consente di copiare rapidamente il link dell'URL nella clipboard, semplificando il processo di condivisione dei file tra i vari utenti. 

In generale, questo programma può essere utilizzato in qualsiasi situazione in cui si desidera mantenere lo stato di una pagina web, sincronizzare i contenuti tra utenti collaboratori o semplificare il processo di condivisione di file tramite link.

### Tecnologie utilizzate
- PHP
- JavaScript

### Licenza
Il codice di questo programma è rilasciato sotto la licenza [MIT](https://opensource.org/licenses/MIT).
