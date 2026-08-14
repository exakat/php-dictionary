# var\_dump()
``var_dump()`` displays the information in a variable or any data container. It is a debugging function.

``var_dump()`` is one of the most famous PHP functions. It is often related to ``print_r()`` and ``var_export()``. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_dump.html","name":"var_dump()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:58:59 +0000","dateModified":"Tue, 11 Aug 2026 20:58:59 +0000","description":"var_dump() displays the information in a variable or any data container","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_dump().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"var_dump"}]}]}</script>
```php
<?php

    $a = true;
    var_dump($a);
    // bool(true)

?>
```

**[Documentation](https://www.php.net/var_dump)**
## See Also

+ [PHP var_dump() Function: Explanation with Examples](https://www.slingacademy.com/article/php-var-dump-function-explanation-with-examples/)

## Related

+ [print\_r()](print_r.html)
+ [debug\_backtrace()](debug_backtrace.html)
+ [var\_export()](var_export.html)
+ [Debugger](debugger.html)

## Related packages

+ [koriym/printo](https://packagist.org/packages/koriym/printo)
+ [symfony/var-dumper](https://packagist.org/packages/symfony/var-dumper)
+ [spiral/dumper](https://packagist.org/packages/spiral/dumper)
