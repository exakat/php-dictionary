# Named Parameters
Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters.

In traditional positional parameter passing, the values are provided to a function in the order in which the parameters are defined. However, with named parameters, the parameter to which a value is passed, is explicitly stated.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/named-parameter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/named-parameter.html","name":"Named Parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Named Parameters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Positional Parameters](positional-parameter.ini.html)
+ [Colon](colon.ini.html)
+ [Option](option.ini.html)
+ [Streamlining](streamlining.ini.html)
