<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META NAME="generator" CONTENT="http://txt2tags.org">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<LINK REL="stylesheet" TYPE="text/css" HREF="inc/site.css">
<TITLE>A l'origine était sh...</TITLE>
</HEAD>
<BODY>

<DIV CLASS="header" ID="header">
<H1>A l'origine était sh...</H1>
</DIV>

<DIV CLASS="body" ID="body">
<DIV CLASS="toc">

  <UL>
  <LI><A HREF="#sh">L'histoire du shell</A>
    <UL>
    <LI><A HREF="#bash">Bash</A>
    <LI><A HREF="#zsh">Zsh, le Shell du //Futur//</A>
    </UL>
  <LI><A HREF="#shell">Interpréteur de commandes</A>
    <UL>
    <LI><A HREF="#toc5">la prompte</A>
    <LI><A HREF="#toc6">Invocation</A>
    <LI><A HREF="#toc7">L'auto complétion</A>
    <LI><A HREF="#toc8">Les redirections</A>
    <LI><A HREF="#toc9">Les pipes</A>
    <LI><A HREF="#toc10">Les alias</A>
    </UL>
  <LI><A HREF="#toc11">Un peu de grammaire</A>
    <UL>
    <LI><A HREF="#toc12">mkdir</A>
    <LI><A HREF="#echap">Caractères d'échapement</A>
    <LI><A HREF="#toc14">Joker</A>
    <LI><A HREF="#toc15">foo bar et baz</A>
    </UL>
  </UL>

</DIV>

<A NAME="sh"></A>
<H1>L'histoire du shell</H1>

<P>
Le shell c'est l'interface entre la machine et l'utilisateur. Ce qui interprète vos commandes.
</P>
<P>
A l'origine le premier interpréteur de commande d'Unix était le programme <CODE>sh</CODE>. On appelait ce programme le Bourne Shell, du nom de son inventeur.
</P>
<P>
Puis chacun a voulu aller dans son sens pour améliorer le truc, mais on a jamais vraiment pu tuer <CODE>sh</CODE>. En pratique, <CODE>sh</CODE> étant disponible sur tous le Unix. Écrire un programme qui peut être utilisé avec sh, c'est écrire un programme qui fonctionne sous toutes les versions d'Unix.
</P>
<P>
Du coup avec le temps <CODE>sh</CODE> est devenu part du standard POSIX....
</P>

<A NAME="bash"></A>
<H2>Bash</H2>

<P>
Bash (acronyme de Bourne-Again shell) est un interpréteur en ligne de commande de type script. C'est le shell Unix du projet GNU, mais il est aussi devenu avec le temps une espèce de <I>lingua franca</I> utilisé sur de nombreuses plateformes.
</P>
<P>
Bien que provenant de l'univers de l'informatique libre, il a été adapté à Microsoft Windows, et est le shell de MacOs.
</P>
<P>
Basé sur sh, Bash l'améliore et l'étends tout en sachant se mettre en mode de compatibilité absolue avec sh.
</P>
<P>
Si le programme <CODE>sh</CODE> le shell originel, est devenu une part du standard POSIX que doivent comporter tout les Unix/Linux, c'est souvent Bash qui est installé à sa place. Et quand bash est invoqué par un lien en <CODE>/bin/sh</CODE>qui pointe vers <CODE>/bin/bash</CODE>, ce dernier devienne qu'il doit se mettre en mode posix.
</P>

<A NAME="zsh"></A>
<H2>Zsh, le Shell du //Futur//</H2>

<P>
C'est un shell puissant qui n'est plus compatible avec <CODE>sh</CODE> il n'est donc que rarement utilisé, mais il vaut vraiment la peine de s'y intéresser! Il possède des capacités avancée d'autocomplétion et des jokers très pratiques...
</P>
<P>
Les distributions de Gnu-Linux fournissent un shell fonctionnel mais généralement pas configuré du tout. Aussi un shell agréable à utiliser aide à l'apprentissage... Zsh arrive par défaut comme quelque chose de plus "user friendly"...  C'est pour cela que je vous recommande vraiment d'y jeter un coup d'oeil!
</P>
<P>
Il est le shell de l'installateur d'Arch Linux.
</P>

<A NAME="shell"></A>
<H1>Interpréteur de commandes</H1>

<P>
Un système d'exploitation est un <B>ensemble</B> de programmes/logiciels qui permettent une utilisation complète d'un ordinateur (et non un seul programme), ET, dans cet ensemble, chacun des programmes possèdent sa propre interface utilisateur.
</P>
<P>
Un de ces programmes est le dernier à être chargé par le système d'exploitation, lors du boot, il prend le contrôle des périphériques d'entrée (souris et clavier), et <B>interprète</B> les événements relatifs à ces derniers. C'est le shell (la coquille).
</P>
<P>
Selon son interprétation, les événements du clavier et de la souris seront compris de plusieurs façons:
</P>

<UL>
<LI>des invocations de programmes
 <UL>
 <LI><I>éventuellement des options pour ces programmes</I>
 <LI><I>éventuellement des fichiers ou des données pour nourrir ces programmes</I>
 <P></P>
 </UL>
<LI>des commandes que le shell sait exécuter lui même
<P></P>
<LI>des options d'environnement <I>(qui sont un peu comme les réglages du système d'exploitation)</I>
<P></P>
<LI>des redirections
<LI>des jokers
<LI>des éléments de syntaxe
<P></P>
<LI>...
<P></P>
On détaillera dans les paragraphes qui suivent.
</UL>

<A NAME="toc5"></A>
<H2>la prompte</H2>

<P>
La chose est la plus importante, est sûrement que l'on ne peut pas apprendre à utiliser l'interface texte, sans s'y confronter pour de vrai... Ouvrez donc un émulateur de terminal, vous avez surement une interface graphique qui tourne donc démmarez la console.
</P>
<P>
La première chose à savoir sur l'interface texte, c'est que ce petit morceau de texte s'affiche s'appelle la prompte, et doit ressembler à:
</P>

<PRE>
$ _
</PRE>

<P>
ou
</P>

<PRE>
bash-4.4$
</PRE>

<P>
tapez :
</P>

<PRE>
$ ls
</PRE>

<P>
Bien sûr ne tapez pas le signe $, il représente la prompte!
</P>
<P>
Vous devriez obtenir la liste des fichiers de votre répertoire courant!
</P>
<P>
Pour connaitre quel est le répertoire courant tapez:
</P>

<PRE>
$ pwd
</PRE>

<P>
Pigé? Maintenant tapez:
</P>

<PRE>
$ whoami 
</PRE>

<P>
pour savoir qui vous êtes !
</P>

<A NAME="toc6"></A>
<H2>Invocation</H2>

<P>
Invoquer un programme, c'est l'appeler (avec l'aide du shell) à s'exécuter.
</P>
<P>
Certains programmes comme <CODE>exit</CODE> ne posent pas vraiment de problèmes, il suffit de les appeler par leur nom... C'est transparent!
</P>
<P>
Si vous avez tapé <CODE>exit</CODE>. C'est pas malin... <B>Redémarrez un terminal, un peu de courage!!</B>
</P>

<PRE>
$ ps
</PRE>

<P>
Vous devriez obtenir la liste des programmes démarrés dans votre émulateur de terminal.
</P>
<P>
Bon mais alors qu'est-ce que ce "ps" ? C'est simplement un programme qui liste les processus en cours. Vous devriez voir un programme se nomme bash. Celui-ci est l' interpréteur de commande. C'est lui qui affiche la prompte.
</P>
<P>
Dans le cas improbable que vous n'ayez pas de programme Bash en cours d'utilisation, vous aurez Zsh, ou simplement sh, mais çà ne change pas grand chose.
</P>
<P>
tapez:
</P>

<PRE>
$ ps -e
</PRE>

<P>
Vous devriez obtenir la liste des programmes démarrés dans tout l'ordinateur cette fois-ci.
</P>

<UL>
<LI>La première remarque à faire, et que <CODE>ps</CODE> est un programme, il se trouve à l'emplacement <CODE>/bin/ps</CODE>.
<LI>La deuxième remarque, est que le petit <B>e</B> est une option que l'on passe au programme. Cette option signifie <I>every</I> comme "tous" en anglais!
</UL>

<P>
À la différence de l'interface graphique à l'intérieur de laquelle souvent, on démarre un programme pour ensuite lui dire quoi faire en cliquant par-ci par-là; dans un programme en mode texte il est fréquent de devoir donner une liste précise de paramètres pour que le programme sache quoi faire.
</P>
<P>
Un paramètre dont on ne peut pas se passer est appelé un argument. Par exemple la commande:
</P>

<PRE>
$ touch un_fichier_texte.txt
</PRE>

<P>
Ceci va créer un fichier texte du nom "un_fichier_texte.txt", dans le répertoire courant. On comprend évidemment que dans cet exemple, on est <B>obligé</B> de mettre quelque chose derrière le programme... <CODE>`touch`</CODE> ne peut pas créer de fichier si on ne lui donne pas le nom du fichier à créer!
</P>

<PRE>
$ touch

touch: opérande de fichier manquant
Saisissez « touch --help » pour plus d'informations.
</PRE>

<P>
Ceci étant dit, dans l'interface texte, la syntaxe classique pour invoquer les programmes, c'est:
</P>

<PRE>
$ mon_programme --option-longue argument
</PRE>

<P>
Les options longues sont précédées de deux tirets, elles possèdent souvent une option courte qui lui est synonyme et que l'on lui préfèrera pour les programmes que l'on sait utiliser
</P>

<PRE>
$ mon_programme -O argument
</PRE>

<A NAME="toc7"></A>
<H2>L'auto complétion</H2>

<P>
Revenez vers votre terminal, et créez un fichier texte. Et affichez ce qu'il contient! tapez:
</P>

<PRE>
$ touch un_fichier.txt
</PRE>

<P>
Ceci va créer un fichier du nom de <CODE>un_fichier.txt</CODE>! Maintenant tapez:
</P>
<P>
<CODE>$ cat un_fi</CODE>   <I>et là appuyez sur la touche TAB du clavier</I>
</P>
<P>
Il est probable que votre shell complète le nom du fichier tout seul et affiche maintenant:
</P>

<PRE>
$ cat un_fichier.txt
</PRE>

<P>
On appelle cela l'auto-completion! Cela complète le nom des programmes, des fichiers, (voir beaucoup plus suivant quel shell on utilise, et comment il est réglé)! Ne jamais hésiter à utiliser l'auto-completion car cela évite les fautes de frappe et accélère beaucoup l'utilisation du shell!
</P>
<P>
Maintenant si vous appuyez sur la touche ENTER, Rien ne s'affichera, et vous retournerez à la prompte! C'est normal, ce fichier est vide!
</P>
<P>
Cat sert en effet à afficher le contenu du fichier! En cas de fichier vide, rien ne s'affiche. Alors, maintenant, on va le remplir...
</P>

<A NAME="toc8"></A>
<H2>Les redirections</H2>

<P>
On peut afficher à l'écran les fichier qui sont dans le répertoire courant avec le programme ls tapez:
</P>

<PRE>
$ ls
Bureau/
Documents/
Musique/
d_autre_repertoires/
un_fichier.txt
autre....

$ _
</PRE>

<P>
Le programme <CODE>ls</CODE> affiche les fichier du répertoire sur ce que l'on appelle <B>la sortie standard</B>. C'est à dire souvent l'écran! <I>(Dans le passé c'était souvent une imprimante)</I>
</P>
<P>
Mais on peut <B>rediriger</B> la sortie standard vers notre nouveau fichier texte avec le symbole <CODE>&gt;</CODE> :
</P>

<PRE>
$ ls &gt; un_fichier.txt
$ _
</PRE>

<P>
Remarquez que rien ne s'affiche à l'écran, vous revenez à la prompte sans aucune information. Pourtant si l'on fait
</P>

<PRE>
$ cat un_fichier.txt
Bureau/
Documents/
Musique/
d_autre_repertoires/
un_fichier.txt
autre....

$ _
</PRE>

<P>
Tadam'''' !!!
</P>
<P>
Aussi echo n'est pas un programme mais un mot clef du shell (n'en parlons pas encore...) il affiche ce que l'on lui demande:
</P>

<PRE>
$ echo Hello
Hello
</PRE>

<P>
On a affiché " Hello " à l'écran (sur la sortie standard) que l'on redirige tout de suite!
</P>

<PRE>

$ echo Hello &gt; un_fichier.txt
$ cat un_fichier.txt
Hello
</PRE>

<P>
<CODE>un_fichier.txt</CODE> ne contient plus la liste des fichier mais juste "Hello"... En écrivant dans ce fichier (qui contenait notre liste des fichiers), on a <B>écrasé</B> son contenu. Pour rediriger en mode ajouter il faut remplacer <B>&gt;</B> par <B>&gt;&gt;</B>:
</P>

<PRE>
$ echo World &gt;&gt; un_fichier.txt
$ cat un_fichier.txt
Hello
World
$ _
</PRE>

<P>
Vous savez créer un fichier qui contient du texte, cela vous servira bientôt. Aussi, vous en savez assez sur les redirection passons aux tuyaux...
</P>

<A NAME="toc9"></A>
<H2>Les pipes</H2>

<P>
Une pipe (à l'anglaise païpe !), c'est un tuyau! C'est aussi le symbole auquel on accède par la combinaison de touches AltGr + 6 , c_à_d le symbole |
</P>
<P>
Les pipes fonctionnent comme les redirections mais au lieu de rediriger vers des fichiers, elles connectent les programmes entre eux.
</P>
<P>
Par exemple si vous faites:
</P>

<PRE>
$ ls /bin &gt; un_fichier.txt
</PRE>

<P>
puis
</P>

<PRE>
$ cat un_fichier.txt
</PRE>

<P>
cela va donner un résultat très long....
</P>
<P>
Le programme <CODE>less</CODE> est un paginateur, il découpe la sortie en pages. Il s'utilise avec les lettres <B>q</B> pour quitter <B>ESPACE</B> pour passer etc... donc:
</P>

<PRE>
$ less un_fichier.txt
</PRE>

<P>
Par contre connecter les deux programmes sans passer par aucun fichier intermédiaire, c'est la force du tuyau !
Une autre syntaxe possible grace aux pipes est donc:
</P>

<PRE>
$ ls /bin | less
</PRE>

<P>
Ainsi pas besoin de passer par un fichier texte qui sert d'intermédiaire!
</P>

<PRE>
$ ls /bin |cat |less
</PRE>

<P>
En dessus il y a une pipe qui ne sert à rien. <I>(Une petite pipe juste pour le plaisir.)</I>
</P>

<A NAME="toc10"></A>
<H2>Les alias</H2>

<P>
Un alias permet de ne pas retaper une commande trop compliquée... Par exemple:
</P>

<PRE>
$ alias ls="ls --color"
</PRE>

<P>
Ainsi la prochaine fois que vous taperez <CODE>ls</CODE>, le résultat c'est que votre interpréteur de commande comprendra <CODE>ls --color</CODE>.
</P>
<P>
Remarquez que la prochaine fois que vous vous connecterez cet alias aura disparu!
</P>
<P>
Remarquez aussi que la nouvelle commande est entre guillemets! C'est par ce qu'elle contient un espace et que l'on ne veut pas que le shell interprète cet espace comme la fin de l'argument.
</P>
<P>
On illustre tout de suite!
</P>

<A NAME="toc11"></A>
<H1>Un peu de grammaire</H1>

<P>
Le shell en a besoin de pouvoir délimiter les programmes et les options pour comprendre nos instructions. Un espace entre eux est donc nécessaire.
</P>
<P>
Mais comment faire comprendre au shell qu'un espace <B>fait parti</B> d'un argument?
</P>

<A NAME="toc12"></A>
<H2>mkdir</H2>

<P>
Cette commande crée un répertoire.
</P>

<PRE>
$ mkdir un dossier
$ _
</PRE>

<P>
D'ailleurs remarquez <B>encore une fois</B> que le shell fait cela sans vous prévenir de l'état de réussite de l'opération! Listez donc les fichiers pour voir ce qui a été créé!
</P>

<PRE>
$ ls
dossier/
un/ 
</PRE>

<P>
Mince alors! L'espace a mal été compris et deux répertoires ont été créés! Pour créer un seul répertoire nommé <CODE>un dossier</CODE>. Il faut écrire ce dernier entre deux apostrophes:
</P>

<PRE>
$ mkdir 'un dossier'
</PRE>

<P>
Vérifiez que:
</P>

<PRE>
$ ls
dossier/
un/
un dossier/
</PRE>

<P>
C'est l'apostrophe de la touche 4 dont il est question ! Attention! Cette apostrophe fait partie de la syntaxe du shell.
</P>
<P>
Elle lui indique que ce qui suit devra être considéré comme un argument unique jusqu'à la prochaine apostrophe!
</P>

<A NAME="echap"></A>
<H2>Caractères d'échapement</H2>

<P>
Si vous souhaitez créer un fichier nommé <CODE>l'embrouille</CODE> ..
</P>

<PRE>
$ touch l'embrouille
\`quote&gt; je suis coincé
\`quote&gt; je retrouve plus la prompte
\`quote&gt;  
</PRE>

<P>
Vous vous retrouverez coincé et vous perdrez votre prompte! Vous pouvez taper la touche entrée, çà n'y fait rien!
</P>
<P>
Vous revenez toujours à cette nouvelle prompte <CODE>\'quote&gt;</CODE> !
</P>
<P>
C'est par ce que lorsque vous avez entré l'apostrophe, le shell s'est mis à considéré tout ce qui suit comme un seul argument. Il a donc cru que la touche [entrée] était un des caractères du nom du dossier.
</P>
<P>
<I>( Unix permet vraiment des choses bizarres... Un saut de ligne dans le nom d'un fichier! )</I>
</P>
<P>
Vous pouvez vérifier que l'on reste dans cette nouvelle prompte tant que vous n'avez pas tapé de nouvelle apostrophe, et ensuite pressé la touche entrée pour valider la commande!
</P>
<P>
Ok Donc normalement à ce stade là vous avez un nouveau fichier avec un nom hiddeux!
</P>

<PRE>
$ ls
'l\'embrouille\nJe suis coincé\nje retrouve plus la prompte'
</PRE>

<P>
La prochaine fois que vous vous coincé ainsi tapez juste la combinaison de touche Control + C.
</P>
<P>
Pour créer un fichier <CODE>l'embrouille</CODE>. Il faut utiliser un caractère d'échappement de cette façon:
</P>

<PRE>
$ touch l\'embrouille
</PRE>

<P>
Le symbole <CODE>\</CODE> (backslash) permet de dire au shell de ne pas interpréter ce qui suit de façon normale. Ici, cela indique qu'il faut lire une apostrophe littérale, et non une apostrophe grammaticale.
</P>
<P>
Enfin comprenez donc que certains caractères ont des valeurs particulières. La backslash est un caractère d'échappement. Il est un caractère texte qui modifie la façon dont le texte est interprété.
</P>
<P>
Tandis que Control+ C crée un caractère de contrôle l'attention du shell et qui lui signale de laisser tomber la commande en cours. (<B>à retenir</B>)
</P>
<P>
Enfin apprenez que le symbole <CODE>'</CODE> se nomme quote en informatique (d'où la prompte...)
</P>

<A NAME="toc14"></A>
<H2>Joker</H2>

<P>
Si vous faites:
</P>

<PRE>
$ ls un*
un/
un dossier/
</PRE>

<P>
Vous voyez que l'étoile est un joker, elle signifie "n'importe quelle suite de caractère". <CODE>ls un*</CODE> doit être compris comme "liste tous les fichiers et les dossiers dont le nom débute par 'un' ".
</P>
<P>
En faisant:
</P>

<PRE>
$ ls un* [ TOUCHE TAB ]
</PRE>

<P>
Donc, en utilisant l'auto-completion, vous devriez pouvoir vérifier que le shell va remplacer <CODE>un*</CODE> par <CODE>un/ un\ dossier/</CODE>.
</P>
<P>
<U>Remarquez qu'une backslash suivie d'un espace est un caractère d'échappement pour signifier que l'espace qui suit n'est pas la fin de l'argument!</U>
</P>
<P>
<U><B>REMARQUEZ AUSSI QU'UTILISER DES JOKERS C'EST PRATIQUE PUISSANT ET DANGEREUX POUR VOS FICHIERS</B></U>
</P>

<A NAME="toc15"></A>
<H2>foo bar et baz</H2>

<P>
A ce stade vous devez avoir un certain nombre de dossier, et de fichiers au noms bizarres. On va y remédier bientôt!
</P>
<P>
C'est pour cela que par convention, on utilise toujours les valeurs <CODE>foo</CODE> <CODE>bar</CODE> et <CODE>baz</CODE> pour illustrer des variables quelconques. Par exemple Si quelqu'un vous demande:
</P>
	<BLOCKQUOTE>
	 Je veux lister tous les fichiers d'un répertoire, et les enregister la liste dans un fichier. Comment je fais? » Vous lui répondez:
	</BLOCKQUOTE>

<PRE>
$ ls /home/nono/foo &gt; bar
</PRE>

<P>
Utilisez toujours ces mêmes nom pour vous entrainer et faire des essais. Vous pourrez aisément repérez, et supprimer ce genre de fichiers.
</P>
<P>
Aussi comme vous avez compris comment on crée des alias, je vous redonne sa syntaxe:
</P>

<PRE>
alias foo=bar
</PRE>

<P>
Avec cette façon de faire, vous comprenez que <CODE>alias</CODE> et <CODE>=</CODE> ne peuvent ommis, et que foo et bar sont des valeurs de votre choix.
</P>

<HR NOSHADE SIZE=5>

<TABLE ALIGN="center" BORDER="1">
<TR>
<TD>PREC: <A HREF="130_libre.php">La philosophie du Libre</A></TD>
<TD></TD>
<TD COLSPAN="2">SUIV: <A HREF="150_console.php">Les commandes de base</A></TD>
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

<input type="hidden" name="page" value="140">
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

$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = 140");
while($row = mysqli_fetch_array($result)){

echo "Pseudo: " . $row['pseudo'] . "<br>";
echo "<p>" . nl2br($row['texte']) . "</p>";
echo "<HR NOSHADE SIZE=2>";
}

?>
</div></BODY></HTML>
