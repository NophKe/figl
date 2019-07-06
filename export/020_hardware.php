<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Anatomie d'un Ordinateur</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Anatomie d'un Ordinateur</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#Von_neumann">L'Architecture De Von Neumann</A>
  <LI><A HREF="#Arch_materielle">Une Architecture Matérielle</A>
  <LI><A HREF="#Port">Les Ports</A>
  <LI><A HREF="#Bus">Un Bus</A>
  <LI><A HREF="#Vrai">Ce Qui Est Vrai Quelque Soit L'Architecture</A>
  <LI><A HREF="#Arch_moderne">Les Architechtures Modernes</A>
  </UL>

</DIV>

<A NAME="Von_neumann"></A>
<H1>L'Architecture De Von Neumann</H1>

<P>
Comme la machine de Turing est une machine purement théorique, pour ce qui est de la réalisation pratique, l’architecture matérielle des ordinateurs modernes est basée sur ce que l'on appelle l'architecture de Von Neumann qui décompose l’ordinateur ainsi:
</P>

<UL>
<LI>Les <B>dispositifs d’entrées/sorties</B>, qui permettent de communiquer avec le monde extérieur.
  <UL>
  <LI>(clavier, écran, imprimante...) de façon plus moderne, on parlera de <I>périphériques</I>
  <P></P>
  </UL>
<LI>L’<B>unité de contrôle</B>, qui est chargée du séquençage des opérations, du respect de l'algorithme
<LI>L’<B>unité arithmétique et logique</B> (UAL) ou unité de traitement, qui effectue les instructions de base
  <UL>
  <LI>Ces deux derniers correspondent à nos <B>processeurs</B> modernes.
  <P></P>
  </UL>
<LI>La <B>mémoire</B> qui contient les programmes et les données
  <OL>
  <LI>mémoire de stockage (programmes et données de base de la machine, <I>les disques de données</I>)
  <LI>mémoire vive (programmes et données en cours de fonctionnement, <I>La Ram</I>)
  <P></P>
<A HREF="https://fr.wikipedia.org/wiki/Architecture_de_von_Neumann"><IMG ALIGN="middle" SRC="img/arch_von_neumann.png" BORDER="0" ALT=""></A>
  </OL>
</UL>

<TABLE ALIGN="center">
<TR>
<TD>Schémas de principe de l'architecture de Von Neumann ( credit Wikipedia )</TD>
</TR>
</TABLE>

<A NAME="Arch_materielle"></A>
<H1>Une Architecture Matérielle</H1>

<P>
Il existe un algorithme capable de réaliser des additions <I>de tête</I>, comme il existe un algorithme pour faire des additions sur un boulier! Dans les deux cas le résultat est le même, pour ce qui est du résultat! Mais la réalisation pratique pour y parvenir est très différente!
</P>
<P>
Un algorithme mental ne peut pas être reproduit sur un boulier. Et de la même façon vous n'imaginez pas un boulier dans votre tête pour faire des additions.
</P>
<P>
Il existe un algorithme capable de réaliser de additions avec une machine de Turing. Une machine de Turing <U>universelle</U> peut toujours reproduire le comportement d'une autre machine de Turin. (au besoin en la simulant!) Donc n'importe quelle machine de Turing universelle devrait pouvoir effectuer une addition...
</P>
<P>
Oui! Bien sur, mais pas en suivant le même programme! De la même façon qu'un algorithme valable au boulier n'est pas forcément exportable sur une calculatrice; un programme écrit pour une architecture matérielle n'est pas exportable sur une autre <B>architecture</B>.
</P>
<P>
On va y revenir...
</P>

<A NAME="Port"></A>
<H1>Les Ports</H1>

<P>
Votre ordinateur possède à l'intérieur de lui un processeur qui réalise des instructions. Il possède une mémoire interne, appelée mémoire vive (ou juste ram). Le processeur et la mémoire vive se trouvent <B>physiquement</B> sur une carte électronique appelée "carte mère" qui est le cœur de votre ordinateur.
</P>
<P>
Votre ordinateur possède un écran et un clavier, il possède un disque dur, un lecteur de DVD, un lecteur de cartes sd...
</P>
<P>
Les différentes pièces de votre ordinateur sont toutes connectées par un port. Un port, c'est physiquement ce qui "porte" la connectique de l'appareil en question! Physiquement, c'est donc, ce dans quoi vous branchez vos périphériques. Les ports sont les autoroutes matérielles des données entre votre processeur, votre écran, votre disques et tout le reste.
</P>

<A NAME="Bus"></A>
<H1>Un Bus</H1>

<P>
Le processeur, qui orchestre tout cela ne peut donc voir aucun des composants de l'ordinateur directement, il voit un <B>bus</B> qui peut prendre différentes valeurs numériques!
</P>
<P>
Un bus, c'est un la même chose qu'un port, mais du point de vue du processeur. C'est un port débarrassé de toutes les considération matérielles.
</P>
<P>
Imaginez un appareil simplisme! Le câble pour le brancher à l'ordinateur ne possède qu'un seul fil. S'il y a du courant électrique sur ce fil, l'ordinateur comprendra que c'est un UN. S'il n'y a pas de courant électrique sur ce fil, l'ordinateur comprendra que c'est un ZÉRO.
</P>
	<BLOCKQUOTE>
	- COURANT ou PAS DE COURANT, sont les états <I>physique</I> de ce port.
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	- ZÉRO et UN, sont les valeurs numériques du bus.
	</BLOCKQUOTE>

<A NAME="Vrai"></A>
<H1>Ce Qui Est Vrai Quelque Soit L'Architecture</H1>

<P>
Le seul composant dont la vitesse de fonctionnement est comparable à celle du processeur est la mémoire vive. Pour que les programmes puissent fonctionner, il faut qu'ils soient en mémoire.
</P>
<P>
Certains de ces appareils sont dirigés par des cartes contrôleurs que l'on branche sur la carte mère pour aider l'ordinateur à les piloter.
</P>
<P>
Quand votre ordinateur lit un programme ou une donnée depuis le disque, ce qui se passe en réalité, c'est que le processeur utilise en bus pour envoyer une requête de lecture au contrôleur du disque. Quelque temps après le contrôleur du disque utilise le bus pour envoyer  le signal au processeur qu'il a lu la donner et la placer à telle adresse de la mémoire. Le processeur peut ensuite utiliser le bus pour lire cette donnée.
</P>
<P>
Votre clavier et votre écran communique également avec le processeur moyen d'un bus, mais d'une façon plus simple. Nous en discuterons plus tard. Pour le moment nous en savons assez pour poursuivre.
</P>

<A NAME="Arch_moderne"></A>
<H1>Les Architechtures Modernes</H1>

<P>
<U>Quelques remarques:</U>
</P>

<UL>
<LI>Une unité d'information binaire (ZÉRO ou UN) c'est un bit.
<LI>La largeur du bus (mesurée en bits) détermine le nombre de valeurs que peuvent prendre un bus.
<LI>La taille du bus qui relie le processeur à la carte mère est donc un déterminant essentiel d'un ordinateur.
<LI>Dans la pratique, pour identifier une architecture matérielle, il suffit de donner le type de processeur.
</UL>

<P>
L'architecture en 32 bits des processeur d'ordinateurs <I>grand publics</I> est appelée x86 à cause de ses différentes variantes (386,486,686...).
</P>
<P>
De nos jours la plupart des processeurs <I>d'ordinateur grand publics</I> se basent sur l'architecture x86_64 qui fonctionne en 64 bits. Les processeurs x86_64 sont vus comme des simples processeurs 64 bits s'ils sont utilisés par un système d'exploitation x86_64. Et sont vus comme un double processeur (dual core) par des systèmes d'exploitation 32 bits.
</P>
<P>
Les téléphones portables et les tablettes utilisent des processeur ARM (64 bits), qui sont plus économes en énergie que les x86 (32 ou 64 bits)
</P>
<P>
<A HREF="https://fr.wikipedia.org/wiki/Carte_m%C3%A8re"><IMG ALIGN="middle" SRC="img/architecture.png" BORDER="0" ALT=""></A>
</P>

<TABLE ALIGN="center">
<TR>
<TD>Architecture "classique" d'une carte mère. ( credit Wikipedia )</TD>
</TR>
</TABLE>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="010_prehistoire.php">La Préhistoire</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="030_periph.php">Les Périphériques</A></TD>
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

<input type="hidden" name="page" value="020">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 020");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
