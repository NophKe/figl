<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Les commandes de base</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Les commandes de base</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">Et maintenant?</A>
  <LI><A HREF="#toc2">Se déplacer parmis les dossiers</A>
    <UL>
    <LI><A HREF="#toc3">Rappel</A>
    <LI><A HREF="#toc4">pwd  =Print Working Directory</A>
    <LI><A HREF="#toc5">cd =Change Directory</A>
    <LI><A HREF="#toc6">slash, . et ..</A>
    <LI><A HREF="#toc7">ps =Print Services</A>
    <LI><A HREF="#toc8">du =Disk Used</A>
    <LI><A HREF="#toc9">df =Disk Free</A>
    </UL>
  <LI><A HREF="#toc10">Autres programmes importants</A>
    <UL>
    <LI><A HREF="#toc11">less et more</A>
    <LI><A HREF="#toc12">man =le MANuel</A>
    </UL>
  <LI><A HREF="#toc13">ls*</A>
    <UL>
    <LI><A HREF="#toc14">ls</A>
    <LI><A HREF="#toc15">lsblk</A>
    <LI><A HREF="#toc16">lscpu</A>
    <LI><A HREF="#toc17">lslogins</A>
    </UL>
  <LI><A HREF="#toc18">rm =ReMove</A>
  <LI><A HREF="#toc19">Les commandes qui vont d'elle même</A>
  </UL>

</DIV>

<A NAME="toc1"></A>
<H1>Et maintenant?</H1>

<P>
Encore une fois je vous conseille de réaliser cette page pour de vrai dans votre console et de vous entrainer ainsi à réaliser les choses. Vous verrez que la pratique vient plus vite qu'on ne le pense!
</P>
<P>
Vous avez suivi la page précédente sur le shell et il ne vous manque plus que quelques connaissances pour commencer à utiliser pleinement le shell! Vous avez la grammaire, maintenant passons au vocabulaire.
</P>

<A NAME="toc2"></A>
<H1>Se déplacer parmis les dossiers</H1>

<A NAME="toc3"></A>
<H2>Rappel</H2>

<UL>
<LI>Sur les systèmes basés sur Unix, on « monte » les partitions de disques dans des dossiers.
<LI>On peut monter une partition dans un dossier qui lui mêmes se trouve dans une partition.
<LI>Il existe une partition racine, qui contient le système, <CODE>/</CODE> à l'intérieur de laquelle vient se greffer toutes les autres.
<LI>Chaque fichier possède des droits d'accès/écriture et d'éxécution 
</UL>

<A NAME="toc4"></A>
<H2>pwd  =Print Working Directory</H2>

<P>
Il affiche le répertoire courant ainsi:
</P>

<PRE>
$ pwd
/home/nono
$ _
</PRE>

<A NAME="toc5"></A>
<H2>cd =Change Directory</H2>

<P>
Il permet de changer de répertoire courant!
</P>

<PRE>
$ pwd
/home/nono
$ cd /home
$ pwd
/home
</PRE>

<P>
Sans argument il vous replace dans votre répertoire utilisateur.
</P>

<PRE>
$ pwd
/home
$ cd
$ pwd
/home/nono
</PRE>

<A NAME="toc6"></A>
<H2>slash, . et ..</H2>

<DL>
<DT>Le `symbole slash <CODE>/</CODE></DT><DD>
délimite, les dossiers entre eux.
<DT>Le point <CODE>.</CODE></DT><DD>
symbolise le répertoire courant.
<DT>Les deux points</DT><DD>
symbolisent le répertoire parent.
</DL>

<P>
Illustration:
</P>

<PRE>
$ cd
$ pwd
/home/nono
$ cd ..
$ pwd
/home
$ cd ..
$ pwd
/
</PRE>

<P>
Vous ne pourrez pas aller plus haut.
</P>

<A NAME="toc7"></A>
<H2>ps =Print Services</H2>

<P>
Affiche les programmes en cours d'exécution
</P>

<PRE>
$ ps

  PID TTY          TIME CMD
 1415 pts/1    00:00:02 zsh
 2070 pts/1    00:00:00 vim
 2074 pts/1    00:00:00 bash
 2075 pts/1    00:00:00 ps
$ _
</PRE>

<A NAME="toc8"></A>
<H2>du =Disk Used</H2>

<P>
Donne la taille des fichiers
</P>

<PRE>
$ du un_fichier.txt
4	un_fichier.txt
$ _
</PRE>

<P>
Remarquez que <CODE>du</CODE> ne précise pas 4 de quelle unité. L'option -h permet d'avoir un affichage humainement lisible.
</P>

<PRE>
$ du -h un_fichier.txt
4 K	un_fichier.txt
$ _
</PRE>

<P>
Cette fois-ci il précise que ce sont des kilo-octets!
</P>

<A NAME="toc9"></A>
<H2>df =Disk Free</H2>

<P>
Pareil que précédemment...
</P>

<PRE>
$ df

Sys. de fichiers blocs de 1K   Utilisé Disponible Uti% Monté sur
dev                  1880376         0    1880376   0% /dev
run                  1892208       844    1891364   1% /run
/dev/sda1           51343996  12043240   36679316  25% /
tmpfs                1892208         4    1892204   1% /dev/shm
tmpfs                1892208         0    1892208   0% /sys/fs/cgroup
tmpfs                1892208        40    1892168   1% /tmp
/dev/sda3           55253852  36633888   15799848  70% /home
/dev/sdb6          303299580 271297268   32002312  90% /home/nono/DOCS
tmpfs                 378440        12     378428   1% /run/user/1000

$ df -h

Sys. de fichiers Taille Utilisé Dispo Uti% Monté sur
dev                1,8G       0  1,8G   0% /dev
run                1,9G    844K  1,9G   1% /run
/dev/sda1           49G     12G   35G  25% /
tmpfs              1,9G    4,0K  1,9G   1% /dev/shm
tmpfs              1,9G       0  1,9G   0% /sys/fs/cgroup
tmpfs              1,9G     40K  1,9G   1% /tmp
/dev/sda3           53G     35G   16G  70% /home
/dev/sdb6          290G    259G   31G  90% /home/nono/DOCS
tmpfs              370M     12K  370M   1% /run/user/1000
</PRE>

<A NAME="toc10"></A>
<H1>Autres programmes importants</H1>

<A NAME="toc11"></A>
<H2>less et more</H2>

<P>
Ce sont des paginateurs, vous avez du les rencontrer au chapitre précédent. Les paginateurs sont des programmes assez spéciaux car il prennent le contrôle de l'écran et du clavier et ne le rendent au shell qu'a la fin de leur propre éjection.
</P>
<P>
A l'intérieur de less ou de more, utilisez les touches suivantes:
</P>

<UL>
<LI><B>q</B> pour quitter
<LI><B>espace</B> pour passer une page
<LI><B>les fleches haut et bas</B> pour se déplacer d'une ligne
<LI><B>h</B> pour l'aide
</UL>

<P>
entrainez-vous en faisant:
</P>

<PRE>
$ ls /bin | less
</PRE>

<P>
Notez que les espaces avant et après la pipe sont facultatifs.
</P>

<A NAME="toc12"></A>
<H2>man =le MANuel</H2>

<P>
Vous retrouverez avec le programme man, les touches qui ont été utilisées dans le paragraphe précédent, pour utiliser la pagination.
</P>
<P>
Si vous tapez seulement man, vous obtiendrez:
</P>

<PRE>
$ man
Quelle page de manuel voulez-vous ?

$ _
</PRE>

<P>
Pour consulter le manuel du programme <CODE>ls</CODE>
</P>

<PRE>
$ man ls
</PRE>

<P>
Ce manuel là sera probablement en anglais...
</P>
<P>
Pour lire le manuel du manuel faites:
</P>

<PRE>
$ man man
</PRE>

<P>
Dans la page de manuel, vous trouverez:
</P>

<UL>
<LI>le synopsis (comment le programme accepte différent options, et requiert certains arguments)
<LI>des exemples d'utilisation
<LI>une description du programme
<LI>et bien d'autres choses...
</UL>

<A NAME="toc13"></A>
<H1>ls*</H1>

<A NAME="toc14"></A>
<H2>ls</H2>

<P>
On a déja vu ls, il liste les fichiers, on en profite pour donner quelques options utiles:
</P>

<PRE>
$ ls 		 Affiche les fichiers du repertoire courant
$ ls /home	 Affiche les fichiers du repertoire /home
$ ls -a		 Affiche les fichiers en incluant les fichiers cachés
$ ls --color 	 Affiche une réponse en couleur
$ ls -l		 Affiche les infos détaillées
</PRE>

<P>
Bien sur on peut combiner:
</P>

<PRE>
$ ls -la --color /home
 
total 28
drwxr-xr-x  4 root root   4096  9 nov.   2017 .
drwxr-xr-x 18 root root   4096 13 mars  23:25 ..
drwx------  2 root root  16384  9 nov.   2017 lost+found
drwx------ 66 nono users  4096 24 juin  18:07 nono
</PRE>

<P>
Pour en savoir plus:
</P>

<PRE>
$ ls --help
</PRE>

<P>
ou encore
</P>

<PRE>
$ man ls
</PRE>

<A NAME="toc15"></A>
<H2>lsblk</H2>

<P>
Liste les disques, et affiche les partitions sous forme d'arbre!
</P>

<PRE>
$ lsblk

NAME   MAJ:MIN RM   SIZE RO TYPE MOUNTPOINT
sda      8:0    0 111,8G  0 disk 
├─sda1   8:1    0    50G  0 part /
├─sda2   8:2    0     8G  0 part [SWAP]
└─sda3   8:3    0  53,8G  0 part /home
sdb      8:16   0 596,2G  0 disk 
├─sdb1   8:17   0  11,7G  0 part 
├─sdb2   8:18   0   3,5G  0 part 
├─sdb3   8:19   0   100M  0 part 
├─sdb4   8:20   0     1K  0 part 
├─sdb5   8:21   0 291,6G  0 part 
└─sdb6   8:22   0 289,3G  0 part /home/nono/DOCS
sr0     11:0    1  1024M  0 rom  

$ _
</PRE>

<A NAME="toc16"></A>
<H2>lscpu</H2>

<P>
Affiche les informations relatives au processeur.
</P>

<PRE>
$ lscpu

Architecture :                          x86_64
Mode(s) opératoire(s) des processeurs : 32-bit, 64-bit
Boutisme :                              Little Endian
Processeur(s) :                         2
Nom de modèle :                         AMD Turion(tm) X2 Dual-Core Mobile RM-75
Révision :                              1
Vitesse du processeur en MHz :          550.000
Vitesse maximale du processeur en MHz : 2200,0000
Vitesse minimale du processeur en MHz : 550,0000
BogoMIPS :                              4400.24
Virtualisation :                        AMD-V
Cache L1d :                             64K
Cache L1i :                             64K
Cache L2 :                              512K
</PRE>

<A NAME="toc17"></A>
<H2>lslogins</H2>

<P>
Affiche les connexions des utilisateurs.
</P>

<PRE>
$ lslogins
</PRE>

<P>
Vous remarquerez, qu'en plus de vous même de du compte Administrateur (root), il se trouve d'autres utilisateurs! Il sont présent pour des question de sécurité. Il permettent de compartimenter les différents programmes du système d'exploitation.
</P>

<PRE>
$ lslogins -u


 UID USER PROC PWD-LOCK PWD-DENY    LAST-LOGIN GECOS
   0 root   75                   juil.07/16:22 root
1000 nono   32                           09:19 
</PRE>

<P>
L'option <CODE>-u</CODE> permettra de n'afficher que les utilisateurs.
</P>

<A NAME="toc18"></A>
<H1>rm =ReMove</H1>

<P>
Supprime des fichiers. A utiliser avec prudence, surtout si on utilise des jokers !!!!
</P>

<PRE>
$ ls *.txt
un_fichier_texte.txt
un_fichier.txt
$ rm *.txt
$ ls *.txt
ls: erreur: aucun fichier de ce type (*.txt)
$ _
</PRE>

<A NAME="toc19"></A>
<H1>Les commandes qui vont d'elle même</H1>

<DL>
<DT>exit</DT><DD>
Quitter le shell en cours d'utilisation
<DT>date</DT><DD>
Affiche la date et l'heure
<DT>cal</DT><DD>
Affiche un calendrier
<DT>clear</DT><DD>
Vide l'écran
<DT>eject</DT><DD>
Ejecte les cd/dvd de leur lecteur
<P></P>
</DL>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="140_shell.php">A l'origine était sh...</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="160_editor.php">Éditer du texte avec la console...</A></TD>
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

<input type="hidden" name="page" value="150">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 150");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
