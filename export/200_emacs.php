<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Emacs</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Emacs</H1>
</DIV>

<DIV CLASS="body" ID="body">
<P>
Emacs est d'un autre gabarit. C'est un environnement de développement complet.
</P>
<P>
Vous pouvez consulter vos mail, lire une page de manuel, tout en faisant des "copier-coller" depuis chacun vers les autres! Tout avec un clavier seulement!
</P>
<P>
Emacs intègre un interpréteur de commande en langage lisp. Il peut donc tout à fait remplacer votre shell.
</P>
<P>
Emacs intègre un navigateur internet et même des jeux...
</P>
	<BLOCKQUOTE>
	" Emacs est un système d'exploitation parfait auquel,
	il manque uniquement un bon éditeur de texte... "
	</BLOCKQUOTE>
<P>
Vous comprendrez que vous proposer une introduction à Emacs est <I>hors-de-propos</I>.
</P>
<P>
Voici donc une sélection de liens utiles.
</P>
<P>
Si vous envisagez de vous investir à fond dans l'informatique ( ou d'en faire votre métier... ) Intéressez vous à Emacs. C'est un logiciel d'une richesse inouïe!
</P>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="https://emacs.traduc.org/emacs_fr/emacs/emacs.html">Le Manuel d'Emacs en français</A></TD>
</TR>
</TABLE>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="190_vim.php">Vim</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="210_config.php">Les fichiers de configuration</A></TD>
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

<input type="hidden" name="page" value="200">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 200");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
