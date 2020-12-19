Un joli bashrc


## Run Command 

Rappel N°1:
Un RunCommand, est un fichier qui est lu au démarrage d'un programme. Celui ci consiste en une liste de commandes, qui seront éxecutées comme si l'utilisateur les avait entré au clavier lors du démarrage du programme.

Rappel N°2: On ne touche pas à cette ligne qui doit se situer tout en haut du fichier.

    [[ $- != *i* ]] && return

D'ailleurs, on se rapproche du jour ou l'on pourra la décortiquer...

### Les Redirections standards 

On a déjà parlé des redirections. Il éxiste trois fichiers standards:

1. La Sortie Standard: L'écran
1. L'Entrée Standard: Le Clavier
1. La Sortie d'erreurs: L'écran aussi...

On a vu que l'on pouvait rediriger la sortie standard vers un fichier plutôt que vers l'écran.
On a vu que l'on pouvait rediriger la sortie standard d'un programme vers l'entrée standard d'un autre avec une pipe.

Cependant, il faut comprendre que par défaut, les message d'erreurs ont une sortie spécifique. Ainsi, s'il se trouve une erreur dans la commande, celle-ci ne vient pas polluer la sortie standard. Souvent, la sortie d'erreurs est connectée à l'écran. Mais on peut la rediriger vers un fichier *(On parle de journal d'erreurs)*.

 * `setleds` est un programme qui active le pavé numérique du clavier. Il fonctionne depuis le tty, mais pas depuis l'interface graphique.
 * `numlockx` est un programme qui active le pavé numérique. Il fonctionne depuis l'interface graphique mais pas depuis la console.

Si je veux que mon `.bashrc` active le pavé numérique dans ces deux situations, je devrai lancer les deux programmes à la suite. Un des deux va forcément m'adresser un message d'erreur. Pour ne pas voir ces message s'afficher, je redirige les erreurs vers `/dev/null` qui fonctionne *en gros* comme un trou noir pour se décharger de ce que l'on veux ignorer.

Donc:

    /bin/setleds -D num 2>/dev/null
    /bin/numlockx 2>/dev/null
    

### Les Alias 

    
    alias ls='ls --color=auto'
    alias vi='vim'
    alias i3='startx /bin/i3'
    alias gnome='startx /bin/gnome-session'

### Les variables d'environnement 

Lors du boot, un certain nombre de variables sont créées par le système d'exploitation. Ces dernières permettent à chacun des programmes de savoir quelles sont les conventions en vigueur.

Parmi ces variables, il y a $PS1 qui est la configuration de ma prompte. Elle contient plein de caractères d'échappement, donc détaillons:

: \u
Le login de l'dutilisateur
: \h
Le hostname du système
: \W
Le répertoire courant

    PS1='[\u@\h \W]\$ '
Ma prompte ressemble donc à cela:
    [nono@ACER /usr/share/doc/]$

## L'algorithme 

Alors Voici, l'algorithme que je voudrai implémenter dans au démarrage de chaque session Bash.

 * Je ne veux pas devoir avoir de gestionnaire de connections en mode graphique.
 * Je veux que l'interface texte me connecte à mon interface graphique.
 * Ainsi, je veux qu'à chaque démarrage depuis la Console `tty1`, à la console Clavier

### La déclaration des variables 

    YdefautPTS="/dev/pts/*"
    YdefautPTS_action="zsh"
    
    YdefautTTY="/dev/tty*"
    YdefautTTY_action="zsh"
    
    YconsoleCourante=`tty`

### On implémente l'algorithme 

    case $YconsoleCourante in
    	
    	'/dev/tty1' )			Yinit "startx /bin/i3"		;;
    	'/dev/tty2' )			Ymenu				;;
    	'/dev/pts/0' )			YsuRoot				;;
    	$YdefautPTS )			Yinit "zsh"			;;
    	$YdefautTTY )			Ymenu 				;;
    esac

## La déclarations des fonctions 

Le shell est un outils assez stupide, quand il exécute un scripte, il commence la lecture de ce fichier, et l'exécute ligne par ligne. Ainsi, si ce scripte contient le code d'une fonction, celle ci doit être déclarée avant d'être appelée. On ne peut donc pas appelle une fonction dont le code se trouve à la fin du fichier.

Comme on voudra décomposer le programmes en fonctions élémentaires et appeler ces fonctions avec différents paramètres, on va d'abord écrire nos fonctions. Le code principal du programme (celui qui fera appel à ces fonctions) se trouvera à la fin du code source.

1. Une première fonction `YasciiArt` affiche un joli logo en Ascii-art.
1. Une fonction `Ybienvenu` affiche la date, l'heure, et le terminal utilisé
1. Une fonction `Ywarning` affiche un avertissement dépasse le timeout.
1. Une fonction `Yinit` dont on reparle plus tard.
1. Une fonction `YsuRoot` propose  de se connecter sur le compte Administrateur

### YasciiArt 

#### Mettre de la couleur 

`tput` est un programme qui vous permet de modifier les paramètres d'affichage du terminal.

Pour en savoir plus voyez la page du manuel `man tput`.

: **tput** =**T**erminal **PUT**
envoi au terminal
: **setaf** =**SET A F**oreground
définie un avant-plan
: **setab** =:*SET A B**ackground
définie un arrière-plan
: **bold**
afficher en gras
: **clear**
vide l'écran *(rien à voir avec le mot clair)*

Ceci étant dit, voici comment on passe en arrière-plan noir, avant plan bleu, en gras, et en efface l'écran.

    tput setab 0 
    tput setaf 4 
    tput bold
    tput clear

### Retour sur echo 

Le mot-clé `echo` sans argument *(c-à-d sans message à afficher...)* saute simplement une ligne.

    echo

On affiche un joli logo en Ascii-art...

    echo
    echo "                                        PPPPPPPPPPPPPPPPP."
    echo "                                        P=================P"
    echo "                                        P=====ppppppp======P"
    echo "                                        °PP===p     p=======P"
    echo "                                          P===p     p=======P"
    echo "                                          P===p     p=======P"
    echo "   NNN                                    P===PPPPPPP======P  HHHHH[<80;141;5MHH   HHHHHH    kkkkk       kkkk         3333333333333333"
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

Et on réinitialise les paramètres de l'affichage.

    tput sgr0

### Yinit 

On appelle notre fonction YasciiArt, qui va afficher le logo.

    	YasciiArt

On appelle notre fonction Ybienvenu, qui va afficher son message de Bienvenue.

    Ybienvenue
    

Enfin, on exécute le programme qui a été donné en premier paramètre.

    	exec $1

### Ybienvenue 

    	tput setaf 2
    	tput bold
    
    	echo "Nous sommes le $(date +"%A %d %B")."
    	echo
    	echo " TERMINAL UTILISé :" $YconsoleCourante
    	echo
    	echo "Il est actuellement : $(date +"%H heures et %M minutes.")"	
    	echo
    	
    	tput sgr0

### YsuRoot 

    {
    	Yinit
    	echo " o ou O pour Oui, y ou Y pour Yes ..."
    	echo 
    

Après une prompte demandant "Voulez-vous....." (-p "voulez-vou....") 
lire avec un time-out de 5 secondes (-t 5) un seul caractere ( -n 1  ) 
et le stocker dans la variable $CHOISIROOT
OU BIEN ( || )  c_a_d si cela n'a pas fonctionné... 
initialiser $CHOISIROOT avec la valeur "sans-reponse"

    read -t 5 -n 1 -p " Voulez-vous devenir Root ?" CHOISI || CHOISI="sans reponse"
    	case $CHOISI in 
    		'o' | 'O' | 'y' | 'Y' )		Yinit "su root" 	;;
    		* )				Yinit "zsh"		;;
    	esac
    }
    

### Ywarning 

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

## Ymenu 

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
    	echo " 3- Démarrer Gnome Shell        <--- Recommandé si tu te sens perdu !!!"
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
    	
    		1 | '&' )			Yinit "startx /bin/i3"			;;
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
 
-------------------------------------------
| PREC: [Programmer](230_programming.md) |  | SUIV: [Programmez en C !](250_c-langage.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |
-------------------------------------------
