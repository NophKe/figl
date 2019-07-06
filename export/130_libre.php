<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>La philosophie du Libre</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>La philosophie du Libre</H1>
<H2> </H2>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#libre">Remarques sur les éxécutables</A>
  <LI><A HREF="#proprio">Le logiciel propriétaire</A>
    <UL>
    <LI><A HREF="#toc3">Les bugs</A>
    <LI><A HREF="#toc4">L'ajout de fonctionnalité</A>
    <LI><A HREF="#backdoor">Les Fonctionnalités malicieuses</A>
    <LI><A HREF="#toc6">Les autres raisons</A>
    </UL>
  <LI><A HREF="#toc7">Le Logiciel Libre (Free Software)</A>
    <UL>
    <LI><A HREF="#toc8">Libertés individuelles</A>
    <LI><A HREF="#toc9">Libertés collectives</A>
    </UL>
  <LI><A HREF="#jungle">La Jungle du logiciel libre</A>
  <LI><A HREF="#toc11">Un Système modulaire</A>
    <UL>
    <LI><A HREF="#distrib">Une Distribution</A>
    <LI><A HREF="#mini">Le Minimum requis</A>
    </UL>
  </UL>

</DIV>

<A NAME="libre"></A>
<H1>Remarques sur les éxécutables</H1>

<P>
Un programme qui est fournit uniquement sous la forme d'un exécutable est une injustice car l'utilisateur qui récupère (ou pire, achète!) ce programme n'obtient en retour aucun contrôle sur le fonctionnement du logiciel. Il doit faire confiance à l'éditeur pour savoir ce que le logiciel fait /ou ne fait pas sur son ordinateur.
</P>
<P>
La seule véritable solution pour connaitre les agissements d'un exécutable est donc... De l'exécuter à l'intérieur d'un programme que l'on nomme un débogueur. Mais <B>il faut</B> l'exécuter pour que le débogueur l'analyse. Le débogueur permettra donc de suivre les agissement du programme en direct... Instruction par instruction, et si le <I>bidouilleur</I> (hacker en anglais) s'est trompé ou a raté quelque chose, alors il est bon pour ré-éxecuter le programme à partir de zéro...
</P>
<P>
Certes, il existe aussi des programmes que l'on appelle des désassembleurs, et qui permettent de passer d'un exécutable à un code source en assembleur. Toutefois ces programmes fournissent des codes sources  qui peuvent être long de milliers de lignes sans commentaire (un éditeur de texte) à plusieurs millions de lignes (un traitement de texte)... Et lire de l'assembleur...Surtout de l'assembleur généré par ordinateur! Aussi cet exécutable peut s'exécuter à l'aide de librairies qui rendent son comportement encore plus difficile à observer!
</P>
<P>
Le débogueur présente l'avantage de pouvoir suivre <I>en direct</I> les instructions que le programme demande au processeur d'exécuter, ainsi, par exemple, si vous voulez savoir ce qu'il se passe uniquement quand vous enregistrer un fichier au format <I>(insérer ici format propriétaire)</I>, alors vous allez utiliser le logiciel jusqu'au point d'enregistrer le fichier, et là seulement vous allez suivre ce que raconte votre débogueur.
</P>
<P>
Le désassembleur présente à l'inverse l'avantage de vous fournir un fichier source que vous pouvez étudier à loisir... Mais ce qui est vrai dans les deux cas, c'est qu'on appelle l'appelle cette étude des exécutable: du reverse-engineering. C'est un <B>art</B> sombre de l'informatique qui demande d'être à l'aise avec le binaire, l'hexadécimal, l'assembleur, et de connaitre à fond le fonctionnement des processeurs, des interruption systèmes, etc...
</P>
<P>
Sans cela aucun format propriétaire breveté (mp3, flash, documents word...) n'aurait pu être intégrés dans les logiciels libres, mais cela va beaucoup plus loin car les pilotes (les programmes qui enseignent au système d'exploitation comment piloter des périphériques) ne sont que rarement libres...
</P>
<P>
Pour le dire vite: le <I>binary hacking</I> c'est réservé à de grands érudits, qui font un travail indispensable et terriblement important pour la communauté du libre!
</P>

<A NAME="proprio"></A>
<H1>Le logiciel propriétaire</H1>

<P>
Les logiciels propriétaires demandent généralement à leur utilisateur de signer (électroniquement) un contrat de l'utilisateur final. Dans ce contrat vous vous engagez généralement à ne pas chercher à savoir comment marche le logiciel, à ne pas le modifier. Vous ne pouvez pas l'améliorer et le donner à un ami, ni le lui vendre.... etc... Il n'y a pas de règles internationales, c'est entre l'éditeur et l'utilisateur. Et seulement eux! Parfois vous renoncez ainsi à vos droits de poursuite, parfois vous acceptez l'utilisation de vos données personnelles! C'est selon.
</P>
<P>
Les Logiciels propriétaires (la plupart de ceux que vous trouverez dans le commerce) viennent donc sous forme d'un exécutable pratiquement impossible à analyser ou à modifier. Mais au juste pourquoi vouloir savoir ce qu'il se passe à l'intérieur? Pourquoi vouloir le modifier?
</P>

<A NAME="toc3"></A>
<H2>Les bugs</H2>

<P>
Parfois un logiciel fonctionne mal, et l'éditeur (pour de bonnes raisons parfois) ne veut pas appliquer de correctif à son logiciel. Parfois, le logiciel est trop vieux et l'éditeur a laissé tombé sa maintenance. Parfois aussi, c'est juste lié à vous et à votre configuration particulière, et le programme a besoin d'une correction personnalisée!
</P>

<A NAME="toc4"></A>
<H2>L'ajout de fonctionnalité</H2>

<P>
Richard Stallman, le fondateur et initiateur du mouvement de l'informatique libre travaillait dans les années 70 au MIT (l'université). Son travail était d'améliorer et de faire évoluer le système informatique qu'utilisait l'université. Nous sommes dans les années 70, il n'y a qu'une seule imprimante, et toute l'université veut l'utiliser...  La pauvre est souvent en rade de papier! Une réussite de Stallman avait été de programmer l'imprimante pour qu'elle signale à tous les ordinateurs connectés quand elle manquait de papier. Juste un petit message, et il y avait toujours quelqu'un de bonne volonté!
</P>
<P>
Quand une nouvelle imprimante fut offert à l'université Richard Stallman voulut reproduire l'exploit, mais se trouvât confronté au fait que l'imprimante avait été offerte par une entreprise privée... Et cette dernière ne souhaitait pas communiquer son code source! Une modification mineure du code source, mais qui devenait <I>pratiquement</I> irréalisable sur l'exécutable!
</P>
<P>
<A HREF="https://fr.wikipedia.org/wiki/Richard_Stallman"><IMG ALIGN="middle" SRC="img/Richard_Stallman.jpg" BORDER="0" ALT=""></A>
</P>

<TABLE ALIGN="center">
<TR>
<TD>Richard Stallman, Fondateur du mouvement du logiciel libre</TD>
</TR>
</TABLE>

<A NAME="backdoor"></A>
<H2>Les Fonctionnalités malicieuses</H2>

<P>
Pourquoi ne voulait on pas laisser Stallman étudier le programme. Ce programme cachait-t-il quelque chose, un espion à l'université? Probablement pas, mais sans le code source impossible à dire! À l'époque de cette histoire, les ordinateurs n'étaient pas interconnectés comme aujourd'hui. Collecter des données, était une tâche difficile et la puissance de calcul n'était pas encore là. Mais de nos jours, on connait tellement ces pratiques qu'on leur a donné des noms.
</P>

<DL>
<DT>Le Pistage</DT><DD>
C'est simple, vous êtes fliqué! Même des distribution Gnu-Linux comme Ubuntu (de la société Cannonical) se sont fait pincer à regarder dans les recherches (locales et Internet) que faisaient leur utilisateurs! Les agences gouvernementales peuvent <I>quasiment</I> tout savoir de ce que vous faites sur Internet.
<P></P>
<DT>Une Backdoor</DT><DD>
La porte dérobée ou littéralement la porte de derrière, un accès délibérément laissé ouvert qui permets à un tiers (l'éditeur, un pirate, un client de l'éditeur, un espion...) depuis l'extérieur d'accéder au programme, de savoir ce que ce programme est en train de faire, et, en règle générale d'accéder à toutes les ressources dont ce programme à l'accès sur votre ordinateur
<P></P>
<DT>Une Backdoor Universelle</DT><DD>
Pareil que précédemment, à la différence qu'elle permet à ce tiers de modifier le programme à distance. (La mise à jour automatique de Windows, se fait parfois sans aucune intervention de votre part! Cela signifie que Microsoft, ou d'autres, peuvent )
<P></P>
Cette liste n'est pas exhaustive...
</DL>

<A NAME="toc6"></A>
<H2>Les autres raisons</H2>

<UL>
<LI>On peut vouloir garder une seule <I>(ou seulement quelques unes)</I> des fonctionnalités (encore plus si on a payé pour le logiciel en entier), pour avoir un logiciel plus léger, ou plus <I>sur-mesure</I>.
<LI>On veut parfois faire tourner le logiciel sur un nouveau système d'exploitation , une autre architecture de processeur...
<LI>S'amuser?..
</UL>

<A NAME="toc7"></A>
<H1>Le Logiciel Libre (Free Software)</H1>

<P>
Pour toutes les raisons évoquées ci-dessus, la Free Sofware Foundation s'est lancé dans l'écriture d'une license qui permettrait à tout ceux qui voudrait écrire des programmes de le faire dans le respect des libertés de l'utilisateur final. C'est la G.P.L, General Public License.
</P>
<P>
Sous license GPL, l'éditeur du logiciel reste propriétaire du code source bien qu'il soit publique! Chacun ayant accès au code source peut modifier le logiciel. Cependant celui qui récupère du code source, et modifie le programme est dans l'obligation légale de fournir avec sa version du  programme, sa version du code source.
</P>
<P>
Le code source ainsi que vos modifications doivent cependant rester sous license GPL. Ce système garantie plusieurs libertés:
</P>

<DL>
<DT>Liberté Zéro</DT><DD>
Le droit d'exécuter le programme de la façon dont vous le souhaitez et sur la machine que vous souhaitez!
<P></P>
<DT>Liberté Numéro Un</DT><DD>
L'accès au code source du programme et à toutes les information nécessaires pour le compiler. Ainsi la liberté d'étudier le programme, de le modifier et de lui faire faire ce que vous souhaitez qu'il fasse.
<P></P>
<DT>Liberté Numéro Deux</DT><DD>
La possibilité de redistribuer (donner ou vendre) des copies exactes du logiciel (et des sources).
<P></P>
<DT>Liberté Numéro Trois</DT><DD>
La possibilité de redistribuer (donner ou vendre) des copies modifiées du logiciel (et des sources).
<P></P>
<A HREF="https://fr.wikipedia.org/wiki/Logiciel_libre"><IMG ALIGN="middle" SRC="img/Carte_conceptuelle.png" BORDER="0" ALT=""></A>
</DL>

<TABLE ALIGN="center">
<TR>
<TD>Carte conceptuelle du logiciel libre ( credit: Wikipedia )</TD>
</TR>
</TABLE>

<A NAME="toc8"></A>
<H2>Libertés individuelles</H2>

<P>
Les deux premières libertés nous assurent le contrôle individuel du logiciel. Cependant elle ne nous permettent pas de donner une copie de notre logiciel à un copain programmeur et de lui commander une modification. D'où la nécessité des deux suivantes!
</P>

<A NAME="toc9"></A>
<H2>Libertés collectives</H2>

<P>
Les deux dernières libertés nous assurent le contrôle collectif. Elles permettent  à un groupe d'utilisateurs qui n'aiment pas les évolutions d'un logiciel, de reprendre ce logiciel et de se constituer en groupe informel, association, entreprise... Chacun est libre! Mais le code sous license GPL reste sous license GPL.
</P>

<A NAME="jungle"></A>
<H1>La Jungle du logiciel libre</H1>

<P>
Si tout le monde a accès au code source, alors chacun va développer des versions personnelles, on parlera de:
</P>

<DL>
<DT>Clone</DT><DD>
Vous aimez un programme qui n'est pas libre, ou qui n'existe pas pour votre système d'exploitation. Réécrivez le vous même! Parfois la nouvelle implémentation supplante même l'ancienne l'ancienne car elle propose des fonctionnalités innovante ou supérieures... (de nombreux programmes ont commencé leur vie comme des clones)
<P></P>
<DT>Port</DT><DD>
Quand il s'agit de faire fonctionner un programme pour une architecture pour laquelle il n'est pas prévu.
<P></P>
<DT>Patch</DT><DD>
Quand, une version modifiée d'un programme, évolue conjointement avec ce programme (en intégrant les mises-à-jours, et en se basant toujours sur la dernière version)
<P></P>
<DT>Branch</DT><DD>
Quand dans deux versions concurrentes d'un même projet évoluent en se séparant... Il y a alors un dernier numéro de version commun qui leur est commun. Puis, comme le tronc d'un arbre donne plusieurs branches, chaque projet part dans sa direction. (Une branche peut être abandonné ou être réintégrée dans le tronc si elle apporte des innovations, ou des corrections intéressantes.)
<P></P>
<DT>Fork</DT><DD>
Plus radical qu'une branche! Quand il y a désaccord technique ou/et désaccord humain, la communauté doit trancher (suivant ses règles internes). Ceux qui ne veulent pas suivre peuvent copier le code source, changer le nom du logiciel et partir de leur coté. (les râleurs, les génies, et les solitaires sont libres de <I>forker</I> quand ils le souhaitent sans attendre personne!) De nombreux projets naissent ainsi.
</DL>

<P>
Le développement d'un logiciel libre est un processus complexe (à la limite des phénomènes organiques...).
</P>
<P>
<U>Exemples:</U>
</P>

<UL>
<LI>Xorg est un fork de XFree86 qui est une implémentation de X Window System
<LI>Mate est un fork de Gnome 2 quand la communauté est passé à Gnome 3
<LI>Le noyau Linux-lts (long term support) est une branche du noyau Linux qu'on considère stable et dont on décide de corriger le bugs et faire la maintenance sur le long terme.
<LI>IceWeasel est une version de Firefox patchée pour enlever tout ce qui porte atteinte à votre vie privée...
<LI>Et Gnu-Linux est globalement un clone d'Unix
</UL>

<A NAME="toc11"></A>
<H1>Un Système modulaire</H1>

<P>
Windows est un système d'exploitation tout intégré, il arrive avec son propre programme de gestion des périphériques, son propre programme de gestion du réseau, sa propre interface graphique, un éditeur de texte, Microsoft Paint, et le solitaire....
</P>
<P>
Gnu-Linux n'est pas aussi monolithique, au contraire! Par défaut, Gnu-Linux est un système d'exploitation puissant mais assez minimaliste.
</P>
<P>
À la différence de Windows, donc, vous êtes libres d'utiliser les programmes que vous souhaitez. Cela inclut aussi les programmes qui sont liés à l'interface graphique. Vous pouvez par exemple construire un environnement qui ne possédera aucune interface graphique, mais seulement une interface texte. (La plupart des serveurs n'ont pas d'écran à eux, on n'y connecte avec d'autres ordinateurs qui ont leur écran à eux)
</P>

<A NAME="distrib"></A>
<H2>Une Distribution</H2>

<P>
C'est en associant tout un tas de programmes (un éditeur de texte, un shell, une interface graphique, des programmes de configuration....) que l'on obtient une <B>distribution</B> Gnu-Linux.
</P>
<P>
Une distribution est un ensemble qui se veut cohérent. Mais une bonne connaissance des différents programmes essentiels (de leur utilités respectives, et des différentes alternatives disponibles) vous permettra de faire votre propre distribution (avec votre choix de programme), que vous partiez de zéro, ou que vous vous appuyiez sur une distribution déjà complète.
</P>
<P>
Vous pouvez aussi choisir d'adopter une distribution telle qu'elle. De nombreuses distribution sont en effet des produits très aboutis, et l'utilisateur lambda peut s'en satisfaire.
</P>
<P>
Cependant comprendre ce qu'il se passe à l'intérieur de ce fouillis de logiciels c'est comprendre ce que fait votre ordinateur. Laisser faire ce que d'autre ont décidé pour vous, c'est prendre un risque, et c'est renoncer à sa liberté. La confiance et la sympathie que l'éditeur du logiciel vous inspire n'y changera rien (Vous saviez que Firefox collectait des données? Comme l'historique des pages que vous consultez? Tapez <CODE>about:telemetry</CODE> dans la barre d'adresse de Firefox... vous verrez bien!)
</P>
<P>
Je suis persuadé que connaitre un peu le bestiaire des programmes, des termes techniques, et concepts de l'informatique est suffisant pour que chacun puisse connaitre son ordinateur, le configurer, et le dépanner.
</P>
<P>
Et surtout qu'avoir avoir clefs de cette <I>culture générale de l'informatique</I> suffit pour savoir à propos de quoi se renseigner, et ou trouver les bonnes références!
</P>
<P>
<A HREF="https://fr.wikipedia.org/wiki/Distribution_Linux"><IMG ALIGN="middle" SRC="img/distribution.png" BORDER="0" ALT=""></A>
</P>

<TABLE ALIGN="center">
<TR>
<TD>Les composants d'une distribution Linux ( credit Wikipedia )</TD>
</TR>
</TABLE>

<A NAME="mini"></A>
<H2>Le Minimum requis</H2>

<P>
Il est une question très saine à se poser! En taillant dans le gras d'une distribution, que me faut il pour booter mon ordinateur?
</P>
<P>
Dans la pratique vous avez besoin de:
</P>

<OL>
<LI>Un chargeur de démarrage. ( lilo , grub, efistub... )
 <UL>
 <LI>(Mais vous pouvez vous en passer si votre bios gère l'Uefi)
 </UL>
<LI>Un Noyau ( Linux, Linux-lts, Hurd )
 <UL>
 <LI>(Gnu devait au départ avoir pour noyau Hurd, mais ce dernier n'est toujours pas au point...)
 </UL>
<LI>Un gestionnaire d'initialisation ( SysVinit, Systemd... )
 <UL>
 <LI>(Il va lancer les démons/services, démarrer les connexions réseau... Il aura donc besoin que vous installiez les programmes que vous voulez qu'il lance au démarrage)
 </UL>
<LI>Un shell ( sh, bash,... )
<LI>Coreutils et linux-util (voir busybox ou autres) sont des ensembles de petits programmes courants (ls, cat, mount....)
 <UL>
 <LI>Ce sont les programmes de base qui permettent d'utiliser le système... Un système qui ne possèderai pas d'interface pour ouvrir des dossiers, ou éditer des fichier serait <I>en pratique</I> inutilisable! On s'attend donc à ce que le shell puisse trouver certains classiques!
 </UL>
</OL>

<P>
Une fois que le noyau du système est chargé en mémoire, il cherche un programme d'initialisation (Systemd ou SysInitV) mais s'il ne trouve rien, il supposera que le système est <I>au moins un peu</I> posix et lancera <CODE>/bin/sh</CODE> et votre système sera initialisé (ni configuré, ni correctement booté, mais initialisé).
</P>
<P>
S'il ne trouve même pas <CODE>/bin/sh</CODE>, bein je ne sais pas comment vous en êtes arrivé là... Mais vous l'avez surement bien cherché!
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="120_arborescence.php">L'arborescence</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="140_shell.php">A l'origine était sh...</A></TD>
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

<input type="hidden" name="page" value="130">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 130");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
