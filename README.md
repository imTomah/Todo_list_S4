# Procédure d'installation
## Pré-requis  
- Avoir un serveur web local
- PHP 7.3 
## Installation pour un utilisateur lambda
- Ouvrir un dossier en local  
- Faire un git clone du repository  
- ```composer update```  ou  ```install```  

## Creation de la base donnée  
- ```bin/console doctrine:database:create```
## Migration entités
1. Création du fichier de migration (code SQL) : ```bin/console make:migration```  
2. Exécuter la migration ```bin/console doctrine:migration:migrate``` --> crée les tables Todo et Category dans MySQL
## Fixtures  
1. Les fixtures fonctionnent en mode developpement "normalement"  
```bin/console doctrine:fixture:load```