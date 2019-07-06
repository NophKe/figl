<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Vim</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Vim</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">What is Vim?</A>
    <UL>
    <LI><A HREF="#toc2">Aide Mémoire</A>
    <LI><A HREF="#toc3">Les Astuces</A>
    <LI><A HREF="#toc4">Trouver de l'aide</A>
    </UL>
  </UL>

</DIV>

<A NAME="toc1"></A>
<H1>What is Vim?</H1>

<P>
Vim est une version très améliorée du bon viel éditeur de texte Vi. Il inclus de nombreuses fo,nctionnalités dont se dernier manquait comme la coloration syntaxique, un historique d'annulation, une interface graphique. En clair, c'est la version moderne de vi.
</P>
<P>
Vim fonctionne sous MS-Windows (NT, 2000, XP, Vista, 7, 8, 10), Macintosh, et presque toutes les version d'UNIX.
</P>
<P>
Toutes les distribution de Gnu-Linux qui se respectent proposent l'installation de Vim par leur gestionnaire de paquet.
</P>
<P>
Vim est ce que l'on apelle un « Charityware ». Vous pouvez l'utiliser, le copier, et le modifier à votre guise, mais vous êtes encouragé à faire un don pour les orphelins en Ouganda.
</P>
<P>
Vim arrive par défaut beaucoup mieux configuré que vi. (Par exemple il permet d'utiliser les flèches sur le clavier...)
</P>
<P>
Pour apprendre à l'utiliser, entrez la commande:
</P>

<PRE>
$ vimtutor
</PRE>

<P>
Cela devrait vous donner les bases...
</P>
<P>
Des bases qui seront également valables pour vi ( qui fait partie du standard POSIX ). Je vous conseille donc vivement d'installer vim et d'entrer cette commande.
</P>
<P>
<U>PS:</U> Je suis sérieux, en installant le programme, et en exécutant cette commande, vous serez parti pour un guide interactif. Ce guide vous permettra de vous familiariser en une quinzaine de minutes à Vim.
</P>
<P>
Vous n'allez pas vous retrouver devant un livre de 150 pages difficiles à lire. Ce tutoriel est ludique et pratique. Prenez le temps d'y jeter un coup d'œil.
</P>

<A NAME="toc2"></A>
<H2>Aide Mémoire</H2>

<P>
<U>Pour ajouter du texte:</U>
</P>

<DL>
<DT><B>a</B></DT><DD>
ajoute après le curseur
<DT><B>A</B></DT><DD>
Ajoute en fin de ligne
<P></P>
<DT><B>i</B></DT><DD>
Ajoute sous le curseur
<DT><B>I</B></DT><DD>
Ajoute en début de ligne
</DL>

<P>
<U>Copier - Coller</U>
</P>

<DL>
<DT><B>dd</B></DT><DD>
Coupe la ligne courante
<DT><B>yy</B></DT><DD>
Copie la ligne courante
<P></P>
<DT><B>d5d</B></DT><DD>
Coupe cinq lignes
<DT><B>y6y</B></DT><DD>
Copie six lignes
<DT><B>P</B></DT><DD>
Coller avant le curseur
<P></P>
<DT><B>"+p</B></DT><DD>
Coller depuis le presse-papier de l'interface graphique.
</DL>

<P>
<U>Se déplacer</U>
</P>

<DL>
<DT><B>gg</B></DT><DD>
Aller au début du fichier
<DT><B>G</B></DT><DD>
Aller à la fin du fichier
<DT><B>zz</B></DT><DD>
Recentrer l'écran autour du curseur
</DL>

<A NAME="toc3"></A>
<H2>Les Astuces</H2>

<UL>
<LI>Quand vous passez en mode ex, la flèche du haut permet de rechercher dans l'historique.
<LI>Quand vous passez en mode ex, la touche [ tab ] donne accès à une auto-completion.
<LI>La touche <CODE>i</CODE> pour insertion est facile à mémoriser, mais <CODE>a</CODE> sert plus souvent.
</UL>

<A NAME="toc4"></A>
<H2>Trouver de l'aide</H2>

<P>
L'aide de Vim est très fournie, mais très anglophone.
</P>

<PRE>
:help
</PRE>

<P>
Pour une aide sur l'utilisation de l'aide,
</P>

<PRE>
:help help
</PRE>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="http://david.blanchet.free.fr/vim/doc/fr62017/help.txt.html">Pour une traduction complète en français de l'aide de Vim</A></TD>
</TR>
</TABLE>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="170_shell-tools.php">Les différents éditeurs</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="200_emacs.php">Emacs</A></TD>
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

<input type="hidden" name="page" value="190">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 190");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
