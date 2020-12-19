# Les fichiers de configuration


Généralement les programmes se configurent à travers **deux** fichiers de configurations. Le premier se place généralement dans le répertoire `/etc`, et devient le défaut du système.

Il porte en général, le nom du programme, et n'est accessible à la modification que par le super-utilisateur.

Le second, le dot-file, n'est créé que si cela est nécessaire, et ce peut être à l'initiative du programme comme de l'utilisateur.

Comme son nom l'indique, un dot-file possède un nom de fichier qui commence par un point (dot en anglais), c'est donc un fichier caché!

## Les dot-files 

Ce sont des fichiers qui commencent par un point. Ce sont donc des fichiers cachés.

Ils se trouvent dans le répertoire personnel de l'utilisateur ( par exemple `/home/nono/.bashrc` )

Le symbole `~` (tilde) est interprété par le shell comme le répertoire personnel de l'utilisateur courant. On écrira donc `~/.bashrc` plutôt que `/home/Nom_d_utilisateur/.bashrc` !

Chose importante à savoir: Le système d'exploitation ne touche pas à ces fichiers. C'est à l'utilisateur qu'il revient de supprimer les fichiers des programmes désinstallés.

### ~/.bashrc 

RC signifie "Run Command". Ainsi vous pouvez imaginer ce fichier comme une suite d'instructions que vous taperiez à chaque fois que vous démarrez votre shell.

J'ai déjà évoqué qu'il était prudent de créer un alias pour `rm` le programme qui supprime les fichiers:

    alias rm='rm --interractive'

Si vous ajoutez cette dernière ligne à la fin de votre fichier `.bashrc`, vous n'aurez plus jamais besoin de retaper cet alias. Il se chargera à chaque démarrage de bash.

Votre fichier `.bashrc` contient surement ces lignes:

    #/bin/bash
    # If not running interactively, don't do anything
    #
    [[ $- != *i* ]] && return

Faites en sorte qu'elles restent bien en tête du fichier. Elle demandent à Bash de ne pas lire le reste de la configuration si Bash n'est pas en mode interactif. ( *C'est à dire, s'il reçoit ses commandes d'un autre programme et pas d'un humain* ). Cette ligne peut paraitre un peu ésotérique, j'espère pousuivre assez loin ce texte pour pouvoir l'expliquer....

Remarquez que tout ce qui suit un symbole `#` est considéré comme un commentaire

### ~/.bash_profile 

A la différence du fichier précédent, ce fichier de configuration sera lu uniquement lors d'un démarrage de Bash par un humain. Ainsi la configuration que vous réalisez ici ne perturbera jamais aucun scripte.

N'hésitez pas à placer des alias ici. Par exemple:

    alias ls='ls --color'
    alias vi='vim'
    alias config='vi ~/.bashrc'

### ~/.vimrc 

C'est le fichier de configuration de Vim. De nombreuses personnes partagent leur configuration de Vim sur Internet. Je ne vais donner ici que quelques options courantes.

    "" Fichier .vimrc exemple.
    ""
    "" Tout ce qui se trouve entre un guillemet et une fin de ligne sera
    "" considéré par Vim comme un simple commentaire.
    
    set nocompatible 			" vrai vim pas le mode de compatibilité vi
    
    set spelllang=fr			" langue pour correction orthographique
    
    nnoremap <F2> :split $MYVIMRC<cr>	" raccourci (touche F2) pour éditer le fichier de config
    
    filetype plugin on          		" plugins are enabled
    syntax enable 				" Turn on syntax highlighting
    
    ""		TEXT RENDERING OPTIONS
    
    set display+=lastline			"" Always try to show a paragraph’s last line.
    set linebreak				"" Avoid wrapping a line in the middle of a word.
    set wrap			"" Enable line wrapping.
    
    
    set hidden 				" Leave hidden buffers open
    set history=100 			"by default Vim saves your last 8 commands.
    ""
    "" 		USER INTERFACE
    ""
    set mouse=a
    set showcmd  				" show command in bottom bar
    set number 				" show line numbers
    set ruler				" Always show cursor position
    set wildmenu 				" visual autocomplete for command menu
    set ttyfast
    ""
    ""		SEARSH OPTIONS
    ""
    set hlsearch
    set ignorecase
    set incsearch
    set smartcase

### Les autres dot-files 

## Le repertoire etc 

### /etc/fstab 

C'est ici que se configurent les points de montage des partitions du système.

Voici le mien:

    # /etc/fstab: static file system information
    #
    # <file system>					<dir>		<type>		<options>		<dump>	<pass>
    # /dev/sda1
    UUID=e99ac9fe-f958-4d8f-8682-173b9ca3fd03	/         	ext3      	rw,relatime,data=ordered	0 1
    
    # /dev/sda3
    UUID=ec3a5e6b-352b-4dbe-899d-e3bd039fc53d	/home     	ext3      	rw,relatime,data=ordered	0 2
    
    # /dev/sda2
    UUID=c715063d-8e45-477e-9cb5-db50d04244d7	none      	swap      	defaults  	0 0
    
    /dev/sdb6			/home/nono/DOCS/	ntfs-3g		rw,nosuid,nodev,relatime,user_id=1000,group_id=100,noexec 	0 0

Pour en savoir plus:

    $ man fstab

### /etc/profile 

C'est le fichier de configuration de Bash. C'est un scripte qui définit les options essentielles du système.

Ce fichier est lu lorsque Bash est utilisé par **un humain** qui se connecte à lui. On parle de lancement interactif.

### /etc/bash.bashrc 

C'est le fichier de configuration de Bash. C'est un scripte qui définit les options essentielles du système.

Ce fichier est lu lorsque Bash est utilisé par un humain **ou un programme** qui se connecte à lui.

### /etc/locale.conf 

Définit la locale de votre système. C'est à dire la langue, le format d'affichage de la date, et de l'heure, le symbole monétaire en vigueur, et tout un tas de paramètres linguistiques et culturels. Les programmes doivent avoir accès à cette information pour agir en accord avec celle-ci, et donc être portable!

Par exemple:

    LANG=fr_FR.UTF-8

indique au système d'exploitation que votre langues est le français (`fr`) de France (`FR`). Et que vous voulez utiliser l'Unicode-8.

Pour plus d'information lire la page de manuel:

    $ man 7 locale

Vous pouvez prendre des renseignement sur votre configuration en entrant simplement la commande:

    $ locale

## Le réseau 

### /etc/resolv.conf 

Déjà évoque dans le paragraphe sur les dns .

Le choix du dns se fait très simplement en éditant ce fichier texte.

    nameserver  8.8.4.4          # le serveur dns de Google

 * Attention ce n'est pas un nom au choix, c'est `nameserver`, un espace, et l'adresse ip du serveur
 * Tout ce qui vient après un # sera considéré comme un commentaire

Aussi si vous pouvez aussi ajouter une seconde ligne:

    nameserver  8.8.8.8  # L'autre serveur de Google

En cas de défaillance du serveur situé sur la première ligne, le second sera utilisé... Et ainsi de suite!

Attention ! Les services chargées du réseau vont mettre à jour ce fichier si vous ne les en empêchez pas, pensez à vous occuper de leur configuration si vous faites cela. Pour une solution expéditive et sécuritaire:

    # chattr +i /etc/resolv.conf

L'attribut `i` signifie immuable. Et interdit toute modification du fichier... Seul le super-utilisateur peut changer cet attribut.
Remarquez que j'ai symbolisé la prompte avec un `#` pour indiquer que cette action doit être effectuée en mode administrateur.

### /etc/hosts 

### /etc/hostname 

Ce fichier permet de définir le nom d'hôte du système, c'est-à-dire le nom de l'ordinateur tel qu'il est perçu depuis le réseau.

## Geekeries inutiles 

### /etc/issue 

Lors d'une connexion à la console depuis l'interface texte (donc pas avec un émulateur de terminal depuis l'interface graphique), apparait un message qui vous indique l'heure ou le nom de l'ordinateur, ce comportement se configure ici.

`man issue` pour en savoir plus. Je vous donne le mien. Il comporte de nombreux caractères d'échappement comme `\t` pour afficher l'heure et `\\` pour afficher le symbole `\`. Mais il devrait dessiner un chat en ascii-art.

    
    
    Il est \t
    
    
           *                  *
                 __                *
              ,db'    *     *
             ,d8/       *        *    *
             888
             `db\\       *     *
               `o`_                    **
          *               *   *    _      *
                *                 / )
             *    (\\__/) *       ( (  *
           ,-.,-.,)    (.,-.,-.,-.) ).,-.,-.
          | @|  ={      }= | @|  / / | @|o |
         _j__j__j_)     `-------/ /__j__j__j_
         ________(               /___________
          |  | @| \\              || o|O | @|
          |o |  |,'\\       ,   ,'"|  |  |  |  hjw
         vV\\|/vV|`-'\\  ,---\\   | \\Vv\hjwVv\\//v
                    _) )    `. \ /
                   (__/       ) )
                             (_/
    

### /etc/motd 

C'est le petit message qui s'affiche lors de votre connexion à un tty.

### Les autres 

Il en reste bien d'autre, cette liste n'est donc pas exhaustive!

---

| PREC: [Emacs](200_emacs.md) |  | SUIV: [Trouver de l'aide et progresser](220_help.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal](index.md) |  |

---

