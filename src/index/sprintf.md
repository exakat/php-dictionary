# sprintf
``sprintf()`` is a PHP native function, which format a string based on a format string, and one or more values. 

``sprintf()`` returns the formatted string, while ``printf()`` displays it immediately, and ``vprintf()`` writes the formatted string to a stream. There is also ``sscanf()``, which parse the string, according to the format.

``printf()`` is convenient to display text in command line, as it makes easy to use fillers and justification. 

``printf(\`` also supports named arguments, which makes the format string more flexible.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sprintf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sprintf.html","name":"sprintf","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 11:04:10 +0000","dateModified":"Wed, 26 Aug 2026 11:04:10 +0000","description":"sprintf() is a PHP native function, which format a string based on a format string, and one or more values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sprintf.html"]}],"alternateName":["vprintf"],"keywords":["native function","universal function","arbitrary number of argument"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/format.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sscanf.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/fr\/function.sprintf.php"},{"@type":"CreativeWork","name":"Mastering PHP\u2019s sprintf Function for Precise Formatting","url":"https:\/\/altorouter.com\/sprintf-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sprintf"}]}]}</script>
```php
<?php

    // displays 123 with 9 characters, and fills with dots any empty characters
    // ......123
    echo sprintf("%'.9d\n", 123);
    
    // same as above, without the echo command
    printf("%'.9d\n", 123);
    
    // same as above, without the echo command
    vprintf("%'.9d\n", '......123');

?>
```

**[Documentation](https://www.php.net/manual/fr/function.sprintf.php)**
## See Also

+ [Mastering PHP’s sprintf Function for Precise Formatting](https://altorouter.com/sprintf-php/)

## Related

+ [String](string.html)
+ [Format](format.html)
+ [sscanf()](sscanf.html)
