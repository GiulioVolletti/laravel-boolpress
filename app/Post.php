<?php
/*
Esercizio:
    Creiamo un nuovo progetto laravel, 
    con l'obiettivo di sperimentare con i concetti di relazione 1-1 e 1-N introdotti stamattina.
    Modellate le entità Post, InfoPost e Comment e le relative relazioni con model,
    migration e seeder con dati fake per popolare il vostro database.
    Per recuperare le informazioni delle entità relazionate 
    (ad esempio, tutti i commenti nella vista di dettaglio di un post), 
    provate a creare almeno una rotta a cui, tramite un controllore, 
    passate come parametro un singolo model o una collection.
Bonus:
    Provare a creare una CRUD completa dell'entità Post,
    provando a recuperare i relativi post_info o comment nella vista di dettaglio del post (show).
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 
        'subtitle', 
        'author',
        'text',
        'img_path',
        'publication_date',
    ];

    // relationship
    public function infoPost(){
        return $this->hasOne('App\InfoPost');
    }
}
