Unix...


# Le Point historique 

Elle est longue cette histoire. Et en faits, elle commence avec l'informatique elle même car Unix est le grand-père de nombreux système d'exploitation.

Comme tout système d'exploitation, Unix veut être une interface entre vous, les programmes, et le matériel. Il est donc intéressant de comprendre les conditions dans lesquelles il a été créé pour en saisir certaines de ses subtilités, Mais pour le moment, disons simplement qu'Unix a été créé pour être utilisé sur des téléscripteurs ( TeleType-Writer ). Il s'agissait de machines qui ne comportaient pas d'écran, mais seulement un clavier qui envoyait **des bits de donnée texte** sur un réseau. L'affichage était réalisé sur une imprimante qui elle aussi recevait du texte depuis le réseau.

Ainsi ces machines n'avaient besoin que de très peu de puissant de calcul, et étaient donc bon marché! Un ordinateur que l'on appelait le **serveur informatique** regroupait toute la puissance de calcul, et l'on y accédait par des terminaux (ou console).

[![](img/Siemens_T100_Telex.jpg)](https://fr.wikipedia.org/wiki/T%C3%A9l%C3%A9scripteur) 

|https://fr.wikipedia.org/wiki/T%C3%A9l%C3%A9scripteur#|

Avec les progrès technologiques ces terminaux sont devenus de plus en plus puissant, et l'on a pu y adjoindre des écrans, du son.... Enfin avec l'avènement de l'ordinateur personnel, les terminaux sont devenus virtuels, car la puissance de calcul se trouve désormais présente *en local* sur l'ordinateur!

Ces concepts tiennent néanmoins car ils fournissent une interface standard pour accéder aux ressources d'un ordinateur (à distance ou non donc!), en faisant ainsi abstraction de toute considération matérielle.

Le principe de l'utilisation exclusive de données texte limite le recours à des caractères d'échappement. Ssh, par exemple, est un protocole moderne qui permet de se connecter à un ordinateur à distance. Et la plupart des serveurs informatique du web fonctionnent grâce à une variante d'Unix ou de Gnu-Linux.

# La Philosophie Unix 

> " Those who do not understand Unix
> are doomed to reinvent it, poorly.”
> Henry Spencer, 1987

Dans toute cette longue histoire, et toute cette diversité ont émergé des consensus sur comment doit fonctionner un système d'exploitation.

Par exemple...

## Tout est Fichier 

 * Les fichiers sont des fichiers. C'est logique.
 * Les processus sont des fichiers. Bon c'est étrange...
 * Les périphériques sont des fichiers.
 * La mémoire est un fichier!
 * Etc cætera...

L'idée c'est que si votre système d'exploitation fournit une interface facile pratique et puissante pour lire, écrire, modifier, et ranger des fichiers. Alors vous voudrez standardiser votre manière d'accéder aux ressources de votre ordinateur.

Il a déjà été dit que d'accéder à n'importe quel périphérique ce n'est rien d'autre que d'envoyer ou recevoir des bits sur un bus. Si tous le bus sont représentés par des fichiers, alors forcément tout devient possible...

C'est pour cela qu'Unix fournit de nombreux petits programmes redoutablement efficace pour gérer des fichiers!

Remarque: Communiquer avec un bus c'est parler en binaire à haute fréquence.... Il y a donc un certain degré d'abstraction pour simplifier la vie de l'utilisateur. Certains fichiers sont de véritables interfaces de communication!

## Plein de petits programmes valent mieux qu'un gros 

Douglas McIlroy, l'inventeur des tuyaux Unix (Unix pipes en anglais) et l’un des fondateurs de la tradition d'Unix, résume la philosophie comme suit :

> « Voici la philosophie d'Unix :
> - Écrivez des programmes qui effectuent une seule chose et qui le font bien.
> - Écrivez des programmes qui collaborent.
> - Écrivez des programmes pour gérer des flux de texte, car c'est une interface universelle. »

Ce qui est souvent résumé par :

> « Ne faire qu'une seule chose, et la faire bien. ».

## deux lettres 

Les plus vieux programmes Unix ont seulement deux lettres pour nom (ls, ps, df, du, mv, cp...).

Un grand nombre de ces programmes de deux lettres font aujourd'hui partie du standard POSIX.
Ça va plus vite à taper! Ces programmes sont simples, bien documentés, bien testés, et on les conserve précieusement. Ces programmes sont puissant, mais ce sont des outils bêtes et méchant!

Le programme `rm` supprime des fichiers. Il le fait sans demande de confirmation. Et sans afficher de message sur le résultat de l'opération! Et supprime définitivement, pas à la Corbeille!

C'est dangereux et risqué car on peut faire de grosses bêtises à la moindre faute de frappe! Il s'agit d'un couteau tranchant comme un rasoir!

Le système fournit néanmoins des capacités puissantes de configurations! Unix arrive à vous comme une belle caisse à outils pleine de choses dangereuses. C'est à vous d'organiser votre poste de travail, et de ranger le couteau dans un bel étui.

    alias rm='rm --interactive'

La ligne ci dessus est un exemple typique de commande Unix. En langage humain cette ligne de commande pourrait se traduire par:

> « A partir de maintenant:
> à chaque fois que je te demanderai de supprimer un fichier
> > > (par ce que j'aurai utilisé le programme rm)
> demande moi confirmation
> > > (fais comme si j'avais utilisé le programme rm avec l'option d'interactivité). »

## KISS 

Keep it Simply Stupid

Exemple simple:

Un logiciel propose deux langues pour son interface, le français et l'anglais. Un choix binaire!

Le logiciel pourrait proposer de stocker 1 ou 0 dans un fichier de un octet. 1 correspondrait à l'anglais, le 0 au français....

Et une option dans le logiciel serait là pour changer la langue du logiciel et écrire le fichier et le tenir à jour quand l'utilisateur cocherait un bouton... (par exemple...)

Cela suppose d'écrire un programme (soumis à bug problèmes, et maintenance...), et de créer un fichier purement numérique (numérique donc illisible par un humain).

Une autre idée serait que l'on écrive plutôt un *joli* fichier texte qui contiendrait un texte du genre:

    config.txt
    ==========
    
    "" Bienvenue dans ce fichier de config, les lignes qui débutent par deux 
    "" guillemets sont des commentaires. Les lignes blanches sont ignorées.
    
    "" LANG définit la langue de l'interface. Les choix possibles sont:
    ""         fr         pour le français
    ""         en         pour l'anglais
    
    LANG=fr
    
    
    ""  TELLE_AUTRE_OPTION se configure comme ci, comme çà.....
    
    TELLE_AUTRE_OPTION=normal
    
    
    "" On appelle ce genre de fichiers de configuration des fichiers auto documentés!

Simple et stupide ce n'est pas toujours avoir une belle interface graphique et de jolis boutons à cliquer!

Un système minimaliste et puissant. Capable d'être administrés par une console texte, et dont la configuration se fait par des fichiers humainement lisibles...

## SuckLess 

Rien de trop ne sera toléré.

Chaque philosophie possède ses extrémistes.... ^_^

PARAGRAPHE A COMPLETER

# histoire 

## Bell Labs 

Bell Labs, c'était la grosse compagnie de téléphone étasunienne, monopole d'état. Leur centre de recherche a été un des acteur clef du développement de l'informatique.

## Gnu 

Définissons Gnu:

Gnu's not unix !

C'est une définition auto référentielle! Dans cette définition que signifie GNU ?

> Gnu's not unix !
> C'est une définition auto référentielle! Dans cette définition que signifie GNU ?
> > Gnu's not unix !
> > Oui mais je te dis que c'est une définition auto référentielle! Dans cette définition que signifie les lettres GNU ?
> > > Gnu's not unix !

C'est bien compris? GNU ce n'est pas Unix! **Gnu est un logiciel libre**, et c'est toute la différence!

Au passage on parle d'un acronyme récursif! ( Une blague d'informaticien... )

---

| PREC: [Le réseau](090_network.md) |  | SUIV: [Les Disques](110_disks.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal index.md] |  |

---

