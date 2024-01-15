Exercice 1 : (4pts)
Indiquer la bonne réponse :

1. Qu'est-ce que Laravel ? 
a. Un langage de programmation 
## The correct answer : 
b. Un framework PHP 
c. Un serveur web

2. Qu'est-ce que Eloquent ORM dans Laravel ? 
a. Un moteur de template pour générer du HTML 
b. Une bibliothèque pour gérer les sessions utilisateur 
## The correct answer : 
c. Une couche d'abstraction pour interagir avec la base de données

3. Qu'est-ce qu’un middleware dans Laravel ?
a. Une couche d'abstraction pour interagir avec la base de données
b. Une fonctionnalité pour gérer les sessions utilisateur
## The correct answer : 
c. Une couche intermédiaire pour traiter les requêtes HTTP avant qu'elles n'atteignent le contrôleur ?

4. Qu'est-ce que WordPress ?
a. Une plate-forme de blogging
## The correct answer : 
b. Un système de gestion de contenu open-source 
c. Un outil d'analyse Web


Exercice 6 : (4pts)
1. Indiquer les rôle des middlewares « auth » et « guest » ? (2pts)

    Middleware « auth » :

    Rôle : Le middleware « auth » est utilisé pour restreindre l'accès à certaines routes aux seuls utilisateurs authentifiés. Si un utilisateur n'est pas connecté, il sera redirigé vers la page de connexion par défaut de Laravel.

    Utilisation : Vous pouvez l'ajouter à vos routes dans le fichier routes/web.php ou dans le fichier de définition des routes correspondant à votre API. Par exemple :


    Route::middleware('auth')->group(function () {
        // Routes accessibles uniquement aux utilisateurs authentifiés
    });

    Middleware « guest » :

    Rôle : Le middleware « guest » est utilisé pour restreindre l'accès à certaines routes aux seuls utilisateurs non authentifiés. Cela est généralement utilisé pour des pages comme la page de connexion afin de s'assurer que les utilisateurs déjà connectés ne puissent pas y accéder.

    Utilisation : Vous pouvez l'ajouter de la même manière que le middleware « auth » :

    Route::middleware('guest')->group(function () {
        // Routes accessibles uniquement aux utilisateurs non authentifiés
    });


2. Donner les commandes Artisan permettant de : (4pts)
a. Démarrer le serveur :

   php artisan serve 

b. Lister toutes les routes ;
   php artisan routes:liste

c. Créer un modèle Eloquent avec son contrôleur de ressource correspondant ; 
   (donnez un nom de modèle de votrechoix)
   php artisan make:model NameOfTheModel --all
d. Exécuter la migration :
    php artisan migrate 


Exercice 3 : (30pts)
1.
a. Donner la commande pouvant générer le fichier de migration de création de la table « chambres » ;(1pt):
       php artisan make:migration create_chambres_table.
b. Ecrire le code à ajouter à la méthode « up » de ce fichier, sachant que : (4pts)
    (Voir le fichier du migration de création de la table chambres).
2. Indiquer l’instruction, à ajouter au fichier web.php (sous le répertoire routes), permettant de générer les 
routes de mises à jour de la table « chambres ». (1pt) :
    Route::resource('chambres', 'ChambreController')->except(['show']);
3. Sous le modèle « Chambre », configurer les champs concernés par l’affectation en masse (Mass 
Assignement) ; (2pt)
(Voir le modél et vous allez trouvez protected     protected $fillable = ['types_id' , 'description' , 'superficie' ,'etage' , 'prix'];, qui corrige cette erreur).
4. Ajouter au modèle « Chambre », la définition de la relation « chambretype » (2pts)
(
    Voir le fichier du migration et vous allez trouvez :
    $table->unsignedBigInteger('types_id');
    $table->foreign('types_id')->references('id')->on('types');
 ).
5.Lister toutes les chambres (en affichant les titres de leur type), comme le montre la capture ci-après :
    (lancer le server aprés que vous avez installer application).
5.a Donner le code de la méthode « index » du contrôleur « ChambreController » : (2pts)
    public function index(){
    $chambers = Chambre::paginate(5);
    return view('Chambres.index', ['chambers'=>$chambers]);
    }
6.b Donner le code de la vue « index.blade.php » (4pts)
   (check chambers/index.blade.php )
6.Ajouter une nouvelle chambre :
   (check chambers/create.blade.php )

