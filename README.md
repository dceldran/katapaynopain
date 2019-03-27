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

Por tanto, de esta forma, poniendonos en el peor de los casos, necesitaríamos hacer 36 lanzamientos para averiguar la planta
exacta en la que se rompen los huevos.

## Dificultad difícil

En este ejercicio lo hago según el número de huevos y de plantas que se pasen a la función por parámetro.
Si se pasan 0 huevos o 0 plantas, devuelvo false porque no se puede hacer el cálculo.

En caso de que se pasen por parámetro o un único huevo o una única planta, la única forma que se me ha ocurrido para calcular 
el número mínimo de lanzamientos ha sido recorrer todas las plantas, ya que si hay una única planta, esa será la crítica
y si hay un solo huevo, solo se puede calcular lanzando el huevo desde la primera planta, luego la segunda, tercera... 
hasta encontrar la crítica.

En caso de que por parámetro se pasen más de un huevo y más de una planta, entonces hago un cálculo del número mínimo de
huevos que necesitaría usando el divide y vencerás con las plantas que se pasan por parámetro, entonces en caso de que
el número de huevos pasados por parámetro sea mayor que el número mínimo de huevos que necesito, hago el cálculo con el
divide y vencerás. Por último en caso de que el número de huevos pasados por parámetro sea menor que los necesarios para
usar el divide y vencerás, utilizo la misma técnica que he usado en la dificultad intermedia, es decir ir subiendo plantas
de 3 en 3, ya que esta técnica es válida para un mínimo de 2 huevos.