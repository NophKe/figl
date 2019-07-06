<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Le Codage de l'information</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Le Codage de l'information</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">La Mauvaise idée: l'analogique</A>
  <LI><A HREF="#toc2">Un Clavier à trois touches</A>
    <UL>
    <LI><A HREF="#toc3">Un clavier à une touche</A>
    <LI><A HREF="#toc4">La Représentation Binaire</A>
    <LI><A HREF="#toc5">Un peu de Maths et de notations</A>
    </UL>
  <LI><A HREF="#toc6">Les unités de l'informatique</A>
    <UL>
    <LI><A HREF="#toc7">Les multiples de l'octet</A>
    <LI><A HREF="#toc8">L'Arnaque des vendeurs</A>
    </UL>
  </UL>

</DIV>
<P>
Le Hardware c'est le matériel qui permet de traiter de l'information. Voyons un peu comment le matériel représente <B>physiquement</B> une information <B>virtuelle</B>.
</P>
<P>
Ce qui est finalement toute la sorcellerie du truc...
</P>

<A NAME="toc1"></A>
<H1>La Mauvaise idée: l'analogique</H1>

<P>
On parle d'analogique quand une information est représenté par une valeur physique qui peut prendre des valeurs continues...
</P>
<P>
Sur un vinyle, la hauteur des creux et des bosses sur le sillon, c'est la musique. Véritablement, je veux dire. Il y a corrélation entre la fréquence des creux et la note. Et ainsi, toutes les valeurs sont permises. Dans le monde de l'analogique, il existe une infinité de valeurs entre un et deux....Le monde du continu c'est notre bon vieux monde physique, tout y est fragile. Et chaque lecture du vinyle l'abime peu à peu.
</P>
<P>
En informatique, on veut que les valeurs soient toujours exactes! L'informatique n'est pas une discipline du monde physique. C'est une discipline de l'information. Faire passer un courant électrique variable sur le port d'un périphérique pour représenter différentes valeurs n'est pas viable.
</P>
<P>
Si l'on veut qu'un ordinateur soit prédictif, il faut que ce dernier puisse utiliser ses algorithme sur des données qui ne sont pas analogiques. Le codage de certaines informations <I>(comme oui et non, vrai et faux)</I> ne peuvent pas toujours être continues.
</P>
<P>
En effet, comment interpréter une valeur à mi chemin? Si mon clavier possède trois touches, à quoi correspond une intensité de 2,5? Est-ce 2? Est-ce que c'est 3 qu'il faut comprendre?
</P>
<P>
Vous ne voudriez pas d'un clavier qui se trompe!
</P>
	<BLOCKQUOTE>
	« - Monsieur votre machine de vote électronique n'a que trois touches ! GAUCHE  , DROITE , et INSOUMISSION CITOYENNE! J'ai appuyé sur INSOUMISSION CITOYENNE et ça a quand même voté pour DROITE ! »
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	« - Oui mais vous savez.... Ce n'est pas par ce qu'il n'y a que trois touches que c'est infaillible à tous les coups...»
	</BLOCKQUOTE>

<A NAME="toc2"></A>
<H1>Un Clavier à trois touches</H1>

<P>
Comme nous l'avons vu au paragraphe précédent, en informatique, nous codons les informations sous forme de données binaires ( qui ne peuvent prendre que deux valeurs 0 ou 1, vrai ou faux....). Une unique information binaire est un BIT d'information. Un bit est l'unité minimum du codage de l'information.
</P>
<P>
Le Bit c'est la décimale du binaire! ( Binary Digit )
</P>
<P>
Donc on y va pour un clavier à trois touches... Mais d'abord commençons petit.!
</P>
<P>
Vous vous rappelez de ce qu'est un bus ?
</P>

<A NAME="toc3"></A>
<H2>Un clavier à une touche</H2>

<P>
En informatique, on veut que les valeurs soient toujours exactes! Sur un unique fil, les valeurs ne peuvent être que:
</P>

<UL>
<LI><B>OUI</B> (ou UN): le courant passe
<LI><B>NON</B> (ou ZÉRO): le courant ne passe pas.
</UL>

<P>
Prenons maintenant le cas très simple d'un clavier qui n'aurait qu'une unique touche. Celui-ci ne posséderait donc que deux positions: «touche appuyées » et « touche pas appuyée ». Ce clavier fonctionnerait donc comme une sorte d'interrupteur à deux positions, et un bus de un bit nous suffirait pour recueillir l'information qui proviendrai de ce clavier.
</P>
<P>
Oui mais un fil d'entrée de l'interrupteur et un fil à sa sortie, donc deux fils! Oui mais mais <B>non</B>! On a déjà dit dans le matériel qu'un  bus c'est un port débarrassé de toute considération matérielle.
</P>
<P>
Plutôt que de parler de fil qui laisse ou non passer le courant, on dira plus simplement qu'un <B>bus</B> avec un seul fil d'information est un bus de un <B>BIT</B>.
</P>
<P>
C'est pour cela que l'on parle de données binaires. Cela signifie qu'elle ne peuvent prendre que deux valeurs par bit d'information.
</P>

<A NAME="toc4"></A>
<H2>La Représentation Binaire</H2>

<P>
Si nous voulons cette fois créer ci un clavier avec trois touches, A, B, et C, nous pourrions le faire avec un bus de trois bits.
</P>

<TABLE BORDER="1">
<TR>
<TD>PREMIER FIL</TD>
<TD>SECOND FIL</TD>
<TD>TROISIÈME</TD>
<TD>VALEUR BINAIRE</TD>
<TD>TOUCHE CLAVIER</TD>
</TR>
<TR>
<TD>0</TD>
<TD>0</TD>
<TD>0</TD>
<TD>000</TD>
<TD>aucune</TD>
</TR>
<TR>
<TD>0</TD>
<TD>0</TD>
<TD>1</TD>
<TD>001</TD>
<TD>A</TD>
</TR>
<TR>
<TD>0</TD>
<TD>1</TD>
<TD>0</TD>
<TD>010</TD>
<TD>B</TD>
</TR>
<TR>
<TD>1</TD>
<TD>0</TD>
<TD>1</TD>
<TD>100</TD>
<TD>C</TD>
</TR>
</TABLE>

<P>
Nous pourrions d'ailleurs ajouter autant de fil que nécessaires pour que chaque touche aie son propre fil distinctif, mais cela ne serait pas vraiment pratique car cela finirait par faire pas mal de fils...
</P>
<P>
Si nous voulons cette fois créer un clavier avec trois touches, A, B, et C avec un bus de deux bits.
</P>

<TABLE BORDER="1">
<TR>
<TD>PREMIER FIL</TD>
<TD>SECOND FIL</TD>
<TD>VALEUR BINAIRE</TD>
<TD>TOUCHE CLAVIER</TD>
</TR>
<TR>
<TD>0</TD>
<TD>0</TD>
<TD>00</TD>
<TD>aucune appuyée</TD>
</TR>
<TR>
<TD>0</TD>
<TD>1</TD>
<TD>01</TD>
<TD>A</TD>
</TR>
<TR>
<TD>1</TD>
<TD>0</TD>
<TD>10</TD>
<TD>B</TD>
</TR>
<TR>
<TD>1</TD>
<TD>1</TD>
<TD>11</TD>
<TD>C</TD>
</TR>
</TABLE>

<P>
Mais la deuxième solution n'est pas forcément la meilleure... Supposons que je veux créer une combinaison de touche, telle que si j'appuie sur A et B en même temps que cette touche ce soient les lettres minuscule au lieu des majuscules.
</P>
<P>
Il me suffit de remplacer ma lettre C par shift !
</P>

<TABLE BORDER="1">
<TR>
<TD>PREMIER FIL</TD>
<TD>SECOND FIL</TD>
<TD>TROISIÈME</TD>
<TD>VALEUR BINAIRE</TD>
<TD>TOUCHE CLAVIER</TD>
</TR>
<TR>
<TD>0</TD>
<TD>0</TD>
<TD>0</TD>
<TD>000</TD>
<TD>aucune</TD>
</TR>
<TR>
<TD>0</TD>
<TD>0</TD>
<TD>1</TD>
<TD>001</TD>
<TD>A</TD>
</TR>
<TR>
<TD>0</TD>
<TD>1</TD>
<TD>0</TD>
<TD>010</TD>
<TD>B</TD>
</TR>
<TR>
<TD>1</TD>
<TD>0</TD>
<TD>0</TD>
<TD>100</TD>
<TD>shift</TD>
</TR>
<TR>
<TD>1</TD>
<TD>0</TD>
<TD>1</TD>
<TD>101</TD>
<TD>a</TD>
</TR>
<TR>
<TD>1</TD>
<TD>1</TD>
<TD>0</TD>
<TD>110</TD>
<TD>b</TD>
</TR>
</TABLE>

<P>
On voit que si l'on s'intéresse uniquement à la partie de droite (les deux derniers bits), on sait de quelle lettre il s'agit. Mais l'on est insensible à sa casse. ( On ne sait pas si c'est une majuscule ou une minuscule )
</P>

<A NAME="toc5"></A>
<H2>Un peu de Maths et de notations</H2>

<P>
Bon, maintenant, réfléchissons un instant à cette question: combien de valeurs différentes un bus de UN bit peut-il prendre? La réponse est simple soit 0 soit 1. Donc deux valeurs différentes.
</P>
<P>
Autre question: combien de valeurs différentes un bus de QUATRE bits peut-il prendre? La réponse est simple, seize! ( 0000 / 0001 / 0010 / 0011 / 0100 / 0101 / 0110 / 0111 / 1000 / 1001 / 1010 / 1011 / 1100 / 1101 / 1110 / 1111 ).
</P>
<P>
Alors on s'est mis à utiliser la base seize...
</P>
<P>
Le principe est simple en décimal, arrivé au NEUF ( 9 ), on a plus de symbole disponible, alors on note DIX ( 10 ) sur deux symboles.
</P>
<P>
En binaire on fait pareil, arrivé à UN ( 1 ), on commence à écrire avec deux symboles, et on note DEUX ( 10 ), puis TROIS ( 11 )...
</P>
<P>
Donc en hexadécimal, c'est pareil avec seize symboles... Le  A symbolise le dix, B pour le onze.... F pour quinze.
</P>
<P>
« Il n'y a que 10 catégories des personnes sur Terre:
</P>

<UL>
<LI>Ceux qui lisent le binaire
<LI>Et les autres...»
</UL>

<HR NOSHADE SIZE=1>

<P>
Plus sérieusement. A partir de maintenant, on mettra toujours:
</P>

<UL>
<LI>0x avant un nombre en hexadécimal
<LI>bx avant un nombre écrit en binaire
</UL>

<P>
Ainsi on ne se trompera pas entre 0x10 (SEIZE) et 10 (DIX) et bx10 (DEUX)...
</P>

<HR NOSHADE SIZE=1>

<A NAME="toc6"></A>
<H1>Les unités de l'informatique</H1>

<P>
Comme le bit est une unité de base, on s'est très vite mis à utiliser ses multiples. Ainsi, 8 bits est un OCTET.
</P>
<P>
Pourquoi huit et pas dix? Je ne rentre pas là dedans, cela date de la préhistoire de l’informatique, à l'époque ils utilisaient des claviers à huit touches pour les cartes perforées... Mais notons que huit bits binaires peuvent être représentés par un hexadécimal à deux chiffre.... Ce qui est encore à peu près humainement manipulable comme notation...
</P>
<P>
<U>Attention:</U>
</P>

<DL>
<DT>un bit (abrégé b minuscule)</DT><DD>
Se prononce «bite» est l'unité de base qui code une information binaire ( un zéro ou un un )
<DT>un Byte (abrégé B majuscule)</DT><DD>
est la traduction en anglais d'un octet (et se prononce bayte)
<P></P>
<DT>un octet (abrégé o)</DT><DD>
vaut huit bits
</DL>

<P>
C'était les unités de la préhistoire, et personne n'avait rien à y redire...
</P>

<A NAME="toc7"></A>
<H2>Les multiples de l'octet</H2>

<P>
Dernière question: combien de valeurs différentes un bus de DIX bits peut-il prendre? La réponse est simple, mille vingt-quatre! (c'est la que l'on s'est fait avoir par le vendeur...)
</P>
<P>
Une adresse écrite sur dix bits peut prendre mille vingt-quatre valeurs différentes. C'est une valeur qui nous parle à nous qui sommes habitué à compter en décimal.
</P>
<P>
Comme pour les autres unités de la vie courante, on se mit très vite à parler de «Kilo-octets». Mais attention, c'est assez trompeur car ce ne sont pas des kilos qui valent mille! Ce sont des kilos qui valent mille vingt-quatre!
</P>
<P>
La convention ( bien qu'elle ne soit pas vraiment respectée par tous ) demande d'utiliser les unités ainsi:
</P>

<DL>
<DT>Une « mille-vingt-quatraine » d'octet</DT><DD>
c'est aussi un Kilo-octet ( abrégé Kio en français et KiB en anglais)
</DL>

<P>
Remarquez bien le petit « i » dans l'unité abrégée.
</P>

<UL>
<LI>Un méga-octet (Mio) est mille-vingt-quatre kilo-octets (Kio)
<LI>Un giga-octet (Gio) est mille-vingt-quatre méga-octets (Mio)
</UL>

<A NAME="toc8"></A>
<H2>L'Arnaque des vendeurs</H2>

<P>
Les vendeurs de disques durs, on très vite compris qu'ils avaient cependant intérêt à ne pas utiliser des kilos de quatre-vingt-quatre... Ils utilisent des kilos qui valent mille pour que les capacités de leur disques paraissent plus impressionnantes. C'est pour cette raison que lors ce que vous achetez une clef USB, sa capacité est souvent inférieure à celle qui était annoncée sur l’emballage....
</P>
<P>
Et plus on va avancer dans les multiples, pire ce sera!
</P>

<DL>
<DT>Un millier d'octet</DT><DD>
est aussi un Kilo-octet en français ( abrégé Ko et KB en anglais )
</DL>

<UL>
<LI>Un méga-octet (Mo) est mille kilo-octets (Ko)
<LI>Un giga-octet (Go) est mille méga-octets (Mo)
<P></P>
<LI>Remarquez l'absence du petit  « i » !
</UL>

<P>
D'autres vendeurs jouent sur la parenté entre bit et Byte (octet en anglais) pour parler de débits en bits/seconde et mégabits/seconde (Mbit/s) plutôt que de Kilo-octet/seconde !
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="040_clavier.php">Le clavier</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="060_boot.php">Le Boot</A></TD>
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

<input type="hidden" name="page" value="050">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 050");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
