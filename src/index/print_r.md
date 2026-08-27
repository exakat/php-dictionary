# print\_r()
``print_r()`` is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format. 

It's particularly helpful for debugging and understanding the structure of complex data structures in the PHP code. 

When using ``print_r()``, it displays the array or object's values and structure to the browser or the console.

``print_r()`` has a second parameter, which controls the direct output of the debug information to a string, instead of the standard output. This is useful to control the final destination of the message: it might be sent to a logging system, or duplicated.

``print_r()`` carries the risk to have debugging tools published to production: while it doesn't provide any meaningful attack surface, it is a data leak. It has no eradication mechanism, like ``assert()``. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/print_r.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/print_r.html","name":"print_r()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:25 +0000","dateModified":"Sat, 08 Aug 2026 14:32:25 +0000","description":"print_r() is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/print_r.html"]}],"keywords":["feature","native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assert.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-leak.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/echo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/print.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_dump.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debug_backtrace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debugger.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_export.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.print-r.php"},{"@type":"CreativeWork","name":"Utilizing PHP's print_r() function","url":"https:\/\/mikebranski.com\/utilizing-phps-print_r-function\/"},{"@type":"CreativeWork","name":"A practical Guide to PHP's `print_r()` and `var_dump()` Functions","url":"https:\/\/reintech.io\/blog\/practical-guide-to-php-print-r-var-dump-functions"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"print_r"}]}]}</script>
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

+ [Assertions](assert.html)
+ [Data Leak](data-leak.html)
+ [Echo](echo.html)
+ [Print](print.html)
+ [var\_dump()](var_dump.html)
+ [debug\_backtrace()](debug_backtrace.html)
+ [Debugger](debugger.html)
+ [var\_export()](var_export.html)
