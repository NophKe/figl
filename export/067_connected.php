<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Une fois connecté</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Une fois connecté</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

    <UL>
    <LI><A HREF="#gui">Les Interfaces graphiques</A>
      <UL>
      <LI><A HREF="#toc2">Pour ne citer que les principales (et mes préférés)</A>
      </UL>
    <LI><A HREF="#shell">Le Shell</A>
      <UL>
      <LI><A HREF="#toc4">Les différents shells</A>
      </UL>
    </UL>

</DIV>
<P>
Ce qui arrive après le LOGIN dépend de comment vous avez fait les choses:
</P>

<UL>
<LI>Sur une console texte, le programme <CODE>login</CODE> va lancer le programme défini comme interpréteur de commande par défaut.
<LI>En mode graphique, l'environnement graphique va démarrer, et vous pourrez démarrer des programmes depuis celui-ci.
</UL>

<A NAME="gui"></A>
<H2>Les Interfaces graphiques</H2>

<P>
Le système d'exploitation Gnu-Linux à la particularité par rapport à Windows et MacOs de vous laisser libre de choisir l'interface graphique qui vous plait.
</P>
<P>
Sous d'autres systèmes d'exploitation, l'utilisateur est invité à personnaliser son environnement graphique à sa guise, mais il ne possède pas la liberté de modifier cette interface, de la remplacer par une autre...
</P>
<P>
Les interfaces graphiques de Windows, Mac, et Android sont configurables dans une certaine mesure. Mais sous Gnu-Linux, il existe de très diverses interfaces graphiques dont certaines peuvent être basées sur des concepts très différents les uns des autres.
</P>

<A NAME="toc2"></A>
<H3>Pour ne citer que les principales (et mes préférés)</H3>

<DL>
<DT>Kde</DT><DD>
possède une interface utilisateur esthétique faite pour être facile d'accès pour les débutants
<P></P>
<DT>Gnome</DT><DD>
son grand concurrent en est à la version 3
<P></P>
<DT>Mate</DT><DD>
la descendante de Gnome 2, dont certains <I>(personne)</I> n'arrivaient pas à se défaire...
<P></P>
<DT>Xfce</DT><DD>
environnement complet (comme Kde et Gnome) destiné à des machines moins puissantes. Il est léger et réactif.
<P></P>
<DT>i3</DT><DD>
est destiné à des utilisateurs plus avancés qui veulent un système entièrement configurable, utilisable sans trop lever les mains du clavier, et très réactif.
</DL>

<A NAME="shell"></A>
<H2>Le Shell</H2>

<P>
Le shell (<I>coquillage en anglais</I>) est appelé ainsi car il englobe cache le noyau du système d'exploitation.
</P>
<P>
C'est une caractéristique importante des systèmes d'exploitation Unix et Linux, que le shell et le noyau soient de programmes bien séparés. Ces deux programmes communiquent à travers un nombre limité d'appels système. Ainsi il est possible d'avoir différent shells, correspondant au gout de chacun.
</P>
<P>
Le shell normal devrait vous afficher un symbole <CODE>$</CODE>, la prompte. Nous n'allons pour le moment pas rentrer dans les détails seulement de la ligne de commande, et de la syntaxe du shell. Intéressons nous plutôt à ce qu'il se passe du côté de l'ordinateur.
</P>
<P>
Le Shell n'est rien d'autre qu'un processus utilisateur, et même pas un qui soit véritablement extraordinaire. Il attend que vous appuyiez sur le clavier, en écoutant (à travers le noyau) le port de communication de votre clavier. Le noyau voit les touches être pressées, et quand il reconnaît la touche entrée, il passe la ligne de texte à votre shell tentera d'interpréter ces événements comme des commandes.
</P>

<A NAME="toc4"></A>
<H3>Les différents shells</H3>

<DL>
<DT>sh</DT><DD>
C'est l'ancêtre de tous, le premier à avoir été écrit. Il a été conservé pour des raisons de compatibilité jusqu'à devenir part incontournable du standard POSIX
<P></P>
<DT>Bash</DT><DD>
C'est le descendant de sh. Il l'améliore et l'étends tout en restant compatible avec son papa. Ce qui fait de lui le shell pré installé par défaut sur <I>presque</I> toutes les distribution Linux
<P></P>
<DT>Zsh</DT><DD>
Un shell moderne avec une auto-complétion puissante, de belles couleur qui le rendent lisible, même sans configuration préalable.
<P></P>
<DT>Fish</DT><DD>
Un shell très pratique pour les débutants de la ligne de commande. Mais qui a une syntaxe parfois assez différente de Bash
</DL>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="065_login.php">Le Login</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="070_interface.php">Les Interfaces</A></TD>
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

<input type="hidden" name="page" value="067">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 067");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
