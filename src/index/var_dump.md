# var\_dump()
``var_dump()`` displays the information in a variable or any data container. It is a debugging function.

``var_dump()`` is one of the most famous PHP function. It is often related to ``print_r()`` and ``var_export()``. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/var_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/var_dump.html","name":"var_dump()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:01:38 +0000","dateModified":"Mon, 20 Jul 2026 17:01:38 +0000","description":"``var_dump()`` displays the information in a variable or any data container","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/var_dump().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [print\_r()](print_r.ini.html)
+ [debug\_backtrace()](debug_backtrace.ini.html)
+ [var\_export()](var_export.ini.html)
+ [Debugger](debugger.ini.html)

## Related packages

+ [koriym/printo](https://packagist.org/packages/koriym/printo)
+ [symfony/var-dumper](https://packagist.org/packages/symfony/var-dumper)
+ [spiral/dumper](https://packagist.org/packages/spiral/dumper)
