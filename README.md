# Guide d'installation
Bonjour, voici le guide pour l'installation du test technique créer en Symfony.

Les pré-requis :
- **[Symfony](https://symfony.com/download)**
- **[Composer](https://getcomposer.org/)**
- **Un serveur web local (ex: [Wamp](https://www.wampserver.com/), [UwAmp](https://www.uwamp.com/fr/?page=download), etc.)**
- **Une base de donnée MySQL**

Une fois le projet télécharger et sur votre bureau, vous pouvez lancer votre serveur web local et accéder au chemin de dossier du projet via un terminal de commande (`cd C:/..`).

Si vous avez des identifiants spécifique pour vous connecter à votre base de donnée locale autre que "`root` : `root`", vous devez changer les identifiants de connexion dans le `.env` → `DATABASE_URL="mysql://root:root@127.0.0.1:3306/gaboweb?serverVersion=5.7"`

Ensuite, tapez les commandes suivantes :

→ Installe le projet.
```
composer install
```
→ Permet de créer la base de donnée.
```
php bin/console doctrine:database:create
```
→ Permet de créer les colonnes. **(vous tapez "yes")**
```
php bin/console doctrine:migrations:migrate
```
→ Permet d'envoyez des données déjà configurée dans la base de donnée. **(vous tapez "yes")**
```
php bin/console doctrine:fixtures:load
```

> Si vous souhaitez utiliser le site internet comme un utilisateur lambda, vous pouvez passer le site en "**production**" :
> - Allez dans le `.env` dans les fichiers du projet.
> - Changer le `APP_ENV=dev` en `APP_ENV=PROD`. **→ Attention, ne faite cela qu'après avoir tapez les commandes ci-dessus !**

Une fois le processus d'installation et de configuration terminer, tapez la commande suivante :
```
symfony server:start
```

**Pour accéder au projet, il vous faudre accéder à l'adresse suivante : https://127.0.0.1:8000/**

Les identifiants de connexion sont `admin` et `admin`.


***En cas de problèmes durant l'installation du projet, n'hésitez pas à me contacter par mail : mariusthiesset@gmail.com***
