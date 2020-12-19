Éditer du texte avec la console... 


Pour administrer correctement une distribution Gnu-Linux, vous aurez parfois à modifier des fichiers de configuration!

De la même façon, pour dépanner votre système, vous n'aurez parfois pas d'autre choix que de vous connecter au travers de l'interface texte!

Nous allons donc voir différents moyens d'éditer un texte depuis une console.

# Les Outils du shell 

## cat 

Un moyen simple et pas du tout efficace de créer un fichier texte est d'utiliser la commande `cat`.

Dans les pages précédentes, on a utiliser `cat` pour afficher le contenu des fichiers. En faits, ce n'est pas vraiment comme cela que `cat` fonctionne.

`cat` sert à concaténer, c'est à dire mettre l'un à la suite de l'autre.

Supposons deux fichiers:

 * Le premier contient une seule ligne
 * Le second en contient deux.

Et dans la pratique, créez deux fichiers quelconques pour vous entrainer!
A ce stade vous savez déja le faire, n'est-ce pas? Sinon, il faut revenir en arrière... Et ne vous contentez pas lire cette fois, tapez le code avec vos doigts et votre clavier!

Donc on a deux fichiers:

    $ cat une_ligne.txt
    Ce fichier contient une ligne de texte
    $ cat deux_lignes.txt
    Ce fichier ci,
    tient sur deux lignes
    $ _

Rien d'exceptionnel! Mais si je fais:

    $ cat une_ligne.txt deux_lignes.txt
    Ce fichier contient une ligne de texte
    Ce fichier ci,
    tient sur deux lignes
    $ _

On voit que les deux fichiers sont bien concaténés! (Prenez l'habitude de ce mot, il est le terme technique en vigueur)

A l'aide du shell je peux rediriger la sortie standard (l'écran) vers un fichier.

    $ cat une_ligne.txt deux_lignes.txt >> foo
    $ cat foo
    Ce fichier contient une ligne de texte
    Ce fichier ci,
    tient sur deux lignes
    $ _

Si je ne donne pas de direction de sortie. `cat` suppose que c'est la sortie standard.

Mais que ce passe t il si je ne donne pas de précision ni sur l'entrée ni sur la sortie?

    $ cat
    J'ai perdu la prompte
    J'ai perdu la prompte
    Tout ce que je tape au clavier est répété sur l'écran à chaque fois
    Tout ce que je tape au clavier est répété sur l'écran à chaque fois
    que je tape la touche [ entrée ]
    que je tape la touche [ entrée ]
    Pour sortir de la boucle [ Ctrl + C ]

Il **faut** taper la touche [ entrée ] pour que la ligne soit envoyée dans le fichier.

Le combo des touches [ Ctrl + C ] produit un caractère d'échappement à l'attention du shell, et lui signale de reprendre le contrôle sur le programme.

Si j'omets uniquement de donner une entrée, `cat` suppose qu'il faut utiliser l'entrée standard (le clavier).
Et je peux toujours rediriger la sortie vers un fichier...

    $ cat > foo
    Redirection simple, un seul symbole > (remplacer)...
    [ Ctrl + C ]
    $ _

On vérifie?

    $ cat foo
    Redirection simple, un seul symbole > (remplacer)...

Ça fonctionne! On continue?

    $ cat >> foo
    Redirection double, deux symboles  >> (concaténer)...
    [ Ctrl + C ]

On vérifie une dernière fois ce qui a été inscrit dans le fichier...

    $ cat foo
    Redirection simple, un seul symbole > (remplacer)...
    Redirection double, deux symboles  >> (concaténer)...

Magnifique! Vous vous souviendrez bien que Control + C quitte un programme en cours. Et les puristes vont me jeter des pierres....

*(Mais promis on parlera de EOF un de ces jours...)*

---

| PREC: [Les commandes de base](150_console.md) |  | SUIV: [Les différents éditeurs](170_shell-tools.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal index.md] |  |

---

