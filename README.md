# ecf-sport

Cette application a été déployé sur heroku à l'aide d'un bundle créé par une aprenante. Pour cela j'ai suivi ces quelques étapes.

1.J'ai créé un compte sur heroku et une nouvelle application que j'ai nomé ecf-sport 
2.Dans mon compte heroku j'ai lié mon compte github afin d'automatiser le déploiment.
3.J'ai installé heroku cli sur ma machine.
4.J'ai tapé ces commandes sur mon terminal: 
    
      composer require nat/deploy
      
      
      php bin/console nat:heroku
      
      
      php bin/console nat:h
      
 5.Je terminal m'a demandé de m'authentifier
 6.j'ai ensuite supprimé le bundle avec cette commande 
 
      composer remove nat/deploy
      
                            #Manuel d'utilisation de l'application déployée
      
      Ce manuel va vous guider dans la navigation au sein de votre nouvelle application. 
      Le compte administrateur a été créé au préalable et les identifiants vous a été transmis par courrier. 
      Si vous ne les avez pas reçu je vous laisse contacter le numéro ci dessous, il vous seront renvoyés.
        0820820820
        
      1/ Pour commencer je vous laisse cliquer sur le lien ci-dessous afin d'acceder au formulaire d'authentification de votre panel d'administration.
       https://ecf-sport.herokuapp.com/login
      2/voici quelques exemples de modification que vous pouvez effectuer.
