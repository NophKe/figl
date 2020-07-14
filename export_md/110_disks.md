Les Disques


# Quelques définitions 

: Fichier
Des données auxquelles on peut avoir accès dans un système de fichiers

: Dossier
Ce qui nous permet de classer et de ranger ces fichiers

: Arborescence
Structure de dossiers imbriqués les uns à l'intérieur des autres

Le terme « système de fichier » peut être compris de deux façons différentes:

 * Un ensemble de fichiers et de dossiers réunis sous la forme d'un disque (ou d'une partition de disque)
 * Un ensemble de partitions et de disques, présentés par le système d'exploitation sous la forme d'une arborescence globale

La confusion vient du fait que le disque, avant qu'il ne soit branché sur votre ordinateur est **UN** système de fichier (le système de fichier du disque, de la partition, son *format* dit on aussi maladroitement)....

A l'inverse, le disque (une fois correctement installé/branché/monté), s'intègre dans **LE** système de fichier de votre ordinateur (celui que présente votre système d'exploitation)

L'homonymie fonctionne pareil en anglais (filesystem), alors faites attention!

# Les Partitions 

## Principes 

Partitionner un disque dur, c'est schématiquement, le découper, pour recréer virtuellement le fonctionnement de plusieurs disques.

Mais cela permet aussi à l'inverse de rassembler plusieurs partitions (ou plusieurs disques) en un seul disque virtuel. *(et c'est franchement pas commun pour un ordinateur personnel)*

## A la mode Microsoft 

Les utilisateurs de Windows sont généralement habitués à ce que chacun de leur disque dur soit représenté de façon unique et équivoque, sous la petite icône " ordinateur " ou " poste de travail"!

Sous Windows chaque partition d'un disque se voit attribuer une lettre. La partition sur laquelle sont enregistrés les fichiers nécessaires au fonctionnement du système d'exploitation Windows sont souvent sur le lecteur C:\. Les partitions des différents disques durs (et les lecteurs amovibles, lecteur CD, clé USB...) prennent les lettres suivantes. À l'intérieur d'un disque dur on peut créer une arborescence de fichiers et de dossiers.

Toutefois, si l'on remonte au répertoire parent jusqu'en haut, alors, on aboutit à un moment singulier, on arrive dans "l'ordinateur", le "poste de travail". Quand vous êtes précisément dans votre poste de travail, vous ne pouvez pas créer de dossiers à cet endroit là. Vous n'êtes pas dans un véritable dossier, vous êtes dans un programme qui vous donne accès aux différents lecteurs. Windows présente donc chaque lecteur comme une arborescence séparée des autres.

## The Unix_ Way 

Sous Linux, vous avez une première partition qui est la partition racine (`/`). Elle est le sommet de l'arborescence (comme le Poste De Travail), mais elle est aussi une partition tout à fait ordinaire. (même si elle contient des fichiers importants)

Et c'est à l'intérieur de cette partition, que vous créez des dossiers dans lesquels apparaitrons vos autres partitions...

Sous Linux, il n'existe donc qu'une seule arborescence, et vous décidez de l'endroit où vous **montez** vos partitions à l'intérieur de celle-ci... Cela est beaucoup plus astucieux car on peut ainsi rajouter de l'espace disque à une partition saturée en **montant** un nouveau disque à l'intérieur de celle-ci.

## Pourquoi partitionner? 

Sous Gnu-Linux on privilégiera une installation sur plusieurs partitions.

C'est comme si Windows insistait pendant son installation pour que votre répertoire "Mes Documents" votre "Bureau" et toute votre configuration ne soit surtout pas sur le même disque que lui... (gentil !)

## Un partitionnement classique 

Un schéma de partitionnement classique pour les ordinateurs de bureau, serait le suivant :

 * une partition racine pour le système d'exploitation (`/`)
 * une partition SWAP pour les fichiers temporaires
 * une partition pour les données de l'utilisateur et ses fichiers de configuration. (`/home`)

Ce schéma de partitionnement à l'avantage de séparer les données de l'utilisateur de la partition se trouve le système d'exploitation. En cas d'un crash système d'exploitation, si ce dernier se retrouve inutilisable, on pourra effacer tout le contenu de la partition qui le contient... sans se poser de questions!

On pourra ensuite réinstaller un système d'exploitation dessus. On remontera la partition des utilisateurs au même endroit, et ces derniers n'auront rien vu (ils retrouverons leur configuration).

### Autres partitionements 

Une partition de sauvegarde de vos fichiers (pas la `/home` mais plutôt `/home/nono/SAUVEGARDE` ou pour la mettre un peu à l'écart `/sauvegardes`) peut vous sauver la mise parfois (Éventuellement dans un format lisible depuis Windows...).

Dans le cas d'un multi-boot avec Windows, et si votre bios fonctionne en Uefi, vous aurez besoin d'une partition Efi.

On peut également vouloir créer des partitions pour d'autres dossiers comme `/etc` pour restaurer aussi la configuration globale du système d'exploitation! Mais si vous n'installez pas la même distribution de Gnu-Linux pour votre prochaine installation, il faudra faire le ménage! (fichiers devenus inutiles, config incompatibles avec la nouvelle distribution...) Aussi, au début, on préfèrera le limiter à des schémas classiques, et sauvegarder les fichiers de configuration que l'on connait, ou qu'on a modifié soi même. Plus vous serez à l'aise avec les partitions et les différents dossiers de l'arborescence, plus vous personnaliserez en fonction de vos gout et de votre configuration matérielle.

# Les systèmes de fichiers 

## Généralités 

Un disque dur n'est rien qu'un grand espace dans lequel vous pouvez écrire de ZÉROs et des UN. C'est le système de fichier qui permet de lui donner une structure, et qui nous le fait apparaitre comme des fichiers organisés dans une arborescence de dossiers... Mais le disque en lui même ne contient ni case, ni index.

Pour bien faire la différence entre le système de fichier et le système de fichiers (introduction) car après on s'y perd...

Je dirais L'ARBORESCENCE pour parler **du tout** (l'arborescence hiérarchique composée de plein partition de plein de disque et plus encore que nous présente le système d'exploitation).

Les autres termes sont synonymes! Pour une fois qu'en français, notre langue fourche pour ne pas dire le même mot pour deux choses différentes, et que c'est plus précis que la bonne terminologie, on ne va pas s'en priver...

On utilise la commande `mount` pour monter les partitions sur la hiérarchie des dossiers.

Au démarrage le noyau monte la partition root au sommet de l'arborescence mais en lecture seulement. La commande `fsck` est utilisée pour vérifier que le disque n'a pas été endommagé. Ensuite seulement, le noyau remonte la partition racine en lecture/écriture.

### Format de partition 

Le système de fichier est ce qui définit comment l'ordinateur doit consigner les données (comment séparer la fin d'un fichier du début du prochain, ou se situe l'index...)

Chaque système de fichier présente des avantages et inconvénients. Certains n'autorisent pas les noms de fichier de plus de 12 caractères, mais sont redoutablement rapides! D'autres vous permettent d'effectuer des sauvegarde automatique de votre système et de pouvoir le restaurer **exactement** tel qu'il était à une date donnée... Certains sont optimisés pour certains matériels (carte sd, disque-dur, ssd), il y en a de nombreux! Certains ont besoin d'une défragmentation régulière pour survivre...

Windows sait lire les partitions au format Fat32 et Ntfs (J'exclue certes cd, dvd, et autres disques en lecture seule). Linux sait lire des dizaines de formats.

### La table de partitionnement 

Une section immédiatement au début de chaque disque est normalisée, elle contient la table de partitionnement. Celle-ci décrit le nombre de partitions, leur taille, leur format et leurs places respectives sur le disque.

C'est un secteur réservé, et aucun programme n'est supposé y toucher excepté le gestionnaire de démarrage, et les logiciels de partitionnement (et `dd` bien sûr).

Durant presque trente ans, jusqu'en 2005 environ, les tables de partition étaient au format MBR, ce dernier impose quelques limitations comme:

 * pas plus de 4 partitions primaires et pour avoir un nombre de partitions supérieur on devait
 * créer une partition primaire de type étendue et créer des sous partition à l'intérieur de celle ci
 * Pas la possibilité d'adresser plus de 2 tera-octet de disque

Les nouvelles tables de partition GPT on des limitations beaucoup plus larges (96 partitions par disque)

Si votre carte mère possède un Micrologiciel BIOS, elle s'attend *surement* à une table de partition MBR
Si votre carte mère possède un Micrologiciel UEFI, elle s'attend à une table de partition GPT.

Faites attention avec les logiciels de partitionnement! Mal les utiliser peut conduire à une destruction de toutes vos données.

## Les principaux formats 

Ce qui est à peu près commun pour tous les systèmes de fichier, c'est qu'il découpent l'espace du disque en adresses, et qu'il identifient les fichiers par des inodes, et que ces inodes décrivent les fichiers et les informations qui leur sont relatives.

Les dossiers sont eux aussi représentés sous la formes d'inodes, et contiennent en plus la liste des inodes des fichiers qu'ils contiennent.

Quand le système d'exploitation essaie de lire `/home/nono/grololo.jpeg`. Il cherche d'abord l'inode de `/` qui lui fournit l'inode de `/home`, qui lui fournit l'inode de `grololo.jpeg` qui indique enfin à quelle adresse du disque trouver la ressource.

Si l'on ajoute des données sur un disque, il peut arriver que les données soient écrites avant que l'inode n'ait été mis à jour. Si le courant coupe au mauvais moment, perdre un inode, c'est parfois perdre un répertoire majeur de l'arborescence! Ce problème a mené à l'invention des systèmes de fichier journalisés.

### Le format ext (ext2, ext3, ext4) 

Dans ce format, l'inode, de chaque fichier indique:

 * l'utilisateur propriétaire du fichier
 * les droits de lecture/écriture/exécution de l'utilisateur propriétaire
 * le groupe propriétaire du fichier
 * les droits de lecture/écriture/exécution du groupe propriétaire
 * les droits de lecture/écriture/exécution pour tous les autres utilisateurs
 * les dates de dernier accès,de dernière modification, de création.
 * les attributs....
 * j'oublie quelque chose?

C'est un système de fichier qui n'a pas besoin de défragmentation, et il est journalisé depuis la version 3.

C'est un système de fichier créé pour Gnu-Linux. D'autres formats ne lui permettrait pas de déployer tout son potentiel. En effet, tous les formats ne permettent pas de définir des droit d'accès par utilisateur et par groupe au niveau de chaque fichier, et chaque répertoire....

On peut aussi donner des attributs au fichiers et aux répertoires comme:

 * interdire à l'écriture même par le propriétaire
 * interdire de modifier un fichier tout en ayant le droit d'écrire à sa suite comme un journal de bord...)
 * créer des fichiers spéciaux... (suspens!)

Le fait de pouvoir définir des droits d'accès spécifiques fichiers par fichiers est un des point fondamental de la gestion de la sécurité sous Gnu-Linux. Nous reverrons plus loin comment l'on gère ces attributs.

### SWAP 

Sous les environnements Windows, on dit que la mémoire est libre quand elle n'est utilisée par aucune application. Les applications réclament de l'espace mémoire, Windows leur alloue une partie de cet espace, et quand l'espace est entièrement saturé, Windows utilise un fichier qu'il appelle « le fichier d'échange » dans lequel il se défausse d'une partie de la mémoire. Le fichier d'échange est ainsi beaucoup moins rapide que la mémoire vive.

Sous Linux, on fait la différence entre la mémoire disponible et la mémoire libre. Le système d'exploitation considère que de l'espace mémoire non utilisé est un gâchis. Si la mémoire vient à manquer, le système n'a pas un fichier particulier dans lequel se défausser.

En effet sous Gnu-Linux, on prévoit une partition entièrement dédiée à cela. On appelle cette partition la swap. Elle est formatée à chaque démarrage. Son format de fichier est optimisé pour les écritures réécritures fréquentes. C'est le seul type de partition que vous ne pouvez pas monter dans l'arborescence.

C'est aussi à cet endroit que le système copiera la mémoire sur le disque en cas d'hibernation/mise en veille prolongée! Ainsi elle doit toujours être au moins de la taille de la ram.

### Fat et Ntfs 

Vous n'avez pas le choix si vous voulez que Microsoft Windows lise un disque-dure, ce sera l'un de ces deux formats que vous devrez utiliser.

Fat16 est archaïque. Fat32 a l'avantage d'être très lisible notamment pour les appareil vidéos et les clefs usb, mais il n'est pas journalisé. On doit absolument démonter le disque avant de le retirer, (« Retirer le périphérique » çà vous dit quelque chose?)

Pas de disque de plus de 2 tera-octets, ni de fichier de plus de 4 giga-octet en Fat32.

Ntfs est beaucoup moins limité, et il est journalisé.

---

|PREC: [Unix...](100_unix.md) | |SUIV: [L'arborescence](120_arborescence.md)|
| |[Menu Principal](index.md) ||

---

