# Web App del Sito di Giornale

Benvenuto alla Web App del Sito di Giornale! Questa è una piccola applicazione web che simula un sito di giornale online, dove gli utenti possono accedere, visualizzare le ultime notizie e, se amministratori, gestire le pubblicazioni.

## Funzionalità

- **Accesso Utente**: Gli utenti possono accedere utilizzando le proprie credenziali.
- **Visualizzazione Notizie**: Gli utenti possono visualizzare le ultime notizie pubblicate.
- **Gestione Pubblicazioni**: Gli amministratori possono accedere alla dashboard per gestire le pubblicazioni, aggiungendo, modificando o eliminando articoli.

## Tecnologie Utilizzate

- **Linguaggi**: HTML, CSS, PHP
- **Framework**: Bootstrap (per la parte frontend)
- **Database**: MySQL (connettività tramite PDO)

## Struttura del Progetto

Il progetto è suddiviso in diverse directory:

- **css**: Contiene i file CSS per lo stile dell'applicazione.
- **php**: Contiene i file PHP per la logica di backend, inclusi la connessione al database, le funzioni comuni e le pagine principali.
- **img**: Contiene le immagini utilizzate nell'applicazione.
- **docs**: Contiene la documentazione aggiuntiva, se necessaria.

## Come Utilizzare

1. Assicurati di avere un server web locale configurato (ad esempio, Apache con PHP e MySQL).
2. Importa il database `database.sql` nel tuo sistema di gestione del database (es. phpMyAdmin) per creare le tabelle necessarie.
3. Modifica il file `config-db.php` nella directory `php` con le tue credenziali del database.
4. Carica l'intero progetto sul tuo server web.
5. Accedi all'applicazione tramite il browser e inizia a utilizzare il sito di giornale!

## Contributi

Siamo aperti ai contributi! Se hai idee per migliorare l'applicazione o riscontrato bug, sentiti libero di aprire una issue o inviare una pull request.

## Licenza

Questo progetto è concesso in licenza secondo i termini della [Licenza MIT](LICENSE).
