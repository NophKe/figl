Trouver de l'aide et progresser


# En local 

Sans avoir besoin d'aucune sorte de connections à Internet, de nombreux documents sont là pour vous aider dans votre apprentissage de l'environnement Gnu-Linux.

Ces sources d'informations sont à privilégier **en toutes circonstances**, car ces fichiers sont empaquetés avec vos programmes. Ils correspondent donc précisément à la version que vous utilisez. De plus, les fichiers d'aide *officiels* seront *a priori* plus à jour que ce que vous pourriez trouver sur Internet.

Enfin, lire ces informations vous permettra d'explorer la documentation. Aussi quand vous aurez un trou de mémoire, vous devriez pouvoir retrouver l'information aisément sur n'importe quelle distribution de Gnu-Linux....

## Le Manuel 

RTFM (Read That Fucking Manuel) Lis ce putain de manuel!

Toujours lire le manuel avant toutes choses. Et particulièrement avant de poser des questions sur les forums.... La punition en cas contraire, un ignorance complète à votre égard dans le meilleur des cas.... Et le fameux RTFM dans le pire....

Pour accéder à une page de manuel, taper la commande man suivie du nom du programme:

    $ man man

Vous donnera la page de manuel du programme `man`

Vérifiez bien que vous avez installé la version française des 'manpages'. Toutes les distributions de Gnu-Linux ne le font pas automatiquement!

## --help 

La plupart des programme en ligne de commande ont une option `--help` qui résume rapidement les options disponible à l'invocation du programme.

On a déjà dit que le programme rm, qui supprime des fichier pouvait être dangereux à utiliser, lisez donc ceci:

    $ rm --help
    
    Utilisation : rm [OPTION]... [FICHIER]...
    Supprimer (retirer le lien) le ou les FICHIERs.
    
      -f, --force           ignorer les fichiers et arguments inexistants, ne
                              jamais demander
      -i                    demander confirmation avant chaque suppression
      -I                    demander confirmation une fois avant de supprimer plus
                              de trois fichiers ou lors de suppression récursive ;
                              moins intrusif que -i, tout en protégeant contre la
                              plupart des erreurs
          --interactive[=QUAND]  demander confirmation selon QUAND : « never »
                                (jamais), « once » (-I, une fois) ou « always » (-i,
                                toujours) ; sans QUAND, toujours demander
          --one-file-system  quand une hiérarchie est supprimée récursivement,
                              ignorer tous les répertoires d'un système de
                              fichiers différent de celui correspondant à
                              l'argument de ligne de commande
          --no-preserve-root ne pas traiter « / » de manière spécifique
          --preserve-root   ne pas supprimer « / » (par défaut)
      -r, -R, --recursive   supprimer les répertoires et leur contenu récursivement
      -d, --dir             supprimer les répertoires vides
      -v, --verbose         expliquer ce qui est fait
          --help     afficher l'aide et quitter
          --version  afficher des informations de version et quitter
    
    Par défaut, rm ne supprime pas les répertoires. Utilisez l'option --recursive
    (-r ou -R) pour supprimer les répertoires, ainsi que l'intégralité de leur
    contenu.
    
    Pour supprimer un fichier dont le nom débute par « - », par exemple « -toto »,
    utilisez une des commandes suivantes :
      rm -- -toto
    
      rm ./-toto
    
    Si vous utilisez « rm » pour supprimer un fichier, il est habituellement
    possible de récupérer une partie de son contenu, en disposant de suffisamment
    d'expertise et de temps. Pour être certain que le contenu ne soit pas
    récupérable, envisagez l'utilisation de « shred ».
    
    Aide en ligne de GNU coreutils : <https://www.gnu.org/software/coreutils/>
    Signalez les problèmes de traduction de « rm » à : <traduc@traduc.org>
    Documentation complète à : <https://www.gnu.org/software/coreutils/rm>
    ou disponible localement via: info '(coreutils) rm invocation'

J'espère que vous avez bien compris l'option `-r`, elle vous servira surement un jour ou l'autre!

Au passage essayez de lire la ligne suivante:

    $ rm -Rf /

Vous n'utiliserez JAMAIS cette commande!

## Les pages info 

C'est la même chose que les page man, à la différence que les pages info possèdent une sorte de système de liens hypertexte!

Ce devrait être l'évolution logique du programme man, cependant çà n'a pas marché... Aussi l'essentiel de la documentation se trouve toujours dans les pages man.

Les composants écrits spécialement pour le projet Gnu sont documentés ici un peu plus extensivement que dans les manpages.

Pour le sommaire général, taper simplement:

    $ info

Une fois le programme démarré la touche **H** (majuscule) fera apparaitre l'aide.

Pour le manuel d'un programme particulier, info suivi du nom du programme. Par exemple pour en savoir plus sur le programme `info`:

    $ info info

# Sur Internet 

## Le manuel en français 

Certes, ces pages seront peut-être moins "à jour" que celle présentes sur votre système. Mais elle sont toutes en français.

|[Traduction des man-pages](http://manpagesfr.free.fr/index.html)|

## Les Howtos 

La plus grande partie d'entre eux sont vieux, et ne correspondent donc plus vraiment à l'état de l'art. Cependant ce sont des références. Ils peuvent donc apporter beaucoup pour ce qui est de la compréhension globale des choses.

Certaines parties de ce site sont des adaptations/traductions/mises à jour directes de ces howtos.

|['Unix And Internet Fundamentals' a longtemps été ma Bible...](https://www.tldp.org/HOWTO/html_single/Unix-and-Internet-Fundamentals-HOWTO/)|

|[From Power Up to Bash_ Prompt](http://www.tldp.org/HOWTO/From-PowerUp-To-Bash-Prompt-HOWTO.html)|

|[Linux Security Howto](http://www.tldp.org/HOWTO/Security-HOWTO/index.html)|

# Par la pratique 

## Réutiliser /home et /etc 

Dans ces deux répertoires se trouvent vos fichiers de configuration. Pourquoi donc les supprimer lors de la réinstallation d'une distribution?

Personnalisez votre configuration et tentez de la réutiliser lors de la réinstallation!

Placez donc ces deux répertoires sur des partitions distinctes que vous ne formaterez plus!

## Écrire des scriptes 

Vous pouvez écrire des scriptes, et créer ainsi vos propres programmes. C'est une bonne pratique qui vous permets de vous créer vos propres outils pour automatiser vos tâches répétitives.

Dans ces pages, nous ne faisons qu'effleurer la complexité du shell, mais ne vous y trompez pas! Le shell dispose d'un langage de programmation puissant!

|[Un guide plutôt pédagogique en français](https://abs.traduc.org/abs-fr/index.html)|

## Vous impliquer 

La communauté libriste est grande, et toutes le bonnes volontés sont les bienvenues.

Si vous ne savez pas programmer, peut être pouvez vous au moins faire remonter le bugs aux différents auteurs des logiciels. C'est très apprécié, car trop peu de gens prennent la peine de le faire, et râler dans son coin fait rarement progresser le problème.

Si vous maitrisez assez bien une langue, vous pouvez traduire de la documentation ou même des programmes.

|[ Translation Project, You code, we translate](http://translationproject.org/team/fr.html)|

Autre catégorie très recherché sont les graphistes et les designers.

## Choisir une distribution_ pédagogique 

Passer à une distribution plus *élitiste* est envisageable.

Si vous avez été capable de suivre ces pages, sachez que vous n'avez *presque* plus rien à craindre!

### Arch Linux 

Arch Linux est une distribution complète sans installateur. Pour la mettre en place, il vous sera nécessaire de comprendre le fonctionnement d'une distribution.

Arch Linux est une distribution qui ne modifie pas *(ou très peu)* les programmes qu'elle distribue. Ainsi, vous aurez accès aux dernière version officielles de tous les programmes.

Parfois cependant, pour maintenir votre système d'exploitation à jour, vous devrez procéder à certaines interventions manuelles! Cependant, ne vous inquiétez pas. Si cette distribution ne résout pas tous les problèmes à votre place, c'est avant tout par ce que l'équipe qui en est en charge se préoccupe plus de la documentation *( qui permet de tout faire )* que du coté "user-friendly" *(qui ne rajoute que de la spécificité, de la complexité, donc des problèmes )*...

KISS !

|[Arch possède une belle communauté francophone](https://archlinux.fr/)|

### Linux From Scratch 

En fait, ce n'est même pas une distribution. C'est un livre qui vous apprendra à construire une distribution complète depuis les fichiers du code source.

C'est, certes, un document qui se veut avant tout pratique, mais il peut valoir le coup de le survoler pour voir comment cela se passe.

|[Linux From Scratch (fr)](http://fr.linuxfromscratch.org/)|

---

Sinon, vous pouvez aussi passez à la page suivante. (^_^)

---

| PREC: [Les fichiers de configuration](210_config.md) |  | SUIV: [Programmer](230_programming.md) |
| -------------  | ----- |  ----------         |
|  | [Menu Principal index.md] |  |

---

