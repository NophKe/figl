# Une fois connecté


Ce qui arrive après le LOGIN dépend de comment vous avez fait les choses:

 * Sur une console texte, le programme `login` va lancer le programme défini comme interpréteur de commande par défaut.
 * En mode graphique, l'environnement graphique va démarrer, et vous pourrez démarrer des programmes depuis celui-ci.

## Les Interfaces graphiques 

Le système d'exploitation Gnu-Linux à la particularité par rapport à Windows et MacOs de vous laisser libre de choisir l'interface graphique qui vous plait.

Sous d'autres systèmes d'exploitation, l'utilisateur est invité à personnaliser son environnement graphique à sa guise, mais il ne possède pas la liberté de modifier cette interface, de la remplacer par une autre...

Les interfaces graphiques de Windows, Mac, et Android sont configurables dans une certaine mesure. Mais sous Gnu-Linux, il existe de très diverses interfaces graphiques dont certaines peuvent être basées sur des concepts très différents les uns des autres.

### Pour ne citer que les principales (et mes préférés) 

: Kde
possède une interface utilisateur esthétique faite pour être facile d'accès pour les débutants

: Gnome
son grand concurrent en est à la version 3

: Mate
la descendante de Gnome 2, dont certains *(personne)* n'arrivaient pas à se défaire...

: Xfce
environnement complet (comme Kde et Gnome) destiné à des machines moins puissantes. Il est léger et réactif.

: i3
est destiné à des utilisateurs plus avancés qui veulent un système entièrement configurable, utilisable sans trop lever les mains du clavier, et très réactif.

## Le Shell 

Le shell (*coquillage en anglais*) est appelé ainsi car il englobe cache le noyau du système d'exploitation.

C'est une caractéristique importante des systèmes d'exploitation Unix et Linux, que le shell et le noyau soient de programmes bien séparés. Ces deux programmes communiquent à travers un nombre limité d'appels système. Ainsi il est possible d'avoir différent shells, correspondant au gout de chacun.

Le shell normal devrait vous afficher un symbole `$`, la prompte. Nous n'allons pour le moment pas rentrer dans les détails seulement de la ligne de commande, et de la syntaxe du shell. Intéressons nous plutôt à ce qu'il se passe du côté de l'ordinateur.

Le Shell n'est rien d'autre qu'un processus utilisateur, et même pas un qui soit véritablement extraordinaire. Il attend que vous appuyiez sur le clavier, en écoutant (à travers le noyau) le port de communication de votre clavier. Le noyau voit les touches être pressées, et quand il reconnaît la touche entrée, il passe la ligne de texte à votre shell tentera d'interpréter ces événements comme des commandes.

### Les différents shells 

: sh
C'est l'ancêtre de tous, le premier à avoir été écrit. Il a été conservé pour des raisons de compatibilité jusqu'à devenir part incontournable du standard POSIX

: Bash
C'est le descendant de sh. Il l'améliore et l'étends tout en restant compatible avec son papa. Ce qui fait de lui le shell pré installé par défaut sur *presque* toutes les distribution Linux

: Zsh
Un shell moderne avec une auto-complétion puissante, de belles couleur qui le rendent lisible, même sans configuration préalable.

: Fish
Un shell très pratique pour les débutants de la ligne de commande. Mais qui a une syntaxe parfois assez différente de Bash
 
-------------------------------------------
| PREC: [Le Login](065_login.md) |  | SUIV: [Les Interfaces](070_interface.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |
-------------------------------------------
