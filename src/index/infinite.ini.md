# Infinite
Infinite means that an operation is repeated and will never stop being repeated. 

Infinite is characteristics of loops, generators, recursive functions and streams. Infinite structures may be a bug or a feature, depending on the usage. For example, the event loop is usually an infinite loop, until one of the event triggers a jump out of the loop.

Infinite is also a PHP constant: ``INF``.

``INF`` is cast to string as ``'INF'``, to integer as ``0``, to boolean as ``true``, and to float as ``'INF'``. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/infinite.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/infinite.ini.html","name":"Infinite","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:29:06 +0000","dateModified":"Sat, 11 Jul 2026 09:29:06 +0000","description":"Infinite means that an operation is repeated and will never stop being repeated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Infinite.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [INF](inf.ini.html)
+ [Infinite Loop](infinite-loop.ini.html)
