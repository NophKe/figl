<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Les Périphériques</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Les Périphériques</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#Indisp">Les Indispensables</A>
    <UL>
    <LI><A HREF="#Cg">La Carte Graphique</A>
    <LI><A HREF="#Cs">La Carte Son</A>
    <LI><A HREF="#Masse">Une Mémoire De Stockage</A>
    <LI><A HREF="#Net">Une Carte Réseau</A>
    <LI><A HREF="#Keyb">Un Clavier</A>
    <LI><A HREF="#Moins_connu">Les Moins Connus</A>
      <UL>
      <LI><A HREF="#Discrete_card">La Dicrete Card</A>
      </UL>
    </UL>
  <LI><A HREF="#Interrupts">Interruptions Système</A>
  <LI><A HREF="#Controler">Les Contrôleurs</A>
    <UL>
    <LI><A HREF="#Controler_idee">L'Idée</A>
    <LI><A HREF="#Controler_dd">Exemple Avec Un Disque Dur</A>
    </UL>
  </UL>

</DIV>

<HR NOSHADE SIZE=1>

<P>
Attention, on distingue:
</P>

<UL>
<LI>Périphériques <U>intégrés</U> (comme le clavier d'un ordinateur portable, ou un composant soudé sur la carte mère d'un pc)
<LI>Périphériques <U>externes</U> (tous ceux qui sont amovible, ou que l'on peut débrancher)
</UL>

<HR NOSHADE SIZE=1>

<P>
On entends par périphérique tout appareil que l'on peut "brancher" à l'ordinateur. Un clavier ou une souris, est des exemples de périphériques.
</P>
<P>
Le véritable cœur de votre ordinateur (l'unité de calcul), vous ne communiquerez jamais vraiment avec... C'est un composant électronique qui fonctionne en 5 volts et qui communique sur un bus de 64 bit... Il nous faut tout un équipement autour du processeur pour pouvoir tirer profit de ses capacités.
</P>
<P>
Mais quand bien même nous pourrions parler en binaire cinq volts haute fréquence avec une calculatrice de collégien, elle ne nous serait que de peu d'utilité avec son petit écran. On veut que la machine puisse s'exprimer, qu'elle fasse des choses... En bref, qu'elle puisse piloter des appareils (les périphériques)
</P>
<P>
Les périphériques sont les entrées et les sorties, ils sont ce qui fait que ceci est un ordinateur, un serveur, un téléphone, ou une calculette... Et non une théorique machine de Turing...
</P>

<A NAME="Indisp"></A>
<H1>Les Indispensables</H1>

<A NAME="Cg"></A>
<H2>La Carte Graphique</H2>

<P>
C'est ce qui va communiquer avec les écrans. Comme le traitement d'image en temps réel est une activité très gourmande en ressources, elle possède sa propre mémoire vive et son propre processeur (le GPU).
</P>

<A NAME="Cs"></A>
<H2>La Carte Son</H2>

<P>
Même discours que pour la carte graphique, à la différence que de nos jours la puissance de calcul disponible est telle que <I>(pour la plupart des applications courantes, et donc pour la plupart des ordinateurs portables ou bas de gamme</I>) une petite puce électronique intégrée à la carte mère est suffisante.
</P>

<A NAME="Masse"></A>
<H2>Une Mémoire De Stockage</H2>

<P>
Sans aucun programme à réaliser, un ordinateur ne fait rien...ou presque! On a besoin d'au moins un programme à lui donner.
</P>
<P>
Forcément, on aura besoin d'<B>au moins un</B> cd-rom, un dvd, une clef-usb, une carte sd, n'importe quoi... Ou se trouve <B>au moins un</B> programme....
</P>
<P>
Bon! Dans la pratique un support avec un système d'exploitation complet c'est mieux!
</P>
<P>
Et toujours dans la pratique si c'est un support sur lequel on peut lire... mais aussi écrire (pour y enregistrer des trucs, ou modifier nos programme), bein c'est encore mieux. Ainsi on préfèrera les disques durs (hdd) ou mémoire flash parallèles (ssd)
</P>
<P>
<U>Remarque:</U>Oui oui les ssd sont comme plusieurs cartes sd empilées
</P>

<A NAME="Net"></A>
<H2>Une Carte Réseau</H2>

<P>
Une interface matérielle qui transforme des données en signal à émettre et un signal reçu en données.
</P>

<DL>
<DT>Modem</DT><DD>
Carte réseau qui transforme des données en signal pour les réseaux téléphonique
<P></P>
<DT>Carte Ethernet</DT><DD>
Carte réseau qui transforme des données en signal pour les réseaux câblés
<P></P>
<DT>Carte wifi</DT><DD>
Carte réseau qui transforme des données en signal pour les réseaux sans fils
</DL>

<A NAME="Keyb"></A>
<H2>Un Clavier</H2>

<P>
Oui oui c'est un indispensable! Si le micro-logiciel n'arrive pas à trouver de clavier, il va bipper trois fois et va refuser de démarrer la machine! C'est comme çà, la souris, elle par contre est optionnelle.
</P>

<A NAME="Moins_connu"></A>
<H2>Les Moins Connus</H2>

<P>
Il reste encore toute une panoplie:
</P>

<UL>
<LI>de contrôleurs (on y revient tout de suite)
<LI>de périphériques de pointage (comme les tablettes tactiles, les écrans tactiles...)
<LI>de lecteurs (de cartes, de disquette, cd, dvd...)
<LI>des graveurs (cd, dvd-R, dvd+R)
<LI>des récepteurs (radio, TV...)
<LI>des webcam, un micro...
<LI>et j'en passe..
</UL>

<A NAME="Discrete_card"></A>
<H3>La Dicrete Card</H3>

<P>
Mais il y en a un qu'il faut comprendre car il peut être source de confusion...
</P>
<P>
De nos jours les ordinateurs portable en on souvent deux cartes graphiques, une qui est dite "intégrée" et l'autre dite "discrète". Cette dernière est <I>théoriquement</I> plus puissante, mais elle est aussi plus consommatrice d'électricité.
</P>
<P>
(J'ai écrit "théoriquement" car souvent, la discrete card ne possède pas sa propre mémoire vive, elle l'emprunte au processeur.
</P>
<P>
Ainsi, suivant votre configuration, elle démarrera quand vous brancherez un second écran, ou quand l'ordinateur est en charge... Parfois elle se configure dans le bios, parfois pas... Parfois le système d'exploitation gère tellement mieux l'une que l'autre que voilà... Dans ces cas faut bidouiller...
</P>

<A NAME="Interrupts"></A>
<H1>Interruptions Système</H1>

<P>
Votre clavier est un périphérique très simple, il est simple car il génère une petite quantité de données et lentement (selon les standards d'un ordinateur). Quand vous appuyez ou relâchez une touche, cet événement est signalé à travers le fil du clavier. La valeur d'un bus change et déclenche ce qu'on appelle une interruption matérielle.
</P>
<P>
C'est le travail de système d'exploitation de surveiller de telles interruptions. Pour chaque cas possible d'interruption, il y aura un gestionnaire d'interruption, un composant du système d'exploitation qui consigne les données associées à cette interruption jusqu'à ce qu'elle puisse être traitée.
</P>
<P>
N'importe quel type d'interruption est associée à un niveau de priorité. Les interruptions de base priorité (comme les événements du clavier) devront attendre le traitement des processus de haute priorité (comme les événements de disque dur).
</P>
<P>
C'est la capacité du système d'exploitation à savoir correctement prioriser les interruptions qui rend ce système stable et réactif. Et c'est un des gros point fort de Linux, qui font de lui la norme dans le monde des serveurs.
</P>
<P>
Une des interruptions système les plus importante est l'horloge. Elle empêche qu'un seul programme qui plante ne s'accapare l'ordinateur. A chaque fois qu'elle intervient, le système d'exploitation reprends la main et réactualise ses priorités.
</P>

<A NAME="Controler"></A>
<H1>Les Contrôleurs</H1>

<A NAME="Controler_idee"></A>
<H2>L'Idée</H2>

<P>
En Informatique, on appelle un Contrôleur, une puce électronique qui fournit une interface entre un périphérique et une carte mère.
</P>
<P>
Par exemple votre écran doit pourvoir afficher différentes résolutions (niveau de détail de l'affichage), et cependant, certaines résolutions incorrectes pourraient l'endommager...
</P>
<P>
Le Contrôleur est là pour détecter un ordre de changer de résolution, et ne pas le transmettre à l'écran si cet ordre est invalide !
</P>
<P>
Un Contrôleur, c'est une puce électronique qui fonctionne à des vitesses comparables à celle des processeurs, mais qui sait se mettre à la vitesse de ceux qu'elle contrôle.
</P>

<A NAME="Controler_dd"></A>
<H2>Exemple Avec Un Disque Dur</H2>

<P>
Si vous trouvez qui cette page est trop longue, Passez à la suivante (ou sautez le dialogue, pour avoir envie de la lire plus tard...). Ne lisez pas la suite et passez à la prochaine page.
</P>
<P>
(Pour les besoins de la démonstration imaginez votre disque dur comme un lecteur de disque vinyle! Il faut lever la tête de lecture avant de la déplacer sous peine de rayer le disque! Et on éteindra le moteur et on remettra la tête dur à l'origine/ sur son reposoir avant d'éteindre le moteur)
</P>
<P>
Donc:
</P>

<UL>
<LI>Le processeur envoi une demande de lecture d'un fichier.
<LI>Le Contrôleur répond qu'il a comprit la requête.
<LI>Le Contrôleur vérifie que la tête de lecture n'est pas déjà en train de lire quelque chose ailleurs, et attend si besoin.
<LI>Si la tête de lecture est disponible, il va traduire la requête:
 <UL>
 <LI>LÈVE LA TÊTE DE LECTURE
  <UL>
  <LI>OK, c'est fait! Répond le disque.
  </UL>
 </UL>
<LI>Le processeur envoi une autre requête de lecture.
<LI>Le Contrôleur répond qu'il est trop occupé pour le moment mais qu'il le place dans sa liste des choses à faire
 <UL>
 <LI>DÉPLACE LA TÊTE A CET ENDROIT
  <UL>
  <LI>OK, c'est fait!
  </UL>
 <LI>DESCEND LA TÊTE ET LIT
  <UL>
  <LI>bla bla bla bla bla.
  </UL>
 <LI>OK J'AI EU CE QUE JE VOULAIS ARRÊTE DE LIRE
 </UL>
<LI>Le contrôleur commence à envoyer les données là ou on lui a demandé.
 <UL>
 <LI>RELÈVE LA TÊTE
  <UL>
  <LI>OK, c'est fait!
  </UL>
 <LI>DÉPLACE LA TÊTE A CET ENDROIT (on a encore du travail...)
  <UL>
  <LI>ok j'y suis !
  </UL>
 <LI>DESCEND LA TÊTE ET LIT
  <UL>
  <LI>bla bla bla bla bla.
  </UL>
 <LI>OK J'AI EU CE QUE JE VOULAIS
 </UL>
<LI>Le contrôleur commence à envoyer les données là ou on lui a demandé.
 <UL>
 <LI>RELÈVE LA TÊTE
  <UL>
  <LI>ok, c'est fait!
  </UL>
 </UL>
<LI>Le processeur signal qu'il n'a rien d'autre à demander
 <UL>
 <LI>RANGE TA TÊTE A L'ORIGINE
  <UL>
  <LI>ok j'y suis !
  </UL>
 <LI>ÉTEINTS LE MOTEUR
 </UL>
</UL>

<P>
Bien entendu les choses sont plus complexes, les disques durs sont un goulot d'étranglement de l'ordinateur... Et en voyant à quel point les choses deviennent embrouillées en quelques ligne, on devine l'utilité du Contrôleur!
</P>
<P>
Programmer deux composants très différents avec des vitesses de fonctionnement très différentes pour qu'ils travaillent ensemble est un casse-tête... On préfèrera fabriquer:
</P>

<UL>
<LI>d'un coté, un disque dur qui fonctionne comme les ingénieurs des disques décident.
<LI>de l'autre, un processeur qui fonctionne comme les ingénieurs des processeurs décident.
</UL>

<P>
Et au milieu un Contrôleur nous donnera juste le un niveau d'abstraction nécessaire pour nous simplifier la vie.
</P>
<P>
Aussi, pour la qualité et le sérieux de cette page, arrêtez désormais d'imaginer votre disque dur comme un disque vinyle! Vous remarquerez que la discussion entre le contrôleur et le processeur n'a pas de raison de changer pour autant!
</P>
<P>
Remarquez d'ailleurs qu'il pourrait bien y avoir une armée de tailleurs de pierre derrière le contrôleur... Çà ne changerai rien du point de vue du processeur!
</P>
<P>
C'est l'intérêt des <B>niveaux d'abstraction</B>. Une notion fondamentale pour la programmation des logiciels! Retenez ce terme, vous le retrouverez bientôt.
</P>
<P>
Pour charger tous ces niveaux d'abstraction, et passer du tas inerte d'électronique à l'ordinateur fonctionnel, on procède au boot. Le démarrage de l'ordinateur!
</P>
<P>
Vous êtes en principe armé pour passer à la suite....
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="020_hardware.php">Anatomie d'un Ordinateur</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="040_clavier.php">Le clavier</A></TD>
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

<input type="hidden" name="page" value="030">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 030");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
