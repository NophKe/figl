<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Le Boot</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Le Boot</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#boot">L'art d'enfiler ses chaussure</A>
  <LI><A HREF="#bios">Le Micrologiciel</A>
  <LI><A HREF="#kernel">Le rôle du noyau</A>
  <LI><A HREF="#grub">Le Chargeur de Démarrage</A>
  <LI><A HREF="#init">Le Gestionnaire d'initialisation</A>
    <UL>
    <LI><A HREF="#toc6">Init</A>
    <LI><A HREF="#systemd">Systemd</A>
      <UL>
      <LI><A HREF="#service">Les Services</A>
      <LI><A HREF="#target">Les Targets</A>
      <LI><A HREF="#target">Les Sockets</A>
      </UL>
    </UL>
  </UL>

</DIV>

<A NAME="boot"></A>
<H1>L'art d'enfiler ses chaussure</H1>

<P>
L'ordinateur est mis sous-tension, il s'allume! Dans une <B>puce électronique</B>, un programme (appelé le micro-logiciel) analyse l'ordinateur, trouve le/les disques durs, lit le disque qui sera désigné comme disque de boot, et trouve un autre programme inscrit sur ce disque. Ce dernier, sur le disque, se nomme <B>le gestionnaire de démarrage</B>.
</P>
<P>
Le gestionnaire de démarrage (suivant comment il est configuré) vous propose un (ou plusieurs) noyaux, et un (ou plusieurs) système d'exploitation, voir encore une (ou plusieurs) options. Dans tous les cas, il lui faut charger le noyau d'un système d'exploitation.
</P>
<P>
Le noyau d'un système d'exploitation, c'est le programme qui sait communiquer avec le matériel qui constitue l'ordinateur. Le noyau n'est pas l'interface avec laquelle interagit l'utilisateur.
</P>
<P>
Le noyau met en place un environnement dont le but n'est que de masquer les détails techniques de l'architecture matérielle en place. C'est grâce à cet environnement que le couple programme et système d'exploitation s'épanouit. Un programme qui fonctionne sur un système d'exploitation fonctionnera toujours sur ce système d'exploitation quelque soit la machine sur laquelle est installé ce système d'exploitation (si c'est bien la même version).
</P>
<P>
C'est à l'intérieur de l'environnement créé par le noyau qu'on lance différents programmes pour réaliser différents services dont on aura besoin sur l'ordinateur. Le premier programme que lance le noyau est le gestionnaire d'initialisation qui va donc lire les fichiers de configuration à sa disposition, et lancer différents programmes nécessaires au fonctionnement de la machine.
</P>
<P>
Différents types de programmes vont donc démarrer, certains vont effectuer une simple action et se fermer d'eux-mêmes. Par exemple, à chaque démarrage Linux vérifie l'intégrité de vos disques durs avec l'aide du programme <CODE>fsck</CODE>. S'il ne trouve pas de problème particulier, ce programme se ferme, et le démarrage continu.
</P>
<P>
D'autres programmes vont lancer leur initialisation, et éventuellement rester en tache de fond. C'est ce que l'on appelle les services, les services servent à plein de choses, un exemple simple pour s'en rendre compte et de penser à la clé USB que vous insérez dans votre ordinateur. Il faut bien qu'il y ait un programme en tache de fond qui scrute l'insertion d'une clé USB si vous voulez qu'il se passe quelque chose quand vous en insérez une.
</P>
<P>
Le dernier programme que lancera le gestionnaire d'initialisation sera le gestionnaire de connexion. C'est ce programme qui vous demande d'entrer votre mot de passe utilisateur lorsque vous connectez. Vous entrez donc votre nom d'utilisateur, votre mot de passe. Et vous obtenez l'interface utilisateur qui est le dernier programme qui sera lancé automatiquement.
</P>
<P>
L'ordinateur est initialisé, c'est au tour de l'utilisateur de continuer. Il peut lancer des programmes, et ajouter des services.
</P>
<P>
Réussir tout cela, et dans le bon ordre, c'est comme enfiler ses chaussure! Faut mettre la bonne au bonne endroit, les enfiler, les lacer! Ce processus en anglais, c'est le bootstrapping, boot signifiant chaussure.
</P>
<P>
Aussi démarrer un ordinateur, c'est <I>booter</I>! (En bon fraçais ...)
</P>

<A NAME="bios"></A>
<H1>Le Micrologiciel</H1>

<HR NOSHADE SIZE=1>

<P>
On parle rarement de micro-logiciel, (et quelque soit son genre), on dira souvent BIOS par abus de langage. J'essaierai de ne pas trop le faire dans ce qui suit.
</P>

<HR NOSHADE SIZE=1>

<P>
Lorsque matériellement vous allumez votre ordinateur, le micro-logiciel se charge de reconnaître la configuration matérielle de votre ordinateur. Il détecte s'il y a des disques durs de brancher, quelle est la quantité de mémoire quel est le type de processeur....
</P>
<P>
Ce premier programme c'est soit:
</P>

<UL>
<LI>soit un BIOS ( → Basic Input Output System / Le système élémentaire des entrées et sorties).
<LI>soit un UEFI ( → Unified Extensible Firmware Interface / Interface Matérielle Extensible Unifiée).
</UL>

<P>
Une interface de configuration du BIOS/UEFI, peut-être lancé en appuyant sur une touche (généralement F2) lors des premières secondes du démarrage de l'ordinateur.
</P>
<P>
<A HREF="https://fr.wikipedia.org/wiki/Basic_Input_Output_System"><IMG ALIGN="middle" SRC="img/bios.png" BORDER="0" ALT=""></A>
</P>

<TABLE ALIGN="center">
<TR>
<TD>Interface de configuration du bios ( credit Wikipedia)</TD>
</TR>
</TABLE>

<P>
Comme, un ordinateur sans un programme n'est qu'un inerte tas d'électronique. Les instructions de démarrage sont inscrites à l'intérieur du micro-logiciel qui va rechercher à un emplacement déterminé, le bon programme. <I>(cet emplacement, c'est la table des partitions)</I>.
</P>
<P>
Dans cette table, le micro-logiciel recherche l'adresse d'un programme appelé boot loader, le chargeur de démarrage. Une fois que le chargeur de démarrage est placé dans la mémoire et démarré, celui-ci charge le véritable système d'exploitation.
</P>
<P>
Pourquoi le micro-logiciel ne charge t il pas directement le système d'exploitation? La table des partition MBR est un standard vieux de trente ans et ce genre de table des partition ne nous permet pas de faire mieux que d'indiquer une adresse. Il n'y a pas la place d'y inscrire un programme entier.
</P>
<P>
L'UEFI est une variante plus moderne qui permet de préciser à quel endroit du disque dur trouver le noyau à lancer. Ainsi, on peut enregistrer <I>dans le réglage du micro-logiciel</I> plusieurs systèmes d'exploitations et choisir lequel démarrer par défaut.... Cela permet donc de se passer de chargeur de démarrage!
</P>
<P>
Dans le monde réel, quand le micro-logiciel lance un chargeur de démarrage, ce dernier vous propose en général, une interface de (configuration/choix du système d'exploitation à booter), plus puissante, et plus agréable à utiliser et paramétrer. Ainsi, on peut vouloir laisser une entrée de secours dans le micro-logiciel, et installer quand même un chargeur de démarrage.
</P>
<P>
C'est même recommandé si vous avez des doutes, et que vous voulez pouvoir trafiquer les options du noyau facilement.
</P>
<P>
Pour fonctionner l'Uefi réclame une partition à lui formatée en format fat32 que l'on appelle la partition <B>EFI</B>. <I>(sans u)</I>
</P>

<A NAME="kernel"></A>
<H1>Le rôle du noyau</H1>

<P>
Si votre ordinateur sait se débrouiller à peu près avec vos différents périphériques, C'est par ce qu'il existe des interfaces de contrôles élémentaires entre les différents composants. Ainsi dès que vous mettez sous tension votre ordinateur, celui ci sait utiliser l'écran, par exemple. Vous remarquerez cependant que lors des premières phases du boot, l'écran n'affiche que du texte, ou une image en seize couleurs... Pourquoi? Les contrôleurs savent se mettre à disposition pour les opérations de base (Vesa par exemple est un standard de contrôleur graphique)...  Mais il faut connaitre intimement le contrôleur pour aller plus loin.
</P>
<P>
Le micro-logiciel fournit une interface de base pour la communication entre les périphériques, mais celle ci est très limitée, et le noyau Linux fait tout pour éviter d'en avoir besoin. Dans la pratique au contraire le noyau possède tout un tas de petits bouts de programmes (que l'on appelle des drivers sous Windows, et pilotes ou modules sous Linux) qui sont là pour l'aider reconnaitre et à tirer un plein profit des possibilité de chaque matériel.
</P>
<P>
À la suite du boot avant que vous n'ayez lancé le programme, vous pouvez imaginer votre ordinateur comme contenant un zoo de processus qui attendent tous d'avoir quelque chose à faire. Ils attendent tous des événements. Un événement peut être le fait que vous appuyez sur une touche, ou que vous bougez la souris. Voir même que votre machine soit connectée à un réseau, et qu'un certain paquet de données arrive de celui-ci.
</P>
<P>
Le noyau est un de ces processus. Mais il est spécial, car il contrôle ce que les autres processus utilisateurs effectuent, et il est normalement le seul processus autorisé à avoir un accès direct avec le matériel. Ainsi comme toutes les entrées sorties passent par lui, il peut planifier les opérations et empêcher que différents processus ne se gênent mutuellement.
</P>
<P>
Cependant certains processus sont autorisés à contourner cela, généralement en leur confiant un accès direct à un bus (l'audio professionnelle pour les temps de latence, et la carte graphique pour le jeux et les vidéos)
</P>
<P>
En fait, les processus utilisateurs, doivent faire une requête au noyau quand ils veulent obtenir les événements relatifs à votre clavier, afficher à l'écran, lire et écrire les disques, ou juste faire n'importe quoi d'autre que de balancer des bits dans la mémoire. Ces requêtes sont connues aussi le nom de system calls (appel systèmes).
</P>

<A NAME="grub"></A>
<H1>Le Chargeur de Démarrage</H1>

<P>
Le micro-logiciel, recherche à un emplacement déterminé qu'on appelle la table de partitions. Cette dernière est une section du disque dur située immédiatement à son début. La table des partitions est normalisée, elle indique l'adresse du disque ou trouver le chargeur de démarrage.
</P>
<P>
Ce programme spécial (appelé le boot loader, le chargeur de démarrage) est placé dans la mémoire et démarré.
</P>
<P>
C'est lui qui charge le véritable système d'exploitation. Il réalise cela en cherchant un noyau, il le charge dans la mémoire, et le démarre.
</P>
<P>
Grub et le chargeur de démarrage le plus connu de l'univers Linux, mais il n'est pas le seul. De nos jours le rôle du chargeur de démarrage n'est plus aussi fondamental, grâce aux progrès des micro-logiciel basés sur l'UEFI. En effet, ces derniers sont capables de charger directement le noyau du système d'exploitation en mémoire.
</P>
<P>
Dans la pratique, un chargeur de démarrage est souvent plus simple à configurer que le micro-logiciel, et offre une interface utilisateur conviviale lors du boot <I>(pour sélectionner un système d'exploitation, ou modifier des options données au noyau)</I>.
</P>
<P>
Sachant alors que de nos jours, les besoin de ressources d'un chargeur de démarrage sont faibles (une voir deux secondes lors du boot, et quelques mégaoctets d'espace disque), par commodité, on en installe un.
</P>

<A NAME="init"></A>
<H1>Le Gestionnaire d'initialisation</H1>

<A NAME="toc6"></A>
<H2>Init</H2>

<P>
Une fois le noyau chargé, celui-ci démarre le programme <CODE>init</CODE> qui est le premier logiciel à être lancé après le noyau. Ce sera son travail que de terminer le boot jusqu'au login de l'utilisateur.
</P>
<P>
Il va se charger de lire les fichier de configuration. Il va rechercher les périphériques en place sur votre ordinateur. Il va monter les disques, lancer le serveur X. Bref, il va prendre soin de tout, jusqu'à ce que vous puissiez tranquillement entrer votre mot de passe et commencer à utiliser votre machine.
</P>
<P>
Et là encore, <CODE>init</CODE> ne va pas disparaitre, il restera en tache de fond, et sera le processus père de tous les autres... Le Tuer revient à arrêter le système (mais nous reviendrons là dessus). Il va ainsi rester en tâche de fond, et prendre soins de différents <I>services</I>.
</P>

<A NAME="systemd"></A>
<H2>Systemd</H2>

<P>
Init est le nom historique de ce programme, mais il existe de nombreux gestionnaire d'initialisation. Comme cependant, il ne peut y avoir qu'un seul gestionnaire d'initialisation par système d'exploitation, ce programme se placera toujours en <CODE>/bin/init</CODE>.
</P>
<P>
Je parlerai par la suite de Systemd car c'est le gestionnaire d'initialisation le plus courant. <I>(les spécialistes vont me clouer au pilori...)</I>
</P>

<A NAME="service"></A>
<H3>Les Services</H3>

<P>
Une fois que Systemd s'est initialisé lui même, il va lire ses différents fichiers de configuration, et, grâce à ces derniers, va lancer les différents services qui sont actifs sur la machine. Les services sont de programmes qui ont une tache précise et qui fournissent des interfaces pour faciliter ces dernières.
</P>
<P>
Les services qui font le mieux leur travail sont <I>transparents</I> en ce sens que l'on ne se doute pas de leur existence... Par exemple, vous espérez certainement que lors de l'insertion d'une clef usb, le système d'exploitation la détecte et la fasse apparaitre quelque part <I>( Le Poste de travail sous Windows, ou le dossier <CODE>/media</CODE> sous Gnu-Linux ).</I>
</P>
<P>
Pour ce faire, il n'y a pas de secret, il faut qu'un programme vérifie toute les fractions de seconde si il y a eu une activité sur les ports usb de la machine! Il semble donc raisonnable d'espérer qu'un seul programme fasse cela, qu'il le fasse efficacement.
</P>
<P>
On voudra enfin que ce programme fournisse une interface pratique, afin que d'autre programme qui auraient besoin d'une ressource s'adresse au service et jamais à la ressource directement.
</P>
<P>
C'est le rôle des services, ils fournissent des couches d'abstraction qui rendent la gestion des différent programmes qui composent le système d'exploitation plus agréable... Plus <I>administrable</I>
</P>

<A NAME="target"></A>
<H3>Les Targets</H3>

<P>
Désolé pour l'anglicisme, mais cette fois ci, y'a pas mieux... (çà veut dire «cible», mais çà ne se dit pas... je crois...)
</P>
<P>
On ne peut pas, on le devine, démarrer n'importe quels services dans n'importe quel ordre... Avant  de se connecter à Internet, il faut initialiser la carte réseaux... Avant de lancer la session de l'utilisateur, il faut monter les partitions essentielles du système et régler la carte graphique. Le clavier devra être dans la bonne langue avant que l'utilisateur entre son mot de passe....
</P>
<P>
On pourrait lancer les processus les uns après les autres, mais çà ne serait pas pratique pour la maintenance car à chaque installation de programme, le programme devrait savoir se trouve sa place au milieu des autres sans mettre trop la pagaille. Et le problème de l'initialisation séquentielle c'est que quand quelque chose déconne, çà prend des plombes, à démarrer.
</P>
<P>
Bref, Systemd a supplanté ses ancêtres pour ses capacités de parallélisation (entre autres). Systemd cherche à atteindre des targets. Une target c'est un ensemble de services qui rendent un système suffisamment  cohérent pour passer à l'assaut de la target suivante.
</P>
<P>
En gros, Systemd se lance. Il découvre que la target par défaut est un gestionnaire de connexion graphique. Cette target à besoin de la target 'multi-utilisateur' qui elle même a besoin de la target 'disques et partitions locales' etc...
</P>
<P>
Puis target par target il lance tous les services nécessaire, <I>(et les services nécessaires aux services..)</I> attends que ceux ci en aient fini, et ainsi de suite jusqu'à n'avoir plus rien à faire.
</P>
<P>
Alors Systemd se range dans son coin et surveille que tout se passe bien. Parfois Systemd doit remettre l'ordre. Parfois, on demande à Systemd une nouvelle target qui peut être le redémarrage, l'arrêt, (ou autre). Mais dans tous les cas Systemd sera le dernier à quitter le navire, veillant tout arrêter dans le bon ordre.
</P>

<A NAME="target"></A>
<H3>Les Sockets</H3>

<P>
On ne peut pas encore entrer dans les sockets, car il n'y a pas lieu dans la section des fondamentaux. Il est cependant à savoir que les sockets sont les interfaces de communication des processus/programmes/services entre eux.
</P>
<P>
Il est de la responsabilité de Systemd de gérer les sockets.
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="050_coding.php">Le Codage de l'information</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="065_login.php">Le Login</A></TD>
</TR>
<TR>
<TD></TD>
<TD><A HREF="index.php">Menu Principal</A></TD>
<TD></TD>
</TR>
</TABLE>

<HR NOSHADE SIZE=5>

</DIV>
<HR NOSHADE SIZE=5>

<p>
Les champs "mail" et "pseudo" sont optionnels. Les adresses mail resterons privées.
<br/>
Je ne collecte aucune autre donnée.
<p/>

<form method="post" action="cible.php">

<p>
Mail: <input type="text" name="email" /> <br/>
Pseudo: <input type="text" name="pseudo"/> <br/>
Votre Message: 
<textarea  required placeholder="Les commentaires sont encouragés ^_^ !" name="message" rows="10" cols="90">
</textarea>

<p>

<input type="hidden" name="page" value="060">
<input type="submit" value="Valider" />
</p>

</form>


<HR NOSHADE SIZE=5>

<?php
$servername = "localhost";
$username = "id6765069_user";
$password  = "";
$database = "id6765069_commentr";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die(" Pour participer aux commentaire, merci d'activer Php..." . mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 060");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
