# test-junior-2022

Test per l'assunzione di Sviluppatori Junior

## Il Task

Questo test prevede la creazione di snippets di codice sia frontend che backend.

### Frontend
Ti forniamo un file **_index.html_** con la struttura html già creata. Tu dovrai creare il codice **JS** che implementa queste 3 funzionalità:

- **Caricamento della lista degli elementi dal backend** <br>
Per la UI della lista usa https://getbootstrap.com/docs/5.0/components/list-group/ e deve essere posizionata nel'**UL _#the-list_**. L'header della lista è già stato implementato nell'html fornito, usalo come reference per i paramentri da mostrare. Ogni elemento deve avere anche un bottone di rimozione dalla lista.

- **Aggiunta di un elemento alla lista** <br>
L'elemento da aggiungere deve essere passato al backend che provvederà a salvarlo. Successivamente, al completamento del salvataggio, bisogna ricaricare la lista degli elementi dal backend.

- **Rimozione di un elemento dalla lista** <br>
Esattamente come la funzionalità di aggiunta, la rimozione deve essere fatta dal backend, e successivamente bisogna ricaricare la lista.

Tutte e 3 le funzionalità devono essere implementate come una chiamata **AJAX** di _jQuery_.
    
### Backend
Per il backend devi implementare i file php necessari per il funzionamento delle chiamate **AJAX** del frontend. Lo scambio di dati deve avvenire in formato **_JSON_**.
Ti forniamo un file **_database.sql_** che devi usare per importare nel tuo database la struttura ed i dati precompilati.

Per implementare le funzionalità devi creare una classe php che implementa i metodi necessari al funzionamento delle chiamate e deve estendere la classe **controller**. Dovrai implementare anche la classe di connessione al database (file **_dbconnection.php_**) usando le librerie **PDO**. Questa classe viene già istanziata dalla classe controller.
Per generare il valore del campo _uuid_ devi usare il metodo statico **_generateUUID_** della classe statica **utility**.

**N.B.:** il database prevede la rimozione logica degli elementi, quindi fa attenzione mentre implementi le funzionalità di rimozione ed caricamento dati.

## Come inviarci il test completato
Puoi caricare il codice sorgente sul tuo _GitHub_ e condividere con noi il link al repository. Fai attenzione a rendere il repository **pubblico**, altrimenti non potremo visionare il codice.
