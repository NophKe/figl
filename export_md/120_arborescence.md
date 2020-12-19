# L'arborescence


## Les différents types de fichiers 

Il existe différents types de fichiers, pour une liste non exhaustive :

1. Documents de l'utilisateur
1. Programme
1. Librairies
1. Fichiers temporaires ...
1. Fichier de configuration
1. Les fichiers spéciaux
1. Les liens

Nous n'allons pas détailler tout de suite,

Tout part de la partition racine, aussi appelée partition root, la slash, (`/`). Celle ci contient un certain nombre de dossier et sous dossier, et un certain nombre de fichiers.

La Philosophie Unix veut que « tout soit fichier » ainsi, écrire dans la mémoire vive, envoyer des données sur un bus, vérifier l'état d'un périphérique, modifier la configuration, éteindre un périphérique, activer un service... tout ceci correspondra à des actions sur des fichiers.

Vous vous en doutez, l'arborescence de Linux est une caverne au merveille, et on peut beaucoup apprendre en s'y promenant! Et, (vous vous en doutez aussi), l'arborescence contiendra ce que contiennent vos partitions, mais pas que...

Les différentes tentatives pour standardiser les choses à ce niveau ont donné peu de résultat, mais ici on ne regardera pas les sous-sous-sous-répertoires, donc, oubliez ce que je viens de dire! Et voici ce sur quoi il n'y a pas à discuter!

### /home 

Ici seront vos données, et sur une partition séparée de préférence. L'intérêt de les séparer physiquement est de pouvoir, par exemple, réinstaller Linux sans toucher à vos données. Donnez la taille que vous voulez. Chaque utilisateur aura son propre répertoire à l'intérieur de cette partition. Par exemple l'utilisateur Lambda aura comme répertoire personnel `/home/lambda`.

### /boot 

Ici se trouvent les noyaux, et ce qui est nécessaire pour l'exécution du chargeur de démarrage.

### /bin 

Binaries (exécutables), c'est ici que l'on trouve les applications (sans leur ressources, données, librairies...juste les exécutables)

En fait, souvent ce n'est pas un vrai répertoire, mais un lien vers `/usr/bin` (on va y venir)

### /dev 

Devices (périphérique), les fichiers qui se trouvent dans ce répertoire sont des fichiers spéciaux qui pointent vers des périphériques.

Les programmes peuvent donc communiquer avec le matériel soient par des appels système, soit en écrivant des données brutes dans les fichiers du répertoire /dev.

Les fichiers qui commencent par `/dev/sd` sont les **DISQUES**. Il y a de fortes chance pour que votre disque dur de boot soit en `/dev/sda`. Ils sont numérotés avec des lettres (*bizarre comme phrase*)

Les Fichiers qui commencent par `/dev/sdX` (ou X est une lettre minuscule suivie d'un chiffre) sont des **PARTITIONS** (votre partition racine pourrait être par exemple `/dev/sda1`)

### /etc 

Oui oui oui, c'est le répertoire « et cætera»! Tous les fichiers qui ne rentraient pas dans un de ces autres dossier, mais qui étaient trop importants pour qu'on les perde.

C'est dans ce dossier que se trouvent tous les fichiers de configuration du système.

### /lib 

Les librairies dont le système a besoin pour fonctionner.

### /mnt 

Un répertoire vide pour servir de point de montage temporaire.

C'est l'occasion d'évoquer que si vous montez une partition à l'intérieur d'un dossier et que ce dossier n'est pas vide. Linux va cacher le contenu de ce répertoire ; vous n'y aurez donc plus accès tant que quelque chose sera monté à cet endroit.

Donc laissez ce dossier vide.

### /proc 

C'est un système de fichier très particulier qui est monté en `/proc`. C'est véritablement la représentation que se fait le noyau de son environnement. Il contient un dossier pour chaque processus en cour d'exécution sur le système. (il faudrait parler des PID), ce dossier contient aussi le fichier `interrupts` et `meminfo` qui vous donneront des info sur l'utilisation du système. Il y a beaucoup à apprendre en explorant /proc.

C'est ce que l'on appelle un "pseudo-système de fichier".

### /root 

Le Super-utilisateur n'a pas son dossier personnel dans la /home, mais directement dans la partition racine, ainsi lors d'une panne du système, il peut se connecter à son shell correctement configuré, et avoir accès à ses fichiers.

Si vous allez faire quelque chose de dangereux, vous pouvez déconnecter tous les utilisateur, vous connecter en root, et démonter la `/home` et toutes les partitions qui craignent quelque chose.

### /tmp 

Pour les fichiers temporaires. Si votre gestionnaire d'initialisation est Systemd, il aura surement monté un "tmpfs" à cet endroit.

C'est un autre "pseudo-système" qui imite une véritable partition uniquement avec la mémoire vive. C'est bien plus rapide qu'un disque-dur, et utile pour les applications qui doivent constamment stocker une grosse quantité de données (pensez au streaming!)

### /srv 

Pour les répertoires partagés sur Internet.

### /sys 

`/proc` nous offrait la possibilité de voir ce qu'il se passait dans le noyau. Cette fois ci, le noyau nous propose une interface pour communiquer avec lui et les différents périphériques, en manipulant les fichiers de ce pseudo système.

### /usr 

C'est un peu le `C:\Program Files`de Gnu-Linux.

A la base, c'était le répertoire des dossiers utilisateurs, la `/home` de l'époque... Mais un jour au MIT, ils on eut des problèmes de stockage... Et ils on balancé `/bin, /lib, et les autres` ici!

Quand ils on eu un nouveau disque, ils ont déplacé le répertoire des utilisateurs dans `/home`, seul `/usr/share` (qui contient la documentation notamment) est resté en place. Depuis c'est comme çà, c'est historique!

### /var 

Des fichiers utiles mais pas indispensables. Les journaux de connections et autre journaux de surveillance du système. Une copie des paquetages que l'on installe...

Le carnet de maintenance en somme! Si vous ne voulez pas faire tournez un serveur, ou devenir agent secret, ne vous en souciez plus.

### /lost+found 

Parfois le système ne sait plus à quel fichier correspond un cluster d'un disque. À la racine de chacune des partition au format ext, il y aura ce répertoire.

C'est le système qui gère cela, ne vous en préoccupez pas trop, et éteignez votre ordinateur proprement.
-------------------------------------------
| PREC: [Les Disques](110_disks.md) |  | SUIV: [La philosophie du Libre](130_libre.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |
-------------------------------------------
