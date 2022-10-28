# ecf-sport

## Manuel d'utilisation de l'application déployée
      
Ce manuel vous guidera dans la navigation au sein de votre nouvelle application. 
- Merci de cliquer sur le lien ci-dessous pour vous authentifier sur votre interface administrateur: (Le compte administrateur a été créé au préalable et les identifiants vous a été transmis par courrier. )

            <a href="https://ecf-sport.herokuapp.com/login">Clique ici pour l'interface administrateur</a>
      

Si vous ne les avez pas reçu ou que vous ne parvenez pas à vous connecter je vous laisse contacter le numéro ci dessous, il vous seront renvoyés.
        0820820820
        
+ Pour modifier un utilisateur, il faut vous rendre dans le panneau à gauche dans "gestion des utilisateurs" puis cliquer sur le bouton modifier utilisateur comme sur l'image ci-dessous:

 ![image](https://user-images.githubusercontent.com/91209960/198676677-6b076277-b88b-47fc-bfe1-d58868bb8dd0.png)
 
+ Pour modifier créer un utilisateurs et ses informations cliquer sur créer un utilisateur.

![image](https://user-images.githubusercontent.com/91209960/198678798-665a0ea5-9ba1-4332-b130-147319908a62.png)

 
 il vous ai aussi possible de supprimer un utilisateur en cliquant sur le bouton rouge "supprimer" de l'image, 
 
 `Attention cette action est irreversible et l'utilisateur sera perdu dans le néant intersidéral des moutons.`
      

  
      voici quelques exemples de modification que vous pouvez effectuer.

Cette application a été déployé sur heroku à l'aide d'un bundle créé par une aprenante. Pour cela j'ai suivi ces quelques étapes.

1. J'ai créé un compte sur heroku et une nouvelle application que j'ai nomé ecf-sport 
2. Dans mon compte heroku j'ai lié mon compte github afin d'automatiser le déploiment.
3. J'ai installé heroku cli sur ma machine.
4. J'ai tapé ces commandes sur mon terminal: 

    
      composer require nat/deploy
      
      
      php bin/console nat:heroku
      
      
      php bin/console nat:h
      
5. Je terminal m'a demandé de m'authentifier
   
6. j'ai ensuite supprimé le bundle avec cette commande 
 
      composer remove nat/deploy
      
      
                            
