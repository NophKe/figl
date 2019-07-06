<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>L'arborescence</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>L'arborescence</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">Les différents types de fichiers</A>
    <UL>
    <LI><A HREF="#toc2">/home</A>
    <LI><A HREF="#toc3">/boot</A>
    <LI><A HREF="#toc4">/bin</A>
    <LI><A HREF="#toc5">/dev</A>
    <LI><A HREF="#toc6">/etc</A>
    <LI><A HREF="#toc7">/lib</A>
    <LI><A HREF="#toc8">/mnt</A>
    <LI><A HREF="#toc9">/proc</A>
    <LI><A HREF="#toc10">/root</A>
    <LI><A HREF="#toc11">/tmp</A>
    <LI><A HREF="#toc12">/srv</A>
    <LI><A HREF="#toc13">/sys</A>
    <LI><A HREF="#toc14">/usr</A>
    <LI><A HREF="#toc15">/var</A>
    <LI><A HREF="#toc16">/lost+found</A>
    </UL>
  </UL>

</DIV>

<A NAME="toc1"></A>
<H1>Les différents types de fichiers</H1>

<P>
Il existe différents types de fichiers, pour une liste non exhaustive :
</P>

<OL>
<LI>Documents de l'utilisateur
<LI>Programme
<LI>Librairies
<LI>Fichiers temporaires ...
<LI>Fichier de configuration
<LI>Les fichiers spéciaux
<LI>Les liens
</OL>

<P>
Nous n'allons pas détailler tout de suite,
</P>
<P>
Tout part de la partition racine, aussi appelée partition root, la slash, (<CODE>/</CODE>). Celle ci contient un certain nombre de dossier et sous dossier, et un certain nombre de fichiers.
</P>
<P>
La Philosophie Unix veut que « tout soit fichier » ainsi, écrire dans la mémoire vive, envoyer des données sur un bus, vérifier l'état d'un périphérique, modifier la configuration, éteindre un périphérique, activer un service... tout ceci correspondra à des actions sur des fichiers.
</P>
<P>
Vous vous en doutez, l'arborescence de Linux est une caverne au merveille, et on peut beaucoup apprendre en s'y promenant! Et, (vous vous en doutez aussi), l'arborescence contiendra ce que contiennent vos partitions, mais pas que...
</P>
<P>
Les différentes tentatives pour standardiser les choses à ce niveau ont donné peu de résultat, mais ici on ne regardera pas les sous-sous-sous-répertoires, donc, oubliez ce que je viens de dire! Et voici ce sur quoi il n'y a pas à discuter!
</P>

<A NAME="toc2"></A>
<H2>/home</H2>

<P>
Ici seront vos données, et sur une partition séparée de préférence. L'intérêt de les séparer physiquement est de pouvoir, par exemple, réinstaller Linux sans toucher à vos données. Donnez la taille que vous voulez. Chaque utilisateur aura son propre répertoire à l'intérieur de cette partition. Par exemple l'utilisateur Lambda aura comme répertoire personnel <CODE>/home/lambda</CODE>.
</P>

<A NAME="toc3"></A>
<H2>/boot</H2>

<P>
Ici se trouvent les noyaux, et ce qui est nécessaire pour l'exécution du chargeur de démarrage.
</P>

<A NAME="toc4"></A>
<H2>/bin</H2>

<P>
Binaries (exécutables), c'est ici que l'on trouve les applications (sans leur ressources, données, librairies...juste les exécutables)
</P>
<P>
En fait, souvent ce n'est pas un vrai répertoire, mais un lien vers <CODE>/usr/bin</CODE> (on va y venir)
</P>

<A NAME="toc5"></A>
<H2>/dev</H2>

<P>
Devices (périphérique), les fichiers qui se trouvent dans ce répertoire sont des fichiers spéciaux qui pointent vers des périphériques.
</P>
<P>
Les programmes peuvent donc communiquer avec le matériel soient par des appels système, soit en écrivant des données brutes dans les fichiers du répertoire /dev.
</P>
<P>
Les fichiers qui commencent par <CODE>/dev/sd</CODE> sont les <B>DISQUES</B>. Il y a de fortes chance pour que votre disque dur de boot soit en <CODE>/dev/sda</CODE>. Ils sont numérotés avec des lettres (<I>bizarre comme phrase</I>)
</P>
<P>
Les Fichiers qui commencent par <CODE>/dev/sdX</CODE> (ou X est une lettre minuscule suivie d'un chiffre) sont des <B>PARTITIONS</B> (votre partition racine pourrait être par exemple <CODE>/dev/sda1</CODE>)
</P>

<A NAME="toc6"></A>
<H2>/etc</H2>

<P>
Oui oui oui, c'est le répertoire « et cætera»! Tous les fichiers qui ne rentraient pas dans un de ces autres dossier, mais qui étaient trop importants pour qu'on les perde.
</P>
<P>
C'est dans ce dossier que se trouvent tous les fichiers de configuration du système.
</P>

<A NAME="toc7"></A>
<H2>/lib</H2>

<P>
Les librairies dont le système a besoin pour fonctionner.
</P>

<A NAME="toc8"></A>
<H2>/mnt</H2>

<P>
Un répertoire vide pour servir de point de montage temporaire.
</P>
<P>
C'est l'occasion d'évoquer que si vous montez une partition à l'intérieur d'un dossier et que ce dossier n'est pas vide. Linux va cacher le contenu de ce répertoire ; vous n'y aurez donc plus accès tant que quelque chose sera monté à cet endroit.
</P>
<P>
Donc laissez ce dossier vide.
</P>

<A NAME="toc9"></A>
<H2>/proc</H2>

<P>
C'est un système de fichier très particulier qui est monté en <CODE>/proc</CODE>. C'est véritablement la représentation que se fait le noyau de son environnement. Il contient un dossier pour chaque processus en cour d'exécution sur le système. (il faudrait parler des PID), ce dossier contient aussi le fichier <CODE>interrupts</CODE> et <CODE>meminfo</CODE> qui vous donneront des info sur l'utilisation du système. Il y a beaucoup à apprendre en explorant /proc.
</P>
<P>
C'est ce que l'on appelle un "pseudo-système de fichier".
</P>

<A NAME="toc10"></A>
<H2>/root</H2>

<P>
Le Super-utilisateur n'a pas son dossier personnel dans la /home, mais directement dans la partition racine, ainsi lors d'une panne du système, il peut se connecter à son shell correctement configuré, et avoir accès à ses fichiers.
</P>
<P>
Si vous allez faire quelque chose de dangereux, vous pouvez déconnecter tous les utilisateur, vous connecter en root, et démonter la <CODE>/home</CODE> et toutes les partitions qui craignent quelque chose.
</P>

<A NAME="toc11"></A>
<H2>/tmp</H2>

<P>
Pour les fichiers temporaires. Si votre gestionnaire d'initialisation est Systemd, il aura surement monté un "tmpfs" à cet endroit.
</P>
<P>
C'est un autre "pseudo-système" qui imite une véritable partition uniquement avec la mémoire vive. C'est bien plus rapide qu'un disque-dur, et utile pour les applications qui doivent constamment stocker une grosse quantité de données (pensez au streaming!)
</P>

<A NAME="toc12"></A>
<H2>/srv</H2>

<P>
Pour les répertoires partagés sur Internet.
</P>

<A NAME="toc13"></A>
<H2>/sys</H2>

<P>
<CODE>/proc</CODE> nous offrait la possibilité de voir ce qu'il se passait dans le noyau. Cette fois ci, le noyau nous propose une interface pour communiquer avec lui et les différents périphériques, en manipulant les fichiers de ce pseudo système.
</P>

<A NAME="toc14"></A>
<H2>/usr</H2>

<P>
C'est un peu le <CODE>C:\Program Files</CODE>de Gnu-Linux.
</P>
<P>
A la base, c'était le répertoire des dossiers utilisateurs, la <CODE>/home</CODE> de l'époque... Mais un jour au MIT, ils on eut des problèmes de stockage... Et ils on balancé <CODE>/bin, /lib, et les autres</CODE> ici!
</P>
<P>
Quand ils on eu un nouveau disque, ils ont déplacé le répertoire des utilisateurs dans <CODE>/home</CODE>, seul <CODE>/usr/share</CODE> (qui contient la documentation notamment) est resté en place. Depuis c'est comme çà, c'est historique!
</P>

<A NAME="toc15"></A>
<H2>/var</H2>

<P>
Des fichiers utiles mais pas indispensables. Les journaux de connections et autre journaux de surveillance du système. Une copie des paquetages que l'on installe...
</P>
<P>
Le carnet de maintenance en somme! Si vous ne voulez pas faire tournez un serveur, ou devenir agent secret, ne vous en souciez plus.
</P>

<A NAME="toc16"></A>
<H2>/lost+found</H2>

<P>
Parfois le système ne sait plus à quel fichier correspond un cluster d'un disque. À la racine de chacune des partition au format ext, il y aura ce répertoire.
</P>
<P>
C'est le système qui gère cela, ne vous en préoccupez pas trop, et éteignez votre ordinateur proprement.
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="110_disks.php">Les Disques</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="130_libre.php">La philosophie du Libre</A></TD>
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

<input type="hidden" name="page" value="120">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 120");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
