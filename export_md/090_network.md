# Le réseau


## Internet 

Internet, c'est une technologie qui permet de connecter **physiquement** autant de petits réseaux d'ordinateurs que l'on veut *ou presque* à l'intérieur d'un réseau global.

Pour communiquer entre eux par Internet, tous les ordinateurs connectés doivent communiquer selon des protocoles de communication qui leur sont communs. C'est ce que l'on va voir par la suite.

Internet repose donc sur un certain nombre de standards technologiques, ce que ce soient des protocoles de communication, des spécification matériels, ou autre pour rendre cette interconnexion possible.

On commet de nombreux, abus de langage dans le domaine. Ce que l'on appelle communément Internet, le net, c'est souvent le web (qui est un ensemble de technologie qui permet de surfer de pages en pages à travers Interne)

Mais de nombreuses application comme les emails, le partage de fichier (ftp), et bien d'autres sont tout à fait possible sur un réseau local, sans accès à internet.

## IP, TCP et UDP 

Tcp et ip sont les protocoles élémentaires de tous les réseaux. Udp est surtout utile sur Internet et doit être connu pour savoir régler un pare-feu.

### Ip 

Ip c'est l'Internet Protocole. Du coup c'est le standard *de facto* de tous les réseaux.

Il permet d'identifier chacune des machines du réseau comme une machine unique en lui attribuant une adresse unique. C'est l'**adresse ip**.

Il permet aussi la mise en place de routeur. Qui sont des nœuds sur lesquels on connecte des sous-réseaux.

Sur un sous réseau chaque machine possède une adresse ip qui lui est propre, mais ce réseau est vu de l'extérieur comme une seule adresse ip.

Ainsi chez vous se trouve une probablement une "box" qui est le routeur d'un sous-réseau sur lequel sont connectés les ordinateurs/tablettes/téléphones que vous avez chez vous.

Cette box est en fait, un modem **+** un routeur. Ainsi vos appareils sont sur un sous-réseau local (chez vous), et il possèdent tous une adresse locale unique, mais partagent tous la même adresse vu de l'Internet.

### Tcp 

Ip est donc un protocole rudimentaire mais qui permet que chaque ordinateur puisse communiquer avec n'importe quel autre, mais Ip ne nous certifie pas que les données reçues sont arrivées ni dans l'ordre ni que l'on a tout reçu en bonne qualité, ni que ce que l'on a envoyé a bien été reçu.

Ip permet ce qu'on appelle un échange de "paquets de données". Tcp est le protocole qui nous permet d'insérer à ces paquets une date, un contrôle de l'intégrité des données, et un accusé de réception...

Tcp établie une connexion entre deux adresse ip, et c'est à l'intérieur de cette connexion de les paquets ip prennent leur sens les uns par rapport aux autres.

### Udp 

Il fait en comme tcp, mais sans l'accusé de réception et une méthode de contrôle de l'intégrité de données plus souple.

L'exemple mille fois donné, c'est les balles de mitrailleuse dans les jeux en ligne. Si une d'entre elle est perdu c'est n'est pas grave... Le paquet s'auto-détruira de lui même... Mais si les balles arrive avec trop de retard (on parle de lag), le jeu est injouable.

Udp est donc moins fiable mais plus rapide que Tcp.

## Dhcp 

C'est le « Dynamic Host Configuration Protocol ». Pour faire simple (car il n'y a pas de raison!), c'est un protocole qui permet à chacun des ordinateurs d'un réseau de se faire attribuer automatiquement une adresse ip.

### L'adresse MAC 

Une adresse MAC unique est attribuée à chacune des carte réseau vendue sur Terre depuis *(je ne trouve plus la date)* grâce à une technique que les vendeurs de carte réseau ont tous adoptée.

Il existe des logiciels qui permettent de changer d'adresse MAC pour ceux qui tiennent à leur anonymat. En effet, de la même façon qu'il est possible surveiller les activités d'une adresse ip , il est techniquement plus difficile mais néanmoins possible de surveiller une adresse MAC...

Edward Snowden a notamment fait des révélations pour ce qui est de la N.S.A, mais c'est pas valable que pour cette dernière étant donné que vous divulguez votre adresse MAC à chaque connexion réseau. (pensez à tous ces réseaux de supermarché, les MacDonald's, etc... qui demandent votre nom ou votre adresse mail pour vous autoriser la connexion)

### Le principe 

Ainsi, votre ordinateur quand il détecte une nouvelle connexion à un réseau, signale publiquement son adresse MAC et demande publiquement s'il n'y a pas de service dhcp qui traine dans le coin.

Ensuite, le serveur dhcp (ou le routeur, ou la box, ou MacDo) envoie publiquement un paquet contenant l'adresse MAC de votre carte réseau et votre nouvelle adresse ip.

Le serveur nous envoi également un masque de sous-réseau. Sans rentrer dans les détails, sachez que c'est comme l'indicatif téléphonique (çà simplifie les adresses en local, mais çà impose des préfixes pour sortir d'un réseau)

Et enfin! Nous recevons éventuellement une adresse de serveur dns (c'est la suite)

## Dns 

Le Domain Name Système, le système de noms de domaine, permet de ne pas connaitre les adresses ip de tous les serveurs que vous utilisez.

Ainsi quand vous tapez une adresse web du style http://www.DesGrosLolos.biz ce qui se passe c'est que vous envoyez une requete à votre serveur dns auquel vous êtes connecté, et ce dernier traduit [www.desgroslolos.biz](http://www.desgroslolos.biz) zn une adresse ip (genre 91.198.174.192, d'ailleurs tapez 91.198.174.192, dans votre navigateur internet, vous verrez que çà marchera!)

### Le choix du dns 

Si vous ne spécifiez pas de serveur dns à votre ordinateur, il utilisera celui qui sera proposé par le serveur dhcp. Souvent ce sera alors celui de votre fournisseur d'accès à internet. Mais si vous n'êtes pas chez vous, alors difficile de savoir qui ce sera.

Sachant que le serveur dns sera au courant de toutes les adresses que vous consulterez, il parait légitime de vouloir avoir confiance en votre serveur dns.

Il existe de nombreux serveurs dns dont certains filtrent le contenu sexuel, ou frauduleux, d'autres défendent l'anonymat, ou un internet sans censure.... chacun trouvera midi à sa porte. En cas de besoin ou de panne les serveurs de Google (8.8.4.4 et 8.8.8.8) sont rapides et faciles à mémoriser.

Le choix du dns se fait très simplement en éditant le fichier texte `/etc/resolv.conf`

Nous y reviendrons dans la partie sur les fichiers de configuration.

### Le fichier /etc/hosts 

S'il y a un autre fichier texte bien pratique c'est celui-ci. Il nous permet des définir depuis notre propre ordinateur. Par exemple, supposons que vous aimiez bien le moteur de recherche [www.DuckDuckGo.com](http://www.DuckDuckGo.com) mais que vous trouvez son adresse trop longue.... Alors vous trouvez l'adresse ip de DuckDuckGo (46.51.197.89) et vous editez ainsi votre `/etc/hosts`

     46.51.197.89 www.DuckDuckGo.com DuckDuckGo.com duck.go z

Syntaxe facile: une adresse par ligne suivie d'un espace et d'une ou plusieurs adresses.

Alors votre ordinateur se connectera directement à DuckDuckGo sans passer par le serveur dns, et ce que vous tapiez `duckduckgo.com` dans la barre d'adresse de votre navigateur, mais pareil si vous tapez `duck.go`, ou même juste `z`.

Dans la pratique si votre navigateur ne voit pas de .com, .org ou autre lancera probablement une recherche web au lieu de lancer le site et vous devrez entrer `http://z`.

Et de même qu'il vous dira surement que le certificat de validité du site n'est valable que pour DuckDuckGo... Avertissement que vous pouvez ignorer...

Autre Exemple avec *l'adresse poubelle* qui nous permet d'ignorer complètement une adresse

    0.0.0.0 analytic-google.com
    0.0.0.0 www.analytic-google.com www-google-analytics.l.google.com mimageads.googleadservices.com
    0.0.0.0 mpartner.googleadservices.com pagead1.googlesyndication.com pagead2.googlesyndication.com
    0.0.0.0 pagead3.googlesyndication.com pagead.googlesyndication.com partner.googleadservices.com
    0.0.0.0 tpc.googlesyndication.com www.googleadservices.com googleads4.g.doubleclick.net
    0.0.0.0 pagead-googlehosted.l.google.com video-ad-stats.googlesyndication.com
    0.0.0.0 analytics-api-samples.googlecode.com google-analytics.com ssl.google-analytics.com 
    0.0.0.0 www.google-analytics.com
    0.0.0.0 4.afs.googleadservices.com pagead2.googleadservices.com partner.googleadservices.com
    0.0.0.0 domains.googlesyndication.com analytics.google.com clientmetrics-pa.googleapis.com
    0.0.0.0 googleadservices.com googlesyndication.com pagead.l.google.com partnerad.l.google.com

A la différence d'un Adblock ou autre qui ne fonctionne que pour votre navigateur internet, le fichier `/etc/hosts` s'applique à la totalité du système d'exploitation, et à tous vos programmes. L'exemple ci-dessus rendra donc tout votre l'ordinateur incapable d'accéder aux publicités de google et incapable de communiquer avec leur système de collecte de données.

On peut trouver des fichier `/etc/hosts` déja bien fournis, que ce soit pour éviter le dns, pour créer de raccourcis d'adresse, ou pour réaliser un filtre parental, c'est efficace et rapide, car c'est géré en direct par le système d'exploitation et aucun programme ne peut passer outre.

## Http 

La grande idée qui a lancé l'Internet grand public, c'est le web!

Et le web, c'est la réunion de trois choses:

 * Http: Un protocole de communication qui permet l'échange de documents notamment html
 * Html: Un format de document qui permet d'insérer des liens hypertexte
 * Les adresse web...

[![](img/Protocol_Suite.png)](https://fr.wikipedia.org/wiki/Suite_des_protocoles_Internet)

|La suite des protocoles qui contribuent au http ( credit Wikipedia )|

### Html, HyperText Markup Langage 

Quand vous entrez le nom d'un site web, le dns vous envoi une adresse ip à laquelle joindre le serveur. Puis votre ordinateur établit une connexion tcp/ip avec le serveur web.

Une fois ces formalités réalisées, votre navigateur reçoit une page web dans écrite dans un langage qui se nomme le html (ou un de ses descendants: htm xhtml xht...)

Le html est un format bien pratique il permet d'écrire des documents semblables à ceux que vous créeriez avec votre traitement de texte, c'est à dire avec une mise en page, des couleurs, différentes polices de caractères.

Mais il permet aussi d'inclure des d'autres "ressources" disponible sur le web (des images, vidéos, et même des programmes!).

Et enfin, il permet d'insérer des liens hypertextes sur lesquels on clique pour accéder à d'autres pages web, ou d'autres ressources disponibles sur le web, mais pas seulement.

C'est ce que l'on nomme un langage de balises *markup*, ceux-ci fonctionne un petit peu à la façon des caractères d'échappement que l'on verra plus tard.

Une page html est un fichier texte interprété par un navigateur Internet en fonction de balises. Ainsi, si le navigateur voit le texte suivant:

    Hello World !
    

Il affiche:

Hello World !

Mais s'il lit ceci:

    
    <u> <b> Hello </b> <i> World  </i> </u> sans fioriture...

Il affichera:
__ ** Hello ** // world // __ sans fioriture

Les parties entre crochets sont les balises, ainsi:

: **<u>		</u>**
Tout ce qui est entre ces deux balises est souligné *(underlined)*
: **<b>		</i>**
Tout ce qui est entre ces deux balises est en gras
: **<i>		</i>**
Tout ce qui est entre ces deux balises est en italique

==Les adresses web==

Simplifié à l'extrême une adresse web c'est!


|Un protocole |:// |un_serveur_internet |une_resource_d_internet|

Par exemple:

|http |:/ |/gnu.org |/home.fr.html|

La grande force du web, c'est d'avoir été conçu sans hiérarchie, sans annuaire, et sans contraintes... Personne n'impose à personne d'organiser son site en aucune façon.

Vous pouvez connaitre l'adresse d'une ressource, ou sinon, de liens en liens, on finit par tout retrouver. (Ce coté bordélique a d'ailleurs fait la fortune des moteurs de recherche...)

Et l'on peut ainsi se balader de lien en lien tant que le protocole (le début de l'adresse) est géré par le navigateur, et tant que la ressource est une page html.

Si la ressource n'est pas une page html, le navigateur essaiera de la lire avec ses plugin, ou avec les programmes disponibles sur votre ordinateur. Si votre ordinateur ne possède pas de programme pour afficher/gérer cette ressource, le navigateur vous proposera de la télécharger.

### Http dans tous çà? 

Et bien pas tant que çà en fait...

C'est un protocole de transfert de données, il ne fait en ce sens pas beaucoup plus que ce que ferait d'autres protocoles de transfert de fichier (s'informer sur une ressource, la télécharger, vérifier son intégrité...)

Cependant il indique au trois choses au serveur de la ressource:

#### 1/ Le site web 

Le premier est le seul indispensable auquel on demande la ressource (des fois il y a plusieurs sites sur une seule adresse ip)

#### 2/ Le Referer 

Cette section indique le document dans lequel se trouvait le lien vers la ressource que vous demandez actuellement.

Remarque: Cela signifie que même les tous les sites (même ceux qui ne cherchent pas à vous suivre) savent toujours d'où vous arrivez.... À moins de régler votre navigateur pour ne pas le faire (parfois il faut ruser pour y arriver, pour Firefox ou chrome, le plus simple est passer par des extensions)

#### 3/ Le User Agent 

Dans cette section les navigateurs vont indiquer votre langue, votre matériel, et plein d'autres détails qui permettrons de vous offrir une expérience *personnalisée*.

Même remarque que précédemment, il est parfois plus simple de changer de navigateur que de vouloir l'empêcher de frimer.

---

| PREC: [Le Logiciel](080_software.md) |  | SUIV: [Unix...](100_unix.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |

---

