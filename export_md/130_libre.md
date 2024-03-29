# La philosophie du Libre
 


## Remarques sur les éxécutables 

Un programme qui est fournit uniquement sous la forme d'un exécutable est une injustice car l'utilisateur qui récupère (ou pire, achète!) ce programme n'obtient en retour aucun contrôle sur le fonctionnement du logiciel. Il doit faire confiance à l'éditeur pour savoir ce que le logiciel fait /ou ne fait pas sur son ordinateur.

La seule véritable solution pour connaitre les agissements d'un exécutable est donc... De l'exécuter à l'intérieur d'un programme que l'on nomme un débogueur. Mais **il faut** l'exécuter pour que le débogueur l'analyse. Le débogueur permettra donc de suivre les agissement du programme en direct... Instruction par instruction, et si le *bidouilleur* (hacker en anglais) s'est trompé ou a raté quelque chose, alors il est bon pour ré-éxecuter le programme à partir de zéro...

Certes, il existe aussi des programmes que l'on appelle des désassembleurs, et qui permettent de passer d'un exécutable à un code source en assembleur. Toutefois ces programmes fournissent des codes sources  qui peuvent être long de milliers de lignes sans commentaire (un éditeur de texte) à plusieurs millions de lignes (un traitement de texte)... Et lire de l'assembleur...Surtout de l'assembleur généré par ordinateur! Aussi cet exécutable peut s'exécuter à l'aide de librairies qui rendent son comportement encore plus difficile à observer!

Le débogueur présente l'avantage de pouvoir suivre *en direct* les instructions que le programme demande au processeur d'exécuter, ainsi, par exemple, si vous voulez savoir ce qu'il se passe uniquement quand vous enregistrer un fichier au format *(insérer ici format propriétaire)*, alors vous allez utiliser le logiciel jusqu'au point d'enregistrer le fichier, et là seulement vous allez suivre ce que raconte votre débogueur.

Le désassembleur présente à l'inverse l'avantage de vous fournir un fichier source que vous pouvez étudier à loisir... Mais ce qui est vrai dans les deux cas, c'est qu'on appelle l'appelle cette étude des exécutable: du reverse-engineering. C'est un **art** sombre de l'informatique qui demande d'être à l'aise avec le binaire, l'hexadécimal, l'assembleur, et de connaitre à fond le fonctionnement des processeurs, des interruption systèmes, etc...

Sans cela aucun format propriétaire breveté (mp3, flash, documents word...) n'aurait pu être intégrés dans les logiciels libres, mais cela va beaucoup plus loin car les pilotes (les programmes qui enseignent au système d'exploitation comment piloter des périphériques) ne sont que rarement libres...

Pour le dire vite: le *binary hacking* c'est réservé à de grands érudits, qui font un travail indispensable et terriblement important pour la communauté du libre!

## Le logiciel propriétaire 

Les logiciels propriétaires demandent généralement à leur utilisateur de signer (électroniquement) un contrat de l'utilisateur final. Dans ce contrat vous vous engagez généralement à ne pas chercher à savoir comment marche le logiciel, à ne pas le modifier. Vous ne pouvez pas l'améliorer et le donner à un ami, ni le lui vendre.... etc... Il n'y a pas de règles internationales, c'est entre l'éditeur et l'utilisateur. Et seulement eux! Parfois vous renoncez ainsi à vos droits de poursuite, parfois vous acceptez l'utilisation de vos données personnelles! C'est selon.

Les Logiciels propriétaires (la plupart de ceux que vous trouverez dans le commerce) viennent donc sous forme d'un exécutable pratiquement impossible à analyser ou à modifier. Mais au juste pourquoi vouloir savoir ce qu'il se passe à l'intérieur? Pourquoi vouloir le modifier?

### Les bugs 

Parfois un logiciel fonctionne mal, et l'éditeur (pour de bonnes raisons parfois) ne veut pas appliquer de correctif à son logiciel. Parfois, le logiciel est trop vieux et l'éditeur a laissé tombé sa maintenance. Parfois aussi, c'est juste lié à vous et à votre configuration particulière, et le programme a besoin d'une correction personnalisée!

### L'ajout de fonctionnalité 

Richard Stallman, le fondateur et initiateur du mouvement de l'informatique libre travaillait dans les années 70 au MIT (l'université). Son travail était d'améliorer et de faire évoluer le système informatique qu'utilisait l'université. Nous sommes dans les années 70, il n'y a qu'une seule imprimante, et toute l'université veut l'utiliser...  La pauvre est souvent en rade de papier! Une réussite de Stallman avait été de programmer l'imprimante pour qu'elle signale à tous les ordinateurs connectés quand elle manquait de papier. Juste un petit message, et il y avait toujours quelqu'un de bonne volonté!

Quand une nouvelle imprimante fut offert à l'université Richard Stallman voulut reproduire l'exploit, mais se trouvât confronté au fait que l'imprimante avait été offerte par une entreprise privée... Et cette dernière ne souhaitait pas communiquer son code source! Une modification mineure du code source, mais qui devenait *pratiquement* irréalisable sur l'exécutable!

[![](img/Richard_Stallman.jpg)](https://fr.wikipedia.org/wiki/Richard_Stallman)

|Richard Stallman, Fondateur du mouvement du logiciel libre|

### Les Fonctionnalités malicieuses 

Pourquoi ne voulait on pas laisser Stallman étudier le programme. Ce programme cachait-t-il quelque chose, un espion à l'université? Probablement pas, mais sans le code source impossible à dire! À l'époque de cette histoire, les ordinateurs n'étaient pas interconnectés comme aujourd'hui. Collecter des données, était une tâche difficile et la puissance de calcul n'était pas encore là. Mais de nos jours, on connait tellement ces pratiques qu'on leur a donné des noms.

#### Le Pistage
C'est simple, vous êtes fliqué! Même des distribution Gnu-Linux comme Ubuntu (de la société Cannonical) se sont fait pincer à regarder dans les recherches (locales et Internet) que faisaient leur utilisateurs! Les agences gouvernementales peuvent *quasiment* tout savoir de ce que vous faites sur Internet.

#### Une Backdoor
La porte dérobée ou littéralement la porte de derrière, un accès délibérément laissé ouvert qui permets à un tiers (l'éditeur, un pirate, un client de l'éditeur, un espion...) depuis l'extérieur d'accéder au programme, de savoir ce que ce programme est en train de faire, et, en règle générale d'accéder à toutes les ressources dont ce programme à l'accès sur votre ordinateur

#### Une Backdoor Universelle
Pareil que précédemment, à la différence qu'elle permet à ce tiers de modifier le programme à distance. (La mise à jour automatique de Windows, se fait parfois sans aucune intervention de votre part! Cela signifie que Microsoft, ou d'autres, peuvent )

Cette liste n'est pas exhaustive...

### Les autres raisons 

 * On peut vouloir garder une seule *(ou seulement quelques unes)* des fonctionnalités (encore plus si on a payé pour le logiciel en entier), pour avoir un logiciel plus léger, ou plus *sur-mesure*.
 * On veut parfois faire tourner le logiciel sur un nouveau système d'exploitation , une autre architecture de processeur...
 * S'amuser?..

## Le Logiciel Libre (Free Software) 

Pour toutes les raisons évoquées ci-dessus, la Free Sofware Foundation s'est lancé dans l'écriture d'une license qui permettrait à tout ceux qui voudrait écrire des programmes de le faire dans le respect des libertés de l'utilisateur final. C'est la G.P.L, General Public License.

Sous license GPL, l'éditeur du logiciel reste propriétaire du code source bien qu'il soit publique! Chacun ayant accès au code source peut modifier le logiciel. Cependant celui qui récupère du code source, et modifie le programme est dans l'obligation légale de fournir avec sa version du  programme, sa version du code source.

Le code source ainsi que vos modifications doivent cependant rester sous license GPL. Ce système garantie plusieurs libertés:

#### Liberté Zéro
Le droit d'exécuter le programme de la façon dont vous le souhaitez et sur la machine que vous souhaitez!

#### Liberté Numéro Un
L'accès au code source du programme et à toutes les information nécessaires pour le compiler. Ainsi la liberté d'étudier le programme, de le modifier et de lui faire faire ce que vous souhaitez qu'il fasse.

#### Liberté Numéro Deux
La possibilité de redistribuer (donner ou vendre) des copies exactes du logiciel (et des sources).

#### Liberté Numéro Trois
La possibilité de redistribuer (donner ou vendre) des copies modifiées du logiciel (et des sources).

[![](img/Carte_conceptuelle.png)](https://fr.wikipedia.org/wiki/Logiciel_libre)

|Carte conceptuelle du logiciel libre ( credit: Wikipedia )|

### Libertés individuelles 

Les deux premières libertés nous assurent le contrôle individuel du logiciel. Cependant elle ne nous permettent pas de donner une copie de notre logiciel à un copain programmeur et de lui commander une modification. D'où la nécessité des deux suivantes!

### Libertés collectives 

Les deux dernières libertés nous assurent le contrôle collectif. Elles permettent  à un groupe d'utilisateurs qui n'aiment pas les évolutions d'un logiciel, de reprendre ce logiciel et de se constituer en groupe informel, association, entreprise... Chacun est libre! Mais le code sous license GPL reste sous license GPL.

## La Jungle du logiciel libre 

Si tout le monde a accès au code source, alors chacun va développer des versions personnelles, on parlera de:

#### Clone
Vous aimez un programme qui n'est pas libre, ou qui n'existe pas pour votre système d'exploitation. Réécrivez le vous même! Parfois la nouvelle implémentation supplante même l'ancienne l'ancienne car elle propose des fonctionnalités innovante ou supérieures... (de nombreux programmes ont commencé leur vie comme des clones)

#### Port
Quand il s'agit de faire fonctionner un programme pour une architecture pour laquelle il n'est pas prévu.

#### Patch
Quand, une version modifiée d'un programme, évolue conjointement avec ce programme (en intégrant les mises-à-jours, et en se basant toujours sur la dernière version)

#### Branch
Quand dans deux versions concurrentes d'un même projet évoluent en se séparant... Il y a alors un dernier numéro de version commun qui leur est commun. Puis, comme le tronc d'un arbre donne plusieurs branches, chaque projet part dans sa direction. (Une branche peut être abandonné ou être réintégrée dans le tronc si elle apporte des innovations, ou des corrections intéressantes.)

#### Fork
Plus radical qu'une branche! Quand il y a désaccord technique ou/et désaccord humain, la communauté doit trancher (suivant ses règles internes). Ceux qui ne veulent pas suivre peuvent copier le code source, changer le nom du logiciel et partir de leur coté. (les râleurs, les génies, et les solitaires sont libres de *forker* quand ils le souhaitent sans attendre personne!) De nombreux projets naissent ainsi.

Le développement d'un logiciel libre est un processus complexe (à la limite des phénomènes organiques...).

Exemples:

 * Xorg est un fork de XFree86 qui est une implémentation de X Window System
 * Mate est un fork de Gnome 2 quand la communauté est passé à Gnome 3
 * Le noyau Linux-lts (long term support) est une branche du noyau Linux qu'on considère stable et dont on décide de corriger le bugs et faire la maintenance sur le long terme.
 * IceWeasel est une version de Firefox patchée pour enlever tout ce qui porte atteinte à votre vie privée...
 * Et Gnu-Linux est globalement un clone d'Unix

## Un Système modulaire 

Windows est un système d'exploitation tout intégré, il arrive avec son propre programme de gestion des périphériques, son propre programme de gestion du réseau, sa propre interface graphique, un éditeur de texte, Microsoft Paint, et le solitaire....

Gnu-Linux n'est pas aussi monolithique, au contraire! Par défaut, Gnu-Linux est un système d'exploitation puissant mais assez minimaliste.

À la différence de Windows, donc, vous êtes libres d'utiliser les programmes que vous souhaitez. Cela inclut aussi les programmes qui sont liés à l'interface graphique. Vous pouvez par exemple construire un environnement qui ne possédera aucune interface graphique, mais seulement une interface texte. (La plupart des serveurs n'ont pas d'écran à eux, on n'y connecte avec d'autres ordinateurs qui ont leur écran à eux)

### Une Distribution 

C'est en associant tout un tas de programmes (un éditeur de texte, un shell, une interface graphique, des programmes de configuration....) que l'on obtient une **distribution** Gnu-Linux.

Une distribution est un ensemble qui se veut cohérent. Mais une bonne connaissance des différents programmes essentiels (de leur utilités respectives, et des différentes alternatives disponibles) vous permettra de faire votre propre distribution (avec votre choix de programme), que vous partiez de zéro, ou que vous vous appuyiez sur une distribution déjà complète.

Vous pouvez aussi choisir d'adopter une distribution telle qu'elle. De nombreuses distribution sont en effet des produits très aboutis, et l'utilisateur lambda peut s'en satisfaire.

Cependant comprendre ce qu'il se passe à l'intérieur de ce fouillis de logiciels c'est comprendre ce que fait votre ordinateur. Laisser faire ce que d'autre ont décidé pour vous, c'est prendre un risque, et c'est renoncer à sa liberté. La confiance et la sympathie que l'éditeur du logiciel vous inspire n'y changera rien (Vous saviez que Firefox collectait des données? Comme l'historique des pages que vous consultez? Tapez `about:telemetry` dans la barre d'adresse de Firefox... vous verrez bien!)

Je suis persuadé que connaitre un peu le bestiaire des programmes, des termes techniques, et concepts de l'informatique est suffisant pour que chacun puisse connaitre son ordinateur, le configurer, et le dépanner.

Et surtout qu'avoir avoir clefs de cette *culture générale de l'informatique* suffit pour savoir à propos de quoi se renseigner, et ou trouver les bonnes références!

[![](img/distribution.png)](https://fr.wikipedia.org/wiki/Distribution_Linux)

|Les composants d'une distribution Linux ( credit Wikipedia )|

### Le Minimum requis 

Il est une question très saine à se poser! En taillant dans le gras d'une distribution, que me faut il pour booter mon ordinateur?

Dans la pratique vous avez besoin de:

1. Un chargeur de démarrage. *lilo , grub, efistub...* Mais vous pouvez vous en passer si votre bios gère l'Uefi
1. Un Noyau *Linux, Linux-lts, Hurd* Gnu devait au départ avoir pour noyau Hurd, mais ce dernier n'est toujours pas au point...
1. Un gestionnaire d'initialisation *SysVinit, Systemd...* Il va lancer les démons/services, démarrer les connexions réseau... Il aura donc besoin que vous installiez les programmes que vous voulez qu'il lance au démarrage
1. Un shell *sh, bash,...*
1. *Coreutils et linux-util (voir busybox ou autres)* sont des ensembles de petits programmes courants (ls, cat, mount....) Ce sont les programmes de base qui permettent d'utiliser le système... Un système qui ne possèderai pas d'interface pour ouvrir des dossiers, ou éditer des fichier serait *en pratique* inutilisable! On s'attend donc à ce que le shell puisse trouver certains classiques!

Une fois que le noyau du système est chargé en mémoire, il cherche un programme d'initialisation (Systemd ou SysInitV) mais s'il ne trouve rien, il supposera que le système est *au moins un peu* posix et lancera `/bin/sh` et votre système sera initialisé (ni configuré, ni correctement booté, mais initialisé).

S'il ne trouve même pas `/bin/sh`, bein je ne sais pas comment vous en êtes arrivé là... Mais vous l'avez surement bien cherché!
 
-------------------------------------------
| PREC: [L'arborescence](120_arborescence.md) |  | SUIV: [A l'origine était sh...](140_shell.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |
-------------------------------------------
