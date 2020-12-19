#!/bin/bash

declare -a Menu
ext=md

# On va d'abord boucler autour de la liste des fichier *.t2t
# et peupler un tableau $Menu[] avec une chaine de caractères
# au format [titre fichier.$ext] qui sera plus tard reconnu par
# txt2tags commme un lien.
# Nous crérons également un fichier temporaire pour chacun des fichiers
# de cette liste.

rm -rf temp/
mkdir temp/
cp src/*.t2t temp/
cat inc/index > temp/index.t2t

liste=( temp/* )

for (( f=0 ; f != ${#liste[*]} ; f++ ))
do
	TITRE=`head -n1 ${liste[$f]}`
	# on extrait la première ligne de chaque fichier

	FILE=${liste[$f]}
	# On récupère le nom de chacun des fichiers de la liste

	FILE=${FILE%%.t2t*}
	# Et on enlève l'extension '.t2t' du nom du fichier.

	FILE=${FILE#temp/}
	# Et on enlève l'extension le suffix 'src/' du nom du fichier.

	Menu[$f]="[$TITRE]($FILE.$ext)"
done
#
#for item in "$Menu"
#do
#done
#
for (( f=0 ; f != ${#liste[*]} ; f++ )) ; do

	echo " | ${Menu[$f]} | " >> temp/index.t2t

	# S'il s'agit du premier élément de la liste on définit $e comme 
	# la taille de la liste. Ainsi le lien vers le fichier précédent mènera au
	# dernier fichier de la liste.
	
	
	if [[ $f == 0 ]] ; then
		e=${#liste[*]}
	else
		e=$f-1
	fi

	# Et si c'est le dernier fichier, boucler vers le premier afin que le menu soit circulaire

	if [[ $f == ${#liste[*]} ]] ; then
		g=0

	else
		g=$f+1
	fi

	# ajoute le Menu
	echo '===========================================' 		>> ${liste[$f]}
	echo '""" | PREC: '${Menu[$e]}' |  | SUIV: '${Menu[$g]}' |'  	>> ${liste[$f]}
	echo '""" | -------------  | ----- |  ----------         |'  	>> ${liste[$f]}
	echo '""" |  | [Menu Principal index.'$ext'] |  |' 		>> ${liste[$f]}
	echo '===========================================' 		>> ${liste[$f]}


	txt2tags --target=$ext --infile=${liste[$f]}
	
done

echo DOING:  rm -rf export_$ext
rm -rf export_$ext
mkdir export_$ext
echo DOING: mkdir export_$ext

echo
echo DOING: mv temp/*.$ext export_$ext
mv temp/*.$ext export_$ext

echo DOING: rm -rf temp/
rm -rf temp/

# Et maintenant, on ajoute à chacun de nos fichiers temporaire, les liens qui ont
# été placé dans le tableau Menu[].
# Pour chaque page on veut ajouter un lien vers la page précédente et vers la suivante
# On définit idonc les variables $e et $g comme respectivement $f-1 et $f+1

	# S'il s'agit du premier élément de la liste on définit $e comme 
	# la taille de la liste. Ainsi le lien vers le fichier précédent mènera au
	# dernier fichier de la liste.
	
	
# On compile les fichiers temp

# if [[ $ext = .html ]]; then; NoComment ; fi
# if [[ $ext = .ext ]]; then; Comment ; fi

#
#read -p 'database password?' database_passwd
#
#for (( f=0 ; f !=${#liste[*]} ; f++ )) ; do
#
#	FILE=${liste[$f]}
#	FILE=${FILE%%.t2t.temp.html}
#	PAGE=${FILE%%_*}
#
#	head -n -3 ${liste[$f]} > $FILE
#
#
#	if [[ $PAGE =~ ^-?[0-9]+$ ]]
#	then
#	
#		cat ./inc/01txt >> $FILE
#	
#		echo '<input type="hidden" name="page" value="'$PAGE'">' >> $FILE
#	
#		cat ./inc/02txt >> $FILE
#
#		echo '$password  = "'$database_passwd'";' >> $FILE
#
#		cat ./inc/03txt >> $FILE
#
#		echo '$result = mysqli_query($conn,"SELECT * FROM _01 WHERE page = '$PAGE'");' >> $FILE
#	
#		cat ./inc/04txt >> $FILE
#	
#		echo '</div></BODY></HTML>' >> $FILE
#
#		mv $FILE ./export/$FILE$ext
#	else
#	
#		mv $FILE ./export/$FILE$ext
#	fi
#
#
#
#
#done
#
#
#rm *.temp.html
