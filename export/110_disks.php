<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Les Disques</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Les Disques</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#disque">Quelques définitions</A>
  <LI><A HREF="#partition">Les Partitions</A>
    <UL>
    <LI><A HREF="#toc3">Principes</A>
    <LI><A HREF="#toc4">A la mode Microsoft</A>
    <LI><A HREF="#toc5">The Unix_ Way</A>
    <LI><A HREF="#toc6">Pourquoi partitionner?</A>
    <LI><A HREF="#toc7">Un partitionnement classique</A>
      <UL>
      <LI><A HREF="#toc8">Autres partitionements</A>
      </UL>
    </UL>
  <LI><A HREF="#format">Les systèmes de fichiers</A>
    <UL>
    <LI><A HREF="#toc10">Généralités</A>
      <UL>
      <LI><A HREF="#toc11">Format de partition</A>
      <LI><A HREF="#mbr">La table de partitionnement</A>
      </UL>
    <LI><A HREF="#toc13">Les principaux formats</A>
      <UL>
      <LI><A HREF="#ext">Le format ext (ext2, ext3, ext4)</A>
      <LI><A HREF="#swap">SWAP</A>
      <LI><A HREF="#toc16">Fat et Ntfs</A>
      </UL>
    </UL>
  </UL>

</DIV>

<A NAME="disque"></A>
<H1>Quelques définitions</H1>

<DL>
<DT>Fichier</DT><DD>
Des données auxquelles on peut avoir accès dans un système de fichiers
<P></P>
<DT>Dossier</DT><DD>
Ce qui nous permet de classer et de ranger ces fichiers
<P></P>
<DT>Arborescence</DT><DD>
Structure de dossiers imbriqués les uns à l'intérieur des autres
</DL>

<P>
<U>Le terme « système de fichier » peut être compris de deux façons différentes:</U>
</P>

<UL>
<LI>Un ensemble de fichiers et de dossiers réunis sous la forme d'un disque (ou d'une partition de disque)
<LI>Un ensemble de partitions et de disques, présentés par le système d'exploitation sous la forme d'une arborescence globale
</UL>

<P>
La confusion vient du fait que le disque, avant qu'il ne soit branché sur votre ordinateur est <B>UN</B> système de fichier (le système de fichier du disque, de la partition, son <I>format</I> dit on aussi maladroitement)....
</P>
<P>
A l'inverse, le disque (une fois correctement installé/branché/monté), s'intègre dans <B>LE</B> système de fichier de votre ordinateur (celui que présente votre système d'exploitation)
</P>
<P>
L'homonymie fonctionne pareil en anglais (filesystem), alors faites attention!
</P>

<A NAME="partition"></A>
<H1>Les Partitions</H1>

<A NAME="toc3"></A>
<H2>Principes</H2>

<P>
Partitionner un disque dur, c'est schématiquement, le découper, pour recréer virtuellement le fonctionnement de plusieurs disques.
</P>
<P>
Mais cela permet aussi à l'inverse de rassembler plusieurs partitions (ou plusieurs disques) en un seul disque virtuel. <I>(et c'est franchement pas commun pour un ordinateur personnel)</I>
</P>

<A NAME="toc4"></A>
<H2>A la mode Microsoft</H2>

<P>
Les utilisateurs de Windows sont généralement habitués à ce que chacun de leur disque dur soit représenté de façon unique et équivoque, sous la petite icône " ordinateur " ou " poste de travail"!
</P>
<P>
Sous Windows chaque partition d'un disque se voit attribuer une lettre. La partition sur laquelle sont enregistrés les fichiers nécessaires au fonctionnement du système d'exploitation Windows sont souvent sur le lecteur C:\. Les partitions des différents disques durs (et les lecteurs amovibles, lecteur CD, clé USB...) prennent les lettres suivantes. À l'intérieur d'un disque dur on peut créer une arborescence de fichiers et de dossiers.
</P>
<P>
Toutefois, si l'on remonte au répertoire parent jusqu'en haut, alors, on aboutit à un moment singulier, on arrive dans "l'ordinateur", le "poste de travail". Quand vous êtes précisément dans votre poste de travail, vous ne pouvez pas créer de dossiers à cet endroit là. Vous n'êtes pas dans un véritable dossier, vous êtes dans un programme qui vous donne accès aux différents lecteurs. Windows présente donc chaque lecteur comme une arborescence séparée des autres.
</P>

<A NAME="toc5"></A>
<H2>The Unix_ Way</H2>

<P>
Sous Linux, vous avez une première partition qui est la partition racine (<CODE>/</CODE>). Elle est le sommet de l'arborescence (comme le Poste De Travail), mais elle est aussi une partition tout à fait ordinaire. (même si elle contient des fichiers importants)
</P>
<P>
Et c'est à l'intérieur de cette partition, que vous créez des dossiers dans lesquels apparaitrons vos autres partitions...
</P>
<P>
Sous Linux, il n'existe donc qu'une seule arborescence, et vous décidez de l'endroit où vous <B>montez</B> vos partitions à l'intérieur de celle-ci... Cela est beaucoup plus astucieux car on peut ainsi rajouter de l'espace disque à une partition saturée en <B>montant</B> un nouveau disque à l'intérieur de celle-ci.
</P>

<A NAME="toc6"></A>
<H2>Pourquoi partitionner?</H2>

<P>
Sous Gnu-Linux on privilégiera une installation sur plusieurs partitions.
</P>
<P>
C'est comme si Windows insistait pendant son installation pour que votre répertoire "Mes Documents" votre "Bureau" et toute votre configuration ne soit surtout pas sur le même disque que lui... (gentil !)
</P>

<A NAME="toc7"></A>
<H2>Un partitionnement classique</H2>

<P>
Un schéma de partitionnement classique pour les ordinateurs de bureau, serait le suivant :
</P>

<UL>
<LI>une partition racine pour le système d'exploitation (<CODE>/</CODE>)
<LI>une partition SWAP pour les fichiers temporaires
<LI>une partition pour les données de l'utilisateur et ses fichiers de configuration. (<CODE>/home</CODE>)
</UL>

<P>
Ce schéma de partitionnement à l'avantage de séparer les données de l'utilisateur de la partition se trouve le système d'exploitation. En cas d'un crash système d'exploitation, si ce dernier se retrouve inutilisable, on pourra effacer tout le contenu de la partition qui le contient... sans se poser de questions!
</P>
<P>
On pourra ensuite réinstaller un système d'exploitation dessus. On remontera la partition des utilisateurs au même endroit, et ces derniers n'auront rien vu (ils retrouverons leur configuration).
</P>

<A NAME="toc8"></A>
<H3>Autres partitionements</H3>

<P>
Une partition de sauvegarde de vos fichiers (pas la <CODE>/home</CODE> mais plutôt <CODE>/home/nono/SAUVEGARDE</CODE> ou pour la mettre un peu à l'écart <CODE>/sauvegardes</CODE>) peut vous sauver la mise parfois (Éventuellement dans un format lisible depuis Windows...).
</P>
<P>
Dans le cas d'un multi-boot avec Windows, et si votre bios fonctionne en Uefi, vous aurez besoin d'une partition Efi.
</P>
<P>
On peut également vouloir créer des partitions pour d'autres dossiers comme <CODE>/etc</CODE> pour restaurer aussi la configuration globale du système d'exploitation! Mais si vous n'installez pas la même distribution de Gnu-Linux pour votre prochaine installation, il faudra faire le ménage! (fichiers devenus inutiles, config incompatibles avec la nouvelle distribution...) Aussi, au début, on préfèrera le limiter à des schémas classiques, et sauvegarder les fichiers de configuration que l'on connait, ou qu'on a modifié soi même. Plus vous serez à l'aise avec les partitions et les différents dossiers de l'arborescence, plus vous personnaliserez en fonction de vos gout et de votre configuration matérielle.
</P>

<A NAME="format"></A>
<H1>Les systèmes de fichiers</H1>

<A NAME="toc10"></A>
<H2>Généralités</H2>

<P>
Un disque dur n'est rien qu'un grand espace dans lequel vous pouvez écrire de ZÉROs et des UN. C'est le système de fichier qui permet de lui donner une structure, et qui nous le fait apparaitre comme des fichiers organisés dans une arborescence de dossiers... Mais le disque en lui même ne contient ni case, ni index.
</P>
<P>
Pour bien faire la différence entre le système de fichier et le système de fichiers (introduction) car après on s'y perd...
</P>
<P>
Je dirais L'ARBORESCENCE pour parler <B>du tout</B> (l'arborescence hiérarchique composée de plein partition de plein de disque et plus encore que nous présente le système d'exploitation).
</P>
<P>
Les autres termes sont synonymes! Pour une fois qu'en français, notre langue fourche pour ne pas dire le même mot pour deux choses différentes, et que c'est plus précis que la bonne terminologie, on ne va pas s'en priver...
</P>
<P>
On utilise la commande <CODE>mount</CODE> pour monter les partitions sur la hiérarchie des dossiers.
</P>
<P>
Au démarrage le noyau monte la partition root au sommet de l'arborescence mais en lecture seulement. La commande <CODE>fsck</CODE> est utilisée pour vérifier que le disque n'a pas été endommagé. Ensuite seulement, le noyau remonte la partition racine en lecture/écriture.
</P>

<A NAME="toc11"></A>
<H3>Format de partition</H3>

<P>
Le système de fichier est ce qui définit comment l'ordinateur doit consigner les données (comment séparer la fin d'un fichier du début du prochain, ou se situe l'index...)
</P>
<P>
Chaque système de fichier présente des avantages et inconvénients. Certains n'autorisent pas les noms de fichier de plus de 12 caractères, mais sont redoutablement rapides! D'autres vous permettent d'effectuer des sauvegarde automatique de votre système et de pouvoir le restaurer <B>exactement</B> tel qu'il était à une date donnée... Certains sont optimisés pour certains matériels (carte sd, disque-dur, ssd), il y en a de nombreux! Certains ont besoin d'une défragmentation régulière pour survivre...
</P>
<P>
Windows sait lire les partitions au format Fat32 et Ntfs (J'exclue certes cd, dvd, et autres disques en lecture seule). Linux sait lire des dizaines de formats.
</P>

<A NAME="mbr"></A>
<H3>La table de partitionnement</H3>

<P>
Une section immédiatement au début de chaque disque est normalisée, elle contient la table de partitionnement. Celle-ci décrit le nombre de partitions, leur taille, leur format et leurs places respectives sur le disque.
</P>
<P>
C'est un secteur réservé, et aucun programme n'est supposé y toucher excepté le gestionnaire de démarrage, et les logiciels de partitionnement (et <CODE>dd</CODE> bien sûr).
</P>
<P>
Durant presque trente ans, jusqu'en 2005 environ, les tables de partition étaient au format MBR, ce dernier impose quelques limitations comme:
</P>

<UL>
<LI>pas plus de 4 partitions primaires et pour avoir un nombre de partitions supérieur on devait
<LI>créer une partition primaire de type étendue et créer des sous partition à l'intérieur de celle ci
<LI>Pas la possibilité d'adresser plus de 2 tera-octet de disque
</UL>

<P>
Les nouvelles tables de partition GPT on des limitations beaucoup plus larges (96 partitions par disque)
</P>
<P>
Si votre carte mère possède un Micrologiciel BIOS, elle s'attend <I>surement</I> à une table de partition MBR
Si votre carte mère possède un Micrologiciel UEFI, elle s'attend à une table de partition GPT.
</P>
<P>
Faites attention avec les logiciels de partitionnement! Mal les utiliser peut conduire à une destruction de toutes vos données.
</P>

<A NAME="toc13"></A>
<H2>Les principaux formats</H2>

<P>
Ce qui est à peu près commun pour tous les systèmes de fichier, c'est qu'il découpent l'espace du disque en adresses, et qu'il identifient les fichiers par des inodes, et que ces inodes décrivent les fichiers et les informations qui leur sont relatives.
</P>
<P>
Les dossiers sont eux aussi représentés sous la formes d'inodes, et contiennent en plus la liste des inodes des fichiers qu'ils contiennent.
</P>
<P>
Quand le système d'exploitation essaie de lire <CODE>/home/nono/grololo.jpeg</CODE>. Il cherche d'abord l'inode de <CODE>/</CODE> qui lui fournit l'inode de <CODE>/home</CODE>, qui lui fournit l'inode de <CODE>grololo.jpeg</CODE> qui indique enfin à quelle adresse du disque trouver la ressource.
</P>
<P>
Si l'on ajoute des données sur un disque, il peut arriver que les données soient écrites avant que l'inode n'ait été mis à jour. Si le courant coupe au mauvais moment, perdre un inode, c'est parfois perdre un répertoire majeur de l'arborescence! Ce problème a mené à l'invention des systèmes de fichier journalisés.
</P>

<A NAME="ext"></A>
<H3>Le format ext (ext2, ext3, ext4)</H3>

<P>
Dans ce format, l'inode, de chaque fichier indique:
</P>

<UL>
<LI>l'utilisateur propriétaire du fichier
<LI>les droits de lecture/écriture/exécution de l'utilisateur propriétaire
<LI>le groupe propriétaire du fichier
<LI>les droits de lecture/écriture/exécution du groupe propriétaire
<LI>les droits de lecture/écriture/exécution pour tous les autres utilisateurs
<LI>les dates de dernier accès,de dernière modification, de création.
<LI>les attributs....
<LI>j'oublie quelque chose?
</UL>

<P>
C'est un système de fichier qui n'a pas besoin de défragmentation, et il est journalisé depuis la version 3.
</P>
<P>
C'est un système de fichier créé pour Gnu-Linux. D'autres formats ne lui permettrait pas de déployer tout son potentiel. En effet, tous les formats ne permettent pas de définir des droit d'accès par utilisateur et par groupe au niveau de chaque fichier, et chaque répertoire....
</P>
<P>
On peut aussi donner des attributs au fichiers et aux répertoires comme:
</P>

<UL>
<LI>interdire à l'écriture même par le propriétaire
<LI>interdire de modifier un fichier tout en ayant le droit d'écrire à sa suite comme un journal de bord...)
<LI>créer des fichiers spéciaux... (suspens!)
</UL>

<P>
Le fait de pouvoir définir des droits d'accès spécifiques fichiers par fichiers est un des point fondamental de la gestion de la sécurité sous Gnu-Linux. Nous reverrons plus loin comment l'on gère ces attributs.
</P>

<A NAME="swap"></A>
<H3>SWAP</H3>

<P>
Sous les environnements Windows, on dit que la mémoire est libre quand elle n'est utilisée par aucune application. Les applications réclament de l'espace mémoire, Windows leur alloue une partie de cet espace, et quand l'espace est entièrement saturé, Windows utilise un fichier qu'il appelle « le fichier d'échange » dans lequel il se défausse d'une partie de la mémoire. Le fichier d'échange est ainsi beaucoup moins rapide que la mémoire vive.
</P>
<P>
Sous Linux, on fait la différence entre la mémoire disponible et la mémoire libre. Le système d'exploitation considère que de l'espace mémoire non utilisé est un gâchis. Si la mémoire vient à manquer, le système n'a pas un fichier particulier dans lequel se défausser.
</P>
<P>
En effet sous Gnu-Linux, on prévoit une partition entièrement dédiée à cela. On appelle cette partition la swap. Elle est formatée à chaque démarrage. Son format de fichier est optimisé pour les écritures réécritures fréquentes. C'est le seul type de partition que vous ne pouvez pas monter dans l'arborescence.
</P>
<P>
C'est aussi à cet endroit que le système copiera la mémoire sur le disque en cas d'hibernation/mise en veille prolongée! Ainsi elle doit toujours être au moins de la taille de la ram.
</P>

<A NAME="toc16"></A>
<H3>Fat et Ntfs</H3>

<P>
Vous n'avez pas le choix si vous voulez que Microsoft Windows lise un disque-dure, ce sera l'un de ces deux formats que vous devrez utiliser.
</P>
<P>
Fat16 est archaïque. Fat32 a l'avantage d'être très lisible notamment pour les appareil vidéos et les clefs usb, mais il n'est pas journalisé. On doit absolument démonter le disque avant de le retirer, (« Retirer le périphérique » çà vous dit quelque chose?)
</P>
<P>
Pas de disque de plus de 2 tera-octets, ni de fichier de plus de 4 giga-octet en Fat32.
</P>
<P>
Ntfs est beaucoup moins limité, et il est journalisé.
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="100_unix.php">Unix...</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="120_arborescence.php">L'arborescence</A></TD>
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

<input type="hidden" name="page" value="110">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 110");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
