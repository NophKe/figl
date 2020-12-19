A l'origine était sh...


# L'histoire du shell 

Le shell c'est l'interface entre la machine et l'utilisateur. Ce qui interprète vos commandes.

A l'origine le premier interpréteur de commande d'Unix était le programme `sh`. On appelait ce programme le Bourne Shell, du nom de son inventeur.

Puis chacun a voulu aller dans son sens pour améliorer le truc, mais on a jamais vraiment pu tuer `sh`. En pratique, `sh` étant disponible sur tous le Unix. Écrire un programme qui peut être utilisé avec sh, c'est écrire un programme qui fonctionne sous toutes les versions d'Unix.

Du coup avec le temps `sh` est devenu part du standard POSIX....

## Bash 

Bash (acronyme de Bourne-Again shell) est un interpréteur en ligne de commande de type script. C'est le shell Unix du projet GNU, mais il est aussi devenu avec le temps une espèce de *lingua franca* utilisé sur de nombreuses plateformes.

Bien que provenant de l'univers de l'informatique libre, il a été adapté à Microsoft Windows, et est le shell de MacOs.

Basé sur sh, Bash l'améliore et l'étends tout en sachant se mettre en mode de compatibilité absolue avec sh.

Si le programme `sh` le shell originel, est devenu une part du standard POSIX que doivent comporter tout les Unix/Linux, c'est souvent Bash qui est installé à sa place. Et quand bash est invoqué par un lien en `/bin/sh`qui pointe vers `/bin/bash`, ce dernier devienne qu'il doit se mettre en mode posix.

## Zsh, le Shell du //Futur// 

C'est un shell puissant qui n'est plus compatible avec `sh` il n'est donc que rarement utilisé, mais il vaut vraiment la peine de s'y intéresser! Il possède des capacités avancée d'autocomplétion et des jokers très pratiques...

Les distributions de Gnu-Linux fournissent un shell fonctionnel mais généralement pas configuré du tout. Aussi un shell agréable à utiliser aide à l'apprentissage... Zsh arrive par défaut comme quelque chose de plus "user friendly"...  C'est pour cela que je vous recommande vraiment d'y jeter un coup d'oeil!

Il est le shell de l'installateur d'Arch Linux.

# Interpréteur de commandes 

Un système d'exploitation est un **ensemble** de programmes/logiciels qui permettent une utilisation complète d'un ordinateur (et non un seul programme), ET, dans cet ensemble, chacun des programmes possèdent sa propre interface utilisateur.

Un de ces programmes est le dernier à être chargé par le système d'exploitation, lors du boot, il prend le contrôle des périphériques d'entrée (souris et clavier), et **interprète** les événements relatifs à ces derniers. C'est le shell (la coquille).

Selon son interprétation, les événements du clavier et de la souris seront compris de plusieurs façons:

 * des invocations de programmes
  * *éventuellement des options pour ces programmes*
  * *éventuellement des fichiers ou des données pour nourrir ces programmes*

 * des commandes que le shell sait exécuter lui même

 * des options d'environnement *(qui sont un peu comme les réglages du système d'exploitation)*

 * des redirections
 * des jokers
 * des éléments de syntaxe

 * ...

On détaillera dans les paragraphes qui suivent.

## la prompte 

La chose est la plus importante, est sûrement que l'on ne peut pas apprendre à utiliser l'interface texte, sans s'y confronter pour de vrai... Ouvrez donc un émulateur de terminal, vous avez surement une interface graphique qui tourne donc démmarez la console.

La première chose à savoir sur l'interface texte, c'est que ce petit morceau de texte s'affiche s'appelle la prompte, et doit ressembler à:

    $ _

ou

    bash-4.4$

tapez :

    $ ls

Bien sûr ne tapez pas le signe $, il représente la prompte!

Vous devriez obtenir la liste des fichiers de votre répertoire courant!

Pour connaitre quel est le répertoire courant tapez:

    $ pwd

Pigé? Maintenant tapez:

    $ whoami 

pour savoir qui vous êtes !

## Invocation 

Invoquer un programme, c'est l'appeler (avec l'aide du shell) à s'exécuter.

Certains programmes comme `exit` ne posent pas vraiment de problèmes, il suffit de les appeler par leur nom... C'est transparent!

Si vous avez tapé `exit`. C'est pas malin... **Redémarrez un terminal, un peu de courage!!**

    $ ps

Vous devriez obtenir la liste des programmes démarrés dans votre émulateur de terminal.

Bon mais alors qu'est-ce que ce "ps" ? C'est simplement un programme qui liste les processus en cours. Vous devriez voir un programme se nomme bash. Celui-ci est l' interpréteur de commande. C'est lui qui affiche la prompte.

Dans le cas improbable que vous n'ayez pas de programme Bash en cours d'utilisation, vous aurez Zsh, ou simplement sh, mais çà ne change pas grand chose.

tapez:

    $ ps -e

Vous devriez obtenir la liste des programmes démarrés dans tout l'ordinateur cette fois-ci.

 * La première remarque à faire, et que `ps` est un programme, il se trouve à l'emplacement `/bin/ps`.
 * La deuxième remarque, est que le petit **e** est une option que l'on passe au programme. Cette option signifie *every* comme "tous" en anglais!

À la différence de l'interface graphique à l'intérieur de laquelle souvent, on démarre un programme pour ensuite lui dire quoi faire en cliquant par-ci par-là; dans un programme en mode texte il est fréquent de devoir donner une liste précise de paramètres pour que le programme sache quoi faire.

Un paramètre dont on ne peut pas se passer est appelé un argument. Par exemple la commande:

    $ touch un_fichier_texte.txt

Ceci va créer un fichier texte du nom "un_fichier_texte.txt", dans le répertoire courant. On comprend évidemment que dans cet exemple, on est **obligé** de mettre quelque chose derrière le programme... ``touch`` ne peut pas créer de fichier si on ne lui donne pas le nom du fichier à créer!

    $ touch
    
    touch: opérande de fichier manquant
    Saisissez « touch --help » pour plus d'informations.

Ceci étant dit, dans l'interface texte, la syntaxe classique pour invoquer les programmes, c'est:

    $ mon_programme --option-longue argument

Les options longues sont précédées de deux tirets, elles possèdent souvent une option courte qui lui est synonyme et que l'on lui préfèrera pour les programmes que l'on sait utiliser

    $ mon_programme -O argument

## L'auto complétion 

Revenez vers votre terminal, et créez un fichier texte. Et affichez ce qu'il contient! tapez:

    $ touch un_fichier.txt

Ceci va créer un fichier du nom de `un_fichier.txt`! Maintenant tapez:

`$ cat un_fi`   *et là appuyez sur la touche TAB du clavier*

Il est probable que votre shell complète le nom du fichier tout seul et affiche maintenant:

    $ cat un_fichier.txt

On appelle cela l'auto-completion! Cela complète le nom des programmes, des fichiers, (voir beaucoup plus suivant quel shell on utilise, et comment il est réglé)! Ne jamais hésiter à utiliser l'auto-completion car cela évite les fautes de frappe et accélère beaucoup l'utilisation du shell!

Maintenant si vous appuyez sur la touche ENTER, Rien ne s'affichera, et vous retournerez à la prompte! C'est normal, ce fichier est vide!

Cat sert en effet à afficher le contenu du fichier! En cas de fichier vide, rien ne s'affiche. Alors, maintenant, on va le remplir...

## Les redirections 

On peut afficher à l'écran les fichier qui sont dans le répertoire courant avec le programme ls tapez:

    $ ls
    Bureau/
    Documents/
    Musique/
    d_autre_repertoires/
    un_fichier.txt
    autre....
    
    $ _

Le programme `ls` affiche les fichier du répertoire sur ce que l'on appelle **la sortie standard**. C'est à dire souvent l'écran! *(Dans le passé c'était souvent une imprimante)*

Mais on peut **rediriger** la sortie standard vers notre nouveau fichier texte avec le symbole `>` :

    $ ls > un_fichier.txt
    $ _

Remarquez que rien ne s'affiche à l'écran, vous revenez à la prompte sans aucune information. Pourtant si l'on fait

    $ cat un_fichier.txt
    Bureau/
    Documents/
    Musique/
    d_autre_repertoires/
    un_fichier.txt
    autre....
    
    $ _

Tadam'''' !!!

Aussi echo n'est pas un programme mais un mot clef du shell (n'en parlons pas encore...) il affiche ce que l'on lui demande:

    $ echo Hello
    Hello

On a affiché " Hello " à l'écran (sur la sortie standard) que l'on redirige tout de suite!

    
    $ echo Hello > un_fichier.txt
    $ cat un_fichier.txt
    Hello

`un_fichier.txt` ne contient plus la liste des fichier mais juste "Hello"... En écrivant dans ce fichier (qui contenait notre liste des fichiers), on a **écrasé** son contenu. Pour rediriger en mode ajouter il faut remplacer **>** par **>>**:

    $ echo World >> un_fichier.txt
    $ cat un_fichier.txt
    Hello
    World
    $ _

Vous savez créer un fichier qui contient du texte, cela vous servira bientôt. Aussi, vous en savez assez sur les redirection passons aux tuyaux...

## Les pipes 

Une pipe (à l'anglaise païpe !), c'est un tuyau! C'est aussi le symbole auquel on accède par la combinaison de touches AltGr + 6 , c_à_d le symbole |

Les pipes fonctionnent comme les redirections mais au lieu de rediriger vers des fichiers, elles connectent les programmes entre eux.

Par exemple si vous faites:

    $ ls /bin > un_fichier.txt

puis

    $ cat un_fichier.txt

cela va donner un résultat très long....

Le programme `less` est un paginateur, il découpe la sortie en pages. Il s'utilise avec les lettres **q** pour quitter **ESPACE** pour passer etc... donc:

    $ less un_fichier.txt

Par contre connecter les deux programmes sans passer par aucun fichier intermédiaire, c'est la force du tuyau !
Une autre syntaxe possible grace aux pipes est donc:

    $ ls /bin | less

Ainsi pas besoin de passer par un fichier texte qui sert d'intermédiaire!

    $ ls /bin |cat |less

En dessus il y a une pipe qui ne sert à rien. *(Une petite pipe juste pour le plaisir.)*

## Les alias 

Un alias permet de ne pas retaper une commande trop compliquée... Par exemple:

    $ alias ls="ls --color"

Ainsi la prochaine fois que vous taperez `ls`, le résultat c'est que votre interpréteur de commande comprendra `ls --color`.

Remarquez que la prochaine fois que vous vous connecterez cet alias aura disparu!

Remarquez aussi que la nouvelle commande est entre guillemets! C'est par ce qu'elle contient un espace et que l'on ne veut pas que le shell interprète cet espace comme la fin de l'argument.

On illustre tout de suite!

# Un peu de grammaire 

Le shell en a besoin de pouvoir délimiter les programmes et les options pour comprendre nos instructions. Un espace entre eux est donc nécessaire.

Mais comment faire comprendre au shell qu'un espace **fait parti** d'un argument?

## mkdir 

Cette commande crée un répertoire.

    $ mkdir un dossier
    $ _

D'ailleurs remarquez **encore une fois** que le shell fait cela sans vous prévenir de l'état de réussite de l'opération! Listez donc les fichiers pour voir ce qui a été créé!

    $ ls
    dossier/
    un/ 

Mince alors! L'espace a mal été compris et deux répertoires ont été créés! Pour créer un seul répertoire nommé `un dossier`. Il faut écrire ce dernier entre deux apostrophes:

    $ mkdir 'un dossier'

Vérifiez que:

    $ ls
    dossier/
    un/
    un dossier/

C'est l'apostrophe de la touche 4 dont il est question ! Attention! Cette apostrophe fait partie de la syntaxe du shell.

Elle lui indique que ce qui suit devra être considéré comme un argument unique jusqu'à la prochaine apostrophe!

## Caractères d'échapement 

Si vous souhaitez créer un fichier nommé `l'embrouille` ..

    $ touch l'embrouille
    \`quote> je suis coincé
    \`quote> je retrouve plus la prompte
    \`quote>  

Vous vous retrouverez coincé et vous perdrez votre prompte! Vous pouvez taper la touche entrée, çà n'y fait rien!

Vous revenez toujours à cette nouvelle prompte `\'quote>` !

C'est par ce que lorsque vous avez entré l'apostrophe, le shell s'est mis à considéré tout ce qui suit comme un seul argument. Il a donc cru que la touche [entrée] était un des caractères du nom du dossier.

*( Unix permet vraiment des choses bizarres... Un saut de ligne dans le nom d'un fichier! )*

Vous pouvez vérifier que l'on reste dans cette nouvelle prompte tant que vous n'avez pas tapé de nouvelle apostrophe, et ensuite pressé la touche entrée pour valider la commande!

Ok Donc normalement à ce stade là vous avez un nouveau fichier avec un nom hiddeux!

    $ ls
    'l\'embrouille\nJe suis coincé\nje retrouve plus la prompte'

La prochaine fois que vous vous coincé ainsi tapez juste la combinaison de touche Control + C.

Pour créer un fichier `l'embrouille`. Il faut utiliser un caractère d'échappement de cette façon:

    $ touch l\'embrouille

Le symbole `\` (backslash) permet de dire au shell de ne pas interpréter ce qui suit de façon normale. Ici, cela indique qu'il faut lire une apostrophe littérale, et non une apostrophe grammaticale.

Enfin comprenez donc que certains caractères ont des valeurs particulières. La backslash est un caractère d'échappement. Il est un caractère texte qui modifie la façon dont le texte est interprété.

Tandis que Control+ C crée un caractère de contrôle l'attention du shell et qui lui signale de laisser tomber la commande en cours. (**à retenir**)

Enfin apprenez que le symbole `'` se nomme quote en informatique (d'où la prompte...)

## Joker 

Si vous faites:

    $ ls un*
    un/
    un dossier/

Vous voyez que l'étoile est un joker, elle signifie "n'importe quelle suite de caractère". `ls un*` doit être compris comme "liste tous les fichiers et les dossiers dont le nom débute par 'un' ".

En faisant:

    $ ls un* [ TOUCHE TAB ]

Donc, en utilisant l'auto-completion, vous devriez pouvoir vérifier que le shell va remplacer `un*` par `un/ un\ dossier/`.

Remarquez qu'une backslash suivie d'un espace est un caractère d'échappement pour signifier que l'espace qui suit n'est pas la fin de l'argument!

**REMARQUEZ AUSSI QU'UTILISER DES JOKERS C'EST PRATIQUE PUISSANT ET DANGEREUX POUR VOS FICHIERS**

## foo bar et baz 

A ce stade vous devez avoir un certain nombre de dossier, et de fichiers au noms bizarres. On va y remédier bientôt!

C'est pour cela que par convention, on utilise toujours les valeurs `foo` `bar` et `baz` pour illustrer des variables quelconques. Par exemple Si quelqu'un vous demande:

>  Je veux lister tous les fichiers d'un répertoire, et les enregister la liste dans un fichier. Comment je fais? » Vous lui répondez:
    $ ls /home/nono/foo > bar

Utilisez toujours ces mêmes nom pour vous entrainer et faire des essais. Vous pourrez aisément repérez, et supprimer ce genre de fichiers.

Aussi comme vous avez compris comment on crée des alias, je vous redonne sa syntaxe:

    alias foo=bar

Avec cette façon de faire, vous comprenez que `alias` et `=` ne peuvent ommis, et que foo et bar sont des valeurs de votre choix.

---

| PREC: [La philosophie du Libre](130_libre.md) |  | SUIV: [Les commandes de base](150_console.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal index.md] |  |

---

