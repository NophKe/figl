<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Le réseau</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Le réseau</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#internet">Internet</A>
  <LI><A HREF="#tcpip">IP, TCP et UDP</A>
    <UL>
    <LI><A HREF="#toc3">Ip</A>
    <LI><A HREF="#toc4">Tcp</A>
    <LI><A HREF="#toc5">Udp</A>
    </UL>
  <LI><A HREF="#dhcp">Dhcp</A>
    <UL>
    <LI><A HREF="#toc7">L'adresse MAC</A>
    <LI><A HREF="#toc8">Le principe</A>
    </UL>
  <LI><A HREF="#dns">Dns</A>
    <UL>
    <LI><A HREF="#toc10">Le choix du dns</A>
    <LI><A HREF="#toc11">Le fichier /etc/hosts</A>
    </UL>
  <LI><A HREF="#http">Http</A>
    <UL>
    <LI><A HREF="#html">Html, HyperText Markup Langage</A>
    <LI><A HREF="#toc14">Http dans tous çà?</A>
      <UL>
      <LI><A HREF="#toc15">1/ Le site web</A>
      <LI><A HREF="#toc16">2/ Le Referer</A>
      <LI><A HREF="#toc17">3/ Le User Agent</A>
      </UL>
    </UL>
  </UL>

</DIV>

<A NAME="internet"></A>
<H1>Internet</H1>

<P>
Internet, c'est une technologie qui permet de connecter <B>physiquement</B> autant de petits réseaux d'ordinateurs que l'on veut <I>ou presque</I> à l'intérieur d'un réseau global.
</P>
<P>
Pour communiquer entre eux par Internet, tous les ordinateurs connectés doivent communiquer selon des protocoles de communication qui leur sont communs. C'est ce que l'on va voir par la suite.
</P>
<P>
Internet repose donc sur un certain nombre de standards technologiques, ce que ce soient des protocoles de communication, des spécification matériels, ou autre pour rendre cette interconnexion possible.
</P>
<P>
On commet de nombreux, abus de langage dans le domaine. Ce que l'on appelle communément Internet, le net, c'est souvent le web (qui est un ensemble de technologie qui permet de surfer de pages en pages à travers Interne)
</P>
<P>
Mais de nombreuses application comme les emails, le partage de fichier (ftp), et bien d'autres sont tout à fait possible sur un réseau local, sans accès à internet.
</P>

<A NAME="tcpip"></A>
<H1>IP, TCP et UDP</H1>

<P>
Tcp et ip sont les protocoles élémentaires de tous les réseaux. Udp est surtout utile sur Internet et doit être connu pour savoir régler un pare-feu.
</P>

<A NAME="toc3"></A>
<H2>Ip</H2>

<P>
Ip c'est l'Internet Protocole. Du coup c'est le standard <I>de facto</I> de tous les réseaux.
</P>
<P>
Il permet d'identifier chacune des machines du réseau comme une machine unique en lui attribuant une adresse unique. C'est l'<B>adresse ip</B>.
</P>
<P>
Il permet aussi la mise en place de routeur. Qui sont des nœuds sur lesquels on connecte des sous-réseaux.
</P>
<P>
Sur un sous réseau chaque machine possède une adresse ip qui lui est propre, mais ce réseau est vu de l'extérieur comme une seule adresse ip.
</P>
<P>
Ainsi chez vous se trouve une probablement une "box" qui est le routeur d'un sous-réseau sur lequel sont connectés les ordinateurs/tablettes/téléphones que vous avez chez vous.
</P>
<P>
Cette box est en fait, un modem <B>+</B> un routeur. Ainsi vos appareils sont sur un sous-réseau local (chez vous), et il possèdent tous une adresse locale unique, mais partagent tous la même adresse vu de l'Internet.
</P>

<A NAME="toc4"></A>
<H2>Tcp</H2>

<P>
Ip est donc un protocole rudimentaire mais qui permet que chaque ordinateur puisse communiquer avec n'importe quel autre, mais Ip ne nous certifie pas que les données reçues sont arrivées ni dans l'ordre ni que l'on a tout reçu en bonne qualité, ni que ce que l'on a envoyé a bien été reçu.
</P>
<P>
Ip permet ce qu'on appelle un échange de "paquets de données". Tcp est le protocole qui nous permet d'insérer à ces paquets une date, un contrôle de l'intégrité des données, et un accusé de réception...
</P>
<P>
Tcp établie une connexion entre deux adresse ip, et c'est à l'intérieur de cette connexion de les paquets ip prennent leur sens les uns par rapport aux autres.
</P>

<A NAME="toc5"></A>
<H2>Udp</H2>

<P>
Il fait en comme tcp, mais sans l'accusé de réception et une méthode de contrôle de l'intégrité de données plus souple.
</P>
<P>
L'exemple mille fois donné, c'est les balles de mitrailleuse dans les jeux en ligne. Si une d'entre elle est perdu c'est n'est pas grave... Le paquet s'auto-détruira de lui même... Mais si les balles arrive avec trop de retard (on parle de lag), le jeu est injouable.
</P>
<P>
Udp est donc moins fiable mais plus rapide que Tcp.
</P>

<A NAME="dhcp"></A>
<H1>Dhcp</H1>

<P>
C'est le « Dynamic Host Configuration Protocol ». Pour faire simple (car il n'y a pas de raison!), c'est un protocole qui permet à chacun des ordinateurs d'un réseau de se faire attribuer automatiquement une adresse ip.
</P>

<A NAME="toc7"></A>
<H2>L'adresse MAC</H2>

<P>
Une adresse MAC unique est attribuée à chacune des carte réseau vendue sur Terre depuis <I>(je ne trouve plus la date)</I> grâce à une technique que les vendeurs de carte réseau ont tous adoptée.
</P>
<P>
Il existe des logiciels qui permettent de changer d'adresse MAC pour ceux qui tiennent à leur anonymat. En effet, de la même façon qu'il est possible surveiller les activités d'une adresse ip , il est techniquement plus difficile mais néanmoins possible de surveiller une adresse MAC...
</P>
<P>
Edward Snowden a notamment fait des révélations pour ce qui est de la N.S.A, mais c'est pas valable que pour cette dernière étant donné que vous divulguez votre adresse MAC à chaque connexion réseau. (pensez à tous ces réseaux de supermarché, les MacDonald's, etc... qui demandent votre nom ou votre adresse mail pour vous autoriser la connexion)
</P>

<A NAME="toc8"></A>
<H2>Le principe</H2>

<P>
Ainsi, votre ordinateur quand il détecte une nouvelle connexion à un réseau, signale publiquement son adresse MAC et demande publiquement s'il n'y a pas de service dhcp qui traine dans le coin.
</P>
<P>
Ensuite, le serveur dhcp (ou le routeur, ou la box, ou MacDo) envoie publiquement un paquet contenant l'adresse MAC de votre carte réseau et votre nouvelle adresse ip.
</P>
<P>
Le serveur nous envoi également un masque de sous-réseau. Sans rentrer dans les détails, sachez que c'est comme l'indicatif téléphonique (çà simplifie les adresses en local, mais çà impose des préfixes pour sortir d'un réseau)
</P>
<P>
Et enfin! Nous recevons éventuellement une adresse de serveur dns (c'est la suite)
</P>

<A NAME="dns"></A>
<H1>Dns</H1>

<P>
Le Domain Name Système, le système de noms de domaine, permet de ne pas connaitre les adresses ip de tous les serveurs que vous utilisez.
</P>
<P>
Ainsi quand vous tapez une adresse web du style <A HREF="http://www.DesGrosLolos.biz">http://www.DesGrosLolos.biz</A> ce qui se passe c'est que vous envoyez une requete à votre serveur dns auquel vous êtes connecté, et ce dernier traduit <A HREF="http://www.desgroslolos.biz">www.desgroslolos.biz</A> zn une adresse ip (genre 91.198.174.192, d'ailleurs tapez 91.198.174.192, dans votre navigateur internet, vous verrez que çà marchera!)
</P>

<A NAME="toc10"></A>
<H2>Le choix du dns</H2>

<P>
Si vous ne spécifiez pas de serveur dns à votre ordinateur, il utilisera celui qui sera proposé par le serveur dhcp. Souvent ce sera alors celui de votre fournisseur d'accès à internet. Mais si vous n'êtes pas chez vous, alors difficile de savoir qui ce sera.
</P>
<P>
Sachant que le serveur dns sera au courant de toutes les adresses que vous consulterez, il parait légitime de vouloir avoir confiance en votre serveur dns.
</P>
<P>
Il existe de nombreux serveurs dns dont certains filtrent le contenu sexuel, ou frauduleux, d'autres défendent l'anonymat, ou un internet sans censure.... chacun trouvera midi à sa porte. En cas de besoin ou de panne les serveurs de Google (8.8.4.4 et 8.8.8.8) sont rapides et faciles à mémoriser.
</P>
<P>
Le choix du dns se fait très simplement en éditant le fichier texte <CODE>/etc/resolv.conf</CODE>
</P>
<P>
Nous y reviendrons dans la partie sur les fichiers de configuration.
</P>

<A NAME="toc11"></A>
<H2>Le fichier /etc/hosts</H2>

<P>
S'il y a un autre fichier texte bien pratique c'est celui-ci. Il nous permet des définir depuis notre propre ordinateur. Par exemple, supposons que vous aimiez bien le moteur de recherche <A HREF="http://www.DuckDuckGo.com">www.DuckDuckGo.com</A> mais que vous trouvez son adresse trop longue.... Alors vous trouvez l'adresse ip de DuckDuckGo (46.51.197.89) et vous editez ainsi votre <CODE>/etc/hosts</CODE>
</P>

<PRE>
 46.51.197.89 www.DuckDuckGo.com DuckDuckGo.com duck.go z
</PRE>

<P>
Syntaxe facile: une adresse par ligne suivie d'un espace et d'une ou plusieurs adresses.
</P>
<P>
Alors votre ordinateur se connectera directement à DuckDuckGo sans passer par le serveur dns, et ce que vous tapiez <CODE>duckduckgo.com</CODE> dans la barre d'adresse de votre navigateur, mais pareil si vous tapez <CODE>duck.go</CODE>, ou même juste <CODE>z</CODE>.
</P>
<P>
Dans la pratique si votre navigateur ne voit pas de .com, .org ou autre lancera probablement une recherche web au lieu de lancer le site et vous devrez entrer <CODE>http://z</CODE>.
</P>
<P>
Et de même qu'il vous dira surement que le certificat de validité du site n'est valable que pour DuckDuckGo... Avertissement que vous pouvez ignorer...
</P>
<P>
Autre Exemple avec <I>l'adresse poubelle</I> qui nous permet d'ignorer complètement une adresse
</P>

<PRE>
0.0.0.0 analytic-google.com
0.0.0.0 www.analytic-google.com www-google-analytics.l.google.com mimageads.googleadservices.com
0.0.0.0 mpartner.googleadservices.com pagead1.googlesyndication.com pagead2.googlesyndication.com
0.0.0.0 pagead3.googlesyndication.com pagead.googlesyndication.com partner.googleadservices.com
0.0.0.0 tpc.googlesyndication.com www.googleadservices.com googleads4.g.doubleclick.net
0.0.0.0 pagead-googlehosted.l.google.com video-ad-stats.googlesyndication.com
0.0.0.0 analytics-api-samples.googlecode.com google-analytics.com ssl.google-analytics.com 
0.0.0.0 www.google-analytics.com
0.0.0.0 4.afs.googleadservices.com pagead2.googleadservices.com partner.googleadservices.com
0.0.0.0 domains.googlesyndication.com analytics.google.com clientmetrics-pa.googleapis.com
0.0.0.0 googleadservices.com googlesyndication.com pagead.l.google.com partnerad.l.google.com
</PRE>

<P>
A la différence d'un Adblock ou autre qui ne fonctionne que pour votre navigateur internet, le fichier <CODE>/etc/hosts</CODE> s'applique à la totalité du système d'exploitation, et à tous vos programmes. L'exemple ci-dessus rendra donc tout votre l'ordinateur incapable d'accéder aux publicités de google et incapable de communiquer avec leur système de collecte de données.
</P>
<P>
On peut trouver des fichier <CODE>/etc/hosts</CODE> déja bien fournis, que ce soit pour éviter le dns, pour créer de raccourcis d'adresse, ou pour réaliser un filtre parental, c'est efficace et rapide, car c'est géré en direct par le système d'exploitation et aucun programme ne peut passer outre.
</P>

<A NAME="http"></A>
<H1>Http</H1>

<P>
La grande idée qui a lancé l'Internet grand public, c'est le web!
</P>
<P>
Et le web, c'est la réunion de trois choses:
</P>

<UL>
<LI>Http: Un protocole de communication qui permet l'échange de documents notamment html
<LI>Html: Un format de document qui permet d'insérer des liens hypertexte
<LI>Les adresse web...
</UL>

<P>
<A HREF="https://fr.wikipedia.org/wiki/Suite_des_protocoles_Internet"><IMG ALIGN="middle" SRC="img/Protocol_Suite.png" BORDER="0" ALT=""></A>
</P>

<TABLE ALIGN="center">
<TR>
<TD>La suite des protocoles qui contribuent au http ( credit Wikipedia )</TD>
</TR>
</TABLE>

<A NAME="html"></A>
<H2>Html, HyperText Markup Langage</H2>

<P>
Quand vous entrez le nom d'un site web, le dns vous envoi une adresse ip à laquelle joindre le serveur. Puis votre ordinateur établit une connexion tcp/ip avec le serveur web.
</P>
<P>
Une fois ces formalités réalisées, votre navigateur reçoit une page web dans écrite dans un langage qui se nomme le html (ou un de ses descendants: htm xhtml xht...)
</P>
<P>
Le html est un format bien pratique il permet d'écrire des documents semblables à ceux que vous créeriez avec votre traitement de texte, c'est à dire avec une mise en page, des couleurs, différentes polices de caractères.
</P>
<P>
Mais il permet aussi d'inclure des d'autres "ressources" disponible sur le web (des images, vidéos, et même des programmes!).
</P>
<P>
Et enfin, il permet d'insérer des liens hypertextes sur lesquels on clique pour accéder à d'autres pages web, ou d'autres ressources disponibles sur le web, mais pas seulement.
</P>
<P>
C'est ce que l'on nomme un langage de balises <I>markup</I>, ceux-ci fonctionne un petit peu à la façon des caractères d'échappement que l'on verra plus tard.
</P>
<P>
Une page html est un fichier texte interprété par un navigateur Internet en fonction de balises. Ainsi, si le navigateur voit le texte suivant:
</P>

<PRE>
Hello World !

</PRE>

<P>
Il affiche:
</P>
<P>
Hello World !
</P>
<P>
Mais s'il lit ceci:
</P>

<PRE>

&lt;u&gt; &lt;b&gt; Hello &lt;/b&gt; &lt;i&gt; World  &lt;/i&gt; &lt;/u&gt; sans fioriture...
</PRE>

<P>
Il affichera:
__ ** Hello ** // world // __ sans fioriture
</P>
<P>
Les parties entre crochets sont les balises, ainsi:
</P>

<DL>
<DT><B>&lt;u&gt;		&lt;/u&gt;</B></DT><DD>
Tout ce qui est entre ces deux balises est souligné <I>(underlined)</I>
<DT><B>&lt;b&gt;		&lt;/i&gt;</B></DT><DD>
Tout ce qui est entre ces deux balises est en gras
<DT><B>&lt;i&gt;		&lt;/i&gt;</B></DT><DD>
Tout ce qui est entre ces deux balises est en italique
<P></P>
==Les adresses web==
<P></P>
Simplifié à l'extrême une adresse web c'est!
<P></P>
</DL>

<TABLE BORDER="1">
<TR>
<TD>Un protocole</TD>
<TD>://</TD>
<TD>un_serveur_internet</TD>
<TD>une_resource_d_internet</TD>
</TR>
</TABLE>

<P>
Par exemple:
</P>

<TABLE BORDER="1">
<TR>
<TD>http</TD>
<TD>:/</TD>
<TD>/gnu.org</TD>
<TD>/home.fr.html</TD>
</TR>
</TABLE>

<P>
La grande force du web, c'est d'avoir été conçu sans hiérarchie, sans annuaire, et sans contraintes... Personne n'impose à personne d'organiser son site en aucune façon.
</P>
<P>
Vous pouvez connaitre l'adresse d'une ressource, ou sinon, de liens en liens, on finit par tout retrouver. (Ce coté bordélique a d'ailleurs fait la fortune des moteurs de recherche...)
</P>
<P>
Et l'on peut ainsi se balader de lien en lien tant que le protocole (le début de l'adresse) est géré par le navigateur, et tant que la ressource est une page html.
</P>
<P>
Si la ressource n'est pas une page html, le navigateur essaiera de la lire avec ses plugin, ou avec les programmes disponibles sur votre ordinateur. Si votre ordinateur ne possède pas de programme pour afficher/gérer cette ressource, le navigateur vous proposera de la télécharger.
</P>

<A NAME="toc14"></A>
<H2>Http dans tous çà?</H2>

<P>
Et bien pas tant que çà en fait...
</P>
<P>
C'est un protocole de transfert de données, il ne fait en ce sens pas beaucoup plus que ce que ferait d'autres protocoles de transfert de fichier (s'informer sur une ressource, la télécharger, vérifier son intégrité...)
</P>
<P>
Cependant il indique au trois choses au serveur de la ressource:
</P>

<A NAME="toc15"></A>
<H3>1/ Le site web</H3>

<P>
Le premier est le seul indispensable auquel on demande la ressource (des fois il y a plusieurs sites sur une seule adresse ip)
</P>

<A NAME="toc16"></A>
<H3>2/ Le Referer</H3>

<P>
Cette section indique le document dans lequel se trouvait le lien vers la ressource que vous demandez actuellement.
</P>
<P>
<U>Remarque:</U> Cela signifie que même les tous les sites (même ceux qui ne cherchent pas à vous suivre) savent toujours d'où vous arrivez.... À moins de régler votre navigateur pour ne pas le faire (parfois il faut ruser pour y arriver, pour Firefox ou chrome, le plus simple est passer par des extensions)
</P>

<A NAME="toc17"></A>
<H3>3/ Le User Agent</H3>

<P>
Dans cette section les navigateurs vont indiquer votre langue, votre matériel, et plein d'autres détails qui permettrons de vous offrir une expérience <I>personnalisée</I>.
</P>
<P>
Même remarque que précédemment, il est parfois plus simple de changer de navigateur que de vouloir l'empêcher de frimer.
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="080_software.php">Le Logiciel</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="100_unix.php">Unix...</A></TD>
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

<input type="hidden" name="page" value="090">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 090");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
