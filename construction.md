# Application Symfony Todolist 
## Installation Symfony version 4.X.X


## Mémo cmd line
 __Ternimal__ :  
 ``` composer create-project symfony/website-skeleton my_project_name "4.4.*" ```


## Procédure d'installation

### Database
__Config database dans .env__:  
```DATABASE_URL=mysql://root:root@127.0.0.1:8888/db_todolist```  
__Création physique de la base de données__  
```bin/console doctrine:database:create```

### Entités
__Les types de données de l'application__ :  
On a deux entités qui apparaissent :  _Category_ et _Todo_  
1. Category (id, name)
2. Todo (id, title, content, createAt, updatedAt, todoFor, category)

__Ternimal__ :  
Pour créer les deux entités : ```php bin/console make entity```  
Commencer par Category puis Todo.  
La relation ce fera à partir de l'entité Todo, avec une __propièté__ _category_id_ qui sera du type __relation__

### Migration

1. Création du fichier de migration (code SQL) : ```bin/console make:migration```  
2. Exécuter la migration ```bin/console doctrine:migration:migrate``` --> crée les tables Todo et Category dans MySQL


### Git Commit
1. Ajout du dossier sur git : ```git add .```
2. Premier commit avec un message : ```git commit -m "Todo application install et config db```

# Fixtures  
Tester instertion de données dans les tables.  
1. Installer d'abord : ```composer require orm-fixture --dev```  
2. Coder dans AppFixtures  
3. ```bin/console doctrine:fixture:load```


# Controllers  
Dans notre cas nous utilisons un seul controller  
```bin/console make:controller```  
Symfony a crée un controller ```MainController ``` et une vue : ```main/index.html.twig```  

## Premier Test d'exécution  
```bin/console server:run``` 
OUPS La version 4.4 a déprécié cette commande.  
On fait un tour sur internet avec les mots clés ```Symfony 4.4 server:run```  
Une proposition dans la doc : ```composer require --dev symfony/web-server-bundle```

Suivre le lien proposé. 

## Notre première requête avec doctrine  
Doctrine et Repository  

## Création du contenue de la vue index  
Création d'un tableau (table) avec bootstrap pour aligné les données de manière tabulaire.  

## Création d'une barre de navigation  
Dans un fichier à part et avec un système d'inclusion dans un bloc.

## Création d'un formulaire a partir d'entités  
Dans le terminal : ```bin/console make:form```  
1. On crée un formulaire a partir d'un fichier de classe créé à cet effet.  
2. Le controller gère cette classe pour construire en mémoire le formulaire  
3. La vue génère le formulaire 
    - la mise en page n'est pas térrible 
    - Symfony intègre un template Bootstrap à placer dans les fichier de configuration.  

## Gestion de la date todofor
Selon si nous créons une todo ou si nous éditons la gestion n'est pas la même.  
- en mode "création" la date est celle du jour de la création
- en mode "Edition" on veut récupèrer la date enregistrée.