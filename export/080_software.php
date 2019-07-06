<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Le Logiciel</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Le Logiciel</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#intro">Introduction au logiciel</A>
    <UL>
    <LI><A HREF="#os">Les Systèmes d'exploitation</A>
    <LI><A HREF="#os_role">Les rôles du Système d'exploitation</A>
    <LI><A HREF="#kernel">Le Noyau du système d'exploitation</A>
    </UL>
  <LI><A HREF="#asm">Le Langage Machine</A>
  <LI><A HREF="#prog">Les Langages de programmation</A>
    <UL>
    <LI><A HREF="#toc7">Exemple de cette même calculette à la noix</A>
    <LI><A HREF="#definitions">Définitions</A>
    </UL>
  <LI><A HREF="#library">Les Librairies</A>
  <LI><A HREF="#exe">Les éxécutables....</A>
    <UL>
    <LI><A HREF="#toc11">Les principaux formats</A>
    </UL>
  <LI><A HREF="#multitasking">Comment mon ordinateur peut-il faire plusieurs choses à la fois?</A>
  </UL>

</DIV>

<A NAME="intro"></A>
<H1>Introduction au logiciel</H1>

<P>
Un logiciel c'est de la donnée exécutable. Par opposition les fichiers ne sont pas exécutables.
Tous les programmes s'exécutent pas de la même façon.
</P>

<UL>
<LI>Certains sont écrits dans un langage directement exécutable par le matériel. Ce sera le cas du système d'exploitation, et du chargeur de démarrage.
<LI>D'autres sont écrits dans des langages exécutables à l'intérieur d'un système d'exploitation. Ce sera le cas de la plupart des logiciels, votre navigateur, le lecteur de vidéo...
<LI>D'autres encore sont écrits dans un langage lisible directement par un humain. On appelle ces derniers des scripts. On y reviendra plus tard.
</UL>

<P>
Je ferai simplement remarquer qu'il n'existe pas de différence fondamentale entre une "app", une application, un logiciel, un programme, un exécutable, voir une librairie.
</P>

<A NAME="os"></A>
<H2>Les Systèmes d'exploitation</H2>

<P>
Il existe de nombreux systèmes d'exploitation:
</P>

<UL>
<LI>Windows
<LI>MacOs
<LI>Android
<LI>Gnu-Linux...
</UL>

<A NAME="os_role"></A>
<H2>Les rôles du Système d'exploitation</H2>

<P>
Ils sont nombreux, mais pour faire simple, disons qu'un système d'exploitation est un ensemble de programme qui vous permettent de profiter d'un ordinateur. Pour ce qui est de son rôle global, il est donc clair: vous permettre de gérer vos données et de lancer vos programmes.
</P>
<P>
Dans la pratique, votre navigateur internet ne sais pas communiquer avec votre carte réseau....Et personne ne lui demande de savoir le faire... Le système d'exploitation là pour savoir faire la base....
</P>
<P>
Ainsi la définition même d'un système d'exploitation est subtile! Personne ne voudrait installer un système d'exploitation qui ne possède pas de moyen de régler la langue du clavier.
</P>
<P>
Si je désinstalle tous le programmes qui savent ouvrir un dossier, et que je ne peux plus naviguer d'aucune manière sur mon système... Ai-je encore un système d'exploitation fonctionnel?
</P>
<P>
Et si maintenant je remplaçais tous les programmes qui me donnent accès aux dossiers et aux fichiers par d'autres programmes, ai je changé de système, ou est-ce encore le même?
</P>
<P>
Ainsi, système d'exploitation est un concept à la fois évident, et subtile. On ne va donc pas plus s'attarder là dessus.
</P>
<P>
<A HREF="https://fr.wikipedia.org/wiki/Syst%C3%A8me_d%27exploitation"><IMG ALIGN="middle" SRC="img/os_schemas.png" BORDER="0" ALT=""></A>
</P>

<TABLE ALIGN="center">
<TR>
<TD>Schemas de Principe ( credit Wikipedia )</TD>
</TR>
</TABLE>

<A NAME="kernel"></A>
<H2>Le Noyau du système d'exploitation</H2>

<P>
Il est le seul à communiquer directement avec le matériel. Il intercepte toutes les demandes des programmes, et ne les retransmet que s'il les juge valides.
</P>
<P>
Il gère la mémoire.
</P>
<P>
Il fournit un environnement favorable aux applications.
</P>
<P>
Certains OS sont fait pour fonctionner sur certains matériels, d'autres pour une grande diversité de machines.
</P>

<A NAME="asm"></A>
<H1>Le Langage Machine</H1>

<P>
A l'origine était le langage machine, on perforait des cartes avec des trous qui représentaient des ZÉROs et des UNs....
</P>
<P>
Exemple basique:
</P>

<UL>
<LI>mémorise le chiffre SEPT
<LI>tu lui additionnes CINQ <I>(çà fait DOUZE...)</I>
<LI>tu lui soustrait DEUX
<LI>et tu affiches le résultat <I>(çà fait  DIX !)</I>
</UL>

<P>
Une calculatrice fonctionne ainsi:
</P>

<PRE>
 [ UN NOMBRE  ]     [ UNE OPÉRATION ]
 [ UN NOMBRE  ]     [ UNE OPÉRATION ]     &lt;- Je commente ici !
 [ UN NOMBRE  ]     [ UNE OPÉRATION ]
 [   .......  ]     [     .......   ]   
 [ l'opérande ]     [ l'instruction ]     &lt;- synonymes
</PRE>

<P>
Ce qui donne en pratique:
</P>

<PRE>

 [      7     ]     [       +       ] 
 [      5     ]     [       -       ]     &lt;- Résultat intermédiaire = 12
 [      2     ]     [       =       ]      
 [            ]     [               ]     &lt;- Attention pas de 10  ici !
</PRE>

<P>
<U>Remarque très importante:</U> Les résultat intermédiaires et les affichages de résultat se passent dans le commentaires, car dans la pratique, çà se passe dans des emplacements mémoire... Écrire sur une mémoire ou à l'écran, c'est pareil ! C'est envoyer un signal sur un bus... L'emplacement mémoire dans lequel est stocké le résultat sera appelé dans la suite l'accumulateur.
</P>
<P>
<U>Remarque importante:</U> Si on écrit pas de chiffre sur une calculatrice et que l'on appui directement sur une touche "opération", le dernier chiffre entré dans l'accumulateur reste à sa place et, il est réutilisé.... Autrement dit, quand on appuie sur une des touches des chiffres, on ne touche pas à l'accumulateur, car une autre case mémoire est dédiée à cela.
</P>
<P>
<U>Remarque:</U> C'est pour cela qu'une calculatrice démarre en initialisant sa mémoire, et affiche un joli zéro au démarrage (c'est son processus de boot à elle...).
</P>
<P>
Notre processeur imaginaire fonctionne ainsi pour la partie des calculs:
</P>

<PRE>
 [ INSTRUCTION ]     [ ADRESSE MÉMOIRE ]
 [ INSTRUCTION ]     [ ADRESSE MÉMOIRE ]  
</PRE>

<P>
Presque pareil mais à l'envers, et avec des ADRESSE mémoire... ( On le répète: le clavier, l'écran, tous sont reliés pas des bus entre eux et communiquer avec les périphériques, c'est toujours écrire sur un bus à une ADRESSE, ou lire sur un bus à une certaine ADRESSE )
</P>
<P>
Et, il peut déplacer la valeur d'une case mémoire d'une ADRESSE à une autre avec une instruction particulière ainsi:
</P>

<PRE>
 [   DÉPLACE  ]     [ ADRESSE de départ ]  [ ADRESSE d'arrivée ]
</PRE>

<UL>
<LI>Il ne possède qu'une seule case mémoire des résultats, pour y accéder il faut lire ou écrire l'ADRESSE 01.
<LI>Il peut lire le clavier à l'ADRESSE 02.
<LI>Il ne possède trois cases mémoire temporaire, pour y accéder il faut lire ou écrire l'ADRESSE 04 / ADRESSE 05 / ADRESSE 06.
<LI>Et peut afficher à l'écran en écrivant sur l'ADRESSE 16
<LI>Enfin les résultats (que je notais dans le commentaires) sont accessibles à l'ADRESSE 08
<P></P>
Maintenant, on va écrire le programme le plus con du monde!
<LI>On le lance, le programme ne fait rien sinon attendre qu'on tape un nombre puis qu'on tape sur la touche [Entrée] (ce qui place notre nombre dans la mémoire du clavier).
<LI>On lui donne ainsi trois chiffres (SEPT CINQ et DEUX dans l'exemple du haut)
<LI>Le programme additionne les deux premiers et soustrait le dernier
<LI>Enfin il affiche le résultat
</UL>

<P>
Çà donne:
</P>

<PRE>
 [   DÉPLACE  ]     [      ZÉRO     ]    [   ADRESSE  08 ]  &lt;- on initialise la calculette en 
                                                               accumulateur = 0

 [   DÉPLACE  ]     [   ADRESSE 02  ]    [   ADRESSE  04 ]  &lt;- on lit ce que dit le clavier_ 02 et on le 
                                                               met en mémoire temporaire 04 (il dit SEPT)

 [   DÉPLACE  ]     [   ADRESSE 02  ]    [   ADRESSE  05 ]  &lt;- deuxième nombre en 05 (c'est le CINQ)
 [   DÉPLACE  ]     [   ADRESSE 02  ]    [   ADRESSE  06 ]  &lt;- le troisième en 06 (c'est le DEUX)

 [   DÉPLACE  ]     [   ADRESSE 04  ]    [   ADRESSE  08 ]  &lt;- le premier nombre entre dans l'accumulateur

 [ ADDITIONNE ]     [   ADRESSE 05  ]                       &lt;- on ajoute le second, l'accumulateur prend la 
                                                               accumulateur = 12
 [  SOUSTRAIT ]     [   ADRESSE 06  ]                       &lt;- on soustrait DEUX   &lt;- accumulateur = 10


 [   DÉPLACE  ]     [   ADRESSE 08  ]    [   ADRESSE  16 ]  &lt;- on affiche l'accumulateur à l'écran.
</PRE>

<P>
Ouf!
</P>
<P>
L'ordinateur ne voit que des valeur numériques que peuvent prendre des bus. Zéros et des uns...
</P>
<P>
DÉPLACE se note donc 01
ADDITIONNE se note 02
SOUSTRAIT 03
Les ADRESSES sont identifiées par leur numéro
ZÉRO se note 00
</P>
<P>
Mais çà c'est en écriture décimale..... En binaire çà donne:
</P>

<PRE>
[ 00001 ] [ 00000 ] [ 01000 ]
[ 00001 ] [ 00010 ] [ 00100 ]
[ 00001 ] [ 00010 ] [ 00101 ]
[ 00001 ] [ 00010 ] [ 00110 ]
[ 00001 ] [ 00100 ] [ 01000 ]
[ 00010 ] [ 00101 ] 
[ 00011 ] [ 00110 ] 
[ 00001 ] [ 01000 ] [ 10000 ]
</PRE>

<P>
Donc en gros le langage assembleur, c'est qu'au lieu d'écrire avec des barbarismes ainsi le programme ressemble à
</P>

<PRE>
	DÉPLACE           ZÉRO     ACCUMULATEUR
	DÉPLACE        CLAVIER     MÉMOIRE_04
	DÉPLACE        CLAVIER     MÉMOIRE_05
	DÉPLACE        CLAVIER     MÉMOIRE_06
	DÉPLACE     MÉMOIRE_04     ACCUMULATEUR
	ADDITION    MÉMOIRE_05
	SOUSTRAC    MÉMOIRE_06
	DÉPLACE   ACCUMULATEUR     AFFICHAGE

</PRE>

<P>
Bon c'était rudimentaire... Alors on s'est lancé dans l'écriture de langage de plus haut niveau....
</P>

<A NAME="prog"></A>
<H1>Les Langages de programmation</H1>

<P>
Si vous avez suivis la page précédente sur l'assembleur, l'intérêt des langage de programmation de haut niveau devraient vous paraitre évident.
</P>
<P>
Sinon, vous avez un problème!
</P>

<A NAME="toc7"></A>
<H2>Exemple de cette même calculette à la noix</H2>

<P>
Pour reprendre l'exemple de la page assembleur, si on voulais modifier notre programme pour qu'il fasse la même chose mais qu'il ajoute un petit message de bienvenu.
</P>
<P>
Il nous faudrait nous replonger dans la lecture de ce programme bien austère.... Mais si nous avions la possibilité d'utiliser un langage fonctionnel, nous aurions écrit un truc dans le genre
</P>

<PRE>
Definition_fonction_assembleur
	Calculette_a_la_noix=

		DEPLACE           ZERO     ACCUMULATEUR
		DEPLACE        CLAVIER     MEMOIRE_04
		DEPLACE        CLAVIER     MEMOIRE_05
		DEPLACE        CLAVIER     MEMOIRE_06
		DEPLACE     MEMOIRE_04    ACCUMULATEUR
		ADDITION    MEMOIRE_05                    &lt;- pas d'affichage
		SOUSTRAC    MEMOIRE_06                    &lt;- on laisse le résultat dans l'accumulateur 

	Fin Calculette_a_la_noix


    #### Tout les langages de programmation possèdent une façon d'insérer
    #### à l'intérieur des commentaires. Il sont repérés à la compilation et
    #### ignorés. Dans ce langage fictifs, les commentaires commencent par
    #### les quatre espaces suivis de quatre dièses 

AFFICHE ( Bonjour tout le Monde la calculette du Futur !!! )
AFFICHE ( -------------------------------version 0.0.0.1-- )
AFFICHE ( Entrez les trois nombres !! )

    #### Entre parenthèse, il y a les paramètres que l'on passe à
    #### AFFICHE () qui est une fonction que les auteur du langage fictif
    #### on prit le soin d'écrire à l'avance....

Calculette_a_la_noix ()

    #### Calculette_a_la_noix n'a pas besoin de paramètres

AFFICHE ( Le résultat est %%ACCUMULATEUR )      

    #### Dans notre langage fictif, il semble que %% veut dire
    #### attention ce qui suit n'est pas juste un texte mais une 
    #### donnée à retrouver
</PRE>

<P>
Ca a l'air compliqué, car les commentaires sont un peu utiles... mais si on lit:
</P>

<PRE>
AFFICHE ( Bonjour tout le Monde la calculette du Futur !!! )
AFFICHE ( -------------------------------version 0.0.0.1-- )
AFFICHE ( Entrez les trois nombres !! )

Calculette_a_la_noix ()

AFFICHE ( Le résultat est %%ACCUMULATEUR )      
</PRE>

<P>
bein faut avouer que c'est mieux que de tout écrire en assembleur...
</P>
<P>
On écrira donc les fonctions de bases en assembleur et on brodera autour.... Car en effet la fonction <CODE>AFFICHE ()`</CODE> doit forcément reposer sur quelque chose!
</P>
<P>
Alors forcément de fil en aiguille...
</P>

<A NAME="definitions"></A>
<H2>Définitions</H2>

<DL>
<DT>Code Source</DT><DD>
Le fichier de texte grâce auquel on écrit le programme ainsi que les commentaires
<P></P>
<DT>Compilateur</DT><DD>
Le programme qui effectue l'action de transformer le fichier source en un véritable programme
<P></P>
<DT>Langage machine</DT><DD>
Le langage dans lequel doit être écrit un programme pour être directement exécutable par la machine. Sans commentaire.
<P></P>
<DT>Langage de bas niveau</DT><DD>
Langage de programmation proche du langage machine
<P></P>
<DT>Langage de haut niveau</DT><DD>
Langage de programmation proche du langage humain
<P></P>
<DT>Exécutable</DT><DD>
Programme issu d'une compilation pour une architecture matérielle spécifique et un système d'exploitation spécifique. En gros, un fichier qui contient des segments de données et des segments de code qu'un système d'exploitation sait reconnaitre et démarrer. (et à qui il sait fournir des librairies)
</DL>

<A NAME="library"></A>
<H1>Les Librairies</H1>

<HR NOSHADE SIZE=1>

<P>
Attention, en français, on dit « librairie », mais « Library » signifie bibliothèque. Il faut avoir en tête la bibliothèque pour comprendre le concept.
</P>

<HR NOSHADE SIZE=1>

<P>
Pour qu'un langage de programmation soit portable d'une machine à une autre, il faut que les fonctions de base de ce langages possèdent une traduction dans différents langages machine.
</P>
<P>
Pour qu'un exécutable interagisse avec un système d'exploitation, il faut placer dans l'exécutable des segments de codes qui savent le faire !
</P>
<P>
Une bibliothèque cohérente de fonction s'appelle une librairie. Il existe des librairies pour tout! Certaines vous donnent accès à des fonctions mathématiques, des fonctions pour éditer des chaines de caractères (du texte)...
</P>
<P>
La librairie n'est pas compilé dans l'exécutable, ce qui est dans l'exécutable, c'est du code qui sait interagir avec la librairie qui est dans le système d'exploitation.
</P>
<P>
<U>Les librairies à connaitre sont:</U>
</P>

<DL>
<DT>Les fameuses DLL de Windows</DT><DD>
No comment
<P></P>
<DT>Glibc</DT><DD>
Celle qui construit Gnu-Linux
<P></P>
<DT>Gtk</DT><DD>
Fournit les éléments d'interface graphique de Gnome
<P></P>
<DT>Qt</DT><DD>
Fournit les éléments d'interface graphique de Kde
</DL>

<A NAME="exe"></A>
<H1>Les éxécutables....</H1>

<A NAME="toc11"></A>
<H2>Les principaux formats</H2>

<P>
Les utilisateurs de Windows connaissent surement les fichers ".exe"
</P>
<P>
Sous linux, le format le plus répendu est le ELF.
</P>
<P>
Ce sont tous les deux des fichiers compressés qui contiennent:
</P>

<UL>
<LI>des segments de code en langage machine
<LI>des données
<LI>des des exigences de librairies présentes sur le système d'exploitation
<LI>et des morceaux de librairies
</UL>

<A NAME="multitasking"></A>
<H1>Comment mon ordinateur peut-il faire plusieurs choses à la fois?</H1>

<P>
En faits, ça ne se passe pas comme ça. Les ordinateurs ne peuvent faire qu'une chose à la fois par nombre de processeurs. Mais les ordinateurs sont capables de changer de tache rapidement, et trop les humains qui pensent que ces derniers font plusieurs choses à la fois. On appelle ceci le temps partagé.
</P>
<P>
Une des attributions noyau est de gérer le temps partagé. Un de ces composants est appelé l'agenda, c'est lui qui conserve toutes les informations à propos des différents processus de votre zoo. Chaque 60e de seconde, une minuterie se termine dans le noyau, générant une interruption horloge. L'agenda arrête le processus en cours d'exécution (qui il soit), le suspens en place, et passe la main à un autre processus.
</P>
<P>
1/60 de seconde ça peut paraître peu, mais sur les microprocesseurs aujourd'hui c'est assez pour accomplir des centaines de milliers d'instructions machine, ce qui représente déjà pas mal de travail. Donc même si vous avez plusieurs processus en même temps, chacun peut déjà accomplir beaucoup dans chacune de ses branches temporelles.
</P>
<P>
Dans la pratique, un programme peut ne pas bénéficier de sa tranche temporelle entière. Si une interruption provient d'un des périphériques d'entrée de sortie le noyau pourrait arrêter la la tâche en cours d'exécution,
</P>
<P>
En faits, la vitesse des programmes et très peu limités par la quantité de temps machine qu'ils obtiennent. Il existe quelques exceptions à cette règle, comme le vidéo,la 3D. La plupart du temps les délais sont causés quand un programme doit attendre des données depuis le disque dur ou la connexion réseau.
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="070_interface.php">Les Interfaces</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="090_network.php">Le réseau</A></TD>
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

<input type="hidden" name="page" value="080">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 080");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
