# Infinite
Infinite means that an operation is repeated and will never stop being repeated. 

Infinite is characteristics of loops, generators, recursive functions and streams. Infinite structures may be a bug or a feature, depending on the usage. For example, the event loop is usually an infinite loop, until one of the event triggers a jump out of the loop.

Infinite is also a PHP constant: ``INF``.

``INF`` is cast to string as ``'INF'``, to integer as ``0``, to boolean as ``true``, and to float as ``'INF'``. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite.html","name":"Infinite","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:07 +0000","dateModified":"Sun, 16 Aug 2026 07:46:07 +0000","description":"Infinite means that an operation is repeated and will never stop being repeated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Infinite.html"]}],"keywords":["concept","adjective"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite-loop.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/math.constants.php"},{"@type":"CreativeWork","name":"is_infinite","url":"https:\/\/www.php.net\/manual\/en\/function.is-infinite.php"},{"@type":"CreativeWork","name":"Infinity (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Infinity"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"infinite"}]}]}</script>
```php
<?php

// infinite loops
while(true) { }

for(;;) {} 

// infinite generator 
function integers() {
    $i = 0;
    while(true) {
        yield $i++;
    }
}

// infinite Fibbonacci sequence
function recursive ($a = 1, $b = 1) {
    $a2 = $b;
    $b2 = $a + $b;
    print $b2.PHP_EOL;
    recursive($a2, $b2);
}

?>
```

**[Documentation](https://www.php.net/manual/en/math.constants.php)**
## See Also

+ [is_infinite](https://www.php.net/manual/en/function.is-infinite.php)
+ [Infinity (Wikipedia)](https://en.wikipedia.org/wiki/Infinity)

## Related

+ [INF](inf.html)
+ [Infinite Loop](infinite-loop.html)
