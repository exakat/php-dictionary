# func\_get\_args()
``func_get_args()`` is a native function that returns an array containing the function's argument list.

It is often used to handle a variable number of arguments in a function, especially before the introduction of the variadic operator ``...`` in version 5.6.

There are related functions: ``func_get_arg()``, which returns a specific argument from the list, and ``func_num_args()``, which returns the number of arguments passed to the function.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/func_get_args.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/func_get_args.html","name":"func_get_args()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 06:05:50 +0000","dateModified":"Wed, 24 Jun 2026 06:05:50 +0000","description":"func_get_args() is a native function that returns an array containing the function's argument list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/func_get_args.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-argument.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variadic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arbitrary-argument.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-overloading.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.func-get-args.php"},{"@type":"CreativeWork","name":"https:\/\/www.geeksforgeeks.org\/php\/php-func_get_args-function\/","url":"https:\/\/www.geeksforgeeks.org\/php\/php-func_get_args-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"func_get_args"}]}]}</script>
```php
<?php

    function foo() {
        $numargs = func_num_args();
        echo "Number of arguments: $numargs\n";
        if ($numargs >= 2) {
            echo "Second argument is: " . func_get_arg(1) . "\n";
        }
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++) {
            echo "Argument $i is: " . $arg_list[$i] . "\n";
        }
    }
    
    foo(1, 2, 3);

?>
```

**[Documentation](https://www.php.net/manual/en/function.func-get-args.php)**
## See Also

+ [https://www.geeksforgeeks.org/php/php-func_get_args-function/](https://www.geeksforgeeks.org/php/php-func_get_args-function/)

## Related

+ [Variable Arguments](variable-argument.html)
+ [Variadic](variadic.html)
+ [Arbitrary Number Of Argument](arbitrary-argument.html)
+ [Method Overloading](method-overloading.html)
