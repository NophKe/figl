<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>Programmez en C !</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>Programmez en C !</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#toc1">Hello_World.c</A>
  <LI><A HREF="#toc2">Réécrivons Notre .bashrc en C</A>
    <UL>
    <LI><A HREF="#toc3">La Fonction main()</A>
    <LI><A HREF="#toc4">Notre Ascii-art</A>
    </UL>
  </UL>

</DIV>

<A NAME="toc1"></A>
<H1>Hello_World.c</H1>

<P>
Commençons donc par le classique Hello World.... Que voici donc!
</P>

<PRE>
#include &lt;stdio.h&gt;

int main()
	{
	printf("Hello World\n");
	return 0;
	}

</PRE>

<P>
Décryptons ceci!
</P>
<P>
Bien entendu, un programme en C commence en incluant des librairies... et si ca ne vous parait pas clair, il faut revenir en arrière...
</P>

<PRE>
#include &lt;stdio.h&gt;
</PRE>

<P>
Cette ligne inclue dans notre programme la librairie <CODE>stdio</CODE> qui va nous permettre d'utiliser <CODE>printf()</CODE>, l'équivalent du <CODE>echo</CODE> de Bash.
</P>
<P>
<CODE>main()</CODE> est en langage C la fonction qui est la première lancée par le programme, elle fait appel à d'autres fonctions qui sont présentes plus loin dans le code source, ainsi qu'à des fonctions qui sont déjà pré-écrites dans des librairies.
</P>
<P>
Tous les programmes écrits en C possèdent une fonction qui porte ce nom de <CODE>main()</CODE> c'est la porte d'entrée du programme. Ci dessous une fonction main() vide. Les instructions sont entre les symboles <CODE>{ }</CODE>
</P>

<PRE>
int main()
	{
	}
</PRE>

<A NAME="toc2"></A>
<H1>Réécrivons Notre .bashrc en C</H1>

<P>
Les 
Pour se faire passer des variables entre fonctions, nous aurons besoin de cases mémoire,
on va donc créer trois variables dont dépendent notre programme,
</P>

<PRE>
char Identifiant_de_la_console[100];
char date[100];
char heur[100];
char choi;
</PRE>

<A NAME="toc3"></A>
<H2>La Fonction main()</H2>

<P>
 Récupérons la date l'heure, et surtout le terminal utilisé par une petite fonction maison que l' on trouvera plus loin dans le code.
</P>

<DL>
<DT>PREMIER SI (if): SI nous sommes sur le terminal virtuel numéro zéro, proposer à l'utilisateur </DT><DD>
 de se connecter au compte root.
<DT>DEUXIEME SI: l'utilisateur répond par 'Y' 'y' 'O' ou 'o', on éxécute 'su root'</DT><DD>
<DT>SINON DU PREMIER SI, (si nous ne sommes pas sur /dev/pts/0) , on lance le menu</DT><DD>
<P></P>
 Maintenant suivant le choix, on va réaliser différentes actions...

<PRE>
int main()
{
	
	// la fonction strcmp( chaine_de_caracteres_1 , chaine_de_caractères_2) vaut zéro si leur
	//  deux textes sont identiques.
	// 
	Recup_info();
	if ( strcmp( Identifiant_de_la_console, "/dev/pts/0\n")   == 0 )

		{
		printf("voulez vous etre root? ");
		char reponse = one_letter(); 
		 
		if ( reponse == 'y'|| reponse == 'Y' || reponse == 'o' || reponse == 'O') 
			system("su root");

		// Sinon, on lance zsh
		else
			system ("zsh");
	}
		
	
	else
		choi = menu();
	// Remarquez le point virgule à la fin de chaque ligne d'instruction..
	
	
	if (strcmp(choi,"1")==0 || strcmp(choi,"&amp;")==0)
		{
		info_nono();
		system("startx /bin/i3");
		}

	else if (strcmp(choi,"2")==0 || strcmp(choi,"é")==0 || strcmp(choi,"^[[B")==0)
			{
			info_nono();
			system("zsh");
			}	

	else if (strcmp(choi,"3")==0 || strcmp(choi,"\"")==0)
			system("startx /bin/gnome-session");

	else if (strcmp(choi,"4")==0 || strcmp(choi,"\'")==0)
	 		{
			info_nono();
			system("sudo bash");		
			}

	else if (strcmp(choi,"5")==0 || strcmp(choi,"\(")==0)
			{
			info_nono();
			system("sudo zsh");
			}

	else if (strcmp(choi,"6")==0 || strcmp(choi,"-")==0)
			system("bash");

	else 
			system("zsh");
	
	
	return 0;
}
</PRE>

</DL>

<A NAME="toc4"></A>
<H2>Notre Ascii-art</H2>

<PRE>

void ascii_art (void){
	//	tput setab 0 
	//	tput setaf 4
	//	tput clear
	//	tput bold
	//	echo
	//	echo
	printf("                                        PPPPPPPPPPPPPPPPP.\n");
	printf("                                        P=================P\n");
	printf("                                        P=====ppppppp======P\n");
	printf("                                        °PP===p     p=======P\n");
	printf("                                          P===p     p=======P\n");
	printf("                                          P===p     p=======P\n");
	printf("   NNN                                    P===PPPPPPP======P  HHHHHHH   HHHHHH    kkkkk       kkkk         3333333333333333                      \n");
	printf("   NNNN     NNNNNNNNNNNNNNN_________      P==============PP     hh        hh      kkkk     kkkk                      333333                      \n");
	printf("   NNN NN     NNN         /OOOOOOOOOO.    P=====pPPPPPPPP       hh        hh      kkkk   kkkk                       333333                       \n");
	printf("   NNN  NN    NNN         OO        |O    P=====P               hh        hh       KKKKKKK                    333333                             \n");
	printf("   NNN   NN   NNN         OO        |O    P=====P               hh        hh      kkkkKKKKK                       3333333                        \n");
	printf("   NNN    NN  NNN         OO        |O    P=====P               HhhhhhhhhhHh      kkkk  KKK                           33333                      \n");
	printf("   NNN     NN NNN         OO        |O  pP======Pp              hh        hh      kkkk    kk                           3333                      \n");
	printf("   NNN      NNNNN         OO        |O  P========P              hh        hh      kkkk     kk                         33333                      \n");
	printf("   NNN       NNNN         OO        |O  P========P              hh        hh      kkkk      kk            333         3333                       \n");
	printf("   NNN        NNN         °oooooooooo/  PPPPPPPPPP           HHHHHH    HHHHHHH    kkkk       kkkkkkkk      3333333333333        ##     ##     ## \n");
	printf("\n\n");
	//	tput sgr0
}


void Recup_info(){

	FILE *fp;
	
	fp = popen("tty", "r");
	fgets(Identifiant_de_la_console, 1000, fp);
	pclose(fp);
	
	fp = popen("date +'%A %d %b'", "r");
	fgets(date, 1000, fp);
	pclose(fp);
	
	
	fp = popen("date +'%H heures et %M minutes.'", "r");
	fgets(heur, 1000, fp);
	pclose(fp);
}

void info_nono(void) {
	printf ("\n");
	printf (" Nous sommes le %s", heur);
	printf ("\n");
	printf (" TERMINAL UTILISé :%s", Identifiant_de_la_console);
	printf ("\n");
	printf ("\n");
	printf (" Il est actuelement : %s",heur);
	printf ("\n");
}



int menu() {
	printf("		++++++++++++++++++++++++++++++++++++\n");
	printf("		+ CHOISIR ENVIRONNEMENT A DEMARRER +\n");
	printf("		++++++++++++++++++++++++++++++++++++\n");
	printf("\n");
	printf(" 1- Démarrer i3 Window Manager\n");
	printf("\n");
	printf(" 2- Démarrer Z-Shell\n");
	printf("\n");
	printf(" 3- Démarrer Gnome Shell        &lt;--- Recommandé si tu te sens perdu !!!\n");
	printf("\n");
	printf(" 4- Login as root with zsh \n");
	printf("\n");
	printf(" 5- Login as root with zsh \n");
	printf("\n");
	printf(" 6- Login as nono with Bash\n");
	printf("\n");
	printf("\n");
	printf(" Quel est ton choix? ");

		// On utilise la fonction one_letter pour récupérer la réponse de l'utilisateur.

	return ( one_letter() );
}




	// Il n'y a pas d'équivalent de fonction en langage C pour lire un seul caractère depuis le
	// clavier, nous sommes donc obligé d'écrire une fonction qui nous donne cette fonctionnalité.
	// 
	// Car en effet, Bash et les différents shells prennent le contrôle du clavier, et vont 
	// toujours temporiser les données que vous tapez au clavier.
	//
	// L'astuce revient à demander à la console d'émuler un autre type de téléscripteur...
	//
	// Cette fonction se base sue un appel au sytème d'exploitation. La fonction  system(), nous 
	// permet lancer un programme présent sur le disque. Ici nous appellons /bin/stty. Qui est une
	// interface qui permet de changer le fonctionnemt de la console.
	//
	// Pour en savoir plus sur stty et les différent modes de la console virtuel linux, voir la page
	// de manuel. ( man stty ) 




void Pave_Numerique_On() 
	{	
		// On active le pavé numérique, setleds l'active en mode texte, et numlockx active le
		// pavé numérique dans l'interface graphique. Comme l'un  des deux programmes va 
		// forcément se plaindre de ne pas être utilisé au bon endroit, on redirige les messages
		// d'erreur vers /dev/null.
		// 
		// man setleds et numlockx --help pour se renseigner sur ces deux programmes
	system("setleds -D num 2&gt; /dev/null");
	system("numlockx 2&gt; /dev/null");
}






int one_letter ()
{
		// Passe le terminal en mode raw, ainsi la console n'attend pas que l'utilisateur presse 
		// la touche [entré]  pour transmettre au programme les données du clavier.
	system("stty raw");

		// on récupère un caractère avec la fonction getchar();
	char retour = getchar();

		// On remet le terminal en mode normal
	system("stty cooked");

		// Et on renvoit la réponse
	return (retour); 
}
</PRE>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="240_bashrc.php">Un joli bashrc</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="260_archlinux.php">Cas pratique: Installer Arch-Linux</A></TD>
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

<input type="hidden" name="page" value="250">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 250");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
