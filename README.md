# Kata Paynopain
Resolución del ejercicio Egg Dropper.
## Dificultad básica

En este ejercicio tenemos 100 huevos y un rascacielos de 100 pisos, debemos devolver el mínimo número de lanzamientos
que necesitamos para poder averiguar la planta exacta en la que se rompen los huevos.

Bien, en esta dificultad he usado el "divide y vencerás", que consiste en tirar el primer huevo desde la mitad (planta 50)
e ir dividiendo entre 2 hasta averiguar la planta exacta donde el huevo se rompe. Poniendome en el peor de los casos, es
decir, que el huevo siempre que lo tiro se rompe, necesitaría de 7 lanzamientos para obtener la planta exacta.

## Dificultad intermedia

En este ejercicio tenemos únicamente dos huevos y un rascacielos de 100 pisos. Debemos devolver el mínimo número de 
lanzamientos que necesitamos para sacar la planta exacta en la que se rompen los huevos.

En esta dificultad lo que he hecho ha sido ir sumando plantas de tres en tres. Es decir, tiro el huevo desde la planta 1,
luego desde la 4, la 7, la 10... hasta la 100. 

Por ejemplo: en la planta 13 el huevo no se rompe pero en la 16 si que se rompe, nos queda un huevo y sabemos que la 
planta crítica está en la planta 14 o 15. 
Por tanto lanzaríamos el segundo huevo en la planta 14 y si se rompe, sabemos que la planta crítica es la 14, en cambio
si no se rompe lo tiramos en la 15, si se rompe, la planta crítica es la 15, si no se rompe, la planta crítica es la 16.

Por tanto, de esta forma, poniendonos en el peor de los casos, necesitaríamos hacer 36 lanzamientos.