Le Logiciel


# Introduction au logiciel 

Un logiciel c'est de la donnée exécutable. Par opposition les fichiers ne sont pas exécutables.
Tous les programmes s'exécutent pas de la même façon.

 * Certains sont écrits dans un langage directement exécutable par le matériel. Ce sera le cas du système d'exploitation, et du chargeur de démarrage.
 * D'autres sont écrits dans des langages exécutables à l'intérieur d'un système d'exploitation. Ce sera le cas de la plupart des logiciels, votre navigateur, le lecteur de vidéo...
 * D'autres encore sont écrits dans un langage lisible directement par un humain. On appelle ces derniers des scripts. On y reviendra plus tard.

Je ferai simplement remarquer qu'il n'existe pas de différence fondamentale entre une "app", une application, un logiciel, un programme, un exécutable, voir une librairie.

## Les Systèmes d'exploitation 

Il existe de nombreux systèmes d'exploitation:

 * Windows
 * MacOs
 * Android
 * Gnu-Linux...

## Les rôles du Système d'exploitation 

Ils sont nombreux, mais pour faire simple, disons qu'un système d'exploitation est un ensemble de programme qui vous permettent de profiter d'un ordinateur. Pour ce qui est de son rôle global, il est donc clair: vous permettre de gérer vos données et de lancer vos programmes.

Dans la pratique, votre navigateur internet ne sais pas communiquer avec votre carte réseau....Et personne ne lui demande de savoir le faire... Le système d'exploitation là pour savoir faire la base....

Ainsi la définition même d'un système d'exploitation est subtile! Personne ne voudrait installer un système d'exploitation qui ne possède pas de moyen de régler la langue du clavier.

Si je désinstalle tous le programmes qui savent ouvrir un dossier, et que je ne peux plus naviguer d'aucune manière sur mon système... Ai-je encore un système d'exploitation fonctionnel?

Et si maintenant je remplaçais tous les programmes qui me donnent accès aux dossiers et aux fichiers par d'autres programmes, ai je changé de système, ou est-ce encore le même?

Ainsi, système d'exploitation est un concept à la fois évident, et subtile. On ne va donc pas plus s'attarder là dessus.

[![](img/os_schemas.png)](https://fr.wikipedia.org/wiki/Syst%C3%A8me_d%27exploitation)

|Schemas de Principe ( credit Wikipedia )|

## Le Noyau du système d'exploitation 

Il est le seul à communiquer directement avec le matériel. Il intercepte toutes les demandes des programmes, et ne les retransmet que s'il les juge valides.

Il gère la mémoire.

Il fournit un environnement favorable aux applications.

Certains OS sont fait pour fonctionner sur certains matériels, d'autres pour une grande diversité de machines.

# Le Langage Machine 

A l'origine était le langage machine, on perforait des cartes avec des trous qui représentaient des ZÉROs et des UNs....

Exemple basique:

 * mémorise le chiffre SEPT
 * tu lui additionnes CINQ *(çà fait DOUZE...)*
 * tu lui soustrait DEUX
 * et tu affiches le résultat *(çà fait  DIX !)*

Une calculatrice fonctionne ainsi:

     [ UN NOMBRE  ]     [ UNE OPÉRATION ]
     [ UN NOMBRE  ]     [ UNE OPÉRATION ]     <- Je commente ici !
     [ UN NOMBRE  ]     [ UNE OPÉRATION ]
     [   .......  ]     [     .......   ]   
     [ l'opérande ]     [ l'instruction ]     <- synonymes

Ce qui donne en pratique:

    
     [      7     ]     [       +       ] 
     [      5     ]     [       -       ]     <- Résultat intermédiaire = 12
     [      2     ]     [       =       ]      
     [            ]     [               ]     <- Attention pas de 10  ici !

Remarque très importante: Les résultat intermédiaires et les affichages de résultat se passent dans le commentaires, car dans la pratique, çà se passe dans des emplacements mémoire... Écrire sur une mémoire ou à l'écran, c'est pareil ! C'est envoyer un signal sur un bus... L'emplacement mémoire dans lequel est stocké le résultat sera appelé dans la suite l'accumulateur.

Remarque importante: Si on écrit pas de chiffre sur une calculatrice et que l'on appui directement sur une touche "opération", le dernier chiffre entré dans l'accumulateur reste à sa place et, il est réutilisé.... Autrement dit, quand on appuie sur une des touches des chiffres, on ne touche pas à l'accumulateur, car une autre case mémoire est dédiée à cela.

Remarque: C'est pour cela qu'une calculatrice démarre en initialisant sa mémoire, et affiche un joli zéro au démarrage (c'est son processus de boot à elle...).

Notre processeur imaginaire fonctionne ainsi pour la partie des calculs:

     [ INSTRUCTION ]     [ ADRESSE MÉMOIRE ]
     [ INSTRUCTION ]     [ ADRESSE MÉMOIRE ]  

Presque pareil mais à l'envers, et avec des ADRESSE mémoire... ( On le répète: le clavier, l'écran, tous sont reliés pas des bus entre eux et communiquer avec les périphériques, c'est toujours écrire sur un bus à une ADRESSE, ou lire sur un bus à une certaine ADRESSE )

Et, il peut déplacer la valeur d'une case mémoire d'une ADRESSE à une autre avec une instruction particulière ainsi:

     [   DÉPLACE  ]     [ ADRESSE de départ ]  [ ADRESSE d'arrivée ]

 * Il ne possède qu'une seule case mémoire des résultats, pour y accéder il faut lire ou écrire l'ADRESSE 01.
 * Il peut lire le clavier à l'ADRESSE 02.
 * Il ne possède trois cases mémoire temporaire, pour y accéder il faut lire ou écrire l'ADRESSE 04 / ADRESSE 05 / ADRESSE 06.
 * Et peut afficher à l'écran en écrivant sur l'ADRESSE 16
 * Enfin les résultats (que je notais dans le commentaires) sont accessibles à l'ADRESSE 08

Maintenant, on va écrire le programme le plus con du monde!
 * On le lance, le programme ne fait rien sinon attendre qu'on tape un nombre puis qu'on tape sur la touche [Entrée] (ce qui place notre nombre dans la mémoire du clavier).
 * On lui donne ainsi trois chiffres (SEPT CINQ et DEUX dans l'exemple du haut)
 * Le programme additionne les deux premiers et soustrait le dernier
 * Enfin il affiche le résultat

Çà donne:

     [   DÉPLACE  ]     [      ZÉRO     ]    [   ADRESSE  08 ]  <- on initialise la calculette en 
                                                                   accumulateur = 0
    
     [   DÉPLACE  ]     [   ADRESSE 02  ]    [   ADRESSE  04 ]  <- on lit ce que dit le clavier_ 02 et on le 
                                                                   met en mémoire temporaire 04 (il dit SEPT)
    
     [   DÉPLACE  ]     [   ADRESSE 02  ]    [   ADRESSE  05 ]  <- deuxième nombre en 05 (c'est le CINQ)
     [   DÉPLACE  ]     [   ADRESSE 02  ]    [   ADRESSE  06 ]  <- le troisième en 06 (c'est le DEUX)
    
     [   DÉPLACE  ]     [   ADRESSE 04  ]    [   ADRESSE  08 ]  <- le premier nombre entre dans l'accumulateur
    
     [ ADDITIONNE ]     [   ADRESSE 05  ]                       <- on ajoute le second, l'accumulateur prend la 
                                                                   accumulateur = 12
     [  SOUSTRAIT ]     [   ADRESSE 06  ]                       <- on soustrait DEUX   <- accumulateur = 10
    
    
     [   DÉPLACE  ]     [   ADRESSE 08  ]    [   ADRESSE  16 ]  <- on affiche l'accumulateur à l'écran.

Ouf!

L'ordinateur ne voit que des valeur numériques que peuvent prendre des bus. Zéros et des uns...

DÉPLACE se note donc 01
ADDITIONNE se note 02
SOUSTRAIT 03
Les ADRESSES sont identifiées par leur numéro
ZÉRO se note 00

Mais çà c'est en écriture décimale..... En binaire çà donne:

    [ 00001 ] [ 00000 ] [ 01000 ]
    [ 00001 ] [ 00010 ] [ 00100 ]
    [ 00001 ] [ 00010 ] [ 00101 ]
    [ 00001 ] [ 00010 ] [ 00110 ]
    [ 00001 ] [ 00100 ] [ 01000 ]
    [ 00010 ] [ 00101 ] 
    [ 00011 ] [ 00110 ] 
    [ 00001 ] [ 01000 ] [ 10000 ]

Donc en gros le langage assembleur, c'est qu'au lieu d'écrire avec des barbarismes ainsi le programme ressemble à

    	DÉPLACE           ZÉRO     ACCUMULATEUR
    	DÉPLACE        CLAVIER     MÉMOIRE_04
    	DÉPLACE        CLAVIER     MÉMOIRE_05
    	DÉPLACE        CLAVIER     MÉMOIRE_06
    	DÉPLACE     MÉMOIRE_04     ACCUMULATEUR
    	ADDITION    MÉMOIRE_05
    	SOUSTRAC    MÉMOIRE_06
    	DÉPLACE   ACCUMULATEUR     AFFICHAGE
    

Bon c'était rudimentaire... Alors on s'est lancé dans l'écriture de langage de plus haut niveau....

# Les Langages de programmation 

Si vous avez suivis la page précédente sur l'assembleur, l'intérêt des langage de programmation de haut niveau devraient vous paraitre évident.

Sinon, vous avez un problème!

## Exemple de cette même calculette à la noix 

Pour reprendre l'exemple de la page assembleur, si on voulais modifier notre programme pour qu'il fasse la même chose mais qu'il ajoute un petit message de bienvenu.

Il nous faudrait nous replonger dans la lecture de ce programme bien austère.... Mais si nous avions la possibilité d'utiliser un langage fonctionnel, nous aurions écrit un truc dans le genre

    Definition_fonction_assembleur
    	Calculette_a_la_noix=
    
    		DEPLACE           ZERO     ACCUMULATEUR
    		DEPLACE        CLAVIER     MEMOIRE_04
    		DEPLACE        CLAVIER     MEMOIRE_05
    		DEPLACE        CLAVIER     MEMOIRE_06
    		DEPLACE     MEMOIRE_04    ACCUMULATEUR
    		ADDITION    MEMOIRE_05                    <- pas d'affichage
    		SOUSTRAC    MEMOIRE_06                    <- on laisse le résultat dans l'accumulateur 
    
    	Fin Calculette_a_la_noix
    
    
        #### Tout les langages de programmation possèdent une façon d'insérer
        #### à l'intérieur des commentaires. Il sont repérés à la compilation et
        #### ignorés. Dans ce langage fictifs, les commentaires commencent par
        #### les quatre espaces suivis de quatre dièses 
    
    AFFICHE ( Bonjour tout le Monde la calculette du Futur !!! )
    AFFICHE ( -------------------------------version 0.0.0.1-- )
    AFFICHE ( Entrez les trois nombres !! )
    
        #### Entre parenthèse, il y a les paramètres que l'on passe à
        #### AFFICHE () qui est une fonction que les auteur du langage fictif
        #### on prit le soin d'écrire à l'avance....
    
    Calculette_a_la_noix ()
    
        #### Calculette_a_la_noix n'a pas besoin de paramètres
    
    AFFICHE ( Le résultat est %%ACCUMULATEUR )      
    
        #### Dans notre langage fictif, il semble que %% veut dire
        #### attention ce qui suit n'est pas juste un texte mais une 
        #### donnée à retrouver

Ca a l'air compliqué, car les commentaires sont un peu utiles... mais si on lit:

    AFFICHE ( Bonjour tout le Monde la calculette du Futur !!! )
    AFFICHE ( -------------------------------version 0.0.0.1-- )
    AFFICHE ( Entrez les trois nombres !! )
    
    Calculette_a_la_noix ()
    
    AFFICHE ( Le résultat est %%ACCUMULATEUR )      

bein faut avouer que c'est mieux que de tout écrire en assembleur...

On écrira donc les fonctions de bases en assembleur et on brodera autour.... Car en effet la fonction `AFFICHE ()`` doit forcément reposer sur quelque chose!

Alors forcément de fil en aiguille...

## Définitions 

: Code Source
Le fichier de texte grâce auquel on écrit le programme ainsi que les commentaires

: Compilateur
Le programme qui effectue l'action de transformer le fichier source en un véritable programme

: Langage machine
Le langage dans lequel doit être écrit un programme pour être directement exécutable par la machine. Sans commentaire.

: Langage de bas niveau
Langage de programmation proche du langage machine

: Langage de haut niveau
Langage de programmation proche du langage humain

: Exécutable
Programme issu d'une compilation pour une architecture matérielle spécifique et un système d'exploitation spécifique. En gros, un fichier qui contient des segments de données et des segments de code qu'un système d'exploitation sait reconnaitre et démarrer. (et à qui il sait fournir des librairies)

# Les Librairies 

---

Attention, en français, on dit « librairie », mais « Library » signifie bibliothèque. Il faut avoir en tête la bibliothèque pour comprendre le concept.

---

Pour qu'un langage de programmation soit portable d'une machine à une autre, il faut que les fonctions de base de ce langages possèdent une traduction dans différents langages machine.

Pour qu'un exécutable interagisse avec un système d'exploitation, il faut placer dans l'exécutable des segments de codes qui savent le faire !

Une bibliothèque cohérente de fonction s'appelle une librairie. Il existe des librairies pour tout! Certaines vous donnent accès à des fonctions mathématiques, des fonctions pour éditer des chaines de caractères (du texte)...

La librairie n'est pas compilé dans l'exécutable, ce qui est dans l'exécutable, c'est du code qui sait interagir avec la librairie qui est dans le système d'exploitation.

Les librairies à connaitre sont:

: Les fameuses DLL de Windows
No comment

: Glibc
Celle qui construit Gnu-Linux

: Gtk
Fournit les éléments d'interface graphique de Gnome

: Qt
Fournit les éléments d'interface graphique de Kde

# Les éxécutables.... 

## Les principaux formats 

Les utilisateurs de Windows connaissent surement les fichers ".exe"

Sous linux, le format le plus répendu est le ELF.

Ce sont tous les deux des fichiers compressés qui contiennent:

 * des segments de code en langage machine
 * des données
 * des des exigences de librairies présentes sur le système d'exploitation
 * et des morceaux de librairies

# Comment mon ordinateur peut-il faire plusieurs choses à la fois? 

En faits, ça ne se passe pas comme ça. Les ordinateurs ne peuvent faire qu'une chose à la fois par nombre de processeurs. Mais les ordinateurs sont capables de changer de tache rapidement, et trop les humains qui pensent que ces derniers font plusieurs choses à la fois. On appelle ceci le temps partagé.

Une des attributions noyau est de gérer le temps partagé. Un de ces composants est appelé l'agenda, c'est lui qui conserve toutes les informations à propos des différents processus de votre zoo. Chaque 60e de seconde, une minuterie se termine dans le noyau, générant une interruption horloge. L'agenda arrête le processus en cours d'exécution (qui il soit), le suspens en place, et passe la main à un autre processus.

1/60 de seconde ça peut paraître peu, mais sur les microprocesseurs aujourd'hui c'est assez pour accomplir des centaines de milliers d'instructions machine, ce qui représente déjà pas mal de travail. Donc même si vous avez plusieurs processus en même temps, chacun peut déjà accomplir beaucoup dans chacune de ses branches temporelles.

Dans la pratique, un programme peut ne pas bénéficier de sa tranche temporelle entière. Si une interruption provient d'un des périphériques d'entrée de sortie le noyau pourrait arrêter la la tâche en cours d'exécution,

En faits, la vitesse des programmes et très peu limités par la quantité de temps machine qu'ils obtiennent. Il existe quelques exceptions à cette règle, comme le vidéo,la 3D. La plupart du temps les délais sont causés quand un programme doit attendre des données depuis le disque dur ou la connexion réseau.

---

| PREC: [Les Interfaces](070_interface.md) |  | SUIV: [Le réseau](090_network.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |

---

