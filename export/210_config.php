<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Les fichiers de configuration</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Les fichiers de configuration</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">Les dot-files</A>
    <UL>
    <LI><A HREF="#toc2">~/.bashrc</A>
    <LI><A HREF="#toc3">~/.bash_profile</A>
    <LI><A HREF="#toc4">~/.vimrc</A>
    <LI><A HREF="#toc5">Les autres dot-files</A>
    </UL>
  <LI><A HREF="#toc6">Le repertoire etc</A>
    <UL>
    <LI><A HREF="#toc7">/etc/fstab</A>
    <LI><A HREF="#toc8">/etc/profile</A>
    <LI><A HREF="#toc9">/etc/bash.bashrc</A>
    <LI><A HREF="#toc10">/etc/locale.conf</A>
    </UL>
  <LI><A HREF="#toc11">Le réseau</A>
    <UL>
    <LI><A HREF="#toc12">/etc/resolv.conf</A>
    <LI><A HREF="#toc13">/etc/hosts</A>
    <LI><A HREF="#toc14">/etc/hostname</A>
    </UL>
  <LI><A HREF="#toc15">Geekeries inutiles</A>
    <UL>
    <LI><A HREF="#toc16">/etc/issue</A>
    <LI><A HREF="#toc17">/etc/motd</A>
    <LI><A HREF="#toc18">Les autres</A>
    </UL>
  </UL>

</DIV>
<P>
Généralement les programmes se configurent à travers <B>deux</B> fichiers de configurations. Le premier se place généralement dans le répertoire <CODE>/etc</CODE>, et devient le défaut du système.
</P>
<P>
Il porte en général, le nom du programme, et n'est accessible à la modification que par le super-utilisateur.
</P>
<P>
Le second, le dot-file, n'est créé que si cela est nécessaire, et ce peut être à l'initiative du programme comme de l'utilisateur.
</P>
<P>
Comme son nom l'indique, un dot-file possède un nom de fichier qui commence par un point (dot en anglais), c'est donc un fichier caché!
</P>

<A NAME="toc1"></A>
<H1>Les dot-files</H1>

<P>
Ce sont des fichiers qui commencent par un point. Ce sont donc des fichiers cachés.
</P>
<P>
Ils se trouvent dans le répertoire personnel de l'utilisateur ( par exemple <CODE>/home/nono/.bashrc</CODE> )
</P>
<P>
Le symbole <CODE>~</CODE> (tilde) est interprété par le shell comme le répertoire personnel de l'utilisateur courant. On écrira donc <CODE>~/.bashrc</CODE> plutôt que <CODE>/home/Nom_d_utilisateur/.bashrc</CODE> !
</P>
<P>
<U>Chose importante à savoir:</U> Le système d'exploitation ne touche pas à ces fichiers. C'est à l'utilisateur qu'il revient de supprimer les fichiers des programmes désinstallés.
</P>

<A NAME="toc2"></A>
<H2>~/.bashrc</H2>

<P>
RC signifie "Run Command". Ainsi vous pouvez imaginer ce fichier comme une suite d'instructions que vous taperiez à chaque fois que vous démarrez votre shell.
</P>
<P>
J'ai déjà évoqué qu'il était prudent de créer un alias pour <CODE>rm</CODE> le programme qui supprime les fichiers:
</P>

<PRE>
alias rm='rm --interractive'
</PRE>

<P>
Si vous ajoutez cette dernière ligne à la fin de votre fichier <CODE>.bashrc</CODE>, vous n'aurez plus jamais besoin de retaper cet alias. Il se chargera à chaque démarrage de bash.
</P>
<P>
Votre fichier <CODE>.bashrc</CODE> contient surement ces lignes:
</P>

<PRE>
#/bin/bash
# If not running interactively, don't do anything
#
[[ $- != *i* ]] &amp;&amp; return
</PRE>

<P>
Faites en sorte qu'elles restent bien en tête du fichier. Elle demandent à Bash de ne pas lire le reste de la configuration si Bash n'est pas en mode interactif. ( <I>C'est à dire, s'il reçoit ses commandes d'un autre programme et pas d'un humain</I> ). Cette ligne peut paraitre un peu ésotérique, j'espère pousuivre assez loin ce texte pour pouvoir l'expliquer....
</P>
<P>
Remarquez que tout ce qui suit un symbole <CODE>#</CODE> est considéré comme un commentaire
</P>

<A NAME="toc3"></A>
<H2>~/.bash_profile</H2>

<P>
A la différence du fichier précédent, ce fichier de configuration sera lu uniquement lors d'un démarrage de Bash par un humain. Ainsi la configuration que vous réalisez ici ne perturbera jamais aucun scripte.
</P>
<P>
N'hésitez pas à placer des alias ici. Par exemple:
</P>

<PRE>
alias ls='ls --color'
alias vi='vim'
alias config='vi ~/.bashrc'
</PRE>

<A NAME="toc4"></A>
<H2>~/.vimrc</H2>

<P>
C'est le fichier de configuration de Vim. De nombreuses personnes partagent leur configuration de Vim sur Internet. Je ne vais donner ici que quelques options courantes.
</P>

<PRE>
"" Fichier .vimrc exemple.
""
"" Tout ce qui se trouve entre un guillemet et une fin de ligne sera
"" considéré par Vim comme un simple commentaire.

set nocompatible 			" vrai vim pas le mode de compatibilité vi

set spelllang=fr			" langue pour correction orthographique

nnoremap &lt;F2&gt; :split $MYVIMRC&lt;cr&gt;	" raccourci (touche F2) pour éditer le fichier de config

filetype plugin on          		" plugins are enabled
syntax enable 				" Turn on syntax highlighting

""		TEXT RENDERING OPTIONS

set display+=lastline			"" Always try to show a paragraph’s last line.
set linebreak				"" Avoid wrapping a line in the middle of a word.
set wrap			"" Enable line wrapping.


set hidden 				" Leave hidden buffers open
set history=100 			"by default Vim saves your last 8 commands.
""
"" 		USER INTERFACE
""
set mouse=a
set showcmd  				" show command in bottom bar
set number 				" show line numbers
set ruler				" Always show cursor position
set wildmenu 				" visual autocomplete for command menu
set ttyfast
""
""		SEARSH OPTIONS
""
set hlsearch
set ignorecase
set incsearch
set smartcase
</PRE>

<A NAME="toc5"></A>
<H2>Les autres dot-files</H2>

<A NAME="toc6"></A>
<H1>Le repertoire etc</H1>

<A NAME="toc7"></A>
<H2>/etc/fstab</H2>

<P>
C'est ici que se configurent les points de montage des partitions du système.
</P>
<P>
Voici le mien:
</P>

<PRE>
# /etc/fstab: static file system information
#
# &lt;file system&gt;					&lt;dir&gt;		&lt;type&gt;		&lt;options&gt;		&lt;dump&gt;	&lt;pass&gt;
# /dev/sda1
UUID=e99ac9fe-f958-4d8f-8682-173b9ca3fd03	/         	ext3      	rw,relatime,data=ordered	0 1

# /dev/sda3
UUID=ec3a5e6b-352b-4dbe-899d-e3bd039fc53d	/home     	ext3      	rw,relatime,data=ordered	0 2

# /dev/sda2
UUID=c715063d-8e45-477e-9cb5-db50d04244d7	none      	swap      	defaults  	0 0

/dev/sdb6			/home/nono/DOCS/	ntfs-3g		rw,nosuid,nodev,relatime,user_id=1000,group_id=100,noexec 	0 0
</PRE>

<P>
Pour en savoir plus:
</P>

<PRE>
$ man fstab
</PRE>

<A NAME="toc8"></A>
<H2>/etc/profile</H2>

<P>
C'est le fichier de configuration de Bash. C'est un scripte qui définit les options essentielles du système.
</P>
<P>
Ce fichier est lu lorsque Bash est utilisé par <B>un humain</B> qui se connecte à lui. On parle de lancement interactif.
</P>

<A NAME="toc9"></A>
<H2>/etc/bash.bashrc</H2>

<P>
C'est le fichier de configuration de Bash. C'est un scripte qui définit les options essentielles du système.
</P>
<P>
Ce fichier est lu lorsque Bash est utilisé par un humain <B>ou un programme</B> qui se connecte à lui.
</P>

<A NAME="toc10"></A>
<H2>/etc/locale.conf</H2>

<P>
Définit la locale de votre système. C'est à dire la langue, le format d'affichage de la date, et de l'heure, le symbole monétaire en vigueur, et tout un tas de paramètres linguistiques et culturels. Les programmes doivent avoir accès à cette information pour agir en accord avec celle-ci, et donc être portable!
</P>
<P>
Par exemple:
</P>

<PRE>
LANG=fr_FR.UTF-8
</PRE>

<P>
indique au système d'exploitation que votre langues est le français (<CODE>fr</CODE>) de France (<CODE>FR</CODE>). Et que vous voulez utiliser l'Unicode-8.
</P>
<P>
Pour plus d'information lire la page de manuel:
</P>

<PRE>
$ man 7 locale
</PRE>

<P>
Vous pouvez prendre des renseignement sur votre configuration en entrant simplement la commande:
</P>

<PRE>
$ locale
</PRE>

<A NAME="toc11"></A>
<H1>Le réseau</H1>

<A NAME="toc12"></A>
<H2>/etc/resolv.conf</H2>

<P>
Déjà évoque dans le paragraphe sur les dns .
</P>
<P>
Le choix du dns se fait très simplement en éditant ce fichier texte.
</P>

<PRE>
nameserver  8.8.4.4          # le serveur dns de Google
</PRE>

<UL>
<LI>Attention ce n'est pas un nom au choix, c'est <CODE>nameserver</CODE>, un espace, et l'adresse ip du serveur
<LI>Tout ce qui vient après un # sera considéré comme un commentaire
</UL>

<P>
Aussi si vous pouvez aussi ajouter une seconde ligne:
</P>

<PRE>
nameserver  8.8.8.8  # L'autre serveur de Google
</PRE>

<P>
En cas de défaillance du serveur situé sur la première ligne, le second sera utilisé... Et ainsi de suite!
</P>
<P>
<U>Attention !</U> Les services chargées du réseau vont mettre à jour ce fichier si vous ne les en empêchez pas, pensez à vous occuper de leur configuration si vous faites cela. Pour une solution expéditive et sécuritaire:
</P>

<PRE>
# chattr +i /etc/resolv.conf
</PRE>

<P>
L'attribut <CODE>i</CODE> signifie immuable. Et interdit toute modification du fichier... Seul le super-utilisateur peut changer cet attribut.
Remarquez que j'ai symbolisé la prompte avec un <CODE>#</CODE> pour indiquer que cette action doit être effectuée en mode administrateur.
</P>

<A NAME="toc13"></A>
<H2>/etc/hosts</H2>

<A NAME="toc14"></A>
<H2>/etc/hostname</H2>

<P>
Ce fichier permet de définir le nom d'hôte du système, c'est-à-dire le nom de l'ordinateur tel qu'il est perçu depuis le réseau.
</P>

<A NAME="toc15"></A>
<H1>Geekeries inutiles</H1>

<A NAME="toc16"></A>
<H2>/etc/issue</H2>

<P>
Lors d'une connexion à la console depuis l'interface texte (donc pas avec un émulateur de terminal depuis l'interface graphique), apparait un message qui vous indique l'heure ou le nom de l'ordinateur, ce comportement se configure ici.
</P>
<P>
<CODE>man issue</CODE> pour en savoir plus. Je vous donne le mien. Il comporte de nombreux caractères d'échappement comme <CODE>\t</CODE> pour afficher l'heure et <CODE>\\</CODE> pour afficher le symbole <CODE>\</CODE>. Mais il devrait dessiner un chat en ascii-art.
</P>

<PRE>


Il est \t


       *                  *
             __                *
          ,db'    *     *
         ,d8/       *        *    *
         888
         `db\\       *     *
           `o`_                    **
      *               *   *    _      *
            *                 / )
         *    (\\__/) *       ( (  *
       ,-.,-.,)    (.,-.,-.,-.) ).,-.,-.
      | @|  ={      }= | @|  / / | @|o |
     _j__j__j_)     `-------/ /__j__j__j_
     ________(               /___________
      |  | @| \\              || o|O | @|
      |o |  |,'\\       ,   ,'"|  |  |  |  hjw
     vV\\|/vV|`-'\\  ,---\\   | \\Vv\hjwVv\\//v
                _) )    `. \ /
               (__/       ) )
                         (_/

</PRE>

<A NAME="toc17"></A>
<H2>/etc/motd</H2>

<P>
C'est le petit message qui s'affiche lors de votre connexion à un tty.
</P>

<A NAME="toc18"></A>
<H2>Les autres</H2>

<P>
Il en reste bien d'autre, cette liste n'est donc pas exhaustive!
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="200_emacs.php">Emacs</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="220_help.php">Trouver de l'aide et progresser</A></TD>
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

<input type="hidden" name="page" value="210">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 210");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
