# print\_r()
``print_r()`` is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format. 

It's particularly helpful for debugging and understanding the structure of complex data structures in the PHP code. 

When using ``print_r()``, it displays the array or object's values and structure to the browser or the console.

``print_r()`` has a second parameter, which controls the direct outputof the debug information to a string, instead of the standard output. This is useful to control the final destination of the message: it might be send to logging system, or duplicated.

``print_r()`` carries the risk to have debugging tools published to production: while it doesn't provide any meaningful attack surface, it is a data leak. It has no eradication mechanism, like ``assert()``. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/print_r.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/print_r.ini.html","name":"print_r()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``print_r()`` is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/print_r().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 1;

    print_r($a);
/*
Array
(
    [0] => 1
)
*/

?>
```

**[Documentation](https://www.php.net/manual/en/function.print-r.php)**
## See Also

+ [Utilizing PHP's print_r() function](https://mikebranski.com/utilizing-phps-print_r-function/)
+ [A practical Guide to PHP's `print_r()` and `var_dump()` Functions](https://reintech.io/blog/practical-guide-to-php-print-r-var-dump-functions)

## Related

+ [Assertions](assert.ini.html)
+ [Data Leak](data-leak.ini.html)
+ [Echo](echo.ini.html)
+ [Print](print.ini.html)
+ [var\_dump()](var_dump.ini.html)
+ [debug\_backtrace()](debug_backtrace.ini.html)
+ [Debugger](debugger.ini.html)
+ [var\_export()](var_export.ini.html)
