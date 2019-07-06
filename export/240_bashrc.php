<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Un joli bashrc</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Un joli bashrc</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">Run Command</A>
    <UL>
    <LI><A HREF="#toc2">Les Redirections standards</A>
    <LI><A HREF="#toc3">Les Alias</A>
    <LI><A HREF="#toc4">Les variables d'environnement</A>
    </UL>
  <LI><A HREF="#toc5">L'algorithme</A>
    <UL>
    <LI><A HREF="#toc6">La déclaration des variables</A>
    <LI><A HREF="#toc7">On implémente l'algorithme</A>
    </UL>
  <LI><A HREF="#toc8">La déclarations des fonctions</A>
    <UL>
    <LI><A HREF="#toc9">YasciiArt</A>
      <UL>
      <LI><A HREF="#toc10">Mettre de la couleur</A>
      </UL>
    <LI><A HREF="#toc11">Retour sur echo</A>
    <LI><A HREF="#toc12">Yinit</A>
    <LI><A HREF="#toc13">Ybienvenue</A>
    <LI><A HREF="#toc14">YsuRoot</A>
    <LI><A HREF="#toc15">Ywarning</A>
    </UL>
  <LI><A HREF="#toc16">Ymenu</A>
  </UL>

</DIV>

<A NAME="toc1"></A>
<H1>Run Command</H1>

<P>
<U>Rappel N°1</U>:
Un RunCommand, est un fichier qui est lu au démarrage d'un programme. Celui ci consiste en une liste de commandes, qui seront éxecutées comme si l'utilisateur les avait entré au clavier lors du démarrage du programme.
</P>
<P>
<U>Rappel N°2</U>: On ne touche pas à cette ligne qui doit se situer tout en haut du fichier.
</P>

<PRE>
[[ $- != *i* ]] &amp;&amp; return
</PRE>

<P>
D'ailleurs, on se rapproche du jour ou l'on pourra la décortiquer...
</P>

<A NAME="toc2"></A>
<H2>Les Redirections standards</H2>

<P>
On a déjà parlé des redirections. Il éxiste trois fichiers standards:
</P>

<OL>
<LI>La Sortie Standard: L'écran
<LI>L'Entrée Standard: Le Clavier
<LI>La Sortie d'erreurs: L'écran aussi...
</OL>

<P>
On a vu que l'on pouvait rediriger la sortie standard vers un fichier plutôt que vers l'écran.
On a vu que l'on pouvait rediriger la sortie standard d'un programme vers l'entrée standard d'un autre avec une pipe.
</P>
<P>
Cependant, il faut comprendre que par défaut, les message d'erreurs ont une sortie spécifique. Ainsi, s'il se trouve une erreur dans la commande, celle-ci ne vient pas polluer la sortie standard. Souvent, la sortie d'erreurs est connectée à l'écran. Mais on peut la rediriger vers un fichier <I>(On parle de journal d'erreurs)</I>.
</P>

<UL>
<LI><CODE>setleds</CODE> est un programme qui active le pavé numérique du clavier. Il fonctionne depuis le tty, mais pas depuis l'interface graphique.
<LI><CODE>numlockx</CODE> est un programme qui active le pavé numérique. Il fonctionne depuis l'interface graphique mais pas depuis la console.
</UL>

<P>
Si je veux que mon <CODE>.bashrc</CODE> active le pavé numérique dans ces deux situations, je devrai lancer les deux programmes à la suite. Un des deux va forcément m'adresser un message d'erreur. Pour ne pas voir ces message s'afficher, je redirige les erreurs vers <CODE>/dev/null</CODE> qui fonctionne <I>en gros</I> comme un trou noir pour se décharger de ce que l'on veux ignorer.
</P>
<P>
Donc:
</P>

<PRE>
/bin/setleds -D num 2&gt;/dev/null
/bin/numlockx 2&gt;/dev/null

</PRE>

<A NAME="toc3"></A>
<H2>Les Alias</H2>

<PRE>

alias ls='ls --color=auto'
alias vi='vim'
alias i3='startx /bin/i3'
alias gnome='startx /bin/gnome-session'
</PRE>

<A NAME="toc4"></A>
<H2>Les variables d'environnement</H2>

<P>
Lors du boot, un certain nombre de variables sont créées par le système d'exploitation. Ces dernières permettent à chacun des programmes de savoir quelles sont les conventions en vigueur.
</P>
<P>
Parmi ces variables, il y a $PS1 qui est la configuration de ma prompte. Elle contient plein de caractères d'échappement, donc détaillons:
</P>

<DL>
<DT>\u</DT><DD>
Le login de l'dutilisateur
<DT>\h</DT><DD>
Le hostname du système
<DT>\W</DT><DD>
Le répertoire courant
<P></P>

<PRE>
PS1='[\u@\h \W]\$ '
</PRE>

Ma prompte ressemble donc à cela:

<PRE>
[nono@ACER /usr/share/doc/]$
</PRE>

</DL>

<A NAME="toc5"></A>
<H1>L'algorithme</H1>

<P>
Alors Voici, l'algorithme que je voudrai implémenter dans au démarrage de chaque session Bash.
</P>

<UL>
<LI>Je ne veux pas devoir avoir de gestionnaire de connections en mode graphique.
<LI>Je veux que l'interface texte me connecte à mon interface graphique.
<LI>Ainsi, je veux qu'à chaque démarrage depuis la Console <CODE>tty1</CODE>, à la console Clavier
</UL>

<A NAME="toc6"></A>
<H2>La déclaration des variables</H2>

<PRE>
YdefautPTS="/dev/pts/*"
YdefautPTS_action="zsh"

YdefautTTY="/dev/tty*"
YdefautTTY_action="zsh"

YconsoleCourante=`tty`
</PRE>

<A NAME="toc7"></A>
<H2>On implémente l'algorithme</H2>

<PRE>
case $YconsoleCourante in
	
	'/dev/tty1' )			Yinit "startx /bin/i3"		;;
	'/dev/tty2' )			Ymenu				;;
	'/dev/pts/0' )			YsuRoot				;;
	$YdefautPTS )			Yinit "zsh"			;;
	$YdefautTTY )			Ymenu 				;;
esac
</PRE>

<A NAME="toc8"></A>
<H1>La déclarations des fonctions</H1>

<P>
Le shell est un outils assez stupide, quand il exécute un scripte, il commence la lecture de ce fichier, et l'exécute ligne par ligne. Ainsi, si ce scripte contient le code d'une fonction, celle ci doit être déclarée avant d'être appelée. On ne peut donc pas appelle une fonction dont le code se trouve à la fin du fichier.
</P>
<P>
Comme on voudra décomposer le programmes en fonctions élémentaires et appeler ces fonctions avec différents paramètres, on va d'abord écrire nos fonctions. Le code principal du programme (celui qui fera appel à ces fonctions) se trouvera à la fin du code source.
</P>

<OL>
<LI>Une première fonction <CODE>YasciiArt</CODE> affiche un joli logo en Ascii-art.
<LI>Une fonction <CODE>Ybienvenu</CODE> affiche la date, l'heure, et le terminal utilisé
<LI>Une fonction <CODE>Ywarning</CODE> affiche un avertissement dépasse le timeout.
<LI>Une fonction <CODE>Yinit</CODE> dont on reparle plus tard.
<LI>Une fonction <CODE>YsuRoot</CODE> propose  de se connecter sur le compte Administrateur
</OL>

<A NAME="toc9"></A>
<H2>YasciiArt</H2>

<A NAME="toc10"></A>
<H3>Mettre de la couleur</H3>

<P>
<CODE>tput</CODE> est un programme qui vous permet de modifier les paramètres d'affichage du terminal.
</P>
<P>
Pour en savoir plus voyez la page du manuel <CODE>man tput</CODE>.
</P>

<DL>
<DT><B>tput</B> =<B>T</B>erminal <B>PUT</B></DT><DD>
envoi au terminal
<DT><B>setaf</B> =<B>SET A F</B>oreground</DT><DD>
définie un avant-plan
<DT><B>setab</B> =:*SET A B**ackground</DT><DD>
définie un arrière-plan
<DT><B>bold</B></DT><DD>
afficher en gras
<DT><B>clear</B></DT><DD>
vide l'écran <I>(rien à voir avec le mot clair)</I>
</DL>

<P>
Ceci étant dit, voici comment on passe en arrière-plan noir, avant plan bleu, en gras, et en efface l'écran.
</P>

<PRE>
tput setab 0 
tput setaf 4 
tput bold
tput clear
</PRE>

<A NAME="toc11"></A>
<H2>Retour sur echo</H2>

<P>
Le mot-clé <CODE>echo</CODE> sans argument <I>(c-à-d sans message à afficher...)</I> saute simplement une ligne.
</P>

<PRE>
echo
</PRE>

<P>
On affiche un joli logo en Ascii-art...
</P>

<PRE>
echo
echo "                                        PPPPPPPPPPPPPPPPP."
echo "                                        P=================P"
echo "                                        P=====ppppppp======P"
echo "                                        °PP===p     p=======P"
echo "                                          P===p     p=======P"
echo "                                          P===p     p=======P"
echo "   NNN                                    P===PPPPPPP======P  HHHHH[&lt;80;141;5MHH   HHHHHH    kkkkk       kkkk         3333333333333333"
echo "   NNNN     NNNNNNNNNNNNNNN_________      P==============PP     hh        hh      kkkk     kkkk                      333333"
echo "   NNN NN     NNN         /OOOOOOOOOO.    P=====pPPPPPPPP       hh        hh      kkkk   kkkk                       333333 "
echo "   NNN  NN    NNN         OO        |O    P=====P               hh        hh       KKKKKKK                    333333       "  
echo "   NNN   NN   NNN         OO        |O    P=====P               hh        hh      kkkkKKKKK                       3333333  "
echo "   NNN    NN  NNN         OO        |O    P=====P               HhhhhhhhhhHh      kkkk  KKK                           33333"
echo "   NNN     NN NNN         OO        |O  pP======Pp              hh        hh      kkkk    kk                           3333" 
echo "   NNN      NNNNN         OO        |O  P========P              hh        hh      kkkk     kk                         33333"
echo "   NNN       NNNN         OO        |O  P========P              hh        hh      kkkk      kk            333         3333 "
echo "   NNN        NNN         °oooooooooo/  PPPPPPPPPP           HHHHHH    HHHHHHH    kkkk       kkkkkkkk      3333333333333" 
echo
echo
</PRE>

<P>
Et on réinitialise les paramètres de l'affichage.
</P>

<PRE>
tput sgr0
</PRE>

<A NAME="toc12"></A>
<H2>Yinit</H2>

<P>
On appelle notre fonction YasciiArt, qui va afficher le logo.
</P>

<PRE>
	YasciiArt
</PRE>

<P>
On appelle notre fonction Ybienvenu, qui va afficher son message de Bienvenue.
</P>

<PRE>
Ybienvenue

</PRE>

<P>
Enfin, on exécute le programme qui a été donné en premier paramètre.
</P>

<PRE>
	exec $1
</PRE>

<A NAME="toc13"></A>
<H2>Ybienvenue</H2>

<PRE>
	tput setaf 2
	tput bold

	echo "Nous sommes le $(date +"%A %d %B")."
	echo
	echo " TERMINAL UTILISé :" $YconsoleCourante
	echo
	echo "Il est actuellement : $(date +"%H heures et %M minutes.")"	
	echo
	
	tput sgr0
</PRE>

<A NAME="toc14"></A>
<H2>YsuRoot</H2>

<PRE>
{
	Yinit
	echo " o ou O pour Oui, y ou Y pour Yes ..."
	echo 

</PRE>

<P>
Après une prompte demandant "Voulez-vous....." (-p "voulez-vou....") 
lire avec un time-out de 5 secondes (-t 5) un seul caractere ( -n 1  ) 
et le stocker dans la variable $CHOISIROOT
OU BIEN ( || )  c_a_d si cela n'a pas fonctionné... 
initialiser $CHOISIROOT avec la valeur "sans-reponse"
</P>

<PRE>
read -t 5 -n 1 -p " Voulez-vous devenir Root ?" CHOISI || CHOISI="sans reponse"
</PRE>

<PRE>
	case $CHOISI in 
		'o' | 'O' | 'y' | 'Y' )		Yinit "su root" 	;;
		* )				Yinit "zsh"		;;
	esac
}

</PRE>

<A NAME="toc15"></A>
<H2>Ywarning</H2>

<PRE>
	{	YasciiArt
		Ybienvenue
		
		tput setaf 3
		tput bold
		tput blink

		echo "TAPEZ   \" gnome \" pour démarrer un environnement graphique !" 
		echo
		
		tput sgr0
		
		exec zsh
}
</PRE>

<A NAME="toc16"></A>
<H1>Ymenu</H1>

<PRE>
{
	YasciiArt
	echo "		++++++++++++++++++++++++++++++++++++"
	echo "		+ CHOISIR ENVIRONNEMENT A DEMARRER +"
	echo "		++++++++++++++++++++++++++++++++++++"
	echo
	echo " 1- Démarrer i3 Window Manager"
	echo
	echo " 2- Démarrer Z-Shell"
	echo 
	echo " 3- Démarrer Gnome Shell        &lt;--- Recommandé si tu te sens perdu !!!"
	echo 
	echo " 4- Login as root"
	echo
	echo " 5- Démarrer Bash"
	echo 
	
	tput bold
	
	echo " Tu as cinq secondes pour choisir..."
	echo
	
	read -t 5 -n 1 -p " Quel est ton choix? " CHOISI || CHOISI="sans_reponse"

	case $CHOISI in
	
		1 | '&amp;' )			Yinit "startx /bin/i3"			;;
		2 | 'é' )			Yinit "zsh" 				;;
		3 | '"' )			Yinit "startx /bin/gnome-session" 	;;
		4 | "\'") 			Yinit "su root"				;;
		5 | "\(" )			Yinit 					;;
	#	6 | '-' )							;;
	#	7 | è )			 					;;
		"sans_reponse" )		Ywarning				;; 
		* )				Yinit "zsh"				;;
	esac
}



</PRE>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="230_programming.php">Programmer</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="250_c-langage.php">Programmez en C !</A></TD>
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

<input type="hidden" name="page" value="240">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 240");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
