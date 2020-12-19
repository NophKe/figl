Anatomie d'un Ordinateur


# L'Architecture De Von Neumann 

Comme la machine de Turing est une machine purement théorique, pour ce qui est de la réalisation pratique, l’architecture matérielle des ordinateurs modernes est basée sur ce que l'on appelle l'architecture de Von Neumann qui décompose l’ordinateur ainsi:

 * Les **dispositifs d’entrées/sorties**, qui permettent de communiquer avec le monde extérieur.
  * (clavier, écran, imprimante...) de façon plus moderne, on parlera de *périphériques*

 * L’**unité de contrôle**, qui est chargée du séquençage des opérations, du respect de l'algorithme
 * L’**unité arithmétique et logique** (UAL) ou unité de traitement, qui effectue les instructions de base
  * Ces deux derniers correspondent à nos **processeurs** modernes.

 * La **mémoire** qui contient les programmes et les données
1. mémoire de stockage (programmes et données de base de la machine, *les disques de données*)
1. mémoire vive (programmes et données en cours de fonctionnement, *La Ram*)

[![](img/arch_von_neumann.png)](https://fr.wikipedia.org/wiki/Architecture_de_von_Neumann)

|Schémas de principe de l'architecture de Von Neumann ( credit Wikipedia )|

# Une Architecture Matérielle 

Il existe un algorithme capable de réaliser des additions *de tête*, comme il existe un algorithme pour faire des additions sur un boulier! Dans les deux cas le résultat est le même, pour ce qui est du résultat! Mais la réalisation pratique pour y parvenir est très différente!

Un algorithme mental ne peut pas être reproduit sur un boulier. Et de la même façon vous n'imaginez pas un boulier dans votre tête pour faire des additions.

Il existe un algorithme capable de réaliser de additions avec une machine de Turing. Une machine de Turing universelle peut toujours reproduire le comportement d'une autre machine de Turin. (au besoin en la simulant!) Donc n'importe quelle machine de Turing universelle devrait pouvoir effectuer une addition...

Oui! Bien sur, mais pas en suivant le même programme! De la même façon qu'un algorithme valable au boulier n'est pas forcément exportable sur une calculatrice; un programme écrit pour une architecture matérielle n'est pas exportable sur une autre **architecture**.

On va y revenir...

# Les Ports 

Votre ordinateur possède à l'intérieur de lui un processeur qui réalise des instructions. Il possède une mémoire interne, appelée mémoire vive (ou juste ram). Le processeur et la mémoire vive se trouvent **physiquement** sur une carte électronique appelée "carte mère" qui est le cœur de votre ordinateur.

Votre ordinateur possède un écran et un clavier, il possède un disque dur, un lecteur de DVD, un lecteur de cartes sd...

Les différentes pièces de votre ordinateur sont toutes connectées par un port. Un port, c'est physiquement ce qui "porte" la connectique de l'appareil en question! Physiquement, c'est donc, ce dans quoi vous branchez vos périphériques. Les ports sont les autoroutes matérielles des données entre votre processeur, votre écran, votre disques et tout le reste.

# Un Bus 

Le processeur, qui orchestre tout cela ne peut donc voir aucun des composants de l'ordinateur directement, il voit un **bus** qui peut prendre différentes valeurs numériques!

Un bus, c'est un la même chose qu'un port, mais du point de vue du processeur. C'est un port débarrassé de toutes les considération matérielles.

Imaginez un appareil simplisme! Le câble pour le brancher à l'ordinateur ne possède qu'un seul fil. S'il y a du courant électrique sur ce fil, l'ordinateur comprendra que c'est un UN. S'il n'y a pas de courant électrique sur ce fil, l'ordinateur comprendra que c'est un ZÉRO.

> - COURANT ou PAS DE COURANT, sont les états *physique* de ce port.
> - ZÉRO et UN, sont les valeurs numériques du bus.

# Ce Qui Est Vrai Quelque Soit L'Architecture 

Le seul composant dont la vitesse de fonctionnement est comparable à celle du processeur est la mémoire vive. Pour que les programmes puissent fonctionner, il faut qu'ils soient en mémoire.

Certains de ces appareils sont dirigés par des cartes contrôleurs que l'on branche sur la carte mère pour aider l'ordinateur à les piloter.

Quand votre ordinateur lit un programme ou une donnée depuis le disque, ce qui se passe en réalité, c'est que le processeur utilise en bus pour envoyer une requête de lecture au contrôleur du disque. Quelque temps après le contrôleur du disque utilise le bus pour envoyer  le signal au processeur qu'il a lu la donner et la placer à telle adresse de la mémoire. Le processeur peut ensuite utiliser le bus pour lire cette donnée.

Votre clavier et votre écran communique également avec le processeur moyen d'un bus, mais d'une façon plus simple. Nous en discuterons plus tard. Pour le moment nous en savons assez pour poursuivre.

# Les Architechtures Modernes 

Quelques remarques:

 * Une unité d'information binaire (ZÉRO ou UN) c'est un bit.
 * La largeur du bus (mesurée en bits) détermine le nombre de valeurs que peuvent prendre un bus.
 * La taille du bus qui relie le processeur à la carte mère est donc un déterminant essentiel d'un ordinateur.
 * Dans la pratique, pour identifier une architecture matérielle, il suffit de donner le type de processeur.

L'architecture en 32 bits des processeur d'ordinateurs *grand publics* est appelée x86 à cause de ses différentes variantes (386,486,686...).

De nos jours la plupart des processeurs *d'ordinateur grand publics* se basent sur l'architecture x86_64 qui fonctionne en 64 bits. Les processeurs x86_64 sont vus comme des simples processeurs 64 bits s'ils sont utilisés par un système d'exploitation x86_64. Et sont vus comme un double processeur (dual core) par des systèmes d'exploitation 32 bits.

Les téléphones portables et les tablettes utilisent des processeur ARM (64 bits), qui sont plus économes en énergie que les x86 (32 ou 64 bits)

[![](img/architecture.png)](https://fr.wikipedia.org/wiki/Carte_m%C3%A8re)

|Architecture "classique" d'une carte mère. ( credit Wikipedia )|

---

| PREC: [La Préhistoire](010_prehistoire.md) |  | SUIV: [Les Périphériques](030_periph.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |

---

