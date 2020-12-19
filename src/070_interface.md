# Les Interfaces


Des couches et des couches...

## Xerox, IBM, Microsoft, et Apple 

Xerox a inventé la souris et l'interface graphique (entre autres)... Mais a laisser d'autres sociétés commercialiser les premières interfaces graphiques... Aujourd'hui ils fabriquent des photocopieurs.

C'est une histoire passionnante que le début de l'informatique personnelle Microsoft de son coté à lancé Windows (en *volant* une partie du travail d'Apple) mais c'est la bien Apple avec le Lisa qui a lancé le premier ordinateur doté d'une interface graphique pilotée à la souris qui fût une réussite commerciale.

Microsoft Windows dût attendre les années 90 et l'Internet pour exploser!

Avec Gnome 3 et les tiling window manager, de nombreux paradigmes de l'interface graphique sont aujourd'hui en train d'évoluer. Par exemple la nécessité d'un bureau est remise en question (*faut dire qu'ils devienent vite encombrés*), aussi certaines des interfaces graphiques modernes placent et déplacent automatiquement vos fenêtres pour mieux utiliser l'espace!

Ces évolution font que l'on utilise de plus en plus souvent le mot shell (coquille) pour parler de ces interfaces. Alors qu'un shell *à la base* c'est plutôt une interface textuelle.

Mais revenons plus à la base des interfaces....

[![](img/Gnustep.png)](https://fr.wikipedia.org/wiki/Environnement_de_bureau)

|GNUstep 1995 ( credit Wikipedia )|

## La carte perforée 

Il y eut une époque lointaine ou on pouvait entrer directement un programme dans l'ordinateur **en actionnant des boutons**... Mais çà c'était la préhistoire... On pouvait à cette époque *en direct* demander à la machine de faire çà et çà....

Puis les programmes sont devenus de plus en plus complexes et il fallait les stocker sur des supports de plus en plus perfectionner... Les faire collaborer parfois! Et Finalement, on a finit par écrire **un programmes qui était là pour lancer des programmes**, passer de l'un à l'autre, les faire travailler en parallèle... Le premier système d'exploitation était né.

Cette solution se trouvait être très pratique car on pouvait aussi par ce biais, faire croire à tout les programmes qu'ils étaient seul au monde. Ces derniers croient en effet avoir accès au matériel, alors que, véritablement, Ils interagissent avec un environnement spécialement créé pour eux par le système d'exploitation.

Par exemple, tous les programmes croient être seul en mémoire, et pouvoir faire ce qu'ils veulent la où ils veulent (*et ne se privent pas de le faire...*), alors qu'en vrai, le noyau du système d'exploitation se place entre les deux, et modifie toutes les instructions que donne le programme. (gérer la mémoire et mettre chacun à sa place, que personne ne se gène, c'est son boulot!)

On venait de passer d'une interface manuelle, à une interface logicielle. Depuis lors, les ordinateurs ne chargent plus des programmes écrits pour des architectures matérielles particulières.... Ils chargent un système d'exploitation, qui est écrit pour une architecture particulière. (Et qui sera écrit une bonne fois pour toutes! *ou presque*)

[![](img/carte_perfo.jpg)](https://fr.wikipedia.org/wiki/Assembleur)

|Carte perforée vierge ( credit Wikipedia )|

## Niveau d'abstraction 

Ce système d'exploitation chargera ensuite des programmes qui seront écrits **pour un système d'exploitation particulier** et pas pour un matériel. Se compliquer ainsi la tâche (une bonne fois pour toutes) d'un coté, pour nous permettre de les simplifier de l'autre coté, c'est ce que l'on appelle une couche d'abstraction.

Chaque couche d'abstraction sert à manipuler la couche immédiatement en dessous. Chacune possède une interface qui nous permet de communiquer avec elle. Cette dernière est dite de bas niveau ou de haut niveau suivant qu'elle soit plus proche de la machine ou de l'homme. De la même façon qu'on a arrêté la carte perforée et les boutons, on progresse en dessinant des machines, et en écrivant des programmes avec des interfaces de plus en plus haut niveau...

> - Plus une interface est de **haut** niveau plus elle est sujette à des comportement imprévus, des bugs, des baisses de performance...
> - Plus une interface est de **bas** niveau, plus elle est sujette à des erreurs humaines à l'écriture, et des difficultés humaines à la modifier, corriger, maintenir...

Quand, on développe, et maintient des logiciels, et même du matériel, on se traine parfois de très vielles interfaces, écrites dans des langages oubliés, ou désuets. Mais, comme celles-ci continuent de tenir leur rôle, on n'y touche pas souvent! (Spectre et Meltdown, comme de nombreuses autres failles de la sécurité informatique sont de bon exemples de ce que l'on découvre en revenant aux sources de choses)

Un autre exemple est X le serveur graphique de Gnu-Linux. Presque tous les environnement de bureau reposent dessus. Mais plus personne ne sait exactement quoi faire pour le maintenir! Depuis longtemps, on a écrit des librairies qui communiquent avec lui, et peu de programme communiquent directement avec lui. Et maintenant que l'étage du bas commence à fissurer, c'est la panique!

## Qui est X? 

X est un serveur graphique. Il n'est pas forcément évident de penser un écran comme une ressource qui est **partagée**...

Pourtant plusieurs programmes peuvent s'afficher simultanément à l'écran...

### Une Architecture Client/Serveur 

X est un serveur, c'est à dire, qu'il est supposé faire tout le boulot pour ses clients... Les clients de X, ce sont les programmes dotés d'interfaces graphiques.

Les clients de X lui demandent d'afficher une image à cet endroit de l'écran, un texte ici, un carré bleu là bas.... X interprète le tout, dessine une image, et l'envoie là ou il droit (généralement c'est l'écran...)

Le problème c'est que si deux programmes demandent veulent afficher quelque chose au même endroit de l'écran X ne fera rien de très bon. Du coup, on voudra surement à un moment ou un autre déplacer une fenêtre...

Et c'est la qu'est l'os. Pour ce faire, il faut implémenter dans chacun de nos programmes une interface qui sait communiquer avec X pour lui dire quoi faire au besoin.

Si notre programme n'a pas implémenté cette fonctionnalité, vous vous retrouvez à devoir vous connecter depuis une autre console et devoir communiquer avec lui pour lui dire quoi faire!

Pour que l'utilisateur n'ai pas sans arrêt à utiliser son terminal, et que les développeurs n'écrivent pas des programmes qui se dérangent les uns les autres, On a décidé **d'ouvrir les fenêtres à l'intérieur d'une bordure**.

La petite bordure qui affiche un bouton pour re-dimensionner... La petite croix pour quitter... On  a appelé les programmes qui gèrent ces bordures des gestionnaires de fenêtres.

En gros, les programmes disent à X  leur bout d'image à produire, mais seul le gestionnaire de fenêtre dit à X qui se place au premier plan, qui doit être ici ou là.... Et vous n'interagissez plus avec X! Le gestionnaire de fenêtres le fait pour vous...

Comme toujours en informatique quand quelque chose est compliqué, on lui ajoute une couche d'abstraction...

### Le problème avec X 

Le problème de X c'est qu'il est très vieux, et basé sur une conception qui le rend difficile à entretenir, pourtant après 3O ans de bons et loyaux services, il est encore là.

Avec le temps les gestionnaires de fenêtre on finit par faire la majorité du boulot, et finissaient par dire à X: *"Voici une image. N'y touche surtout pas! (déconne pas....   Pas de bêtise....) Et Affiche la ici sans te poser de question"*

En plus avec les architecture client/serveur les programmes peuvent venir de n'importe où... Même du réseau... Et d'Internet... (bonjour la sécurité!)

Aussi, si le gestionnaire de fenêtre vous dispense de communiquer avec X, le canal de communication reste ouvert...()

Le successeur sera probablement Wayland qui est *presque* prêt depuis *presque* longtemps...

## L'interface Utilisateur 

Que ce soit un interpréteur de commande, un vrai shell, une interface graphique de base, ou un environnement graphique complet, une interface utilisateur c'est bien là où s'établit la relation entre l'homme et la machine.

Quand on *discute* avec son téléphone (ok google, Siri) pour lui demander quelque chose, on utilise une interface de **très** haut niveau...

De nombreux programmes sont séparés entre:

 * un engin (sans interface) que l'on manipule dans une console
 * un ou différent front-end qui sont des interfaces de haut niveau.

Ainsi plusieurs programmes peuvent utiliser le même engin, et l'interface peut évoluer librement, plusieurs interfaces sont parfois disponibles pour le même engin.

## Les Protocoles 

Les protocoles sont les interfaces entre différents systèmes informatiques, de la même façon que les programmes sont les interfaces entre l'homme et la machine.

On va faire très simple. Dans la vie réelle le protocole, c'est cet ensemble de règles de savoir-vivre, de politesse...  qui permet que tout se passe bien entre deux individus quels que soit les circonstances...

Si le chargé du protocole dans une ambassade ne trouve pas de règle dans le protocole qui lui permet de se sortir d'une situation, c'est que le protocole doit être actualisé...

Le protocole doit toujours fournir une réponse à toutes les situations.

Si le protocole est bien fait, et que tout le monde le respecte, tout se passera bien...

En informatique, c'est pareil, n'importe quel composant (logiciel ou matériel) peut communiquer et interagir avec n'importe quel autre **SI ET SEULEMENT SI** il s'entendent sur une chaine continue de protocoles entre l'un et l'autre.

: HTTP(s)
Le protocole pour envoyer/recevoir des pages web

: FTP
Le protocole pour envoyer/recevoir des fichiers sur Internet

: PCI
Protocole de communication des périphériques entre eux

: MTP
Le !?#x de protocole inventé par Microsoft qui fait vous pouvez pas (plus) utiliser votre téléphone (ou autre) comme d'un disque usb, et qui fait que votre pc voit un appareil photo, plutôt qu'un téléphone, ou juste un disque! (bref!)
