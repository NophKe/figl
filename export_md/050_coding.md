Le Codage de l'information


Le Hardware c'est le matériel qui permet de traiter de l'information. Voyons un peu comment le matériel représente **physiquement** une information **virtuelle**.

Ce qui est finalement toute la sorcellerie du truc...

# La Mauvaise idée: l'analogique 

On parle d'analogique quand une information est représenté par une valeur physique qui peut prendre des valeurs continues...

Sur un vinyle, la hauteur des creux et des bosses sur le sillon, c'est la musique. Véritablement, je veux dire. Il y a corrélation entre la fréquence des creux et la note. Et ainsi, toutes les valeurs sont permises. Dans le monde de l'analogique, il existe une infinité de valeurs entre un et deux....Le monde du continu c'est notre bon vieux monde physique, tout y est fragile. Et chaque lecture du vinyle l'abime peu à peu.

En informatique, on veut que les valeurs soient toujours exactes! L'informatique n'est pas une discipline du monde physique. C'est une discipline de l'information. Faire passer un courant électrique variable sur le port d'un périphérique pour représenter différentes valeurs n'est pas viable.

Si l'on veut qu'un ordinateur soit prédictif, il faut que ce dernier puisse utiliser ses algorithme sur des données qui ne sont pas analogiques. Le codage de certaines informations *(comme oui et non, vrai et faux)* ne peuvent pas toujours être continues.

En effet, comment interpréter une valeur à mi chemin? Si mon clavier possède trois touches, à quoi correspond une intensité de 2,5? Est-ce 2? Est-ce que c'est 3 qu'il faut comprendre?

Vous ne voudriez pas d'un clavier qui se trompe!

> « - Monsieur votre machine de vote électronique n'a que trois touches ! GAUCHE  , DROITE , et INSOUMISSION CITOYENNE! J'ai appuyé sur INSOUMISSION CITOYENNE et ça a quand même voté pour DROITE ! »
> « - Oui mais vous savez.... Ce n'est pas par ce qu'il n'y a que trois touches que c'est infaillible à tous les coups...»

# Un Clavier à trois touches 

Comme nous l'avons vu au paragraphe précédent, en informatique, nous codons les informations sous forme de données binaires ( qui ne peuvent prendre que deux valeurs 0 ou 1, vrai ou faux....). Une unique information binaire est un BIT d'information. Un bit est l'unité minimum du codage de l'information.

Le Bit c'est la décimale du binaire! ( Binary Digit )

Donc on y va pour un clavier à trois touches... Mais d'abord commençons petit.!

Vous vous rappelez de ce qu'est un bus ?

## Un clavier à une touche 

En informatique, on veut que les valeurs soient toujours exactes! Sur un unique fil, les valeurs ne peuvent être que:

 * **OUI** (ou UN): le courant passe
 * **NON** (ou ZÉRO): le courant ne passe pas.

Prenons maintenant le cas très simple d'un clavier qui n'aurait qu'une unique touche. Celui-ci ne posséderait donc que deux positions: «touche appuyées » et « touche pas appuyée ». Ce clavier fonctionnerait donc comme une sorte d'interrupteur à deux positions, et un bus de un bit nous suffirait pour recueillir l'information qui proviendrai de ce clavier.

Oui mais un fil d'entrée de l'interrupteur et un fil à sa sortie, donc deux fils! Oui mais mais **non**! On a déjà dit dans le matériel qu'un  bus c'est un port débarrassé de toute considération matérielle.

Plutôt que de parler de fil qui laisse ou non passer le courant, on dira plus simplement qu'un **bus** avec un seul fil d'information est un bus de un **BIT**.

C'est pour cela que l'on parle de données binaires. Cela signifie qu'elle ne peuvent prendre que deux valeurs par bit d'information.

## La Représentation Binaire 

Si nous voulons cette fois créer ci un clavier avec trois touches, A, B, et C, nous pourrions le faire avec un bus de trois bits.

|PREMIER FIL |SECOND FIL |TROISIÈME |VALEUR BINAIRE |TOUCHE CLAVIER|
|0 |0 |0 |000 |aucune|
|0 |0 |1 |001 |A|
|0 |1 |0 |010 |B|
|1 |0 |1 |100 |C|

Nous pourrions d'ailleurs ajouter autant de fil que nécessaires pour que chaque touche aie son propre fil distinctif, mais cela ne serait pas vraiment pratique car cela finirait par faire pas mal de fils...

Si nous voulons cette fois créer un clavier avec trois touches, A, B, et C avec un bus de deux bits.

|PREMIER FIL |SECOND FIL |VALEUR BINAIRE |TOUCHE CLAVIER|
|0 |0 |00 |aucune appuyée|
|0 |1 |01 |A|
|1 |0 |10 |B|
|1 |1 |11 |C|

Mais la deuxième solution n'est pas forcément la meilleure... Supposons que je veux créer une combinaison de touche, telle que si j'appuie sur A et B en même temps que cette touche ce soient les lettres minuscule au lieu des majuscules.

Il me suffit de remplacer ma lettre C par shift !

|PREMIER FIL |SECOND FIL |TROISIÈME |VALEUR BINAIRE |TOUCHE CLAVIER|
|0 |0 |0 |000 |aucune|
|0 |0 |1 |001 |A|
|0 |1 |0 |010 |B|
|1 |0 |0 |100 |shift|
|1 |0 |1 |101 |a|
|1 |1 |0 |110 |b|

On voit que si l'on s'intéresse uniquement à la partie de droite (les deux derniers bits), on sait de quelle lettre il s'agit. Mais l'on est insensible à sa casse. ( On ne sait pas si c'est une majuscule ou une minuscule )

## Un peu de Maths et de notations 

Bon, maintenant, réfléchissons un instant à cette question: combien de valeurs différentes un bus de UN bit peut-il prendre? La réponse est simple soit 0 soit 1. Donc deux valeurs différentes.

Autre question: combien de valeurs différentes un bus de QUATRE bits peut-il prendre? La réponse est simple, seize! ( 0000 / 0001 / 0010 / 0011 / 0100 / 0101 / 0110 / 0111 / 1000 / 1001 / 1010 / 1011 / 1100 / 1101 / 1110 / 1111 ).

Alors on s'est mis à utiliser la base seize...

Le principe est simple en décimal, arrivé au NEUF ( 9 ), on a plus de symbole disponible, alors on note DIX ( 10 ) sur deux symboles.

En binaire on fait pareil, arrivé à UN ( 1 ), on commence à écrire avec deux symboles, et on note DEUX ( 10 ), puis TROIS ( 11 )...

Donc en hexadécimal, c'est pareil avec seize symboles... Le  A symbolise le dix, B pour le onze.... F pour quinze.

« Il n'y a que 10 catégories des personnes sur Terre:

 * Ceux qui lisent le binaire
 * Et les autres...»

---

Plus sérieusement. A partir de maintenant, on mettra toujours:

 * 0x avant un nombre en hexadécimal
 * bx avant un nombre écrit en binaire

Ainsi on ne se trompera pas entre 0x10 (SEIZE) et 10 (DIX) et bx10 (DEUX)...

---

# Les unités de l'informatique 

Comme le bit est une unité de base, on s'est très vite mis à utiliser ses multiples. Ainsi, 8 bits est un OCTET.

Pourquoi huit et pas dix? Je ne rentre pas là dedans, cela date de la préhistoire de l’informatique, à l'époque ils utilisaient des claviers à huit touches pour les cartes perforées... Mais notons que huit bits binaires peuvent être représentés par un hexadécimal à deux chiffre.... Ce qui est encore à peu près humainement manipulable comme notation...

Attention:

: un bit (abrégé b minuscule)
Se prononce «bite» est l'unité de base qui code une information binaire ( un zéro ou un un )
: un Byte (abrégé B majuscule)
est la traduction en anglais d'un octet (et se prononce bayte)

: un octet (abrégé o)
vaut huit bits

C'était les unités de la préhistoire, et personne n'avait rien à y redire...

## Les multiples de l'octet 

Dernière question: combien de valeurs différentes un bus de DIX bits peut-il prendre? La réponse est simple, mille vingt-quatre! (c'est la que l'on s'est fait avoir par le vendeur...)

Une adresse écrite sur dix bits peut prendre mille vingt-quatre valeurs différentes. C'est une valeur qui nous parle à nous qui sommes habitué à compter en décimal.

Comme pour les autres unités de la vie courante, on se mit très vite à parler de «Kilo-octets». Mais attention, c'est assez trompeur car ce ne sont pas des kilos qui valent mille! Ce sont des kilos qui valent mille vingt-quatre!

La convention ( bien qu'elle ne soit pas vraiment respectée par tous ) demande d'utiliser les unités ainsi:

: Une « mille-vingt-quatraine » d'octet
c'est aussi un Kilo-octet ( abrégé Kio en français et KiB en anglais)

Remarquez bien le petit « i » dans l'unité abrégée.

 * Un méga-octet (Mio) est mille-vingt-quatre kilo-octets (Kio)
 * Un giga-octet (Gio) est mille-vingt-quatre méga-octets (Mio)

## L'Arnaque des vendeurs 

Les vendeurs de disques durs, on très vite compris qu'ils avaient cependant intérêt à ne pas utiliser des kilos de quatre-vingt-quatre... Ils utilisent des kilos qui valent mille pour que les capacités de leur disques paraissent plus impressionnantes. C'est pour cette raison que lors ce que vous achetez une clef USB, sa capacité est souvent inférieure à celle qui était annoncée sur l’emballage....

Et plus on va avancer dans les multiples, pire ce sera!

: Un millier d'octet
est aussi un Kilo-octet en français ( abrégé Ko et KB en anglais )

 * Un méga-octet (Mo) est mille kilo-octets (Ko)
 * Un giga-octet (Go) est mille méga-octets (Mo)

 * Remarquez l'absence du petit  « i » !

D'autres vendeurs jouent sur la parenté entre bit et Byte (octet en anglais) pour parler de débits en bits/seconde et mégabits/seconde (Mbit/s) plutôt que de Kilo-octet/seconde !

---

| PREC: [Le clavier](040_clavier.md) |  | SUIV: [Le Boot](060_boot.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal index.md] |  |

---

