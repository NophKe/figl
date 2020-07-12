#!/bin/bash

rm -i index.t2t

liste=(src/*.t2t)

cat inc/index > index.t2t

for (( f=0 ; f != ${#liste[*]} ; f++ ))
{
	echo ' | [' $(head -n1 ${liste[$f]}) ' ' ${liste[$f]%%.t2t}'.php] |' >> index.t2t
	
}
