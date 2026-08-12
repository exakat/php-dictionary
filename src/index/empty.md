# Empty
Empty is a language structure, which determines whether a variable is empty. 

A variable is considered empty if it does not exist or if its value equals false. This may overlap with the usage of ``isset()``.

``empty()`` has an error suppression feature, that masks various errors, such as undefined offset or undefined variables. Some other errors, like an invalid type as offset, are still reported.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/empty.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/empty.html","name":"Empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 06:01:16 +0000","dateModified":"Thu, 06 Aug 2026 06:01:16 +0000","description":"Empty is a language structure, which determines whether a variable is empty","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Empty.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"empty"}]}]}</script>
```php
<?php

    // True
    var_dump(empty($a));
    
    $b = [];
    // True
    var_dump(empty($b));

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties)**
## See Also

+ [PHP isset() vs. empty() vs. is_null()](https://code.tutsplus.com/php-isset-vs-empty-vs-is_null--cms-37162t)
+ [Avoiding empty() in PHP](https://localheinz.com/articles/2023/05/10/avoiding-empty-in-php/)
+ [Never use `empty` function in PHP](https://dev.to/klnjmm/never-use-empty-function-in-php-4pb0)

## Related

+ [Language Construct](language-construct.html)
+ [Isset](isset.html)
+ [Null](null.html)
+ [Short Ternary Operator](short-ternary.html)
