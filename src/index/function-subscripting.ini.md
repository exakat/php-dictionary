# Function Subscripting
Function subscripting is the ability to apply operators like ``->``, ``?->`` or ``[<index>]`` directly on the results of a method call.

Using types, it is possible to ensure the previous call returns a valid array or object. When left unchecked, the subscripting leads to warnings or fatal errors.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/function-subscripting.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/function-subscripting.ini.html","name":"Function Subscripting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Function subscripting is the ability to apply operators like ``->``, ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Function Subscripting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // displays the third element of the response of 'callMethod', on object 'getObject';
    echo getObject()->callMethod()[3];

?>
```

**[Documentation](https://www.php.net/manual/en/functions.user-defined.php)**
## Related

+ [Dereferencing](dereferencing.ini.html)
