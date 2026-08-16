# array\_key\_exists()
``array_key_exists()`` reports if a key has been assigned any value in an array. It reports true if it is, and false otherwise.

``array_key_exists()`` is often compared to ``isset()``, although they have differences: ``array_key_exists()`` returns true as long as the index exists, while ``isset()`` also checks the corresponding value for not being null.

Unlike its name, ``array_key_exists()`` works on array as well as objects. This is a deprecated feature, since PHP 8.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_exists.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_exists.html","name":"array_key_exists()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"array_key_exists() reports if a key has been assigned any value in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_exists().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_key_exists"}]}]}</script>
```php
<?php

    $array = ['a' => 1, 2, 3 => 3, 4 => null];
    var_dump(array_key_exists('a'  , $array));    // true
    var_dump(array_key_exists(1    , $array));    // false (0 => 2)
    var_dump(array_key_exists('3'  , $array));    // true
    var_dump(array_key_exists(4    , $array));    // true
    var_dump(array_key_exists('abc', $array));    // false

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-key-exists.php)**
## See Also

+ [isset() vs array_key_exists()](https://medium.com/@erlandmuchasaj/isset-vs-array-key-exists-b5b054f63eea)

## Related

+ [Isset](isset.html)
