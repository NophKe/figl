<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Trouver de l'aide et progresser</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Trouver de l'aide et progresser</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">En local</A>
    <UL>
    <LI><A HREF="#toc2">Le Manuel</A>
    <LI><A HREF="#toc3">--help</A>
    <LI><A HREF="#toc4">Les pages info</A>
    </UL>
  <LI><A HREF="#toc5">Sur Internet</A>
    <UL>
    <LI><A HREF="#toc6">Le manuel en français</A>
    <LI><A HREF="#toc7">Les Howtos</A>
    </UL>
  <LI><A HREF="#toc8">Par la pratique</A>
    <UL>
    <LI><A HREF="#toc9">Réutiliser /home et /etc</A>
    <LI><A HREF="#toc10">Écrire des scriptes</A>
    <LI><A HREF="#toc11">Vous impliquer</A>
    <LI><A HREF="#toc12">Choisir une distribution_ pédagogique</A>
      <UL>
      <LI><A HREF="#toc13">Arch Linux</A>
      <LI><A HREF="#toc14">Linux From Scratch</A>
      </UL>
    </UL>
  </UL>

</DIV>

<A NAME="toc1"></A>
<H1>En local</H1>

<P>
Sans avoir besoin d'aucune sorte de connections à Internet, de nombreux documents sont là pour vous aider dans votre apprentissage de l'environnement Gnu-Linux.
</P>
<P>
Ces sources d'informations sont à privilégier <B>en toutes circonstances</B>, car ces fichiers sont empaquetés avec vos programmes. Ils correspondent donc précisément à la version que vous utilisez. De plus, les fichiers d'aide <I>officiels</I> seront <I>a priori</I> plus à jour que ce que vous pourriez trouver sur Internet.
</P>
<P>
Enfin, lire ces informations vous permettra d'explorer la documentation. Aussi quand vous aurez un trou de mémoire, vous devriez pouvoir retrouver l'information aisément sur n'importe quelle distribution de Gnu-Linux....
</P>

<A NAME="toc2"></A>
<H2>Le Manuel</H2>

<P>
RTFM (Read That Fucking Manuel) Lis ce putain de manuel!
</P>
<P>
Toujours lire le manuel avant toutes choses. Et particulièrement avant de poser des questions sur les forums.... La punition en cas contraire, un ignorance complète à votre égard dans le meilleur des cas.... Et le fameux RTFM dans le pire....
</P>
<P>
Pour accéder à une page de manuel, taper la commande man suivie du nom du programme:
</P>

<PRE>
$ man man
</PRE>

<P>
Vous donnera la page de manuel du programme <CODE>man</CODE>
</P>
<P>
Vérifiez bien que vous avez installé la version française des 'manpages'. Toutes les distributions de Gnu-Linux ne le font pas automatiquement!
</P>

<A NAME="toc3"></A>
<H2>--help</H2>

<P>
La plupart des programme en ligne de commande ont une option <CODE>--help</CODE> qui résume rapidement les options disponible à l'invocation du programme.
</P>
<P>
On a déjà dit que le programme rm, qui supprime des fichier pouvait être dangereux à utiliser, lisez donc ceci:
</P>

<PRE>
$ rm --help

Utilisation : rm [OPTION]... [FICHIER]...
Supprimer (retirer le lien) le ou les FICHIERs.

  -f, --force           ignorer les fichiers et arguments inexistants, ne
                          jamais demander
  -i                    demander confirmation avant chaque suppression
  -I                    demander confirmation une fois avant de supprimer plus
                          de trois fichiers ou lors de suppression récursive ;
                          moins intrusif que -i, tout en protégeant contre la
                          plupart des erreurs
      --interactive[=QUAND]  demander confirmation selon QUAND : « never »
                            (jamais), « once » (-I, une fois) ou « always » (-i,
                            toujours) ; sans QUAND, toujours demander
      --one-file-system  quand une hiérarchie est supprimée récursivement,
                          ignorer tous les répertoires d'un système de
                          fichiers différent de celui correspondant à
                          l'argument de ligne de commande
      --no-preserve-root ne pas traiter « / » de manière spécifique
      --preserve-root   ne pas supprimer « / » (par défaut)
  -r, -R, --recursive   supprimer les répertoires et leur contenu récursivement
  -d, --dir             supprimer les répertoires vides
  -v, --verbose         expliquer ce qui est fait
      --help     afficher l'aide et quitter
      --version  afficher des informations de version et quitter

Par défaut, rm ne supprime pas les répertoires. Utilisez l'option --recursive
(-r ou -R) pour supprimer les répertoires, ainsi que l'intégralité de leur
contenu.

Pour supprimer un fichier dont le nom débute par « - », par exemple « -toto »,
utilisez une des commandes suivantes :
  rm -- -toto

  rm ./-toto

Si vous utilisez « rm » pour supprimer un fichier, il est habituellement
possible de récupérer une partie de son contenu, en disposant de suffisamment
d'expertise et de temps. Pour être certain que le contenu ne soit pas
récupérable, envisagez l'utilisation de « shred ».

Aide en ligne de GNU coreutils : &lt;https://www.gnu.org/software/coreutils/&gt;
Signalez les problèmes de traduction de « rm » à : &lt;traduc@traduc.org&gt;
Documentation complète à : &lt;https://www.gnu.org/software/coreutils/rm&gt;
ou disponible localement via: info '(coreutils) rm invocation'
</PRE>

<P>
J'espère que vous avez bien compris l'option <CODE>-r</CODE>, elle vous servira surement un jour ou l'autre!
</P>
<P>
Au passage essayez de lire la ligne suivante:
</P>

<PRE>
$ rm -Rf /
</PRE>

<P>
Vous n'utiliserez JAMAIS cette commande!
</P>

<A NAME="toc4"></A>
<H2>Les pages info</H2>

<P>
C'est la même chose que les page man, à la différence que les pages info possèdent une sorte de système de liens hypertexte!
</P>
<P>
Ce devrait être l'évolution logique du programme man, cependant çà n'a pas marché... Aussi l'essentiel de la documentation se trouve toujours dans les pages man.
</P>
<P>
Les composants écrits spécialement pour le projet Gnu sont documentés ici un peu plus extensivement que dans les manpages.
</P>
<P>
Pour le sommaire général, taper simplement:
</P>

<PRE>
$ info
</PRE>

<P>
Une fois le programme démarré la touche <B>H</B> (majuscule) fera apparaitre l'aide.
</P>
<P>
Pour le manuel d'un programme particulier, info suivi du nom du programme. Par exemple pour en savoir plus sur le programme <CODE>info</CODE>:
</P>

<PRE>
$ info info
</PRE>

<A NAME="toc5"></A>
<H1>Sur Internet</H1>

<A NAME="toc6"></A>
<H2>Le manuel en français</H2>

<P>
Certes, ces pages seront peut-être moins "à jour" que celle présentes sur votre système. Mais elle sont toutes en français.
</P>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="http://manpagesfr.free.fr/index.html">Traduction des man-pages</A></TD>
</TR>
</TABLE>

<A NAME="toc7"></A>
<H2>Les Howtos</H2>

<P>
La plus grande partie d'entre eux sont vieux, et ne correspondent donc plus vraiment à l'état de l'art. Cependant ce sont des références. Ils peuvent donc apporter beaucoup pour ce qui est de la compréhension globale des choses.
</P>
<P>
Certaines parties de ce site sont des adaptations/traductions/mises à jour directes de ces howtos.
</P>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="https://www.tldp.org/HOWTO/html_single/Unix-and-Internet-Fundamentals-HOWTO/">'Unix And Internet Fundamentals' a longtemps été ma Bible...</A></TD>
</TR>
</TABLE>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="http://www.tldp.org/HOWTO/From-PowerUp-To-Bash-Prompt-HOWTO.html">From Power Up to Bash_ Prompt</A></TD>
</TR>
</TABLE>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="http://www.tldp.org/HOWTO/Security-HOWTO/index.html">Linux Security Howto</A></TD>
</TR>
</TABLE>

<A NAME="toc8"></A>
<H1>Par la pratique</H1>

<A NAME="toc9"></A>
<H2>Réutiliser /home et /etc</H2>

<P>
Dans ces deux répertoires se trouvent vos fichiers de configuration. Pourquoi donc les supprimer lors de la réinstallation d'une distribution?
</P>
<P>
Personnalisez votre configuration et tentez de la réutiliser lors de la réinstallation!
</P>
<P>
Placez donc ces deux répertoires sur des partitions distinctes que vous ne formaterez plus!
</P>

<A NAME="toc10"></A>
<H2>Écrire des scriptes</H2>

<P>
Vous pouvez écrire des scriptes, et créer ainsi vos propres programmes. C'est une bonne pratique qui vous permets de vous créer vos propres outils pour automatiser vos tâches répétitives.
</P>
<P>
Dans ces pages, nous ne faisons qu'effleurer la complexité du shell, mais ne vous y trompez pas! Le shell dispose d'un langage de programmation puissant!
</P>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="https://abs.traduc.org/abs-fr/index.html">Un guide plutôt pédagogique en français</A></TD>
</TR>
</TABLE>

<A NAME="toc11"></A>
<H2>Vous impliquer</H2>

<P>
La communauté libriste est grande, et toutes le bonnes volontés sont les bienvenues.
</P>
<P>
Si vous ne savez pas programmer, peut être pouvez vous au moins faire remonter le bugs aux différents auteurs des logiciels. C'est très apprécié, car trop peu de gens prennent la peine de le faire, et râler dans son coin fait rarement progresser le problème.
</P>
<P>
Si vous maitrisez assez bien une langue, vous pouvez traduire de la documentation ou même des programmes.
</P>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="http://translationproject.org/team/fr.html"> Translation Project, You code, we translate</A></TD>
</TR>
</TABLE>

<P>
Autre catégorie très recherché sont les graphistes et les designers.
</P>

<A NAME="toc12"></A>
<H2>Choisir une distribution_ pédagogique</H2>

<P>
Passer à une distribution plus <I>élitiste</I> est envisageable.
</P>
<P>
Si vous avez été capable de suivre ces pages, sachez que vous n'avez <I>presque</I> plus rien à craindre!
</P>

<A NAME="toc13"></A>
<H3>Arch Linux</H3>

<P>
Arch Linux est une distribution complète sans installateur. Pour la mettre en place, il vous sera nécessaire de comprendre le fonctionnement d'une distribution.
</P>
<P>
Arch Linux est une distribution qui ne modifie pas <I>(ou très peu)</I> les programmes qu'elle distribue. Ainsi, vous aurez accès aux dernière version officielles de tous les programmes.
</P>
<P>
Parfois cependant, pour maintenir votre système d'exploitation à jour, vous devrez procéder à certaines interventions manuelles! Cependant, ne vous inquiétez pas. Si cette distribution ne résout pas tous les problèmes à votre place, c'est avant tout par ce que l'équipe qui en est en charge se préoccupe plus de la documentation <I>( qui permet de tout faire )</I> que du coté "user-friendly" <I>(qui ne rajoute que de la spécificité, de la complexité, donc des problèmes )</I>...
</P>
<P>
KISS !
</P>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="https://archlinux.fr/">Arch possède une belle communauté francophone</A></TD>
</TR>
</TABLE>

<A NAME="toc14"></A>
<H3>Linux From Scratch</H3>

<P>
En fait, ce n'est même pas une distribution. C'est un livre qui vous apprendra à construire une distribution complète depuis les fichiers du code source.
</P>
<P>
C'est, certes, un document qui se veut avant tout pratique, mais il peut valoir le coup de le survoler pour voir comment cela se passe.
</P>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="http://fr.linuxfromscratch.org/">Linux From Scratch (fr)</A></TD>
</TR>
</TABLE>

<HR NOSHADE SIZE=1>

<P>
Sinon, vous pouvez aussi passez à la page suivante. (^_^)
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="210_config.php">Les fichiers de configuration</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="230_programming.php">Programmer</A></TD>
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

<input type="hidden" name="page" value="220">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 220");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
