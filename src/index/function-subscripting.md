# Function Subscripting
Function subscripting is the ability to apply operators like ``->``, ``?->`` or ``[<index>]`` directly on the results of a method call.

Using types, it is possible to ensure the previous call returns a valid array or object. When left unchecked, the subscripting leads to warnings or fatal errors.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function-subscripting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function-subscripting.html","name":"Function Subscripting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Function subscripting is the ability to apply operators like ``->``, ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Function Subscripting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Function Subscripting"}]}]}</script>
```php
<?php

    // displays the third element of the response of 'callMethod', on object 'getObject';
    echo getObject()->callMethod()[3];

?>
```

**[Documentation](https://www.php.net/manual/en/functions.user-defined.php)**
## Related

+ [Dereferencing](dereferencing.html)
