<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Programmer</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Programmer</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

    <UL>
    <LI><A HREF="#toc1">Hello World en langage assembleur</A>
    </UL>

  <UL>
  <LI><A HREF="#toc2">Hello World</A>
  <LI><A HREF="#toc3">Les variables</A>
  <LI><A HREF="#toc4">Commentaires et sha-bang</A>
  <LI><A HREF="#toc5">Les Conditions, et quelques élements de stylistique</A>
  </UL>

</DIV>
<P>
En général pouyr commencer à apprendre n'importe quel langage de programmation, on commence par écrire un programme simple qui affiche "bonjour" à l'écran.
</P>

<A NAME="toc1"></A>
<H2>Hello World en langage assembleur</H2>

<PRE>
section	.text
   global _start     ;must be declared for linker (ld)

_start:	            ;tells linker entry point
   mov	edx,len     ;message length
   mov	ecx,msg     ;message to write
   mov	ebx,1       ;file descriptor (stdout)
   mov	eax,4       ;system call number (sys_write)
   int	0x80        ;call kernel
	
   mov	eax,1       ;system call number (sys_exit)
   int	0x80        ;call kernel

section	.data
msg db 'Hello, world!', 0xa  ;string to be printed
len equ $ - msg     ;length of the string

</PRE>

<P>
Bon cette fois-ci c'est partie, on va commencer à programmer! Car à part lire sans rien comprendre à un «Hello world» en assembleur, faudrait passer sur quelque chose à notre niveau.
</P>
<P>
On va programmer en Bash. Car Bash, c'est bien et c'est utile à connaitre. On refera le même programme plus tard avec d'autres langages. ( Comme çà vous en serez certains vous aussi... que Bash c'est bien! )
</P>

<A NAME="toc2"></A>
<H1>Hello World</H1>

<P>
Quand on commence à écrire des commandes qui tiennent sur de nombreuses lignes, il existe un risque bien réel de faire des erreurs. Une méthode plus commode, est de créer un fichier un fichier texte, et d'y inscrire les commandes que l'on souhaite exécuter.
</P>
<P>
Créez donc un fichier texte avec votre éditeur favori, donnez lui le nom "foo.sh" et insérez le texte suivant:
</P>

<PRE>
echo "Bonjour le monde!"
</PRE>

<P>
On a déjà vu la commande <CODE>echo</CODE> qui permet d'afficher un message à l'écran.
</P>
<P>
Ensuite entrez la commande:
</P>

<PRE>
$ bash ./foo.sh
Bonjour le monde!
</PRE>

<P>
Il est d'usage de commencer à apprendre n'importe quel langage de programmation par ce classique «Hello World!», qui donne un aperçu du fonctionnement, et de la syntaxe du langage.
</P>
<P>
Bravo! Vous venez d'écrire votre premier programme!
</P>

<A NAME="toc3"></A>
<H1>Les variables</H1>

<P>
Une variable est une case mémoire dans laquelle on enregistre quelque chose. Pour créer une variable foo, contenant le texte « bar » rien de plus simple:
</P>

<PRE>
$ foo=bar
$ 
$ echo $foo
bar
$
</PRE>

<P>
Remarquez le signe dollar! La première fois que l'on va entrer le mot foo, le shell va comprendre qu'il s'agit d'une variable à initialiser, car il s'agit d'un mot suivi du symbole 'égal'. La seconde fois le shell ne devine que foo est une variable que grâce au signe 'dollar'.
</P>
<P>
Vous pouvez vous en convaincre avec:
</P>

<PRE>
$ echo foo
foo
$
</PRE>

<P>
<U>La syntaxe est importante:</U>
</P>

<UL>
<LI>pas d'espace avant et après le 'égal'.
<LI>un 'dollar' pour accéder au contenu d'une variable
<LI>pas de 'dollar' pour modifier une variable
</UL>

<A NAME="toc4"></A>
<H1>Commentaires et sha-bang</H1>

<P>
On a déja vu des commentaires! Avec bash les commentaires se  font avec le symbole <CODE>#</CODE>. Tout ce qui suit ce symbole est ignoré. Démonstration:
</P>

<PRE>
$ echo dièse # dièse
dièse
</PRE>

<A NAME="toc5"></A>
<H1>Les Conditions, et quelques élements de stylistique</H1>

<P>
Pour l'instant l'on a utilisé que des commandes qui tenaient sur une seule ligne. Préparez vous à perdre la prompte (comme avec ce fichier l'embrouille), car ce qui suit est une commande sur plusieurs lignes.
</P>
<P>
Donc on veut réaliser différente actions en fonction de notre variable $foo:
</P>
	<BLOCKQUOTE>
	SI foo contient bar
	</BLOCKQUOTE>
<P>
ALORS
</P>
	<BLOCKQUOTE>
	affiche "foo = bar"
	</BLOCKQUOTE>
<P>
SINON
</P>
	<BLOCKQUOTE>
	affiche "foo != bar"
	</BLOCKQUOTE>
<P>
Enfin affiche "baz" dans tous les cas.
</P>
<P>
Ce qui donne:
</P>

<PRE>
$ if [[ $foo = bar ]]
&gt; then
&gt; echo "foo = bar"
&gt; else
&gt; echo "foo != bar"
&gt; fi
echo "baz"
</PRE>

<P>
Ce n'est pas le lieu de donner un cous d'anglais mais:
</P>

<UL>
<LI>« if » signifie « si »
<LI>« then » signifie « alors »
<LI>« else » signifie « sinon »
<LI>« fi » ne signifie rien du tout
</UL>

<P>
En fait le « fi » est là que pour indiquer la fin de la boucle conditionnelle. Si <CODE>echo "baz"</CODE> avait été placé avant le « fi », "baz" se serait affiché uniquement si foo avait été différent de bar...
</P>
<P>
<U>Remarque</U>: <CODE>then</CODE> <CODE>else</CODE> et <CODE>fi</CODE> doivent être seuls sur leur ligne, car le retour à la ligne fait partie de la syntaxe.
</P>
<P>
<U>Remarque</U>: Pour le shell le symbole <CODE>;</CODE> est équivalent à un retour à la ligne. Donc on peut faire tenir ce genre de commande sur une seule ligne.
</P>

<PRE>
if [[ foo ]] ; then ; blabla ; fi
</PRE>

<P>
Bien-entendu, si l'on entre cette commande dans un scripte, la question de la stylistique, doit être envisagée différent. L'indentation du texte (l'alignement des tabulations) va aider à la relecture.
</P>

<PRE>
if [[ $foo = bar ]] ;then
	echo "foo = bar"
else
	echo "foo != bar"
fi

echo "baz"
</PRE>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="220_help.php">Trouver de l'aide et progresser</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="240_bashrc.php">Un joli bashrc</A></TD>
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

<input type="hidden" name="page" value="230">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 230");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
