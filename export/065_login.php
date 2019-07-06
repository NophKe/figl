<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Le Login</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Le Login</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

    <UL>
    <LI><A HREF="#toc1">Interface texte et interface graphique</A>
    <LI><A HREF="#user">Utilisateurs et groupes</A>
    <LI><A HREF="#auth">With great power comes great responsibility</A>
    </UL>

</DIV>
<P>
Les systèmes d'exploitation basés sur Unix, (comme Gnu-Linux par exemple), sont <B>très</B> sécurisables (et pas forcément tous sécurisés...). Cela provient du fait qu'Unix a (dès le début) été pensé pour qu'il puisse fonctionner comme serveur d'université, et être partagé sur un réseau, faire face à de nombreuses requêtes simultanées...etc...
</P>
<P>
Le prix à payer pour que n'importe qui ne puisse s'accaparer toutes les ressources de la machines <I>(ni toucher aux fichiers de son voisin, ni introduire de virus...)</I> a été une gestion stricte des droits de chacun des utilisateurs. Et l'obligation faite à tous les utilisateur de posséder un « compte utilisateur » sur l'ordinateur, un compte associé à un « login », et un mot de passe.
</P>
<P>
Aussi les utilisateurs n'ont pas tous les droits sur la machine, il ne peuvent pas tout faire, et il existe par exemple de nombreux fichiers qui ne leurs sont pas accessibles.
Cette gestion, accompagnée par la philosophie Unix, est une des choses qui donnent sa puissance et sa stabilité aux environnements Gnu-Linux.
</P>

<A NAME="toc1"></A>
<H2>Interface texte et interface graphique</H2>

<P>
Quoi qu'il en soit avant que l'utilisateur ne puisse démarrer des programmes.Il s'autentifie auprès du système d'exploitation à travers un programme que l'on va appeller le gestionnaire de connections. Et cela peut se passer de deux façons différents, soit à travers une interface graphique, soit à travers une interface textuelle.
</P>
<P>
Quand vous vous connectez, vous vous identifiez à l'ordinateur. Sur les Linux modernes, cela se passe généralement à travers un gestionnaire de connexion graphique. Mais il reste possible de passer sur des consoles virtuelles avec la séquence de touches  <CODE>Ctrl + Alt +F2</CODE> (ou F3, F4...), et de se connecter à travers l'interface texte.
</P>
<P>
Le shell (coquillage en anglais), l'interface en mode texte, est appelé ainsi car il englobe et cache le noyau du système d'exploitation. C'est une caractéristique importante des systèmes d'exploitation Unix et Gnu-Linux, que le shell et le noyau soient des programmes bien séparés. Ainsi il est possible d'avoir différent shells, correspondant aux gouts de chacun. Le shell et le noyau communiquent à travers un nombre limité d'appels système.
</P>
<P>
Dans ce cas, un programme <I>(traditionnellement <CODE>getty</CODE>)</I> surveille le terminal, et appelle le programme <CODE>login</CODE>. Ainsi, vous vous identifiez soit au gestionnaire de connexion graphique, soit au programme <CODE>login</CODE> au moyen de votre nom d'utilisateur et de votre mot de passe. Ce nom d'utilisateur est vérifié dans un fichier appelé <CODE>/etc/passwd</CODE> qui est une séquence de lignes décrivant chacune un compte utilisateur.
</P>
<P>
Les mots de passe sont conservés dans un autre fichier chiffré <CODE>/etc/shadow</CODE> dont les autorisations d'accès sont plus restreintes. Lorsque vous entrez votre mot de passe, celui-ci est chiffré de la même façon et le programme <CODE>login</CODE> vérifie que les deux correspondent.
</P>
<P>
La sécurité de cette méthode repose sur le fait que s'il est facile de passer du mot de passe <I>en clair</I> à la version chiffrée, l'inverse est très difficile. Ainsi, même si quelqu'un pouvait voir la version codée de votre mot de passe, ils ne pourraient pas utiliser votre compte. Cela signifie également que si vous perdez votre mot de passe, il n'est pas de moyen de le récupérer, mais seulement de le changer pour quelque chose que vous choisirez <I>(plus judicieusement)</I>.
</P>

<A NAME="user"></A>
<H2>Utilisateurs et groupes</H2>

<P>
Une fois que vous êtes connectés, vous obtenez tous les réglages associés avec votre compte individuel. Vous pouvez également être reconnus comme membre d'un groupe. Un groupe est le nom donné à un ensemble d'utilisateurs qui possèdent des privilèges communs. Les groupes peuvent avoir des privilèges différents des privilèges de leurs membres. Les utilisateurs peuvent être membres de plusieurs groupes.
</P>
<P>
Pour donner un exemple simple, dans une entreprise, chaque utilisateur aura les privilèges nécessaires pour accéder à ses propres fichiers, mais sûrement pas au fichier des autres utilisateurs. Cependant, le groupe comptabilité, qui contiendra tous les membres de la comptabilité, pourra avoir un dossier commun, dans lequel seront stockées un ensemble de fichiers dont l'accès sera un des privilèges du groupe comptabilité. Les membres de la direction, feront probablement parti de différents groupes, si ce n'est pas la totalité.
</P>
<P>
Remarquez que, si l'on se réfère normalement aux utilisateurs et aux groupes par leur noms, ceux-ci sont stockés en interne par des identifiants numériques:
</P>

<UL>
<LI>Le fichier <CODE>/etc/passwd</CODE> identifie votre nom d'utilisateur à un identifiant numérique.
<LI>Le fichier <CODE>/etc/groups</CODE> réalise la même fonction avec les groupes.
</UL>

<P>
Les informations concernant votre compte incluent aussi votre répertoire personnel, (l'endroit où vous mettrez vos fichiers personnels). Enfin, la dernière information, concerne le shell, l'interpréteur de commande, c'est-à-dire le programme de devra lancer <CODE>login</CODE> une fois toutes les vérifications effectuées.
</P>

<A NAME="auth"></A>
<H2>With great power comes great responsibility</H2>

<P>
Il éxiste enfin un utilisateur particulier que l'on nomme le super-utilisateur, ou l'administrateur.
</P>
<P>
Cet utilisateur particulier a pour login <CODE>root</CODE>, et celui-ci possède tous les droits! <B>Tous!</B>
</P>
<P>
C'est un compte utilisateur qui est utilisé pour effectuer la maintenance du système. Il n'est pas prévu d'utiliser ce compte dans la vie courante. Le moindre virus lancé par cet utilisateur serait dévastateur... une application qui plante peut faire du mal! Aussi, démarrer une interface graphique au moyen de l'utilisateur root est le meilleur moyen de tous casser. //(je suis sérieux, je l'ai déjà fait!)
</P>
<P>
La commande <CODE>su Un_Nom_d_Utilisateur</CODE> permet de passer changer d'utilisateur.
La commande <CODE>su -</CODE> est équivalente à <CODE>su root</CODE> et permet de passer en mode root sur une console (graphique ou texte).
</P>
<P>
Le programme <CODE>sudo</CODE> permet de lancer la prochaine commande en mode super-utilisateur. Ce programme vérifiera que vous faites bien partie des utilisateur qui ont le droit de faire çà, vous demande votre mot de passe, et lance la commande comme si c'était le super-utilisateur qui l'avait fait...
</P>
<P>
Au passage, notez que certaines distribution de Gnu-Linux interdisent purement et simplement la connexion en tant que super-utilisateur (<I>Ubuntu</I>). Cependant, par défaut, les utilisateurs ont automatiquement l'accès à <CODE>sudo</CODE>, vous ne pouvez donc pas faire <CODE>su -</CODE> . La solution est alors de faire <CODE>sudo bash</CODE> pour lancer un shell avec les privilèges super-utilisateur.
</P>
<P>
Aussi ce compte ne devrait être utilisé que pour la maintenance du système.
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="060_boot.php">Le Boot</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="067_connected.php">Une fois connecté</A></TD>
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

<input type="hidden" name="page" value="065">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 065");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
