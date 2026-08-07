# Sentinel
A sentinel is a special, reserved value used to signal a specific condition, such as the end of a sequence, an absence of data, or an error, instead of adding a separate flag or an exception for it. A sentinel is drawn from the very same domain as legitimate data, which creates ambiguity whenever it collides with an actual value: this is exactly the mechanism behind the famous ``strpos()`` syndrome.

Common sentinels include ``-1`` as a 'not found' index, the null terminator ``\0`` marking the end of a C string, ``EOF`` while reading a file, and a dedicated, otherwise-unreachable object used as the default value of a parameter, to detect that no argument was actually passed.

PHP relies on sentinels extensively: ``false`` is the sentinel returned by many string and array functions to mean 'nothing found', ``feof()`` is the sentinel condition of a read loop, and ``INF``, ``-INF`` and ``NAN`` act as sentinels for numeric overflow and invalid operations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sentinel.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sentinel.html","name":"Sentinel","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:29:07 +0000","dateModified":"Fri, 10 Jul 2026 09:29:07 +0000","description":"A sentinel is a special, reserved value used to signal a specific condition, such as the end of a sequence, an absence of data, or an error, instead of adding a separate flag or an exception for it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Sentinel.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Sentinel"}]}]}</script>
```php
<?php

    $handle = fopen('data.txt', 'r');
    while (!feof($handle)) { // feof() is the sentinel condition
        $line = fgets($handle);
    }

    // a dedicated object as a sentinel default, to detect a missing argument
    final class Undefined {}
    const UNDEFINED = new Undefined();

    function greet(string $name, mixed $mood = UNDEFINED) {
        if ($mood === UNDEFINED) {
            $mood = 'happy';
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Sentinel_value)**
## See Also

+ [How to Use Redis Sentinel with PHP](https://oneuptime.com/blog/post/2026-03-31-redis-sentinel-php/view)

## Related

+ [Strpos() Syndrome](strpos-syndrom.html)
+ [Null](null.html)
+ [False](false.html)
+ [Default Value](default-value.html)
+ [Magic Values](magic-value.html)
+ [array\_search](array_search.html)
