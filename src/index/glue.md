# Glue
Glue represents the piece of string that is used as separator between elements in a ``join()`` operation. Glue is also called a separator.

``glue`` is the historical name of the first parameter of PHP's ``implode()`` function, which is an alias for ``join()``. It is the string inserted between every pair of consecutive elements of the array being turned into a single string. An empty glue, ``''``, concatenates the elements without anything between them, while a glue such as ``', '`` produces a comma-separated list.

Before PHP 8.0, ``implode()`` also accepted its arguments in the reverse order, ``implode($array, $glue)``, for backward compatibility with very old PHP code; this reversed form was deprecated and later removed, so the glue must now always be passed first, or as the named argument ``separator`` in the array signature, ``implode(array $array, string $separator = "")``. As of PHP 8.0, the parameter itself was actually renamed from ``glue`` to ``separator`` in the official documentation and function signature, even though the older name is still commonly used in tutorials and community discussions.

The reverse operation, splitting a string back into an array using a delimiter, is performed by ``explode()``, which uses a parameter historically called ``separator`` as well, playing a symmetrical role to ``glue``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glue.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glue.html","name":"Glue","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:21:34 +0000","dateModified":"Fri, 14 Aug 2026 08:21:34 +0000","description":"Glue represents the piece of string that is used as separator between elements in a join() operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glue.html"]}],"keywords":["folklore"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.implode.php"},{"@type":"CreativeWork","name":"PHP | Imploding and Exploding","url":"https:\/\/www.geeksforgeeks.org\/php\/php-imploding-exploding\/"},{"@type":"CreativeWork","name":"How to use implode() in PHP (with examples)","url":"https:\/\/tinkerwell.app\/blog\/how-to-use-implode-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"glue"}]}]}</script>
```php
<?php

    print join(glue, [1, 2, 3]);

?>
```

**[Documentation](https://www.php.net/manual/en/function.implode.php)**
## See Also

+ [PHP | Imploding and Exploding](https://www.geeksforgeeks.org/php/php-imploding-exploding/)
+ [How to use implode() in PHP (with examples)](https://tinkerwell.app/blog/how-to-use-implode-in-php)

## Related

+ [Separator](separator.html)
