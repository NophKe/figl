#!/bin/bash

rm -i index.t2t

liste=`ls src/*.t2t`

cat inc/index > index.t2t

for f in $liste
do
	titre=$(head -n1 $f)
	#recuperer la première ligne  du fichier $f
	
	fichier_sans_src=${f#src/}
	#supprime "src/" au debut de la varaible 
	
	fichier_sans_t2t=${fichier_sans_src%%.t2t}
	# supprimer l'extension '.t2t'

	for extension in $1
	do
		fichier=$fichier_sans_t2t.$extension
		echo ' | [' $titre ' ' $fichier '] |' #>> index.t2t
	done

done
