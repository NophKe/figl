Les différents éditeurs


## ex 

Le mode d'édition que l'on vient de décrire avec la commande `cat` convient très bien à des téléscripteurs munis uniquement d'une imprimante! `ex` est un très vieil éditeur de texte en mode ligne de commande qui repose sur ce genre de principe.

Comme ex est trop obsolète pour être inclus dans une distribution Gnu-Linux moderne on peut se donner une idée de son fonctionnement par une option du programme `vi` ( on reparle très vite de vi! )

Comme il a déjà été dit sur les paginateurs. Ce programme va prendre le contrôle du clavier. Sachez donc tout de suite utiliser l'interface.

    $ vi -e foo
    :
    

Lors du lancement `ex` n'affiche pas le contenu du fichier, mais juste sa propre prompte ``: ``.

Pour afficher une ligne, il faut entrer la lettre `p` et la touche entrée pour valider la commande. Ainsi:

    : p
    tient sur deux lignes

Le programme n'a affiché que la ligne 2!

Pour se placer ligne 1 faire simplement:

    : 1

Essayez d'afficher la ligne courante...

    : p
    Ce fichier ci,
    :

Pour modifier une ligne, utilisons la lettre `i` pour passer en mode d'insertion.

    : i
    Bla Bla Bla...
    [ ctrl + C ]
    :

On a déjà vu le cas, lorsque vous entrez en mode insertion, tout ce que vous tapez devient l'argument de la commande i (insertion). Et tant que le caractère d'échappement n'a pas été entré, tout ce qui suit est considéré comme du texte à insérer.

Pour enregistrer la lettre w (write):

    : w
    deux_lignes.txt               2 lignes écrites
    : _

Pour quitter la lettre q :

    : q
    E37: Modifications non enregistrées
    :

Et le point d'exclamation pour passer outre les avertissements! Et revenir à la prompte du shell!

    : q!
    $ _

## Vi 

C'est un programme qui fait partie du standard POSIX. A priori, vous devriez donc le trouver sur n'importe quelle distribution Gnu-Linux.

C'est un programme dont l'interface peut être assez déroutante! En effet, la première version de vi date de 1976...

Enfin c'est un éditeur modal qui démarre en mode commande.

A la différence de ex, c'est un éditeur visuel, en ce sens qu'il vous affiche à l'écran le texte que vous modifiez. Ce n'est pas un programme fait pour être utilisé sur un téléscripteur!

Le principe d'une édition sur Vi:

 * Le programme démarre donc en **mode de commande**.


> Les touches `h` / `j` / `k` / `l`  pour gauche / bas / haut / droite vous permettrons de déplacer le curseur. ( *Par défaut les flèches ne fonctionnent pas* )

 * Une fois votre curseur placé taper `i` pour passer en **mode insertion**.


> Les touches `h` / `j` / `k` / `l`  pour ne permettrons plus de déplacer le curseur. ( *Elles servent comme les autres touches du clavier à entrer du texte* )

 * Une fois votre modification effectué taper [ Echap ] pour quitter le mode insertion, et revenir en **mode commande**


> Les touches `h` / `j` / `k` / `l`  pour gauche / bas / haut / droite vous permettrons de déplacer le curseur. ( *Par défaut les flèches ne fonctionnent pas* )

 * Enfin taper `:` vous fera passer en **mode ex** !


> Donc si vous avez lu le paragraphe précédent vous comprendrez que la sequence de touches `:wq` vous permet d'enregistrer et de quitter.

Je n'en dis pas plus sur vi. C'est un programme assez daté, mais il est standard et donc présent partout! De plus il permet de se connecter à des systèmes distants, car aucune de ses commandes au clavier ne sont interprétées comme des caractères d'échappement par les différents shells.

Vim reprend l'essentiel du comportement de vi et le porte beaucoup plus au loin! Il n'est donc pas forcément nécessaire d'aller plus loin au sujet vi.

Apprendre à utiliser Vim (même un peu) vous suffira pour utiliser vi s'il est le seul éditeur disponible sur le système.

## Nano 

C'est un petit éditeur moderne, et assez intuitif. Il est fréquemment installé par défaut et il s'intègre bien avec systemd.

Lorsque vous le démarrer, ce dernier présente comme une sorte de barre d'outils, en bas de l'écran. C'est un panneaux qui reprends les fonctions de base de ce logiciel.

Le Symbole `^` représente la touche [ Ctrl ].

Ce n'est pas un logiciel modal. On entre dans le programme directement en insertion. Et tout ce que l'on écrit, s'inscrit à l'écran, et donc dans le fichier.

Les combinaisons de touches permettent d'accéder aux fonction du logiciel. Ctrl + O pour enregistrer, Ctrl + X pour quitter...

[![](./img/nano.png)](https://fr.wikipedia.org/wiki/GNU_nano)

|GNU nano, un éditeur pour la nouvelle génération ( credit Wikipedia)|

Remarque: Notez au passage que les couleurs de l'image ne sont pas dans le fichier texte, il s'agit bien d'un fichier texte pur. (Aucun logiciel de traitement de texte n'est passé par là...) Ces couleurs sont la coloration syntaxique. Tous les bons éditeurs offrent une coloration syntaxique qui permet de rendre la programmation, et l'écriture de fichiers de configuration plus agréable.

---

| PREC: [Éditer du texte avec la console... ](160_editor.md) |  | SUIV: [Vim](190_vim.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |

---

