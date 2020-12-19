Les commandes de base


# Et maintenant? 

Encore une fois je vous conseille de réaliser cette page pour de vrai dans votre console et de vous entrainer ainsi à réaliser les choses. Vous verrez que la pratique vient plus vite qu'on ne le pense!

Vous avez suivi la page précédente sur le shell et il ne vous manque plus que quelques connaissances pour commencer à utiliser pleinement le shell! Vous avez la grammaire, maintenant passons au vocabulaire.

# Se déplacer parmis les dossiers 

## Rappel 

 * Sur les systèmes basés sur Unix, on « monte » les partitions de disques dans des dossiers.
 * On peut monter une partition dans un dossier qui lui mêmes se trouve dans une partition.
 * Il existe une partition racine, qui contient le système, `/` à l'intérieur de laquelle vient se greffer toutes les autres.
 * Chaque fichier possède des droits d'accès/écriture et d'éxécution 

## pwd  =Print Working Directory 

Il affiche le répertoire courant ainsi:

    $ pwd
    /home/nono
    $ _

## cd =Change Directory 

Il permet de changer de répertoire courant!

    $ pwd
    /home/nono
    $ cd /home
    $ pwd
    /home

Sans argument il vous replace dans votre répertoire utilisateur.

    $ pwd
    /home
    $ cd
    $ pwd
    /home/nono

## slash, . et .. 

: Le `symbole slash `/`
délimite, les dossiers entre eux.
: Le point `.`
symbolise le répertoire courant.
: Les deux points
symbolisent le répertoire parent.

Illustration:

    $ cd
    $ pwd
    /home/nono
    $ cd ..
    $ pwd
    /home
    $ cd ..
    $ pwd
    /

Vous ne pourrez pas aller plus haut.

## ps =Print Services 

Affiche les programmes en cours d'exécution

    $ ps
    
      PID TTY          TIME CMD
     1415 pts/1    00:00:02 zsh
     2070 pts/1    00:00:00 vim
     2074 pts/1    00:00:00 bash
     2075 pts/1    00:00:00 ps
    $ _

## du =Disk Used 

Donne la taille des fichiers

    $ du un_fichier.txt
    4	un_fichier.txt
    $ _

Remarquez que `du` ne précise pas 4 de quelle unité. L'option -h permet d'avoir un affichage humainement lisible.

    $ du -h un_fichier.txt
    4 K	un_fichier.txt
    $ _

Cette fois-ci il précise que ce sont des kilo-octets!

## df =Disk Free 

Pareil que précédemment...

    $ df
    
    Sys. de fichiers blocs de 1K   Utilisé Disponible Uti% Monté sur
    dev                  1880376         0    1880376   0% /dev
    run                  1892208       844    1891364   1% /run
    /dev/sda1           51343996  12043240   36679316  25% /
    tmpfs                1892208         4    1892204   1% /dev/shm
    tmpfs                1892208         0    1892208   0% /sys/fs/cgroup
    tmpfs                1892208        40    1892168   1% /tmp
    /dev/sda3           55253852  36633888   15799848  70% /home
    /dev/sdb6          303299580 271297268   32002312  90% /home/nono/DOCS
    tmpfs                 378440        12     378428   1% /run/user/1000
    
    $ df -h
    
    Sys. de fichiers Taille Utilisé Dispo Uti% Monté sur
    dev                1,8G       0  1,8G   0% /dev
    run                1,9G    844K  1,9G   1% /run
    /dev/sda1           49G     12G   35G  25% /
    tmpfs              1,9G    4,0K  1,9G   1% /dev/shm
    tmpfs              1,9G       0  1,9G   0% /sys/fs/cgroup
    tmpfs              1,9G     40K  1,9G   1% /tmp
    /dev/sda3           53G     35G   16G  70% /home
    /dev/sdb6          290G    259G   31G  90% /home/nono/DOCS
    tmpfs              370M     12K  370M   1% /run/user/1000

# Autres programmes importants 

## less et more 

Ce sont des paginateurs, vous avez du les rencontrer au chapitre précédent. Les paginateurs sont des programmes assez spéciaux car il prennent le contrôle de l'écran et du clavier et ne le rendent au shell qu'a la fin de leur propre éjection.

A l'intérieur de less ou de more, utilisez les touches suivantes:

 * **q** pour quitter
 * **espace** pour passer une page
 * **les fleches haut et bas** pour se déplacer d'une ligne
 * **h** pour l'aide

entrainez-vous en faisant:

    $ ls /bin | less

Notez que les espaces avant et après la pipe sont facultatifs.

## man =le MANuel 

Vous retrouverez avec le programme man, les touches qui ont été utilisées dans le paragraphe précédent, pour utiliser la pagination.

Si vous tapez seulement man, vous obtiendrez:

    $ man
    Quelle page de manuel voulez-vous ?
    
    $ _

Pour consulter le manuel du programme `ls`

    $ man ls

Ce manuel là sera probablement en anglais...

Pour lire le manuel du manuel faites:

    $ man man

Dans la page de manuel, vous trouverez:

 * le synopsis (comment le programme accepte différent options, et requiert certains arguments)
 * des exemples d'utilisation
 * une description du programme
 * et bien d'autres choses...

# ls* 

## ls 

On a déja vu ls, il liste les fichiers, on en profite pour donner quelques options utiles:

    $ ls 		 Affiche les fichiers du repertoire courant
    $ ls /home	 Affiche les fichiers du repertoire /home
    $ ls -a		 Affiche les fichiers en incluant les fichiers cachés
    $ ls --color 	 Affiche une réponse en couleur
    $ ls -l		 Affiche les infos détaillées

Bien sur on peut combiner:

    $ ls -la --color /home
     
    total 28
    drwxr-xr-x  4 root root   4096  9 nov.   2017 .
    drwxr-xr-x 18 root root   4096 13 mars  23:25 ..
    drwx------  2 root root  16384  9 nov.   2017 lost+found
    drwx------ 66 nono users  4096 24 juin  18:07 nono

Pour en savoir plus:

    $ ls --help

ou encore

    $ man ls

## lsblk 

Liste les disques, et affiche les partitions sous forme d'arbre!

    $ lsblk
    
    NAME   MAJ:MIN RM   SIZE RO TYPE MOUNTPOINT
    sda      8:0    0 111,8G  0 disk 
    ├─sda1   8:1    0    50G  0 part /
    ├─sda2   8:2    0     8G  0 part [SWAP]
    └─sda3   8:3    0  53,8G  0 part /home
    sdb      8:16   0 596,2G  0 disk 
    ├─sdb1   8:17   0  11,7G  0 part 
    ├─sdb2   8:18   0   3,5G  0 part 
    ├─sdb3   8:19   0   100M  0 part 
    ├─sdb4   8:20   0     1K  0 part 
    ├─sdb5   8:21   0 291,6G  0 part 
    └─sdb6   8:22   0 289,3G  0 part /home/nono/DOCS
    sr0     11:0    1  1024M  0 rom  
    
    $ _

## lscpu 

Affiche les informations relatives au processeur.

    $ lscpu
    
    Architecture :                          x86_64
    Mode(s) opératoire(s) des processeurs : 32-bit, 64-bit
    Boutisme :                              Little Endian
    Processeur(s) :                         2
    Nom de modèle :                         AMD Turion(tm) X2 Dual-Core Mobile RM-75
    Révision :                              1
    Vitesse du processeur en MHz :          550.000
    Vitesse maximale du processeur en MHz : 2200,0000
    Vitesse minimale du processeur en MHz : 550,0000
    BogoMIPS :                              4400.24
    Virtualisation :                        AMD-V
    Cache L1d :                             64K
    Cache L1i :                             64K
    Cache L2 :                              512K

## lslogins 

Affiche les connexions des utilisateurs.

    $ lslogins

Vous remarquerez, qu'en plus de vous même de du compte Administrateur (root), il se trouve d'autres utilisateurs! Il sont présent pour des question de sécurité. Il permettent de compartimenter les différents programmes du système d'exploitation.

    $ lslogins -u
    
    
     UID USER PROC PWD-LOCK PWD-DENY    LAST-LOGIN GECOS
       0 root   75                   juil.07/16:22 root
    1000 nono   32                           09:19 

L'option `-u` permettra de n'afficher que les utilisateurs.

# rm =ReMove 

Supprime des fichiers. A utiliser avec prudence, surtout si on utilise des jokers !!!!

    $ ls *.txt
    un_fichier_texte.txt
    un_fichier.txt
    $ rm *.txt
    $ ls *.txt
    ls: erreur: aucun fichier de ce type (*.txt)
    $ _

# Les commandes qui vont d'elle même 

: exit
Quitter le shell en cours d'utilisation
: date
Affiche la date et l'heure
: cal
Affiche un calendrier
: clear
Vide l'écran
: eject
Ejecte les cd/dvd de leur lecteur


---

| PREC: [A l'origine était sh...](140_shell.md) |  | SUIV: [Éditer du texte avec la console... ](160_editor.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal index.md] |  |

---

