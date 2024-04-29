<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Logo di Laravel">
    </a>
</p>

## Descrizione del Progetto

Questo CMS (Content Management System) Blog è stato sviluppato con Laravel e mira a offrire una piattaforma usufruibile a livello didattico per l'apprendimento di varie discipline e tematiche di rilevanza mondiale. Il sito è progettato per presentare i contenuti in modo elegante e accessibile, facilitando la diffusione del sapere attraverso articoli chiari e ben strutturati.

Il progetto include una completa funzionalità del pannello di controllo con ruoli per gli utenti.

### Tecnologie Utilizzate

-   Laravel Framework 11
-   Tailwind per lo styling
-   Laravel Policies
-   Laravel Gates
-   Laravel Mail
-   Laravel Queues (per la costruzione di newsletter settimanali)
-   Regole di validazione personalizzate
-   Commenti, applicati tramite relazioni polimorfiche
-   Relazioni (1:N e N:N) tra i modelli
-   Conteggio delle visualizzazioni dei post tramite cookie
-   Faker & Database Seeder
-   URL friendly per SEO (Search Engine Optimization)

### Funzionalità del Progetto

#### Pannello Admin

-   Modifica delle informazioni generali del blog
-   Creazione, aggiornamento ed eliminazione di categorie, post, tag e pagine personalizzate
-   Gestione dei ruoli

#### Pannello Scrittore

-   Creazione, aggiornamento ed eliminazione dei propri post
-   Creazione, aggiornamento ed eliminazione dei tag

### Ruoli

| Nome Ruolo | ID Ruolo |
| ---------- | -------- |
| Admin      | 1        |
| Writer     | 2        |
| User       | 3        |

### Funzionalità dei Gate

Vi è un filtro di gate all'accesso al pannello di amministrazione; se l'utente è Admin, avrà pieno accesso alle funzioni di gestione del blog, mentre se è un Writer avrà accesso limitato.

### API Routes

| Metodo | Endpoint            | Descrizione                                    |
| ------ | ------------------- | ---------------------------------------------- |
| GET    | api/categories      | Mostra tutte le categorie                      |
| GET    | api/categories/{id} | Mostra tutti i post in una specifica categoria |
| GET    | api/posts           | Mostra tutti i post                            |
| GET    | api/posts/{id}      | Mostra un post specifico                       |

## Requisiti

-   PHP >= 8.2
-   MySQL o altro server database
-   Composer
-   NodeJS

### Installazione

1. Clona il progetto
2. Naviga nella directory principale del progetto ed esegui `composer install` e `npm install`
3. Crea un file `.env` e copiane il contenuto da `.env.example`
4. Esegui `php artisan key:generate` dal terminale
5. Modifica le informazioni del database in `.env`
6. Esegui le migrazioni con `php artisan migrate`, poi `php artisan db:seed` per utilizzare i record del database di Faker,
7. Avvia il progetto eseguendo `php artisan serve`

### Autori

-   **Domenico Donnici** - API
-   **Elena Scaraia** - Backend
-   **Adriano Rica** - Frontend
