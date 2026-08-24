# Variable Arguments
Variable arguments refer to a method call where the list of arguments depends on the call, rather than the signature of the method.

Variable arguments are achieved with the variadic operator, or with the ``func_get_args()`` function. The variadic operator covers most of the cases, and ``func_get_args()`` covers the remaining edge cases.

Variable arguments may be static or dynamic. It is static when the list of arguments varies from call to call, and is hard-coded. A dynamic argument list depends on the variadic ``...`` operator, or the ``call_user_func_array()`` function.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-argument.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-argument.html","name":"Variable Arguments","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:41:34 +0000","dateModified":"Tue, 11 Aug 2026 14:41:34 +0000","description":"Variable arguments refer to a method call where the list of arguments depends on the call, rather than the signature of the method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-argument.html"]}],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variadic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/func_get_args.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/three-dots.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.arguments.php#functions.variable-arg-list"},{"@type":"CreativeWork","name":"Variable-length argument lists","url":"https:\/\/riptutorial.com\/php\/example\/18652\/variable-length-argument-lists"},{"@type":"CreativeWork","name":"Named Arguments and Variadics in PHP 8","url":"https:\/\/markbakeruk.net\/2021\/09\/28\/named-arguments-and-variadics-in-php-8\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"variable-argument"}]}]}</script>
```php
<?php

    // No arguments in the signature.
    function foo() {
        // displays the list of arguments
        print_r(func_get_args());
    }
    
    // static arguments
    foo(1, 2);
    foo(4, 5, 6);
    
    // dynamic variable arguments
    $args = range(5, rand(9, 11)) ; 
    foo(...$args);

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list)**
## See Also

+ [Variable-length argument lists](https://riptutorial.com/php/example/18652/variable-length-argument-lists)
+ [Named Arguments and Variadics in PHP 8](https://markbakeruk.net/2021/09/28/named-arguments-and-variadics-in-php-8/)

## Related

+ [Functions](function.html)
+ [Variadic](variadic.html)
+ [func\_get\_args()](func_get_args.html)
+ [Three Dots](three-dots.html)
