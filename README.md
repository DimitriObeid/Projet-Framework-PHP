# Projet-Framework-PHP

Projet de création d'un framework PHP utilisant le modèle MVC.

## Documentation :

### 1 - L’architecture du framework

Ici nous allons faire un framework, 
avec de nombreuses possibilités, 
et donc de nombreuses configurations, 
il faudra surement les séparer dans plusieurs 
dossiers selon les informations qu'elles contiennent.

   - Config
   - Controller
   - CSS
   - Framework
   - JS
   - Media
   - Model 
   - View 

### 2 - Les requetes HTTP

On aura besoin de créer une classe HttpRequest
 contenant les informations qui nous seront utiles et
 qu’il faudra mettre comme propriétés privées pour qu’on 
 y puisse pas y accéder.

En revanche, cela demande de créer aussi des 
accesseurs ( des getters ).

### 3 - Les routes

Ici, on parle des routes pour les éléments qui vont nous indiquer
 le chemin vers où se diriger. Chaque requête HTTP devra correspondre 
 à un seul chemin ( une route ) et celle-ci sait quel controller 
( qu’on va voir plus tard) et quelle action sont appelée et quels paramètres les lient. 

On aura à travailler très souvent avec ces méthodes : 
**GET**, **POST** ou **DELETE** dans toutes nos requêtes HTTP.

### 4 - Les controllers

Le controller est le dernier élément de la structure MVC et c'est aussi 
l'élément liant. Il va s'occupper de recevoir les données entrées par 
l'utilisateur et de communiquer les changements aux modèles. 

Il pourra aussi communiquer avec les modèles pour obtenir des informations 
qu'il pourra ensuite transférer à la vue.

Le controller est le dernier élément de la structure MVC et c'est aussi l'élément liant. 
Il va s'occupper de recevoir les données entrées par l'utilisateur et de communiquer 
les changements aux modèles. Il pourra aussi communiquer avec les modèles pour obtenir 
des informations qu'il pourra ensuite transférer à la vue.

### 5 - Modèles

Les modèles sont chargés de gérer les données et leur persistance . 
Un modèle se comporte comme un portail permettant au reste de l'application 
d'accéder aux données et de les conserver au besoin. Souvent on associera 
les modèles à une base de données mais il est tout à fait possible d'avoir 
des modèles intéragissant avec des API externes.
