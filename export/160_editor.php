<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Éditer du texte avec la console... </TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Éditer du texte avec la console... </H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">Les Outils du shell</A>
    <UL>
    <LI><A HREF="#toc2">cat</A>
    </UL>
  </UL>

</DIV>
<P>
Pour administrer correctement une distribution Gnu-Linux, vous aurez parfois à modifier des fichiers de configuration!
</P>
<P>
De la même façon, pour dépanner votre système, vous n'aurez parfois pas d'autre choix que de vous connecter au travers de l'interface texte!
</P>
<P>
Nous allons donc voir différents moyens d'éditer un texte depuis une console.
</P>

<A NAME="toc1"></A>
<H1>Les Outils du shell</H1>

<A NAME="toc2"></A>
<H2>cat</H2>

<P>
Un moyen simple <U>et pas du tout efficace</U> de créer un fichier texte est d'utiliser la commande <CODE>cat</CODE>.
</P>
<P>
Dans les pages précédentes, on a utiliser <CODE>cat</CODE> pour afficher le contenu des fichiers. En faits, ce n'est pas vraiment comme cela que <CODE>cat</CODE> fonctionne.
</P>
<P>
<CODE>cat</CODE> sert à concaténer, c'est à dire mettre l'un à la suite de l'autre.
</P>
<P>
Supposons deux fichiers:
</P>

<UL>
<LI>Le premier contient une seule ligne
<LI>Le second en contient deux.
</UL>

<P>
Et dans la pratique, créez deux fichiers quelconques pour vous entrainer!
A ce stade vous savez déja le faire, n'est-ce pas? Sinon, il faut revenir en arrière... Et ne vous contentez pas lire cette fois, tapez le code avec vos doigts et votre clavier!
</P>
<P>
Donc on a deux fichiers:
</P>

<PRE>
$ cat une_ligne.txt
Ce fichier contient une ligne de texte
$ cat deux_lignes.txt
Ce fichier ci,
tient sur deux lignes
$ _
</PRE>

<P>
Rien d'exceptionnel! Mais si je fais:
</P>

<PRE>
$ cat une_ligne.txt deux_lignes.txt
Ce fichier contient une ligne de texte
Ce fichier ci,
tient sur deux lignes
$ _
</PRE>

<P>
On voit que les deux fichiers sont bien concaténés! (Prenez l'habitude de ce mot, il est le terme technique en vigueur)
</P>
<P>
A l'aide du shell je peux rediriger la sortie standard (l'écran) vers un fichier.
</P>

<PRE>
$ cat une_ligne.txt deux_lignes.txt &gt;&gt; foo
$ cat foo
Ce fichier contient une ligne de texte
Ce fichier ci,
tient sur deux lignes
$ _
</PRE>

<P>
Si je ne donne pas de direction de sortie. <CODE>cat</CODE> suppose que c'est la sortie standard.
</P>
<P>
Mais que ce passe t il si je ne donne pas de précision ni sur l'entrée ni sur la sortie?
</P>

<PRE>
$ cat
J'ai perdu la prompte
J'ai perdu la prompte
Tout ce que je tape au clavier est répété sur l'écran à chaque fois
Tout ce que je tape au clavier est répété sur l'écran à chaque fois
que je tape la touche [ entrée ]
que je tape la touche [ entrée ]
Pour sortir de la boucle [ Ctrl + C ]
</PRE>

<P>
Il <B>faut</B> taper la touche [ entrée ] pour que la ligne soit envoyée dans le fichier.
</P>
<P>
Le combo des touches [ Ctrl + C ] produit un caractère d'échappement à l'attention du shell, et lui signale de reprendre le contrôle sur le programme.
</P>
<P>
Si j'omets uniquement de donner une entrée, <CODE>cat</CODE> suppose qu'il faut utiliser l'entrée standard (le clavier).
Et je peux toujours rediriger la sortie vers un fichier...
</P>

<PRE>
$ cat &gt; foo
Redirection simple, un seul symbole &gt; (remplacer)...
[ Ctrl + C ]
$ _
</PRE>

<P>
On vérifie?
</P>

<PRE>
$ cat foo
Redirection simple, un seul symbole &gt; (remplacer)...
</PRE>

<P>
Ça fonctionne! On continue?
</P>

<PRE>
$ cat &gt;&gt; foo
Redirection double, deux symboles  &gt;&gt; (concaténer)...
[ Ctrl + C ]
</PRE>

<P>
On vérifie une dernière fois ce qui a été inscrit dans le fichier...
</P>

<PRE>
$ cat foo
Redirection simple, un seul symbole &gt; (remplacer)...
Redirection double, deux symboles  &gt;&gt; (concaténer)...
</PRE>

<P>
Magnifique! Vous vous souviendrez bien que Control + C quitte un programme en cours. Et les puristes vont me jeter des pierres....
</P>
<P>
<I>(Mais promis on parlera de EOF un de ces jours...)</I>
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="150_console.php">Les commandes de base</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="170_shell-tools.php">Les différents éditeurs</A></TD>
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

<input type="hidden" name="page" value="160">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 160");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
