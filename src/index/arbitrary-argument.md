# Arbitrary Number Of Argument
PHP allows any number of arguments to be passed to a functioncall. In the function definition, receiving those arguments means managing an arbitrary number of parameters. 

This is achieved with the variadic operator, or with functions such as ``func_get_args()``.

They are also called variable argument lists.

When the arguments are dynamic, aka they are collected at execution time, the operator variadic or the function ``call_user_func_array()`` turns an array to arguments.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arbitrary-argument.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arbitrary-argument.html","name":"Arbitrary Number Of Argument","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"PHP allows any number of arguments to be passed to a functioncall","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Arbitrary Number Of Argument.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Arbitrary Number Of Argument"}]}]}</script>
```php
<?php

    function foo(...$args) {
        print "This function is called with ".count($args)." arguments\n";
        print "This function is called with ".func_get_count()." arguments\n";
        print "This function is called with ".count($func_get_args())." arguments\n";
    } 
    
    $array = range(0, rand(5, 10)); // generates an array with 1 to 11 elements
    
    foo(...$array);
    call_user_func_array('foo', $array);

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list)**
## See Also

+ [Variadic functions via ...](https://www.php.net/manual/en/migration56.new-features.php#migration56.new-features.variadics)

## Related

+ [Variadic](variadic.html)
+ [func\_get\_args()](func_get_args.html)
