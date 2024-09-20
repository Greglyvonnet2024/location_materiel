<?php 

/*
Superglobales
Qu'est-ce qu'une superglobale en PHP ?
a) Une fonction spéciale 
b) Une variable globale toujours accessible >>>> X OK
c) Un tableau associatif local
d) Une constante

Quelle superglobale est utilisée pour récupérer les données envoyées par la méthode GET ?
a) $_POST
b) $_COOKIE
c) $_GET >>>> X OK
d) $_FILES

Quelle est la superglobale utilisée pour récupérer les variables envoyées via des formulaires HTML avec la méthode POST ?
a) $_POST >>>> X OK
b) $_GET
c) $_SESSION
d) $_SERVER

Quelle superglobale contient des informations sur le serveur et l'environnement d'exécution ?
a) $_SESSION >>>> X FAUX
b) $_SERVER>>> OK
c) $_ENV
d) $_GLOBAL

Comment accéder à l'adresse IP du client ?
a) $_SERVER['HTTP_USER_AGENT']
b) $_SERVER['REMOTE_ADDR'] >>>> X OK
c) $_GET['IP_ADDRESS']
d) $_POST['CLIENT_IP']

Quelle superglobale contient les fichiers téléchargés via un formulaire ?
a) $_REQUEST
b) $_SESSION >>>> X faux
c) $_FILES>>>OK
d) $_COOKIE

Quelle superglobale peut accéder aux données envoyées via GET et POST ?
a) $_REQUEST >>>> X OK
b) $_FILES 
c) $_COOKIE 
d) $_ENV

Dans quel cas est-il recommandé d'utiliser $_COOKIE ?
a) Pour stocker temporairement les fichiers
b) Pour gérer les variables de session
c) Pour stocker des informations sur l'utilisateur côté client >>>> X OK 
d) Pour récupérer les variables d'environnement


Quelle est la différence entre $_GET et $_POST ?
a) $_GET envoie les données via l'URL, $_POST envoie les données via les cookies
b) $_GET est plus sécurisé que $_POST
c) $_GET envoie les données via l'URL, $_POST les envoie via le corps de la requête >>>> X OK
d) Aucune différence, ils sont interchangeables

Quelle superglobale est utilisée pour récupérer des informations sur les en-têtes HTTP ?
a) $_HEADERS
b) $_SERVER
c) $_HTTP >>>> X FAUX
d) $_HEADER

Sessions
Comment démarrez-vous une session en PHP ?
a) session_init()
b) session_start() >>>> X OK
c) start_session()
d) session_begin()

Quel est l'avantage principal des sessions par rapport aux cookies ?
a) Les sessions sont stockées sur le client
b) Les sessions peuvent stocker plus de données
c) Les sessions sont plus rapides que les cookies
d) Les sessions stockent les données côté serveur >>>> X OK

Comment définissez-vous une variable de session ?
a) $_SESSION['variable'] = valeur; >>>> X OK
b) $_COOKIE['variable'] = valeur;
c) $_POST['variable'] = valeur;
d) session_set('variable', valeur);

Comment récupérez-vous une variable de session en PHP ?
a) $_COOKIE['variable']
b) $_SESSION['variable'] >>>> X OK
c) $_GET['variable']
d) session_get('variable')

Comment supprimez-vous toutes les variables de session en PHP ?
a) session_destroy() >>>> X OK (0.25)
b) session_unset()
c) $_SESSION = array()
d) Toutes ces réponses

Que se passe-t-il si session_start() n'est pas appelé ?
a) Les cookies ne fonctionnent pas
b) Les sessions ne fonctionneront pas >>>> X OK
c) Les variables $_GET ne seront pas accessibles
d) Le script PHP ne s'exécutera pas

Quelle est la fonction correcte pour détruire une session ?
a) session_delete()
b) session_unset()
c) session_destroy() >>>> X OK
d) session_reset()

Quelle superglobale PHP est utilisée pour accéder aux variables de session ?
a) $_POST
b) $_SESSION >>>> X OK
c) $_COOKIE
d) $_ENV

Quelle est la différence entre session_unset() et session_destroy() ?
a) session_unset() supprime les cookies, session_destroy() supprime la session
b) session_unset() supprime uniquement les variables de session, session_destroy() supprime la session entière >>>> X OK
c) session_unset() ferme la session, session_destroy() la réinitialise
d) Il n'y a pas de différence

Comment modifier la durée de vie d'une session en PHP ?
a) session_set_lifetime() >>>> X FAUX
b) En modifiant session.cookie_lifetime dans php.ini>>>OK
c) set_session_lifetime()
d) Avec $_SESSION['lifetime']

Cookies
Quelle est la syntaxe correcte pour définir un cookie en PHP ?
a) setcookie('nom', 'valeur', expiration);>>>OK
b) cookie_set('nom', 'valeur', expiration);
c) set_cookie('nom', 'valeur', expiration);
d) $_COOKIE['nom'] = 'valeur'; >>>> X FAUX

Comment récupérer la valeur d'un cookie en PHP ?
a) $_SESSION['nom']
b) $_GET['nom']
c) $_COOKIE['nom'] >>>> X OK
d) $_POST['nom']

Comment supprimer un cookie en PHP ?
a) unset($_COOKIE['nom']);
b) setcookie('nom', '', time() - 3600);>>>OK
c) delete_cookie('nom'); >>>> X FAUX
d) remove_cookie('nom');

Quelle est la différence entre un cookie de session et un cookie persistant ?
a) Un cookie de session expire à la fermeture du navigateur, un cookie persistant a une date d'expiration définie (>>>>X OK) 
b) Un cookie de session est stocké sur le serveur, un cookie persistant est stocké côté client >>>> X FAUX
c) Un cookie de session est plus sécurisé qu'un cookie persistant
d) Il n'y a aucune différence

Quelle est la limite de taille pour un cookie en PHP ?
a) 2 Ko
b) 4 Ko >>>> X OK
c) 8 Ko
d) 16 Ko

Comment sécuriser un cookie pour qu'il soit accessible uniquement via HTTPS ?
a) Utiliser l'option secure dans setcookie() >>>OK
b) Utiliser l'option https_only dans setcookie() >>>> X FAUX
c) Utiliser l'option SSL_only dans setcookie()
d) Ajouter un header HTTPS-Only

PRG (Post/Redirect/Get)
Qu'est-ce que le Pattern Post/Redirect/Get (PRG) ?
a) Une méthode de traitement des erreurs en PHP
b) Un pattern utilisé pour empêcher la soumission multiple des formulaires >>>> X OK
c) Un moyen de rediriger les utilisateurs après un GET
d) Un système de gestion de cache en PHP

Pourquoi utilise-t-on le PRG dans les formulaires ?
a) Pour accélérer les requêtes POST
b) Pour éviter la resoumission des formulaires en cas de rafraîchissement de page >>>> X OK
c) Pour forcer l'utilisation du HTTPS
d) Pour envoyer des données via les cookies

Quelle fonction PHP est utilisée pour rediriger vers une autre page ?
a) redirect_to()
b) header() >>>> X OK
c) location()
d) move_page()

Quelle redirection doit être utilisée pour une redirection temporaire dans le PRG ?
a) Redirection 301
b) Redirection 302>>> OK
c) Redirection 404 >>>> X faux
d) Redirection 500

Quel est l'avantage du PRG pour la gestion des formulaires ?
a) Il réduit les requêtes GET
b) Il évite la duplication de données 
c) Il permet de mieux sécuriser les données
d) Il évite la soumission multiple des formulaires >>>> X ok

Pourquoi faut-il appeler exit() après une redirection avec header() ?
a) Pour arrêter l'exécution du script >>>> X ok
b) Pour vider le buffer de sortie
c) Pour lancer la redirection
d) Pour fermer la session active

Sécurité et bonnes pratiques
Pourquoi est-il important de valider les données des superglobales comme $_GET et $_POST ?
a) Pour améliorer la performance du script
b) Pour éviter les erreurs syntaxiques
c) Pour se protéger contre les failles de sécurité comme l'injection SQL >>>> X ok
d) Pour limiter la taille des données

Quel est le moyen le plus sûr d'afficher des données utilisateur en PHP pour éviter les failles XSS ?
a) Utiliser echo directement
b) Utiliser htmlspecialchars() >>>> X ok
c) Utiliser strip_tags()
d) Utiliser addslashes()

Quelle méthode est recommandée pour se protéger contre les attaques CSRF dans un formulaire PHP ?
a) Utiliser $_GET
b) Utiliser des tokens de session >>>> X ok
c) Utiliser les cookies uniquement
d) Vérifier les en-têtes HTTP (>>>> X faux)

Pourquoi ne faut-il pas utiliser des identifiants de session prévisibles ?
a) Cela rend les sessions plus lentes
b) Cela augmente le risque d'usurpation de session >>>> X ok
c) Cela empêche l'utilisation des cookies
d) Cela surcharge le serveur

Quel attribut permet de rendre un cookie accessible uniquement via HTTP et non JavaScript ?
a) secure
b) HttpOnly >>>> X ok
c) SameSite
d) NoScript

Comment éviter les injections SQL lors de l'utilisation de $_GET et $_POST dans une requête SQL ?
a) Utiliser addslashes()
b) Utiliser des requêtes préparées (prepared statements)>>>ok
c) Utiliser stripslashes()
d) Utiliser htmlspecialchars() >>>> X faux

Quelle directive dans php.ini permet de limiter la taille des fichiers téléversés via un formulaire ?
a) upload_max_size
b) max_upload_filesize
c) upload_max_filesize >>> X ok
d) post_max_filesize

Pourquoi est-il important de régénérer les identifiants de session après l'authentification ?
a) Pour améliorer les performances
b) Pour prévenir les attaques de fixation de session >>>> X ok
c) Pour rendre les sessions plus rapides
d) Pour fermer les anciennes sessions
 */