# Practica MP09

## Crear taula users a la base de dades. Ha de tenir els camps (id, nom, cognom, email i password)
Crearem la taula users a la base de dades

![Captura1](Capturas/Selección_001.png)

Afegim el camp de id, el qual estarà com a clau primaria

![Captura2](Capturas/Selección_002.png)

Afegirem també la columna de nom, que serà de tipus **text**

![Captura3](Capturas/Selección_003.png)

La columna de cognom de tipus **text**

![Captura4](Capturas/Selección_004.png)


I per ultim afegirem el camp de email

![Captura5](Capturas/Selección_005.png)

I el de password

![Captura6](Capturas/Selección_006.png)

## Crear inserts a la taula users

El que anem a fer ara serà crear inserts dins de la taula 'users'

Anirem a la taula user i farem clic dret per a afegir una row

![Captura7](Capturas/Selección_007.png)

I omplirem els parametres de les taules

![Captura8](Capturas/Selección_008.png)

## Crear controlador de users a app

Anirem a la carpeta de app i crearem users.php 

![Captura9](Capturas/Selección_009.png)

Aquest serà el contingut del fitxer users.php

![Captura10](Capturas/Selección_010.png)

I dins de resources/views/layout tenim que tindre configurat el fitxer users.blade.php

![Captura11](Capturas/Selección_011.png)
## Crear ruta a routes.php i afegir la nova ruta al navegador

Canviarem el fitxer routes.php afegint la ruta d'users

![Captura12](Capturas/Selección_012.png)

Una vegada afegit anirem al fitxer de nav.blade.php situat a resources/views/layout

![Captura13](Capturas/Selección_013.png)

I l'editarem afegint la següent línia per a crear el submenu en el navegador
![Captura14](Capturas/Selección_014.png)

Es veurà de la següent manera
![Captura15](Capturas/Selección_015.png)

## Crear la vista users.blade.php
Tenim que tindre el fitxer users.blade.php

![Captura11](Capturas/Selección_011.png)

Així sería com es veu el fitxer users.blade.php
![Captura16](Capturas/Selección_016.png)