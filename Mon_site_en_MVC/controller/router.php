<!-- On crée un second fichier dans le Controller nommé router qui agira en fonction de l'action de l'utilisateur sur l'URL, différentes pages s'ouvriront. C’est le rôle que jouera le Router afin de réguler ce flux au niveau des URL.
C'est sur cette page Routeur que commencera notre première action pour arriver à la redynamisation de notre site
 -->

 <!-- 1_ On commence par ouvrir les balises php en creant la class router
      2_ Ensuite on créera 2 attributs private $_ctrl;
                                       private $_view;
      3_ Ensuite, on crée notre premiere public function routeReq = la requete du routeur, la gestion selon l'action de l'utilisateur se passera dans cette fonction...
                                       Apparition de 
                                       try et catch deux actions inseparables. Le catch se charge toujours des exceptions
      4_ Dans le try, on appelera une function qui se chargera de créer des classes.
      5_ Ensuite on va créer une variable url =''; egal à rien et inclure un fichier qui agira en fonction des actions des differents utilisateurs. Cela nous emmenera à contrôller avant d'executer cette action.      
 -->
 <?php
 class Router
 {  
     // CHARGEMENT AUTOMATIQUE DES CLASSES
    
    private $_ctrl;
    private $_view; // Il sera utilisé pluatard...
    public function routeReq()
    {
        try 
        {
            spl_autoload_register(function($class(){

            });
            $url = '';
            if(isset($_GET['url']))
            {
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "controller".$controller;
                $controllerFile = "controllers/".controllerClass. "php";
            }

        }
        catch(Exception $e)
        {

        }
    }

    
 }
 
 
 ?>