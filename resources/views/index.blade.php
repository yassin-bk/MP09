<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página Web</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
    <h1><?=$greeting;?></h1>
    <p>Prova xivato = <?=dd($tasks)?></p>
</header>

<section id="contenido">
    <article>
        <h2>Artículo 1</h2>
        <p>Este es el primer artículo de mi página web.</p>
    </article>
    <article>
        <h2>Artículo 2</h2>
        <p>Este es el segundo artículo de mi página web.</p>
    </article>
</section>

<aside>
    <h3>Barra lateral</h3>
    <ul>
        <li>Enlaces útiles</li>
        <li>Publicidad</li>
    </ul>
</aside>

<footer>
    <p>Derechos de autor © 2023 Mi Página Web</p>
</footer>
</body>
</html>