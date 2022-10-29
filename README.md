
# ECF sport

## Desciption de l'application

Ce manuel vous guidera dans l'utilisation et la navigation au sein de votre nouvelle application.

+ Merci de cliquer sur le lien ci-dessous pour vous authentifier sur votre interface administrateur: (Le compte administrateur a été créé au préalable et les identifiants vous a été transmis par courrier)

https://ecf-sport.herokuapp.com/login

Si vous ne les avez pas reçu ou que vous ne parvenez pas à vous connecter je vous laisse contacter le numéro ci dessous, il vous seront renvoyés. 0820820820

+ Pour modifier un utilisateur, il faut vous rendre dans le panneau à gauche dans "gestion des utilisateurs" puis cliquer sur le bouton modifier utilisateur comme sur l'image ci-dessous:
![image](https://user-images.githubusercontent.com/91209960/198814899-96436cbd-d6bb-4b4b-940a-1feef0a374cc.png)



+ Pour modifier créer un utilisateurs et ses informations cliquer sur créer un utilisateur.



il vous ai aussi possible de supprimer un utilisateur en cliquant sur le bouton rouge "supprimer" de l'image,

Attention cette action est irreversible et l'utilisateur sera perdu dans le néant intersidéral des moutons.

Ces exemple sont aussi applicable sur l'ensemble des fonctions de modification, d'ajout ou des suppression d'utilisateurs, de partenaires ou de structures.


## Déploiment de l'application sur heroku

Cette application a été déployé sur heroku à l'aide d'un bundle créé par une aprenante. Pour cela j'ai suivi ces quelques étapes.

+ J'ai créé un compte sur heroku et une nouvelle application que j'ai nomé ecf-sport

+ Dans mon compte heroku j'ai lié mon compte github afin d'automatiser le déploiment.

+ J'ai installé heroku cli sur ma machine en suivant la documentation https://devcenter.heroku.com/articles/heroku-cli#install-the-heroku-cli

+ J'ai tapé ces commandes sur mon terminal:

```bash
composer require nat/deploy

php bin/console nat:heroku

```

+ Le terminal m'a demandé de m'authentifier

+ J'ai ensuite supprimé le bundle avec cette commande

```bash
composer remove nat/deploy

```


## Installation Locale

Cloner le projet à partir de github.com

```bash
  git clone git@github.com:sabrouw/ecf-sport.git
```

Aller dans le dossier du projet

```bash
  cd my-project
```

Installer les dépendences

```bash
  npm install
  composer install
  Set-ExecutionPolicy RemoteSigned -Scope CurrentUser # Optional: Needed to run a remote script the first time
  irm get.scoop.sh | iex
  scoop install symfony-cli
```

Start the server

```bash
  symfony serve
```

Les diagrammes et la charte graphique sont disponibles ici:

https://drive.google.com/drive/folders/1ZUHbDmi4UeVoljQCQQ_qBhKhT1g4Di4_?usp=sharing

