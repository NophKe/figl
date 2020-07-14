Les Périphériques


---

Attention, on distingue:

 * Périphériques intégrés (comme le clavier d'un ordinateur portable, ou un composant soudé sur la carte mère d'un pc)
 * Périphériques externes (tous ceux qui sont amovible, ou que l'on peut débrancher)

---

On entends par périphérique tout appareil que l'on peut "brancher" à l'ordinateur. Un clavier ou une souris, est des exemples de périphériques.

Le véritable cœur de votre ordinateur (l'unité de calcul), vous ne communiquerez jamais vraiment avec... C'est un composant électronique qui fonctionne en 5 volts et qui communique sur un bus de 64 bit... Il nous faut tout un équipement autour du processeur pour pouvoir tirer profit de ses capacités.

Mais quand bien même nous pourrions parler en binaire cinq volts haute fréquence avec une calculatrice de collégien, elle ne nous serait que de peu d'utilité avec son petit écran. On veut que la machine puisse s'exprimer, qu'elle fasse des choses... En bref, qu'elle puisse piloter des appareils (les périphériques)

Les périphériques sont les entrées et les sorties, ils sont ce qui fait que ceci est un ordinateur, un serveur, un téléphone, ou une calculette... Et non une théorique machine de Turing...

# Les Indispensables 

## La Carte Graphique 

C'est ce qui va communiquer avec les écrans. Comme le traitement d'image en temps réel est une activité très gourmande en ressources, elle possède sa propre mémoire vive et son propre processeur (le GPU).

## La Carte Son 

Même discours que pour la carte graphique, à la différence que de nos jours la puissance de calcul disponible est telle que *(pour la plupart des applications courantes, et donc pour la plupart des ordinateurs portables ou bas de gamme*) une petite puce électronique intégrée à la carte mère est suffisante.

## Une Mémoire De Stockage 

Sans aucun programme à réaliser, un ordinateur ne fait rien...ou presque! On a besoin d'au moins un programme à lui donner.

Forcément, on aura besoin d'**au moins un** cd-rom, un dvd, une clef-usb, une carte sd, n'importe quoi... Ou se trouve **au moins un** programme....

Bon! Dans la pratique un support avec un système d'exploitation complet c'est mieux!

Et toujours dans la pratique si c'est un support sur lequel on peut lire... mais aussi écrire (pour y enregistrer des trucs, ou modifier nos programme), bein c'est encore mieux. Ainsi on préfèrera les disques durs (hdd) ou mémoire flash parallèles (ssd)

Remarque:Oui oui les ssd sont comme plusieurs cartes sd empilées

## Une Carte Réseau 

Une interface matérielle qui transforme des données en signal à émettre et un signal reçu en données.

: Modem
Carte réseau qui transforme des données en signal pour les réseaux téléphonique

: Carte Ethernet
Carte réseau qui transforme des données en signal pour les réseaux câblés

: Carte wifi
Carte réseau qui transforme des données en signal pour les réseaux sans fils

## Un Clavier 

Oui oui c'est un indispensable! Si le micro-logiciel n'arrive pas à trouver de clavier, il va bipper trois fois et va refuser de démarrer la machine! C'est comme çà, la souris, elle par contre est optionnelle.

## Les Moins Connus 

Il reste encore toute une panoplie:

 * de contrôleurs (on y revient tout de suite)
 * de périphériques de pointage (comme les tablettes tactiles, les écrans tactiles...)
 * de lecteurs (de cartes, de disquette, cd, dvd...)
 * des graveurs (cd, dvd-R, dvd+R)
 * des récepteurs (radio, TV...)
 * des webcam, un micro...
 * et j'en passe..

### La Dicrete Card 

Mais il y en a un qu'il faut comprendre car il peut être source de confusion...

De nos jours les ordinateurs portable en on souvent deux cartes graphiques, une qui est dite "intégrée" et l'autre dite "discrète". Cette dernière est *théoriquement* plus puissante, mais elle est aussi plus consommatrice d'électricité.

(J'ai écrit "théoriquement" car souvent, la discrete card ne possède pas sa propre mémoire vive, elle l'emprunte au processeur.

Ainsi, suivant votre configuration, elle démarrera quand vous brancherez un second écran, ou quand l'ordinateur est en charge... Parfois elle se configure dans le bios, parfois pas... Parfois le système d'exploitation gère tellement mieux l'une que l'autre que voilà... Dans ces cas faut bidouiller...

# Interruptions Système 

Votre clavier est un périphérique très simple, il est simple car il génère une petite quantité de données et lentement (selon les standards d'un ordinateur). Quand vous appuyez ou relâchez une touche, cet événement est signalé à travers le fil du clavier. La valeur d'un bus change et déclenche ce qu'on appelle une interruption matérielle.

C'est le travail de système d'exploitation de surveiller de telles interruptions. Pour chaque cas possible d'interruption, il y aura un gestionnaire d'interruption, un composant du système d'exploitation qui consigne les données associées à cette interruption jusqu'à ce qu'elle puisse être traitée.

N'importe quel type d'interruption est associée à un niveau de priorité. Les interruptions de base priorité (comme les événements du clavier) devront attendre le traitement des processus de haute priorité (comme les événements de disque dur).

C'est la capacité du système d'exploitation à savoir correctement prioriser les interruptions qui rend ce système stable et réactif. Et c'est un des gros point fort de Linux, qui font de lui la norme dans le monde des serveurs.

Une des interruptions système les plus importante est l'horloge. Elle empêche qu'un seul programme qui plante ne s'accapare l'ordinateur. A chaque fois qu'elle intervient, le système d'exploitation reprends la main et réactualise ses priorités.

# Les Contrôleurs 

## L'Idée 

En Informatique, on appelle un Contrôleur, une puce électronique qui fournit une interface entre un périphérique et une carte mère.

Par exemple votre écran doit pourvoir afficher différentes résolutions (niveau de détail de l'affichage), et cependant, certaines résolutions incorrectes pourraient l'endommager...

Le Contrôleur est là pour détecter un ordre de changer de résolution, et ne pas le transmettre à l'écran si cet ordre est invalide !

Un Contrôleur, c'est une puce électronique qui fonctionne à des vitesses comparables à celle des processeurs, mais qui sait se mettre à la vitesse de ceux qu'elle contrôle.

## Exemple Avec Un Disque Dur 

Si vous trouvez qui cette page est trop longue, Passez à la suivante (ou sautez le dialogue, pour avoir envie de la lire plus tard...). Ne lisez pas la suite et passez à la prochaine page.

(Pour les besoins de la démonstration imaginez votre disque dur comme un lecteur de disque vinyle! Il faut lever la tête de lecture avant de la déplacer sous peine de rayer le disque! Et on éteindra le moteur et on remettra la tête dur à l'origine/ sur son reposoir avant d'éteindre le moteur)

Donc:

 * Le processeur envoi une demande de lecture d'un fichier.
 * Le Contrôleur répond qu'il a comprit la requête.
 * Le Contrôleur vérifie que la tête de lecture n'est pas déjà en train de lire quelque chose ailleurs, et attend si besoin.
 * Si la tête de lecture est disponible, il va traduire la requête:
  * LÈVE LA TÊTE DE LECTURE
   * OK, c'est fait! Répond le disque.
 * Le processeur envoi une autre requête de lecture.
 * Le Contrôleur répond qu'il est trop occupé pour le moment mais qu'il le place dans sa liste des choses à faire
  * DÉPLACE LA TÊTE A CET ENDROIT
   * OK, c'est fait!
  * DESCEND LA TÊTE ET LIT
   * bla bla bla bla bla.
  * OK J'AI EU CE QUE JE VOULAIS ARRÊTE DE LIRE
 * Le contrôleur commence à envoyer les données là ou on lui a demandé.
  * RELÈVE LA TÊTE
   * OK, c'est fait!
  * DÉPLACE LA TÊTE A CET ENDROIT (on a encore du travail...)
   * ok j'y suis !
  * DESCEND LA TÊTE ET LIT
   * bla bla bla bla bla.
  * OK J'AI EU CE QUE JE VOULAIS
 * Le contrôleur commence à envoyer les données là ou on lui a demandé.
  * RELÈVE LA TÊTE
   * ok, c'est fait!
 * Le processeur signal qu'il n'a rien d'autre à demander
  * RANGE TA TÊTE A L'ORIGINE
   * ok j'y suis !
  * ÉTEINTS LE MOTEUR

Bien entendu les choses sont plus complexes, les disques durs sont un goulot d'étranglement de l'ordinateur... Et en voyant à quel point les choses deviennent embrouillées en quelques ligne, on devine l'utilité du Contrôleur!

Programmer deux composants très différents avec des vitesses de fonctionnement très différentes pour qu'ils travaillent ensemble est un casse-tête... On préfèrera fabriquer:

 * d'un coté, un disque dur qui fonctionne comme les ingénieurs des disques décident.
 * de l'autre, un processeur qui fonctionne comme les ingénieurs des processeurs décident.

Et au milieu un Contrôleur nous donnera juste le un niveau d'abstraction nécessaire pour nous simplifier la vie.

Aussi, pour la qualité et le sérieux de cette page, arrêtez désormais d'imaginer votre disque dur comme un disque vinyle! Vous remarquerez que la discussion entre le contrôleur et le processeur n'a pas de raison de changer pour autant!

Remarquez d'ailleurs qu'il pourrait bien y avoir une armée de tailleurs de pierre derrière le contrôleur... Çà ne changerai rien du point de vue du processeur!

C'est l'intérêt des **niveaux d'abstraction**. Une notion fondamentale pour la programmation des logiciels! Retenez ce terme, vous le retrouverez bientôt.

Pour charger tous ces niveaux d'abstraction, et passer du tas inerte d'électronique à l'ordinateur fonctionnel, on procède au boot. Le démarrage de l'ordinateur!

Vous êtes en principe armé pour passer à la suite....

---

|PREC: [Anatomie d'un Ordinateur](020_hardware.md) | |SUIV: [Le clavier](040_clavier.md)|
| |[Menu Principal](index.md) ||

---

