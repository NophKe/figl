<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Les Interfaces</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Les Interfaces</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#gui">Xerox, IBM, Microsoft, et Apple</A>
  <LI><A HREF="#carte">La carte perforée</A>
  <LI><A HREF="#abstr">Niveau d'abstraction</A>
  <LI><A HREF="#x">Qui est X?</A>
    <UL>
    <LI><A HREF="#x_arch">Une Architecture Client/Serveur</A>
    <LI><A HREF="#x_pb">Le problème avec X</A>
    </UL>
  <LI><A HREF="#ui">L'interface Utilisateur</A>
  <LI><A HREF="#protocol">Les Protocoles</A>
  </UL>

</DIV>
<P>
Des couches et des couches...
</P>

<A NAME="gui"></A>
<H1>Xerox, IBM, Microsoft, et Apple</H1>

<P>
Xerox a inventé la souris et l'interface graphique (entre autres)... Mais a laisser d'autres sociétés commercialiser les premières interfaces graphiques... Aujourd'hui ils fabriquent des photocopieurs.
</P>
<P>
C'est une histoire passionnante que le début de l'informatique personnelle Microsoft de son coté à lancé Windows (en <I>volant</I> une partie du travail d'Apple) mais c'est la bien Apple avec le Lisa qui a lancé le premier ordinateur doté d'une interface graphique pilotée à la souris qui fût une réussite commerciale.
</P>
<P>
Microsoft Windows dût attendre les années 90 et l'Internet pour exploser!
</P>
<P>
Avec Gnome 3 et les tiling window manager, de nombreux paradigmes de l'interface graphique sont aujourd'hui en train d'évoluer. Par exemple la nécessité d'un bureau est remise en question (<I>faut dire qu'ils devienent vite encombrés</I>), aussi certaines des interfaces graphiques modernes placent et déplacent automatiquement vos fenêtres pour mieux utiliser l'espace!
</P>
<P>
Ces évolution font que l'on utilise de plus en plus souvent le mot shell (coquille) pour parler de ces interfaces. Alors qu'un shell <I>à la base</I> c'est plutôt une interface textuelle.
</P>
<P>
Mais revenons plus à la base des interfaces....
</P>
<P>
<A HREF="https://fr.wikipedia.org/wiki/Environnement_de_bureau"><IMG ALIGN="middle" SRC="img/Gnustep.png" BORDER="0" ALT=""></A>
</P>

<TABLE ALIGN="center">
<TR>
<TD>GNUstep 1995 ( credit Wikipedia )</TD>
</TR>
</TABLE>

<A NAME="carte"></A>
<H1>La carte perforée</H1>

<P>
Il y eut une époque lointaine ou on pouvait entrer directement un programme dans l'ordinateur <B>en actionnant des boutons</B>... Mais çà c'était la préhistoire... On pouvait à cette époque <I>en direct</I> demander à la machine de faire çà et çà....
</P>
<P>
Puis les programmes sont devenus de plus en plus complexes et il fallait les stocker sur des supports de plus en plus perfectionner... Les faire collaborer parfois! Et Finalement, on a finit par écrire <B>un programmes qui était là pour lancer des programmes</B>, passer de l'un à l'autre, les faire travailler en parallèle... Le premier système d'exploitation était né.
</P>
<P>
Cette solution se trouvait être très pratique car on pouvait aussi par ce biais, faire croire à tout les programmes qu'ils étaient seul au monde. Ces derniers croient en effet avoir accès au matériel, alors que, véritablement, Ils interagissent avec un environnement spécialement créé pour eux par le système d'exploitation.
</P>
<P>
Par exemple, tous les programmes croient être seul en mémoire, et pouvoir faire ce qu'ils veulent la où ils veulent (<I>et ne se privent pas de le faire...</I>), alors qu'en vrai, le noyau du système d'exploitation se place entre les deux, et modifie toutes les instructions que donne le programme. (gérer la mémoire et mettre chacun à sa place, que personne ne se gène, c'est son boulot!)
</P>
<P>
On venait de passer d'une interface manuelle, à une interface logicielle. Depuis lors, les ordinateurs ne chargent plus des programmes écrits pour des architectures matérielles particulières.... Ils chargent un système d'exploitation, qui est écrit pour une architecture particulière. (Et qui sera écrit une bonne fois pour toutes! <I>ou presque</I>)
</P>
<P>
<A HREF="https://fr.wikipedia.org/wiki/Assembleur"><IMG ALIGN="middle" SRC="img/carte_perfo.jpg" BORDER="0" ALT=""></A>
</P>

<TABLE ALIGN="center">
<TR>
<TD>Carte perforée vierge ( credit Wikipedia )</TD>
</TR>
</TABLE>

<A NAME="abstr"></A>
<H1>Niveau d'abstraction</H1>

<P>
Ce système d'exploitation chargera ensuite des programmes qui seront écrits <B>pour un système d'exploitation particulier</B> et pas pour un matériel. Se compliquer ainsi la tâche (une bonne fois pour toutes) d'un coté, pour nous permettre de les simplifier de l'autre coté, c'est ce que l'on appelle une couche d'abstraction.
</P>
<P>
Chaque couche d'abstraction sert à manipuler la couche immédiatement en dessous. Chacune possède une interface qui nous permet de communiquer avec elle. Cette dernière est dite de bas niveau ou de haut niveau suivant qu'elle soit plus proche de la machine ou de l'homme. De la même façon qu'on a arrêté la carte perforée et les boutons, on progresse en dessinant des machines, et en écrivant des programmes avec des interfaces de plus en plus haut niveau...
</P>
	<BLOCKQUOTE>
	- Plus une interface est de <B>haut</B> niveau plus elle est sujette à des comportement imprévus, des bugs, des baisses de performance...
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	- Plus une interface est de <B>bas</B> niveau, plus elle est sujette à des erreurs humaines à l'écriture, et des difficultés humaines à la modifier, corriger, maintenir...
	</BLOCKQUOTE>
<P>
Quand, on développe, et maintient des logiciels, et même du matériel, on se traine parfois de très vielles interfaces, écrites dans des langages oubliés, ou désuets. Mais, comme celles-ci continuent de tenir leur rôle, on n'y touche pas souvent! (Spectre et Meltdown, comme de nombreuses autres failles de la sécurité informatique sont de bon exemples de ce que l'on découvre en revenant aux sources de choses)
</P>
<P>
Un autre exemple est X le serveur graphique de Gnu-Linux. Presque tous les environnement de bureau reposent dessus. Mais plus personne ne sait exactement quoi faire pour le maintenir! Depuis longtemps, on a écrit des librairies qui communiquent avec lui, et peu de programme communiquent directement avec lui. Et maintenant que l'étage du bas commence à fissurer, c'est la panique!
</P>

<A NAME="x"></A>
<H1>Qui est X?</H1>

<P>
X est un serveur graphique. Il n'est pas forcément évident de penser un écran comme une ressource qui est <B>partagée</B>...
</P>
<P>
Pourtant plusieurs programmes peuvent s'afficher simultanément à l'écran...
</P>

<A NAME="x_arch"></A>
<H2>Une Architecture Client/Serveur</H2>

<P>
X est un serveur, c'est à dire, qu'il est supposé faire tout le boulot pour ses clients... Les clients de X, ce sont les programmes dotés d'interfaces graphiques.
</P>
<P>
Les clients de X lui demandent d'afficher une image à cet endroit de l'écran, un texte ici, un carré bleu là bas.... X interprète le tout, dessine une image, et l'envoie là ou il droit (généralement c'est l'écran...)
</P>
<P>
Le problème c'est que si deux programmes demandent veulent afficher quelque chose au même endroit de l'écran X ne fera rien de très bon. Du coup, on voudra surement à un moment ou un autre déplacer une fenêtre...
</P>
<P>
Et c'est la qu'est l'os. Pour ce faire, il faut implémenter dans chacun de nos programmes une interface qui sait communiquer avec X pour lui dire quoi faire au besoin.
</P>
<P>
Si notre programme n'a pas implémenté cette fonctionnalité, vous vous retrouvez à devoir vous connecter depuis une autre console et devoir communiquer avec lui pour lui dire quoi faire!
</P>
<P>
Pour que l'utilisateur n'ai pas sans arrêt à utiliser son terminal, et que les développeurs n'écrivent pas des programmes qui se dérangent les uns les autres, On a décidé <B>d'ouvrir les fenêtres à l'intérieur d'une bordure</B>.
</P>
<P>
La petite bordure qui affiche un bouton pour re-dimensionner... La petite croix pour quitter... On  a appelé les programmes qui gèrent ces bordures des gestionnaires de fenêtres.
</P>
<P>
En gros, les programmes disent à X  leur bout d'image à produire, mais seul le gestionnaire de fenêtre dit à X qui se place au premier plan, qui doit être ici ou là.... Et vous n'interagissez plus avec X! Le gestionnaire de fenêtres le fait pour vous...
</P>
<P>
Comme toujours en informatique quand quelque chose est compliqué, on lui ajoute une couche d'abstraction...
</P>

<A NAME="x_pb"></A>
<H2>Le problème avec X</H2>

<P>
Le problème de X c'est qu'il est très vieux, et basé sur une conception qui le rend difficile à entretenir, pourtant après 3O ans de bons et loyaux services, il est encore là.
</P>
<P>
Avec le temps les gestionnaires de fenêtre on finit par faire la majorité du boulot, et finissaient par dire à X: <I>"Voici une image. N'y touche surtout pas! (déconne pas....   Pas de bêtise....) Et Affiche la ici sans te poser de question"</I>
</P>
<P>
En plus avec les architecture client/serveur les programmes peuvent venir de n'importe où... Même du réseau... Et d'Internet... (bonjour la sécurité!)
</P>
<P>
Aussi, si le gestionnaire de fenêtre vous dispense de communiquer avec X, le canal de communication reste ouvert...()
</P>
<P>
Le successeur sera probablement Wayland qui est <I>presque</I> prêt depuis <I>presque</I> longtemps...
</P>

<A NAME="ui"></A>
<H1>L'interface Utilisateur</H1>

<P>
Que ce soit un interpréteur de commande, un vrai shell, une interface graphique de base, ou un environnement graphique complet, une interface utilisateur c'est bien là où s'établit la relation entre l'homme et la machine.
</P>
<P>
Quand on <I>discute</I> avec son téléphone (ok google, Siri) pour lui demander quelque chose, on utilise une interface de <B>très</B> haut niveau...
</P>
<P>
De nombreux programmes sont séparés entre:
</P>

<UL>
<LI>un engin (sans interface) que l'on manipule dans une console
<LI>un ou différent front-end qui sont des interfaces de haut niveau.
</UL>

<P>
Ainsi plusieurs programmes peuvent utiliser le même engin, et l'interface peut évoluer librement, plusieurs interfaces sont parfois disponibles pour le même engin.
</P>

<A NAME="protocol"></A>
<H1>Les Protocoles</H1>

<P>
Les protocoles sont les interfaces entre différents systèmes informatiques, de la même façon que les programmes sont les interfaces entre l'homme et la machine.
</P>
<P>
On va faire très simple. Dans la vie réelle le protocole, c'est cet ensemble de règles de savoir-vivre, de politesse...  qui permet que tout se passe bien entre deux individus quels que soit les circonstances...
</P>
<P>
Si le chargé du protocole dans une ambassade ne trouve pas de règle dans le protocole qui lui permet de se sortir d'une situation, c'est que le protocole doit être actualisé...
</P>
<P>
Le protocole doit toujours fournir une réponse à toutes les situations.
</P>
<P>
Si le protocole est bien fait, et que tout le monde le respecte, tout se passera bien...
</P>
<P>
En informatique, c'est pareil, n'importe quel composant (logiciel ou matériel) peut communiquer et interagir avec n'importe quel autre <B>SI ET SEULEMENT SI</B> il s'entendent sur une chaine continue de protocoles entre l'un et l'autre.
</P>

<DL>
<DT>HTTP(s)</DT><DD>
Le protocole pour envoyer/recevoir des pages web
<P></P>
<DT>FTP</DT><DD>
Le protocole pour envoyer/recevoir des fichiers sur Internet
<P></P>
<DT>PCI</DT><DD>
Protocole de communication des périphériques entre eux
<P></P>
<DT>MTP</DT><DD>
Le !?#x de protocole inventé par Microsoft qui fait vous pouvez pas (plus) utiliser votre téléphone (ou autre) comme d'un disque usb, et qui fait que votre pc voit un appareil photo, plutôt qu'un téléphone, ou juste un disque! (bref!)
<P></P>
</DL>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="067_connected.php">Une fois connecté</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="080_software.php">Le Logiciel</A></TD>
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

<input type="hidden" name="page" value="070">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 070");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
