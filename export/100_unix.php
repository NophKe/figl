<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Unix...</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Unix...</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">Le Point historique</A>
  <LI><A HREF="#toc2">La Philosophie Unix</A>
    <UL>
    <LI><A HREF="#toc3">Tout est Fichier</A>
    <LI><A HREF="#toc4">Plein de petits programmes valent mieux qu'un gros</A>
    <LI><A HREF="#toc5">deux lettres</A>
    <LI><A HREF="#toc6">KISS</A>
    <LI><A HREF="#toc7">SuckLess</A>
    </UL>
  <LI><A HREF="#toc8">histoire</A>
    <UL>
    <LI><A HREF="#toc9">Bell Labs</A>
    <LI><A HREF="#toc10">Gnu</A>
    </UL>
  </UL>

</DIV>

<A NAME="toc1"></A>
<H1>Le Point historique</H1>

<P>
Elle est longue cette histoire. Et en faits, elle commence avec l'informatique elle même car Unix est le grand-père de nombreux système d'exploitation.
</P>
<P>
Comme tout système d'exploitation, Unix veut être une interface entre vous, les programmes, et le matériel. Il est donc intéressant de comprendre les conditions dans lesquelles il a été créé pour en saisir certaines de ses subtilités, Mais pour le moment, disons simplement qu'Unix a été créé pour être utilisé sur des téléscripteurs ( TeleType-Writer ). Il s'agissait de machines qui ne comportaient pas d'écran, mais seulement un clavier qui envoyait <B>des bits de donnée texte</B> sur un réseau. L'affichage était réalisé sur une imprimante qui elle aussi recevait du texte depuis le réseau.
</P>
<P>
Ainsi ces machines n'avaient besoin que de très peu de puissant de calcul, et étaient donc bon marché! Un ordinateur que l'on appelait le <B>serveur informatique</B> regroupait toute la puissance de calcul, et l'on y accédait par des terminaux (ou console).
</P>
<P>
<A HREF="https://fr.wikipedia.org/wiki/T%C3%A9l%C3%A9scripteur"><IMG ALIGN="middle" SRC="img/Siemens_T100_Telex.jpg" BORDER="0" ALT=""></A> 
</P>

<TABLE ALIGN="center">
<TR>
<TD><A HREF="https://fr.wikipedia.org/wiki/T%C3%A9l%C3%A9scripteur#">https://fr.wikipedia.org/wiki/T%C3%A9l%C3%A9scripteur#</A></TD>
</TR>
</TABLE>

<P>
Avec les progrès technologiques ces terminaux sont devenus de plus en plus puissant, et l'on a pu y adjoindre des écrans, du son.... Enfin avec l'avènement de l'ordinateur personnel, les terminaux sont devenus virtuels, car la puissance de calcul se trouve désormais présente <I>en local</I> sur l'ordinateur!
</P>
<P>
Ces concepts tiennent néanmoins car ils fournissent une interface standard pour accéder aux ressources d'un ordinateur (à distance ou non donc!), en faisant ainsi abstraction de toute considération matérielle.
</P>
<P>
Le principe de l'utilisation exclusive de données texte limite le recours à des caractères d'échappement. Ssh, par exemple, est un protocole moderne qui permet de se connecter à un ordinateur à distance. Et la plupart des serveurs informatique du web fonctionnent grâce à une variante d'Unix ou de Gnu-Linux.
</P>

<A NAME="toc2"></A>
<H1>La Philosophie Unix</H1>

	<BLOCKQUOTE>
	" Those who do not understand Unix
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	are doomed to reinvent it, poorly.”
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	Henry Spencer, 1987
	</BLOCKQUOTE>
<P>
Dans toute cette longue histoire, et toute cette diversité ont émergé des consensus sur comment doit fonctionner un système d'exploitation.
</P>
<P>
Par exemple...
</P>

<A NAME="toc3"></A>
<H2>Tout est Fichier</H2>

<UL>
<LI>Les fichiers sont des fichiers. C'est logique.
<LI>Les processus sont des fichiers. Bon c'est étrange...
<LI>Les périphériques sont des fichiers.
<LI>La mémoire est un fichier!
<LI>Etc cætera...
</UL>

<P>
L'idée c'est que si votre système d'exploitation fournit une interface facile pratique et puissante pour lire, écrire, modifier, et ranger des fichiers. Alors vous voudrez standardiser votre manière d'accéder aux ressources de votre ordinateur.
</P>
<P>
Il a déjà été dit que d'accéder à n'importe quel périphérique ce n'est rien d'autre que d'envoyer ou recevoir des bits sur un bus. Si tous le bus sont représentés par des fichiers, alors forcément tout devient possible...
</P>
<P>
C'est pour cela qu'Unix fournit de nombreux petits programmes redoutablement efficace pour gérer des fichiers!
</P>
<P>
<U>Remarque</U>: Communiquer avec un bus c'est parler en binaire à haute fréquence.... Il y a donc un certain degré d'abstraction pour simplifier la vie de l'utilisateur. Certains fichiers sont de véritables interfaces de communication!
</P>

<A NAME="toc4"></A>
<H2>Plein de petits programmes valent mieux qu'un gros</H2>

<P>
Douglas McIlroy, l'inventeur des tuyaux Unix (Unix pipes en anglais) et l’un des fondateurs de la tradition d'Unix, résume la philosophie comme suit :
</P>
	<BLOCKQUOTE>
	« Voici la philosophie d'Unix :
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	- Écrivez des programmes qui effectuent une seule chose et qui le font bien.
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	- Écrivez des programmes qui collaborent.
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	- Écrivez des programmes pour gérer des flux de texte, car c'est une interface universelle. »
	</BLOCKQUOTE>
<P>
Ce qui est souvent résumé par :
</P>
	<BLOCKQUOTE>
	« Ne faire qu'une seule chose, et la faire bien. ».
	</BLOCKQUOTE>

<A NAME="toc5"></A>
<H2>deux lettres</H2>

<P>
Les plus vieux programmes Unix ont seulement deux lettres pour nom (ls, ps, df, du, mv, cp...).
</P>
<P>
Un grand nombre de ces programmes de deux lettres font aujourd'hui partie du standard POSIX.
Ça va plus vite à taper! Ces programmes sont simples, bien documentés, bien testés, et on les conserve précieusement. Ces programmes sont puissant, mais ce sont des outils bêtes et méchant!
</P>
<P>
Le programme <CODE>rm</CODE> supprime des fichiers. Il le fait sans demande de confirmation. Et sans afficher de message sur le résultat de l'opération! Et supprime définitivement, pas à la Corbeille!
</P>
<P>
C'est dangereux et risqué car on peut faire de grosses bêtises à la moindre faute de frappe! Il s'agit d'un couteau tranchant comme un rasoir!
</P>
<P>
Le système fournit néanmoins des capacités puissantes de configurations! Unix arrive à vous comme une belle caisse à outils pleine de choses dangereuses. C'est à vous d'organiser votre poste de travail, et de ranger le couteau dans un bel étui.
</P>

<PRE>
alias rm='rm --interactive'
</PRE>

<P>
La ligne ci dessus est un exemple typique de commande Unix. En langage humain cette ligne de commande pourrait se traduire par:
</P>
	<BLOCKQUOTE>
	« A partir de maintenant:
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	à chaque fois que je te demanderai de supprimer un fichier
		<BLOCKQUOTE>
			<BLOCKQUOTE>
			(par ce que j'aurai utilisé le programme rm)
			</BLOCKQUOTE>
		</BLOCKQUOTE>
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	demande moi confirmation
		<BLOCKQUOTE>
			<BLOCKQUOTE>
			(fais comme si j'avais utilisé le programme rm avec l'option d'interactivité). »
			</BLOCKQUOTE>
		</BLOCKQUOTE>
	</BLOCKQUOTE>

<A NAME="toc6"></A>
<H2>KISS</H2>

<P>
Keep it Simply Stupid
</P>
<P>
Exemple simple:
</P>
<P>
Un logiciel propose deux langues pour son interface, le français et l'anglais. Un choix binaire!
</P>
<P>
Le logiciel pourrait proposer de stocker 1 ou 0 dans un fichier de un octet. 1 correspondrait à l'anglais, le 0 au français....
</P>
<P>
Et une option dans le logiciel serait là pour changer la langue du logiciel et écrire le fichier et le tenir à jour quand l'utilisateur cocherait un bouton... (par exemple...)
</P>
<P>
Cela suppose d'écrire un programme (soumis à bug problèmes, et maintenance...), et de créer un fichier purement numérique (numérique donc illisible par un humain).
</P>
<P>
Une autre idée serait que l'on écrive plutôt un <I>joli</I> fichier texte qui contiendrait un texte du genre:
</P>

<PRE>
config.txt
==========

"" Bienvenue dans ce fichier de config, les lignes qui débutent par deux 
"" guillemets sont des commentaires. Les lignes blanches sont ignorées.

"" LANG définit la langue de l'interface. Les choix possibles sont:
""         fr         pour le français
""         en         pour l'anglais

LANG=fr


""  TELLE_AUTRE_OPTION se configure comme ci, comme çà.....

TELLE_AUTRE_OPTION=normal


"" On appelle ce genre de fichiers de configuration des fichiers auto documentés!
</PRE>

<P>
Simple et stupide ce n'est pas toujours avoir une belle interface graphique et de jolis boutons à cliquer!
</P>
<P>
Un système minimaliste et puissant. Capable d'être administrés par une console texte, et dont la configuration se fait par des fichiers humainement lisibles...
</P>

<A NAME="toc7"></A>
<H2>SuckLess</H2>

<P>
Rien de trop ne sera toléré.
</P>
<P>
Chaque philosophie possède ses extrémistes.... ^_^
</P>
<P>
PARAGRAPHE A COMPLETER
</P>

<A NAME="toc8"></A>
<H1>histoire</H1>

<A NAME="toc9"></A>
<H2>Bell Labs</H2>

<P>
Bell Labs, c'était la grosse compagnie de téléphone étasunienne, monopole d'état. Leur centre de recherche a été un des acteur clef du développement de l'informatique.
</P>

<A NAME="toc10"></A>
<H2>Gnu</H2>

<P>
<U>Définissons Gnu:</U>
</P>
<P>
Gnu's not unix !
</P>
<P>
C'est une définition auto référentielle! Dans cette définition que signifie GNU ?
</P>
	<BLOCKQUOTE>
	Gnu's not unix !
	</BLOCKQUOTE>
	<BLOCKQUOTE>
	C'est une définition auto référentielle! Dans cette définition que signifie GNU ?
	</BLOCKQUOTE>
	<BLOCKQUOTE>
		<BLOCKQUOTE>
		Gnu's not unix !
		</BLOCKQUOTE>
	</BLOCKQUOTE>
	<BLOCKQUOTE>
		<BLOCKQUOTE>
		Oui mais je te dis que c'est une définition auto référentielle! Dans cette définition que signifie les lettres GNU ?
		</BLOCKQUOTE>
	</BLOCKQUOTE>
	<BLOCKQUOTE>
		<BLOCKQUOTE>
			<BLOCKQUOTE>
			Gnu's not unix !
			</BLOCKQUOTE>
		</BLOCKQUOTE>
	</BLOCKQUOTE>
<P>
C'est bien compris? GNU ce n'est pas Unix! <B>Gnu est un logiciel libre</B>, et c'est toute la différence!
</P>
<P>
Au passage on parle d'un acronyme récursif! ( Une blague d'informaticien... )
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="090_network.php">Le réseau</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="110_disks.php">Les Disques</A></TD>
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

<input type="hidden" name="page" value="100">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 100");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
