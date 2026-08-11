# Concatenation .
Concatenation is the PHP feature that appends two strings together, to make a third, longer one.

Concatenation is also achieved with interpolation, inside a string; by calling echo, multiple times or with multiple arguments; by using the ``join()`` function.

Concatenation is done with the dot operator ``.``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concatenation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concatenation.html","name":"Concatenation .","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Concatenation is the PHP feature that appends two strings together, to make a third, longer one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Concatenation ..html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"concatenation"}]}]}</script>
```php
<?php

    $a = "world";
    $b = "Hello ";
    echo $b . $a; 
    // displays Hello world

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.string.php)**
## See Also

+ [All String Concatenations in PHP](https://www.exakat.io/en/all-string-concatenations-in-php/)

## Related

+ [String](string.html)
+ [Interpolation](interpolation.html)
+ [Heredocs](heredoc.html)
+ [\_\_toString() Method](__tostring.html)
+ [implode()](implode.html)
