
# learn module TEST

contains all you need to learn how to build modules

## How To create a Module
- create a git repo with Readme.md 
- goto cd modules
- git clone https://github.com/pixelhumain/xxxxx
- you can copy existing modules content according to the usage
    + XxxxxModule.php
        * chnge metadata : keywords , description
- assets/js
    + categories.json : is a category description
    + dynForm.js : is a dynform definition file
    + init.js : adds any scripts into CO objects
- CoController manages anything that will be used in CO 
- DefaultController : manages all standalone 
- if in CO, there is interaction with a model it must be loaded in CO2Module.php
    + $this->setImport(array(
            'xxxxx.models.*',
-xxxxx in pixelhumain/ph/protected/config/moduleconfig.php
- choose an icon here : https://thenounproject.com/ right click save > overload assets/images/logo.png

## Connecting to CO 
- modules are declared in initJs.php in var modules
- add getConfig method in the main model 

## USE CASES
- comprendre le fonctionnement des urls 
    + controlleur
    + Action
    + view
    + afficher un alert js
- faire un premiere page faq accessible ici : 127.0.0.1/ph/learn/default/faq 
- make a query to DB , get all people born before 90'
- copier l'exemple de graph depuisle module graph 
- dans le module graph créer un nouveau controlleur LEARN et crer un nouveau graph

### Important readme : explain your module
/yourModule shows the Readme.md content information
