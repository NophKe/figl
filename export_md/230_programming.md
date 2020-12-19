# Programmer


En général pouyr commencer à apprendre n'importe quel langage de programmation, on commence par écrire un programme simple qui affiche "bonjour" à l'écran.

### Hello World en langage assembleur 

    section	.text
       global _start     ;must be declared for linker (ld)
    
    _start:	            ;tells linker entry point
       mov	edx,len     ;message length
       mov	ecx,msg     ;message to write
       mov	ebx,1       ;file descriptor (stdout)
       mov	eax,4       ;system call number (sys_write)
       int	0x80        ;call kernel
    	
       mov	eax,1       ;system call number (sys_exit)
       int	0x80        ;call kernel
    
    section	.data
    msg db 'Hello, world!', 0xa  ;string to be printed
    len equ $ - msg     ;length of the string
    

Bon cette fois-ci c'est partie, on va commencer à programmer! Car à part lire sans rien comprendre à un «Hello world» en assembleur, faudrait passer sur quelque chose à notre niveau.

On va programmer en Bash. Car Bash, c'est bien et c'est utile à connaitre. On refera le même programme plus tard avec d'autres langages. ( Comme çà vous en serez certains vous aussi... que Bash c'est bien! )

## Hello World 

Quand on commence à écrire des commandes qui tiennent sur de nombreuses lignes, il existe un risque bien réel de faire des erreurs. Une méthode plus commode, est de créer un fichier un fichier texte, et d'y inscrire les commandes que l'on souhaite exécuter.

Créez donc un fichier texte avec votre éditeur favori, donnez lui le nom "foo.sh" et insérez le texte suivant:

    echo "Bonjour le monde!"

On a déjà vu la commande `echo` qui permet d'afficher un message à l'écran.

Ensuite entrez la commande:

    $ bash ./foo.sh
    Bonjour le monde!

Il est d'usage de commencer à apprendre n'importe quel langage de programmation par ce classique «Hello World!», qui donne un aperçu du fonctionnement, et de la syntaxe du langage.

Bravo! Vous venez d'écrire votre premier programme!

## Les variables 

Une variable est une case mémoire dans laquelle on enregistre quelque chose. Pour créer une variable foo, contenant le texte « bar » rien de plus simple:

    $ foo=bar
    $ 
    $ echo $foo
    bar
    $

Remarquez le signe dollar! La première fois que l'on va entrer le mot foo, le shell va comprendre qu'il s'agit d'une variable à initialiser, car il s'agit d'un mot suivi du symbole 'égal'. La seconde fois le shell ne devine que foo est une variable que grâce au signe 'dollar'.

Vous pouvez vous en convaincre avec:

    $ echo foo
    foo
    $

La syntaxe est importante:

 * pas d'espace avant et après le 'égal'.
 * un 'dollar' pour accéder au contenu d'une variable
 * pas de 'dollar' pour modifier une variable

## Commentaires et sha-bang 

On a déja vu des commentaires! Avec bash les commentaires se  font avec le symbole `#`. Tout ce qui suit ce symbole est ignoré. Démonstration:

    $ echo dièse # dièse
    dièse

## Les Conditions, et quelques élements de stylistique 

Pour l'instant l'on a utilisé que des commandes qui tenaient sur une seule ligne. Préparez vous à perdre la prompte (comme avec ce fichier l'embrouille), car ce qui suit est une commande sur plusieurs lignes.

Donc on veut réaliser différente actions en fonction de notre variable $foo:

> SI foo contient bar

ALORS

> affiche "foo = bar"

SINON

> affiche "foo != bar"

Enfin affiche "baz" dans tous les cas.

Ce qui donne:

    $ if [[ $foo = bar ]]
    > then
    > echo "foo = bar"
    > else
    > echo "foo != bar"
    > fi
    echo "baz"

Ce n'est pas le lieu de donner un cous d'anglais mais:

 * « if » signifie « si »
 * « then » signifie « alors »
 * « else » signifie « sinon »
 * « fi » ne signifie rien du tout

En fait le « fi » est là que pour indiquer la fin de la boucle conditionnelle. Si `echo "baz"` avait été placé avant le « fi », "baz" se serait affiché uniquement si foo avait été différent de bar...

Remarque: `then` `else` et `fi` doivent être seuls sur leur ligne, car le retour à la ligne fait partie de la syntaxe.

Remarque: Pour le shell le symbole `;` est équivalent à un retour à la ligne. Donc on peut faire tenir ce genre de commande sur une seule ligne.

    if [[ foo ]] ; then ; blabla ; fi

Bien-entendu, si l'on entre cette commande dans un scripte, la question de la stylistique, doit être envisagée différent. L'indentation du texte (l'alignement des tabulations) va aider à la relecture.

    if [[ $foo = bar ]] ;then
    	echo "foo = bar"
    else
    	echo "foo != bar"
    fi
    
    echo "baz"
 
-------------------------------------------
| PREC: [Trouver de l'aide et progresser](220_help.md) |  | SUIV: [Un joli bashrc](240_bashrc.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |
-------------------------------------------
