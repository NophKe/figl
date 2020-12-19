# Le Boot


## L'art d'enfiler ses chaussure 

L'ordinateur est mis sous-tension, il s'allume! Dans une **puce électronique**, un programme (appelé le micro-logiciel) analyse l'ordinateur, trouve le/les disques durs, lit le disque qui sera désigné comme disque de boot, et trouve un autre programme inscrit sur ce disque. Ce dernier, sur le disque, se nomme **le gestionnaire de démarrage**.

Le gestionnaire de démarrage (suivant comment il est configuré) vous propose un (ou plusieurs) noyaux, et un (ou plusieurs) système d'exploitation, voir encore une (ou plusieurs) options. Dans tous les cas, il lui faut charger le noyau d'un système d'exploitation.

Le noyau d'un système d'exploitation, c'est le programme qui sait communiquer avec le matériel qui constitue l'ordinateur. Le noyau n'est pas l'interface avec laquelle interagit l'utilisateur.

Le noyau met en place un environnement dont le but n'est que de masquer les détails techniques de l'architecture matérielle en place. C'est grâce à cet environnement que le couple programme et système d'exploitation s'épanouit. Un programme qui fonctionne sur un système d'exploitation fonctionnera toujours sur ce système d'exploitation quelque soit la machine sur laquelle est installé ce système d'exploitation (si c'est bien la même version).

C'est à l'intérieur de l'environnement créé par le noyau qu'on lance différents programmes pour réaliser différents services dont on aura besoin sur l'ordinateur. Le premier programme que lance le noyau est le gestionnaire d'initialisation qui va donc lire les fichiers de configuration à sa disposition, et lancer différents programmes nécessaires au fonctionnement de la machine.

Différents types de programmes vont donc démarrer, certains vont effectuer une simple action et se fermer d'eux-mêmes. Par exemple, à chaque démarrage Linux vérifie l'intégrité de vos disques durs avec l'aide du programme `fsck`. S'il ne trouve pas de problème particulier, ce programme se ferme, et le démarrage continu.

D'autres programmes vont lancer leur initialisation, et éventuellement rester en tache de fond. C'est ce que l'on appelle les services, les services servent à plein de choses, un exemple simple pour s'en rendre compte et de penser à la clé USB que vous insérez dans votre ordinateur. Il faut bien qu'il y ait un programme en tache de fond qui scrute l'insertion d'une clé USB si vous voulez qu'il se passe quelque chose quand vous en insérez une.

Le dernier programme que lancera le gestionnaire d'initialisation sera le gestionnaire de connexion. C'est ce programme qui vous demande d'entrer votre mot de passe utilisateur lorsque vous connectez. Vous entrez donc votre nom d'utilisateur, votre mot de passe. Et vous obtenez l'interface utilisateur qui est le dernier programme qui sera lancé automatiquement.

L'ordinateur est initialisé, c'est au tour de l'utilisateur de continuer. Il peut lancer des programmes, et ajouter des services.

Réussir tout cela, et dans le bon ordre, c'est comme enfiler ses chaussure! Faut mettre la bonne au bonne endroit, les enfiler, les lacer! Ce processus en anglais, c'est le bootstrapping, boot signifiant chaussure.

Aussi démarrer un ordinateur, c'est *booter*! (En bon fraçais ...)

## Le Micrologiciel 

---

On parle rarement de micro-logiciel, (et quelque soit son genre), on dira souvent BIOS par abus de langage. J'essaierai de ne pas trop le faire dans ce qui suit.

---

Lorsque matériellement vous allumez votre ordinateur, le micro-logiciel se charge de reconnaître la configuration matérielle de votre ordinateur. Il détecte s'il y a des disques durs de brancher, quelle est la quantité de mémoire quel est le type de processeur....

Ce premier programme c'est soit:

 * soit un BIOS ( → Basic Input Output System / Le système élémentaire des entrées et sorties).
 * soit un UEFI ( → Unified Extensible Firmware Interface / Interface Matérielle Extensible Unifiée).

Une interface de configuration du BIOS/UEFI, peut-être lancé en appuyant sur une touche (généralement F2) lors des premières secondes du démarrage de l'ordinateur.

[![](img/bios.png)](https://fr.wikipedia.org/wiki/Basic_Input_Output_System)

|Interface de configuration du bios ( credit Wikipedia)|

Comme, un ordinateur sans un programme n'est qu'un inerte tas d'électronique. Les instructions de démarrage sont inscrites à l'intérieur du micro-logiciel qui va rechercher à un emplacement déterminé, le bon programme. *(cet emplacement, c'est la table des partitions)*.

Dans cette table, le micro-logiciel recherche l'adresse d'un programme appelé boot loader, le chargeur de démarrage. Une fois que le chargeur de démarrage est placé dans la mémoire et démarré, celui-ci charge le véritable système d'exploitation.

Pourquoi le micro-logiciel ne charge t il pas directement le système d'exploitation? La table des partition MBR est un standard vieux de trente ans et ce genre de table des partition ne nous permet pas de faire mieux que d'indiquer une adresse. Il n'y a pas la place d'y inscrire un programme entier.

L'UEFI est une variante plus moderne qui permet de préciser à quel endroit du disque dur trouver le noyau à lancer. Ainsi, on peut enregistrer *dans le réglage du micro-logiciel* plusieurs systèmes d'exploitations et choisir lequel démarrer par défaut.... Cela permet donc de se passer de chargeur de démarrage!

Dans le monde réel, quand le micro-logiciel lance un chargeur de démarrage, ce dernier vous propose en général, une interface de (configuration/choix du système d'exploitation à booter), plus puissante, et plus agréable à utiliser et paramétrer. Ainsi, on peut vouloir laisser une entrée de secours dans le micro-logiciel, et installer quand même un chargeur de démarrage.

C'est même recommandé si vous avez des doutes, et que vous voulez pouvoir trafiquer les options du noyau facilement.

Pour fonctionner l'Uefi réclame une partition à lui formatée en format fat32 que l'on appelle la partition **EFI**. *(sans u)*

## Le rôle du noyau 

Si votre ordinateur sait se débrouiller à peu près avec vos différents périphériques, C'est par ce qu'il existe des interfaces de contrôles élémentaires entre les différents composants. Ainsi dès que vous mettez sous tension votre ordinateur, celui ci sait utiliser l'écran, par exemple. Vous remarquerez cependant que lors des premières phases du boot, l'écran n'affiche que du texte, ou une image en seize couleurs... Pourquoi? Les contrôleurs savent se mettre à disposition pour les opérations de base (Vesa par exemple est un standard de contrôleur graphique)...  Mais il faut connaitre intimement le contrôleur pour aller plus loin.

Le micro-logiciel fournit une interface de base pour la communication entre les périphériques, mais celle ci est très limitée, et le noyau Linux fait tout pour éviter d'en avoir besoin. Dans la pratique au contraire le noyau possède tout un tas de petits bouts de programmes (que l'on appelle des drivers sous Windows, et pilotes ou modules sous Linux) qui sont là pour l'aider reconnaitre et à tirer un plein profit des possibilité de chaque matériel.

À la suite du boot avant que vous n'ayez lancé le programme, vous pouvez imaginer votre ordinateur comme contenant un zoo de processus qui attendent tous d'avoir quelque chose à faire. Ils attendent tous des événements. Un événement peut être le fait que vous appuyez sur une touche, ou que vous bougez la souris. Voir même que votre machine soit connectée à un réseau, et qu'un certain paquet de données arrive de celui-ci.

Le noyau est un de ces processus. Mais il est spécial, car il contrôle ce que les autres processus utilisateurs effectuent, et il est normalement le seul processus autorisé à avoir un accès direct avec le matériel. Ainsi comme toutes les entrées sorties passent par lui, il peut planifier les opérations et empêcher que différents processus ne se gênent mutuellement.

Cependant certains processus sont autorisés à contourner cela, généralement en leur confiant un accès direct à un bus (l'audio professionnelle pour les temps de latence, et la carte graphique pour le jeux et les vidéos)

En fait, les processus utilisateurs, doivent faire une requête au noyau quand ils veulent obtenir les événements relatifs à votre clavier, afficher à l'écran, lire et écrire les disques, ou juste faire n'importe quoi d'autre que de balancer des bits dans la mémoire. Ces requêtes sont connues aussi le nom de system calls (appel systèmes).

## Le Chargeur de Démarrage 

Le micro-logiciel, recherche à un emplacement déterminé qu'on appelle la table de partitions. Cette dernière est une section du disque dur située immédiatement à son début. La table des partitions est normalisée, elle indique l'adresse du disque ou trouver le chargeur de démarrage.

Ce programme spécial (appelé le boot loader, le chargeur de démarrage) est placé dans la mémoire et démarré.

C'est lui qui charge le véritable système d'exploitation. Il réalise cela en cherchant un noyau, il le charge dans la mémoire, et le démarre.

Grub et le chargeur de démarrage le plus connu de l'univers Linux, mais il n'est pas le seul. De nos jours le rôle du chargeur de démarrage n'est plus aussi fondamental, grâce aux progrès des micro-logiciel basés sur l'UEFI. En effet, ces derniers sont capables de charger directement le noyau du système d'exploitation en mémoire.

Dans la pratique, un chargeur de démarrage est souvent plus simple à configurer que le micro-logiciel, et offre une interface utilisateur conviviale lors du boot *(pour sélectionner un système d'exploitation, ou modifier des options données au noyau)*.

Sachant alors que de nos jours, les besoin de ressources d'un chargeur de démarrage sont faibles (une voir deux secondes lors du boot, et quelques mégaoctets d'espace disque), par commodité, on en installe un.

## Le Gestionnaire d'initialisation 

### Init 

Une fois le noyau chargé, celui-ci démarre le programme `init` qui est le premier logiciel à être lancé après le noyau. Ce sera son travail que de terminer le boot jusqu'au login de l'utilisateur.

Il va se charger de lire les fichier de configuration. Il va rechercher les périphériques en place sur votre ordinateur. Il va monter les disques, lancer le serveur X. Bref, il va prendre soin de tout, jusqu'à ce que vous puissiez tranquillement entrer votre mot de passe et commencer à utiliser votre machine.

Et là encore, `init` ne va pas disparaitre, il restera en tache de fond, et sera le processus père de tous les autres... Le Tuer revient à arrêter le système (mais nous reviendrons là dessus). Il va ainsi rester en tâche de fond, et prendre soins de différents *services*.

### Systemd 

Init est le nom historique de ce programme, mais il existe de nombreux gestionnaire d'initialisation. Comme cependant, il ne peut y avoir qu'un seul gestionnaire d'initialisation par système d'exploitation, ce programme se placera toujours en `/bin/init`.

Je parlerai par la suite de Systemd car c'est le gestionnaire d'initialisation le plus courant. *(les spécialistes vont me clouer au pilori...)*

#### Les Services 

Une fois que Systemd s'est initialisé lui même, il va lire ses différents fichiers de configuration, et, grâce à ces derniers, va lancer les différents services qui sont actifs sur la machine. Les services sont de programmes qui ont une tache précise et qui fournissent des interfaces pour faciliter ces dernières.

Les services qui font le mieux leur travail sont *transparents* en ce sens que l'on ne se doute pas de leur existence... Par exemple, vous espérez certainement que lors de l'insertion d'une clef usb, le système d'exploitation la détecte et la fasse apparaitre quelque part *( Le Poste de travail sous Windows, ou le dossier `/media` sous Gnu-Linux ).*

Pour ce faire, il n'y a pas de secret, il faut qu'un programme vérifie toute les fractions de seconde si il y a eu une activité sur les ports usb de la machine! Il semble donc raisonnable d'espérer qu'un seul programme fasse cela, qu'il le fasse efficacement.

On voudra enfin que ce programme fournisse une interface pratique, afin que d'autre programme qui auraient besoin d'une ressource s'adresse au service et jamais à la ressource directement.

C'est le rôle des services, ils fournissent des couches d'abstraction qui rendent la gestion des différent programmes qui composent le système d'exploitation plus agréable... Plus *administrable*

#### Les Targets 

Désolé pour l'anglicisme, mais cette fois ci, y'a pas mieux... (çà veut dire «cible», mais çà ne se dit pas... je crois...)

On ne peut pas, on le devine, démarrer n'importe quels services dans n'importe quel ordre... Avant  de se connecter à Internet, il faut initialiser la carte réseaux... Avant de lancer la session de l'utilisateur, il faut monter les partitions essentielles du système et régler la carte graphique. Le clavier devra être dans la bonne langue avant que l'utilisateur entre son mot de passe....

On pourrait lancer les processus les uns après les autres, mais çà ne serait pas pratique pour la maintenance car à chaque installation de programme, le programme devrait savoir se trouve sa place au milieu des autres sans mettre trop la pagaille. Et le problème de l'initialisation séquentielle c'est que quand quelque chose déconne, çà prend des plombes, à démarrer.

Bref, Systemd a supplanté ses ancêtres pour ses capacités de parallélisation (entre autres). Systemd cherche à atteindre des targets. Une target c'est un ensemble de services qui rendent un système suffisamment  cohérent pour passer à l'assaut de la target suivante.

En gros, Systemd se lance. Il découvre que la target par défaut est un gestionnaire de connexion graphique. Cette target à besoin de la target 'multi-utilisateur' qui elle même a besoin de la target 'disques et partitions locales' etc...

Puis target par target il lance tous les services nécessaire, *(et les services nécessaires aux services..)* attends que ceux ci en aient fini, et ainsi de suite jusqu'à n'avoir plus rien à faire.

Alors Systemd se range dans son coin et surveille que tout se passe bien. Parfois Systemd doit remettre l'ordre. Parfois, on demande à Systemd une nouvelle target qui peut être le redémarrage, l'arrêt, (ou autre). Mais dans tous les cas Systemd sera le dernier à quitter le navire, veillant tout arrêter dans le bon ordre.

#### Les Sockets 

On ne peut pas encore entrer dans les sockets, car il n'y a pas lieu dans la section des fondamentaux. Il est cependant à savoir que les sockets sont les interfaces de communication des processus/programmes/services entre eux.

Il est de la responsabilité de Systemd de gérer les sockets.
 
-------------------------------------------
| PREC: [Le Codage de l'information](050_coding.md) |  | SUIV: [Le Login](065_login.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |
-------------------------------------------
