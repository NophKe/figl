<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Cas pratique: Installer Arch-Linux</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Cas pratique: Installer Arch-Linux</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">Deux ou trois mots avant de commencer</A>
  <LI><A HREF="#toc2">Interface texte, et média</A>
  </UL>

</DIV>
<P>
Un installateur, est un programme (avec une belle interface graphique...) qui vous permet d'installer un système d'exploitation. On grave ce programme sur un cd, ou une clef-usb.
</P>
<P>
On allume l'ordinateur avec ce support dans le lecteur, ou le port usb.
</P>
<P>
Parfois, il faut appuyer sur la touche &lt;F2&gt; ou &lt;F12&gt; ou même &lt;F10&gt; pour entrer dans un menu qui permet de choisir de ne pas démarrer l'ordinateur depuis le disque dur principal, et de choisir le média depuis lequel booter.
</P>
<P>
L'installateur proposera alors à l'utilisateur de configurer le système d'exploitation, et de l'installer.
</P>
<P>
Arch Linux ne possède pas vraiment d'installateur. Ceci fait de lui un système très flexible, mais surtout pédagogique!
</P>

<A NAME="toc1"></A>
<H1>Deux ou trois mots avant de commencer</H1>

<P>
Cette page est basée sur le guide d'installation officiel d'arch Linux en date du 01 Juillet 2018.
</P>
<P>
Cette page se veut comme une traduction accompagnée des liens vers les différentes parties du site, et un certain nombre de commentaires que j'ajouterai.
</P>
<P>
Si vous avez un problème lors de l'installation, j'espère que cette page vous aidera à <B>comprendre le guide officiel</B>, combler les lacune que vous pourriez avoir, et trouver les informations complémentaires.
</P>

<A NAME="toc2"></A>
<H1>Interface texte, et média</H1>

<P>
Comme je l'ai dit, Arch ne possède pas un installateur, mais un petit ensemble de programmes, et de scripts. L'installation se passe donc avec une interface texte.
</P>
<P>
Le média contiendra les scripts d'installation et une copie des programmes de base nécessaires à rendre l'ordinateur bootable.
</P>
<P>
En bootant sur un média contenant Arch, vous obtiendrez une prompte. Vous serez connecté en tant que Root sur un console qui exécutera le shell du nom de Zsh.
</P>
<P>
Il est donc impératif que vous sachiez utiliser un minimum l'interface texte pour poursuivre. Si ce n'est pas le cas relisez les pages précédentes.
</P>
<P>
Allons-y!
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="250_c-langage.php">Programmez en C !</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="author.php">La partie bio</A></TD>
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

<input type="hidden" name="page" value="260">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 260");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
