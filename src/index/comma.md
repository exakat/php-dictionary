# Comma
Commas are syntax elements, to separate elements when provided as a list. There are several situations where a list of elements may be provided: 

+ Argument separator, including with ``echo``
+ Parameter separator
+ Trait name separator, in ``use`` expression when importing a trait in a class
+ Array element separator
+ List separator, where unused values may be omitted, leaving commas back to back

Comma are important in the CSV and JSON formats, and other such formats.

Comma do not have a value by themselves.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comma.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comma.html","name":"Comma","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Commas are syntax elements, to separate elements when provided as a list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Comma.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"comma"}]}]}</script>
```php
<?php

    function foo($a, $b) {
        return [$a, 2, $b];
    }
    
    list($y, ,$z) = foo(1, 2);

    [$y, ,$z] = foo(1, 2);
    
    echo 'a', 'b', 'c';

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Comma)**
## Related

+ [Parameter](parameter.html)
+ [Argument](argument.html)
+ [Array, []](array.html)
+ [List](list.html)
+ [Comma Separated Values (CSV)](csv.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Trailing Comma](trailing-comma.html)
