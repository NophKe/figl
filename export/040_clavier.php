<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Le clavier</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Le clavier</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">Des Touches étranges</A>
  </UL>

</DIV>
<P>
Le clavier est probablement l'interface la plus pratique pour communiquer avec un ordinateur.
</P>
<P>
On va prendre la peine de donner la signification et l'utilité de certaines touches, mais si vous souhaitez sauter cette page, libre à vous.
</P>
<P>
<U>Un Clavier se compose de:</U>
</P>

<UL>
<LI>Une série de touche correspondantes à des lettres, symboles et chiffres
<LI>Des touches "Fonction" notées F1 à F12
<LI>La touche TAB (souvent notée avec deux flèches en opposition), qui représente une tabulation (L'espace blanc en début de ligne, pour faire apparaitre les paragraphes.)
<LI>La touche CAPS-LOCK (souvent un dessin de cadenas) verrouille l'accès aux majuscules jusqu'au prochain appui.
<LI>La touche Shift (Flèche vers le haut) qui permet de ne mettre en majuscule que la touche à laquelle on l'associe, ou d'obtenir le symbole noté sur le haut de la touche.
<LI>La touche AltGr qui permet d'obtenir le symbole noté en bas à droite de certaines touches.
<LI>D'un pavé numérique (le bloc de chiffres), (et la touche Verr-Num qui permet de l'activer!)
<LI>D'autres touches encores plus étranges (Impécr , Pause , Suppr, Inser... ), on y revient vite! 
</UL>

<P>
Un combo ou combinaison de touche c'est le fait d'appuyer sur deux touches à la fois, par exemple, [ Alt + F4 ] permet de fermer la fenêtre courante sous Windows.
</P>

<A NAME="toc1"></A>
<H1>Des Touches étranges</H1>

<DL>
<DT>Esc</DT><DD>
<P></P>
La touche Echap (parfois Esc, pour «escape»). Elle sert en général à revenir au menu principal d'une application, ou à laisser tomber une action qui a débutée. (Prendre la poudre d'ESCampette...)
En fait, c'est en fait un combo... c'est Ctrl +  ]
<P></P>
<DT>Impécr</DT><DD>
<P></P>
A l'origine cette touche imprimait littéralement l'écran sur une imprimante. Utile pour les terminaux dépourvus d'écran (y'a longtemps....)
<P></P>
<DT>Syst</DT><DD>
<P></P>
J'ai jamais su d'où elle vient elle.
<P></P>
<DT>Pause</DT><DD>
<P></P>
Servait stopper le défilement de l'écran dans un terminal.
<P></P>
<DT>Attn</DT><DD>
</DL>

<DL>
<DT>Inser</DT><DD>
<P></P>
Passer du mode insertion au mode remplacement quand on édite un texte. Si vous ne voyez pas de quoi je parle essayez d'éditer du texte dans n'importe quel éditeur puis replacez votre curseur au milieu du texte que vous venez de taper, appuyez sur cette touche, et recommencez à entrer du texte. Vous comprendrez aisément, c'est assez intuitif.
<P></P>
<DT>Suppr</DT><DD>
<P></P>
Comme la touche d'effacement mais efface le caractère sous le curseur.
<P></P>
<DT>Fin</DT><DD>
<P></P>
Aller à la fin quand on est en train d'éditer du texte.
<P></P>
<DT>Ctrl</DT><DD>
<P></P>
C'est la touche pour faire des combos... Notamment pour faire des caractères de contrôle, qui sont des caractères d'échappement à l'attention du shell. (on va y venir...)
<P></P>
<DT>Alt</DT><DD>
<P></P>
Elle est aussi appellée « Meta ».
<P></P>
<DT>La touche avec le logo Windows</DT><DD>
Elle est laissé à la disposition de l'interface graphique pour que cette dernière puisse y lier des combos.
<P></P>
<DT>Fn</DT><DD>
<P></P>
La touche Fn donne accès aux fonctions multimédia des claviers modernes (Réglage de volume, luminosité...)
<P></P>
<DT>la touche Menu</DT><DD>
<P></P>
Elle simule un clique droit de la souris.
</DL>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="030_periph.php">Les Périphériques</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="050_coding.php">Le Codage de l'information</A></TD>
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

<input type="hidden" name="page" value="040">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 040");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
