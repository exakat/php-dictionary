# Named Parameters
Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters.

In traditional positional parameter passing, the values are provided to a function in the order in which the parameters are defined. However, with named parameters, the parameter to which a value is passed, is explicitly stated.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-parameter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-parameter.html","name":"Named Parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Named Parameters.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"named-parameter"}]}]}</script>
```php
<?php

    function foo($a, $b) {
        return $a - $b;
    }
    
    echo foo(2, 3);  // return -1
    echo foo(3, 2);  // return 1
    
    echo foo(a: 2, b: 3);  // return -1
    echo foo(b: 2, a: 3);  // return 1

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php)**
## See Also

+ [PHP 8.0 feature focus: Named Arguments](https://upsun.com/blog/php-8-0-named-arguments/)
+ [Named Arguments (blog)](https://sebastiandedeyne.com/named-arguments/)
+ [PHP: Named arguments are your friends](https://darkghosthunter.medium.com/php-named-arguments-are-your-friends-8076959b2f11/)
+ [Opting out of Named Parameters in PHP 8.0](https://php.watch/articles/no-named-arguments-docblock-attribute)

## Related

+ [Positional Parameters](positional-parameter.html)
+ [Colon](colon.html)
+ [Option](option.html)
+ [Streamlining](streamlining.html)
