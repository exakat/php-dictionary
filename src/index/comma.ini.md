# Comma
Commas are syntax elements, to separate elements when provided as a list. There are several situations where a list of elements may be provided: 

+ Argument separator, including with ``echo``
+ Parameter separator
+ Trait name separator, in ``use`` expression when importing a trait in a class
+ Array element separator
+ List separator, where unused values may be omitted, leaving commas back to back

Comma are important in the CSV and JSON formats, and other such formats.

Comma do not have a value by themselves.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/comma.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/comma.ini.html","name":"Comma","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 17:00:34 +0000","dateModified":"Mon, 03 Aug 2026 17:00:34 +0000","description":"Commas are syntax elements, to separate elements when provided as a list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Comma.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Parameter](parameter.ini.html)
+ [Argument](argument.ini.html)
+ [Array, []](array.ini.html)
+ [List](list.ini.html)
+ [Comma Secparated Values (CSV)](csv.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Trailing Comma](trailing-comma.ini.html)
