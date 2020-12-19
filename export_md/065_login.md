# Le Login


Les systèmes d'exploitation basés sur Unix, (comme Gnu-Linux par exemple), sont **très** sécurisables (et pas forcément tous sécurisés...). Cela provient du fait qu'Unix a (dès le début) été pensé pour qu'il puisse fonctionner comme serveur d'université, et être partagé sur un réseau, faire face à de nombreuses requêtes simultanées...etc...

Le prix à payer pour que n'importe qui ne puisse s'accaparer toutes les ressources de la machines *(ni toucher aux fichiers de son voisin, ni introduire de virus...)* a été une gestion stricte des droits de chacun des utilisateurs. Et l'obligation faite à tous les utilisateur de posséder un « compte utilisateur » sur l'ordinateur, un compte associé à un « login », et un mot de passe.

Aussi les utilisateurs n'ont pas tous les droits sur la machine, il ne peuvent pas tout faire, et il existe par exemple de nombreux fichiers qui ne leurs sont pas accessibles.
Cette gestion, accompagnée par la philosophie Unix, est une des choses qui donnent sa puissance et sa stabilité aux environnements Gnu-Linux.

## Interface texte et interface graphique 

Quoi qu'il en soit avant que l'utilisateur ne puisse démarrer des programmes.Il s'autentifie auprès du système d'exploitation à travers un programme que l'on va appeller le gestionnaire de connections. Et cela peut se passer de deux façons différents, soit à travers une interface graphique, soit à travers une interface textuelle.

Quand vous vous connectez, vous vous identifiez à l'ordinateur. Sur les Linux modernes, cela se passe généralement à travers un gestionnaire de connexion graphique. Mais il reste possible de passer sur des consoles virtuelles avec la séquence de touches  `Ctrl + Alt +F2` (ou F3, F4...), et de se connecter à travers l'interface texte.

Le shell (coquillage en anglais), l'interface en mode texte, est appelé ainsi car il englobe et cache le noyau du système d'exploitation. C'est une caractéristique importante des systèmes d'exploitation Unix et Gnu-Linux, que le shell et le noyau soient des programmes bien séparés. Ainsi il est possible d'avoir différent shells, correspondant aux gouts de chacun. Le shell et le noyau communiquent à travers un nombre limité d'appels système.

Dans ce cas, un programme *(traditionnellement `getty`)* surveille le terminal, et appelle le programme `login`. Ainsi, vous vous identifiez soit au gestionnaire de connexion graphique, soit au programme `login` au moyen de votre nom d'utilisateur et de votre mot de passe. Ce nom d'utilisateur est vérifié dans un fichier appelé `/etc/passwd` qui est une séquence de lignes décrivant chacune un compte utilisateur.

Les mots de passe sont conservés dans un autre fichier chiffré `/etc/shadow` dont les autorisations d'accès sont plus restreintes. Lorsque vous entrez votre mot de passe, celui-ci est chiffré de la même façon et le programme `login` vérifie que les deux correspondent.

La sécurité de cette méthode repose sur le fait que s'il est facile de passer du mot de passe *en clair* à la version chiffrée, l'inverse est très difficile. Ainsi, même si quelqu'un pouvait voir la version codée de votre mot de passe, ils ne pourraient pas utiliser votre compte. Cela signifie également que si vous perdez votre mot de passe, il n'est pas de moyen de le récupérer, mais seulement de le changer pour quelque chose que vous choisirez *(plus judicieusement)*.

## Utilisateurs et groupes 

Une fois que vous êtes connectés, vous obtenez tous les réglages associés avec votre compte individuel. Vous pouvez également être reconnus comme membre d'un groupe. Un groupe est le nom donné à un ensemble d'utilisateurs qui possèdent des privilèges communs. Les groupes peuvent avoir des privilèges différents des privilèges de leurs membres. Les utilisateurs peuvent être membres de plusieurs groupes.

Pour donner un exemple simple, dans une entreprise, chaque utilisateur aura les privilèges nécessaires pour accéder à ses propres fichiers, mais sûrement pas au fichier des autres utilisateurs. Cependant, le groupe comptabilité, qui contiendra tous les membres de la comptabilité, pourra avoir un dossier commun, dans lequel seront stockées un ensemble de fichiers dont l'accès sera un des privilèges du groupe comptabilité. Les membres de la direction, feront probablement parti de différents groupes, si ce n'est pas la totalité.

Remarquez que, si l'on se réfère normalement aux utilisateurs et aux groupes par leur noms, ceux-ci sont stockés en interne par des identifiants numériques:

 * Le fichier `/etc/passwd` identifie votre nom d'utilisateur à un identifiant numérique.
 * Le fichier `/etc/groups` réalise la même fonction avec les groupes.

Les informations concernant votre compte incluent aussi votre répertoire personnel, (l'endroit où vous mettrez vos fichiers personnels). Enfin, la dernière information, concerne le shell, l'interpréteur de commande, c'est-à-dire le programme de devra lancer `login` une fois toutes les vérifications effectuées.

## With great power comes great responsibility 

Il éxiste enfin un utilisateur particulier que l'on nomme le super-utilisateur, ou l'administrateur.

Cet utilisateur particulier a pour login `root`, et celui-ci possède tous les droits! **Tous!**

C'est un compte utilisateur qui est utilisé pour effectuer la maintenance du système. Il n'est pas prévu d'utiliser ce compte dans la vie courante. Le moindre virus lancé par cet utilisateur serait dévastateur... une application qui plante peut faire du mal! Aussi, démarrer une interface graphique au moyen de l'utilisateur root est le meilleur moyen de tous casser. //(je suis sérieux, je l'ai déjà fait!)

La commande `su Un_Nom_d_Utilisateur` permet de passer changer d'utilisateur.
La commande `su -` est équivalente à `su root` et permet de passer en mode root sur une console (graphique ou texte).

Le programme `sudo` permet de lancer la prochaine commande en mode super-utilisateur. Ce programme vérifiera que vous faites bien partie des utilisateur qui ont le droit de faire çà, vous demande votre mot de passe, et lance la commande comme si c'était le super-utilisateur qui l'avait fait...

Au passage, notez que certaines distribution de Gnu-Linux interdisent purement et simplement la connexion en tant que super-utilisateur (*Ubuntu*). Cependant, par défaut, les utilisateurs ont automatiquement l'accès à `sudo`, vous ne pouvez donc pas faire `su -` . La solution est alors de faire `sudo bash` pour lancer un shell avec les privilèges super-utilisateur.

Aussi ce compte ne devrait être utilisé que pour la maintenance du système.
-------------------------------------------
| PREC: [Le Boot](060_boot.md) |  | SUIV: [Une fois connecté](067_connected.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |
-------------------------------------------
