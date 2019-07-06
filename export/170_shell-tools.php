<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Les différents éditeurs</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Les différents éditeurs</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

    <UL>
    <LI><A HREF="#toc1">ex</A>
    <LI><A HREF="#toc2">Vi</A>
    <LI><A HREF="#toc3">Nano</A>
    </UL>

</DIV>

<A NAME="toc1"></A>
<H2>ex</H2>

<P>
Le mode d'édition que l'on vient de décrire avec la commande <CODE>cat</CODE> convient très bien à des téléscripteurs munis uniquement d'une imprimante! <CODE>ex</CODE> est un très vieil éditeur de texte en mode ligne de commande qui repose sur ce genre de principe.
</P>
<P>
Comme ex est trop obsolète pour être inclus dans une distribution Gnu-Linux moderne on peut se donner une idée de son fonctionnement par une option du programme <CODE>vi</CODE> ( on reparle très vite de vi! )
</P>
<P>
Comme il a déjà été dit sur les paginateurs. Ce programme va prendre le contrôle du clavier. Sachez donc tout de suite utiliser l'interface.
</P>

<PRE>
$ vi -e foo
:

</PRE>

<P>
Lors du lancement <CODE>ex</CODE> n'affiche pas le contenu du fichier, mais juste sa propre prompte ``: ``.
</P>
<P>
Pour afficher une ligne, il faut entrer la lettre <CODE>p</CODE> et la touche entrée pour valider la commande. Ainsi:
</P>

<PRE>
: p
tient sur deux lignes
</PRE>

<P>
Le programme n'a affiché que la ligne 2!
</P>
<P>
Pour se placer ligne 1 faire simplement:
</P>

<PRE>
: 1
</PRE>

<P>
Essayez d'afficher la ligne courante...
</P>

<PRE>
: p
Ce fichier ci,
:
</PRE>

<P>
Pour modifier une ligne, utilisons la lettre <CODE>i</CODE> pour passer en mode d'insertion.
</P>

<PRE>
: i
Bla Bla Bla...
[ ctrl + C ]
:
</PRE>

<P>
On a déjà vu le cas, lorsque vous entrez en mode insertion, tout ce que vous tapez devient l'argument de la commande i (insertion). Et tant que le caractère d'échappement n'a pas été entré, tout ce qui suit est considéré comme du texte à insérer.
</P>
<P>
Pour enregistrer la lettre w (write):
</P>

<PRE>
: w
deux_lignes.txt               2 lignes écrites
: _
</PRE>

<P>
Pour quitter la lettre q :
</P>

<PRE>
: q
E37: Modifications non enregistrées
:
</PRE>

<P>
Et le point d'exclamation pour passer outre les avertissements! Et revenir à la prompte du shell!
</P>

<PRE>
: q!
$ _
</PRE>

<A NAME="toc2"></A>
<H2>Vi</H2>

<P>
C'est un programme qui fait partie du standard POSIX. A priori, vous devriez donc le trouver sur n'importe quelle distribution Gnu-Linux.
</P>
<P>
C'est un programme dont l'interface peut être assez déroutante! En effet, la première version de vi date de 1976...
</P>
<P>
Enfin c'est un éditeur modal qui démarre en mode commande.
</P>
<P>
A la différence de ex, c'est un éditeur visuel, en ce sens qu'il vous affiche à l'écran le texte que vous modifiez. Ce n'est pas un programme fait pour être utilisé sur un téléscripteur!
</P>
<P>
<U>Le principe d'une édition sur Vi:</U>
</P>

<UL>
<LI>Le programme démarre donc en <B>mode de commande</B>.
<P></P>
</UL>

	<BLOCKQUOTE>
	Les touches <CODE>h</CODE> / <CODE>j</CODE> / <CODE>k</CODE> / <CODE>l</CODE>  pour gauche / bas / haut / droite vous permettrons de déplacer le curseur. ( <I>Par défaut les flèches ne fonctionnent pas</I> )
	</BLOCKQUOTE>

<UL>
<LI>Une fois votre curseur placé taper <CODE>i</CODE> pour passer en <B>mode insertion</B>.
<P></P>
</UL>

	<BLOCKQUOTE>
	Les touches <CODE>h</CODE> / <CODE>j</CODE> / <CODE>k</CODE> / <CODE>l</CODE>  pour ne permettrons plus de déplacer le curseur. ( <I>Elles servent comme les autres touches du clavier à entrer du texte</I> )
	</BLOCKQUOTE>

<UL>
<LI>Une fois votre modification effectué taper [ Echap ] pour quitter le mode insertion, et revenir en <B>mode commande</B>
<P></P>
</UL>

	<BLOCKQUOTE>
	Les touches <CODE>h</CODE> / <CODE>j</CODE> / <CODE>k</CODE> / <CODE>l</CODE>  pour gauche / bas / haut / droite vous permettrons de déplacer le curseur. ( <I>Par défaut les flèches ne fonctionnent pas</I> )
	</BLOCKQUOTE>

<UL>
<LI>Enfin taper <CODE>:</CODE> vous fera passer en <B>mode ex</B> !
<P></P>
</UL>

	<BLOCKQUOTE>
	Donc si vous avez lu le paragraphe précédent vous comprendrez que la sequence de touches <CODE>:wq</CODE> vous permet d'enregistrer et de quitter.
	</BLOCKQUOTE>
<P>
Je n'en dis pas plus sur vi. C'est un programme assez daté, mais il est standard et donc présent partout! De plus il permet de se connecter à des systèmes distants, car aucune de ses commandes au clavier ne sont interprétées comme des caractères d'échappement par les différents shells.
</P>
<P>
Vim reprend l'essentiel du comportement de vi et le porte beaucoup plus au loin! Il n'est donc pas forcément nécessaire d'aller plus loin au sujet vi.
</P>
<P>
Apprendre à utiliser Vim (même un peu) vous suffira pour utiliser vi s'il est le seul éditeur disponible sur le système.
</P>

<A NAME="toc3"></A>
<H2>Nano</H2>

<P>
C'est un petit éditeur moderne, et assez intuitif. Il est fréquemment installé par défaut et il s'intègre bien avec systemd.
</P>
<P>
Lorsque vous le démarrer, ce dernier présente comme une sorte de barre d'outils, en bas de l'écran. C'est un panneaux qui reprends les fonctions de base de ce logiciel.
</P>
<P>
Le Symbole <CODE>^</CODE> représente la touche [ Ctrl ].
</P>
<P>
Ce n'est pas un logiciel modal. On entre dans le programme directement en insertion. Et tout ce que l'on écrit, s'inscrit à l'écran, et donc dans le fichier.
</P>
<P>
Les combinaisons de touches permettent d'accéder aux fonction du logiciel. Ctrl + O pour enregistrer, Ctrl + X pour quitter...
</P>
<P>
<A HREF="https://fr.wikipedia.org/wiki/GNU_nano"><IMG ALIGN="middle" SRC="./img/nano.png" BORDER="0" ALT=""></A>
</P>

<TABLE ALIGN="center">
<TR>
<TD>GNU nano, un éditeur pour la nouvelle génération ( credit Wikipedia)</TD>
</TR>
</TABLE>

<P>
<U>Remarque</U>: Notez au passage que les couleurs de l'image ne sont pas dans le fichier texte, il s'agit bien d'un fichier texte pur. (Aucun logiciel de traitement de texte n'est passé par là...) Ces couleurs sont la coloration syntaxique. Tous les bons éditeurs offrent une coloration syntaxique qui permet de rendre la programmation, et l'écriture de fichiers de configuration plus agréable.
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="160_editor.php">Éditer du texte avec la console...</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="190_vim.php">Vim</A></TD>
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

<input type="hidden" name="page" value="170">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 170");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
